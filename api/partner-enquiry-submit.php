<?php
// ==========================================================================
// YUKT PARTNER ENQUIRY SUBMISSION API
// ==========================================================================

header('Content-Type: application/json');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method Not Allowed']);
    exit;
}

require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/config.php';

// Partner auth verification
$partner_id = $_SESSION['partner_id'] ?? null;
$partner_code = $_SESSION['partner_code'] ?? null;

// Allow submitting by partner_code if passed from verified session
if (!$partner_id && !empty($_POST['partner_code']) && $pdo) {
    $stmt = $pdo->prepare("SELECT id, partner_code FROM partners WHERE partner_code = :c LIMIT 1");
    $stmt->execute([':c' => trim($_POST['partner_code'])]);
    $p = $stmt->fetch();
    if ($p) {
        $partner_id = $p['id'];
        $partner_code = $p['partner_code'];
    }
}

if (!$partner_id) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => 'Please log in to your Partner Account to submit client inquiries.']);
    exit;
}

$customer_name = trim($_POST['customer_name'] ?? '');
$customer_phone = trim($_POST['customer_phone'] ?? '');
$customer_email = trim($_POST['customer_email'] ?? '');
$service_category = trim($_POST['service_category'] ?? '');
$service_item = trim($_POST['service_item'] ?? '');
$project_description = trim($_POST['project_description'] ?? '');
$estimated_budget = trim($_POST['estimated_budget'] ?? '');

// Validation
if (empty($customer_name) || empty($customer_phone) || empty($service_category) || empty($service_item) || empty($project_description)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please fill in Customer Name, Phone, Service Category, Service Item, and Project Description.']);
    exit;
}

if (strlen(preg_replace('/[^0-9]/', '', $customer_phone)) < 10) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please provide a valid 10-digit mobile number for the client.']);
    exit;
}

// Handle secure file upload
$attachment_path = null;
if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['attachment']['tmp_name'];
    $fileName = $_FILES['attachment']['name'];
    $fileSize = $_FILES['attachment']['size'];
    $fileType = $_FILES['attachment']['type'];
    
    // Max 25 MB
    if ($fileSize > 25 * 1024 * 1024) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Attached file exceeds maximum permissible size of 25MB.']);
        exit;
    }

    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $allowedExtensions = ['pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'txt', 'rtf', 'png', 'jpg', 'jpeg', 'webp', 'zip', 'rar'];

    if (!in_array($fileExtension, $allowedExtensions)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Invalid file format. Allowed formats: PDF, DOC, DOCX, XLS, PPT, TXT, PNG, JPG, ZIP.']);
        exit;
    }

    $uploadDir = __DIR__ . '/../uploads/enquiries/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $newFileName = 'ENQ_' . date('Ymd_His') . '_' . bin2hex(random_bytes(6)) . '.' . $fileExtension;
    $destPath = $uploadDir . $newFileName;

    if (move_uploaded_file($fileTmpPath, $destPath)) {
        $attachment_path = 'uploads/enquiries/' . $newFileName;
    } else {
        error_log("Failed to move uploaded file to $destPath");
    }
}

if (!$pdo) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Database error. Please contact WhatsApp support.']);
    exit;
}

try {
    // Generate tracking code: ENQ-49821
    $tracking_code = 'ENQ-' . rand(10000, 99999);

    $stmt = $pdo->prepare("
        INSERT INTO partner_enquiries (
            tracking_code, partner_id, partner_code, customer_name, customer_phone, customer_email,
            service_category, service_item, project_description, estimated_budget, attachment_path,
            status, commission_status, commission_rate
        ) VALUES (
            :tracking_code, :partner_id, :partner_code, :customer_name, :customer_phone, :customer_email,
            :service_category, :service_item, :project_description, :estimated_budget, :attachment_path,
            'received', 'pending', 15.00
        )
    ");

    $stmt->execute([
        ':tracking_code' => $tracking_code,
        ':partner_id' => $partner_id,
        ':partner_code' => $partner_code,
        ':customer_name' => $customer_name,
        ':customer_phone' => $customer_phone,
        ':customer_email' => $customer_email,
        ':service_category' => $service_category,
        ':service_item' => $service_item,
        ':project_description' => $project_description,
        ':estimated_budget' => $estimated_budget,
        ':attachment_path' => $attachment_path
    ]);

    // Also record in partner_referrals as lead_submitted
    try {
        $refStmt = $pdo->prepare("
            INSERT INTO partner_referrals (
                partner_code, visitor_ip, referred_client_name, referred_client_phone, referred_client_email, conversion_status
            ) VALUES (
                :code, :ip, :name, :phone, :email, 'lead_submitted'
            )
        ");
        $refStmt->execute([
            ':code' => $partner_code,
            ':ip' => $_SERVER['REMOTE_ADDR'] ?? '',
            ':name' => $customer_name,
            ':phone' => $customer_phone,
            ':email' => $customer_email
        ]);
    } catch (Exception $e) {
        // silent
    }

    echo json_encode([
        'success' => true,
        'message' => 'Client enquiry submitted successfully! Tracking Code: ' . $tracking_code,
        'tracking_code' => $tracking_code
    ]);

} catch (PDOException $e) {
    error_log("Partner enquiry submission error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Failed to log enquiry in database. Please contact WhatsApp support.']);
}
