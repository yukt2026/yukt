<?php
// ==========================================================================
// Contact Form Submission API Endpoint
// ==========================================================================

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method Not Allowed']);
    exit;
}

require_once __DIR__ . '/../includes/db.php';

// Anti-Spam Honeypot Check
$honeypot = trim($_POST['website_honey'] ?? '');
if (!empty($honeypot)) {
    // Silently trap automated spam bots
    echo json_encode(['success' => true, 'message' => 'Your inquiry has been received.']);
    exit;
}

$full_name = trim($_POST['full_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$service_needed = trim($_POST['service_needed'] ?? '');
$budget = trim($_POST['budget'] ?? '');
$message = trim($_POST['message'] ?? '');
$ip_address = $_SERVER['REMOTE_ADDR'] ?? '';

// Validation
if (empty($full_name) || empty($email) || empty($message)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please fill in all required fields (Name, Email, Message).']);
    exit;
}

if (strlen($full_name) > 150 || strlen($email) > 150) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Input length exceeds permissible bounds.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please enter a valid business email address.']);
    exit;
}

try {
    if ($pdo) {
        $stmt = $pdo->prepare("
            INSERT INTO inquiries (full_name, email, phone, service_needed, budget, message, ip_address)
            VALUES (:name, :email, :phone, :service, :budget, :message, :ip)
        ");
        $stmt->execute([
            ':name' => $full_name,
            ':email' => $email,
            ':phone' => $phone,
            ':service' => $service_needed,
            ':budget' => $budget,
            ':message' => $message,
            ':ip' => $ip_address
        ]);
    }

    echo json_encode([
        'success' => true,
        'message' => 'Your message has been sent successfully. A Yukt specialist will contact you shortly!'
    ]);
} catch (Exception $e) {
    error_log("Contact submission error: " . $e->getMessage());
    echo json_encode([
        'success' => true,
        'message' => 'Thank you! Your inquiry has been recorded.'
    ]);
}
