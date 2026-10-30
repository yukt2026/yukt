<?php
// ==========================================================================
// YUKT DIGITAL BUSINESS PARTNER PROGRAM — REGISTRATION API
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

// Anti-Spam Honeypot Trap
$honeypot = trim($_POST['partner_honey'] ?? '');
if (!empty($honeypot)) {
    echo json_encode(['success' => true, 'message' => 'Your application has been received.']);
    exit;
}

// Extract fields
$full_name = trim($_POST['full_name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$whatsapp = trim($_POST['whatsapp'] ?? '');
$email = trim(strtolower($_POST['email'] ?? ''));
$password = $_POST['password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';
$shop_name = trim($_POST['shop_name'] ?? '');
$business_type = trim($_POST['business_type'] ?? '');
$state = trim($_POST['state'] ?? '');
$district = trim($_POST['district'] ?? '');
$city = trim($_POST['city'] ?? '');
$address = trim($_POST['address'] ?? '');
$experience_years = trim($_POST['experience_years'] ?? '');
$preferred_language = trim($_POST['preferred_language'] ?? 'Hinglish');
$referral_code = trim($_POST['referral_code'] ?? '');
$terms = isset($_POST['terms']) && ($_POST['terms'] === '1' || $_POST['terms'] === 'on');

// Handle interested services array
$interested_services = '';
if (isset($_POST['interested_services'])) {
    if (is_array($_POST['interested_services'])) {
        $interested_services = implode(', ', array_map('trim', $_POST['interested_services']));
    } else {
        $interested_services = trim($_POST['interested_services']);
    }
}

// Fallback to session or cookie referral code if field was empty
if (empty($referral_code)) {
    $referral_code = $_SESSION['yukt_ref'] ?? $_COOKIE['yukt_ref'] ?? '';
}
$referral_code = preg_replace('/[^a-zA-Z0-9_-]/', '', $referral_code);

// Validations
if (empty($full_name)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Full Name is required.']);
    exit;
}

if (empty($phone) || strlen(preg_replace('/[^0-9]/', '', $phone)) < 10) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please enter a valid 10-digit Mobile Number.']);
    exit;
}

if (empty($whatsapp)) {
    $whatsapp = $phone;
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please provide a valid Email Address.']);
    exit;
}

if (empty($password) || strlen($password) < 6) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Password must be at least 6 characters.']);
    exit;
}

if (!empty($confirm_password) && $password !== $confirm_password) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Passwords do not match. Please verify and try again.']);
    exit;
}

if (empty($shop_name)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Business / Shop Name is required.']);
    exit;
}

if (empty($business_type)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please select your Business Type.']);
    exit;
}

if (empty($state) || empty($district) || empty($city)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'State, District, and City/Village are required.']);
    exit;
}

if (!$terms) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'You must accept the Partner Terms and Conditions to proceed.']);
    exit;
}

if (!$pdo) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Database service currently unavailable. Please reach us directly on WhatsApp.']);
    exit;
}

try {
    // Check if email already registered
    $checkStmt = $pdo->prepare("SELECT id FROM partners WHERE email = :email LIMIT 1");
    $checkStmt->execute([':email' => $email]);
    if ($checkStmt->fetch()) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'This email is already registered as a partner. Please log in or use another email.']);
        exit;
    }

    // Check if phone already registered
    $cleanPhone = preg_replace('/[^0-9]/', '', $phone);
    $checkPhoneStmt = $pdo->prepare("SELECT id FROM partners WHERE REPLACE(phone, ' ', '') LIKE :phone LIMIT 1");
    $checkPhoneStmt->execute([':phone' => '%' . substr($cleanPhone, -10)]);
    if ($checkPhoneStmt->fetch()) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'This mobile number is already registered. Please log in to your dashboard.']);
        exit;
    }

    // Generate Unique Partner Code: e.g. YUKT7829
    $partner_code = '';
    $attempts = 0;
    while ($attempts < 10) {
        $candidate = 'YUKT' . rand(1000, 9999);
        $codeCheck = $pdo->prepare("SELECT id FROM partners WHERE partner_code = :code LIMIT 1");
        $codeCheck->execute([':code' => $candidate]);
        if (!$codeCheck->fetch()) {
            $partner_code = $candidate;
            break;
        }
        $attempts++;
    }
    if (empty($partner_code)) {
        $partner_code = 'YUKT' . time() % 100000;
    }

    // Hash password securely
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    // Initial Status is always 'pending_verification' (Do not automatically activate unverified partners)
    $status = 'pending_verification';

    // Insert partner record
    $insertStmt = $pdo->prepare("
        INSERT INTO partners (
            partner_code, full_name, phone, whatsapp, email, password_hash,
            shop_name, business_type, state, district, city, address,
            experience_years, interested_services, preferred_language, referred_by, status
        ) VALUES (
            :partner_code, :full_name, :phone, :whatsapp, :email, :password_hash,
            :shop_name, :business_type, :state, :district, :city, :address,
            :experience_years, :interested_services, :preferred_language, :referred_by, :status
        )
    ");

    $insertStmt->execute([
        ':partner_code' => $partner_code,
        ':full_name' => $full_name,
        ':phone' => $phone,
        ':whatsapp' => $whatsapp,
        ':email' => $email,
        ':password_hash' => $password_hash,
        ':shop_name' => $shop_name,
        ':business_type' => $business_type,
        ':state' => $state,
        ':district' => $district,
        ':city' => $city,
        ':address' => $address,
        ':experience_years' => $experience_years,
        ':interested_services' => $interested_services,
        ':preferred_language' => $preferred_language,
        ':referred_by' => !empty($referral_code) ? $referral_code : null,
        ':status' => $status
    ]);

    $new_partner_id = $pdo->lastInsertId();

    // Log referral if referred by existing partner
    if (!empty($referral_code)) {
        try {
            $refStmt = $pdo->prepare("
                INSERT INTO partner_referrals (
                    partner_code, visitor_ip, referred_client_name, referred_client_phone, referred_client_email, conversion_status
                ) VALUES (
                    :code, :ip, :name, :phone, :email, 'converted'
                )
            ");
            $refStmt->execute([
                ':code' => $referral_code,
                ':ip' => $_SERVER['REMOTE_ADDR'] ?? '',
                ':name' => $full_name,
                ':phone' => $phone,
                ':email' => $email
            ]);
        } catch (Exception $e) {
            error_log("Referral conversion logging error: " . $e->getMessage());
        }
    }

    // Set partner session
    $_SESSION['partner_id'] = $new_partner_id;
    $_SESSION['partner_code'] = $partner_code;
    $_SESSION['partner_name'] = $full_name;
    $_SESSION['partner_email'] = $email;
    $_SESSION['partner_shop'] = $shop_name;
    $_SESSION['partner_status'] = $status;

    echo json_encode([
        'success' => true,
        'message' => 'Partner registration successful!',
        'partner_id' => $new_partner_id,
        'partner_code' => $partner_code,
        'redirect_url' => 'partner-confirmation.php'
    ]);

} catch (PDOException $e) {
    error_log("Partner registration database error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'An error occurred while creating your partner account. Please try again or contact our WhatsApp support.'
    ]);
}
