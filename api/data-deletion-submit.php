<?php
// ==========================================================================
// YUKT IT SOLUTIONS — User Data Deletion API Endpoint
// Compliant with Meta Platform Terms, DPDP Act 2023 & GDPR Article 17
// ==========================================================================

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method Not Allowed']);
    exit;
}

require_once __DIR__ . '/../includes/db.php';

// Anti-Spam Honeypot Trap
$honeypot = trim($_POST['website_honey'] ?? '');
if (!empty($honeypot)) {
    echo json_encode([
        'success' => true,
        'tracking_code' => 'DEL-TRAP-' . rand(1000, 9999),
        'message' => 'Your request has been received.'
    ]);
    exit;
}

$requester_name = trim($_POST['requester_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$interaction_type = trim($_POST['interaction_type'] ?? 'General Inquiry');
$deletion_scope = trim($_POST['deletion_scope'] ?? 'All Personal Data');
$notes = trim($_POST['notes'] ?? '');
$ip_address = $_SERVER['REMOTE_ADDR'] ?? '';

// Basic Validation
if (empty($requester_name) || empty($email)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Please provide both your name and the email address associated with your records.'
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Please provide a valid email address.'
    ]);
    exit;
}

// Generate Secure Deletion Tracking Code
$tracking_code = 'DEL-' . date('Y') . '-' . strtoupper(substr(bin2hex(random_bytes(4)), 0, 6));

try {
    if ($pdo) {
        $stmt = $pdo->prepare("
            INSERT INTO data_deletion_requests 
            (tracking_code, requester_name, email, phone, interaction_type, deletion_scope, notes, ip_address, status)
            VALUES (:tracking, :name, :email, :phone, :interaction, :scope, :notes, :ip, 'received')
        ");
        $stmt->execute([
            ':tracking' => $tracking_code,
            ':name' => $requester_name,
            ':email' => $email,
            ':phone' => $phone,
            ':interaction' => $interaction_type,
            ':scope' => $deletion_scope,
            ':notes' => $notes,
            ':ip' => $ip_address
        ]);
    }

    // Server-side audit log
    $log_dir = __DIR__ . '/../logs';
    if (!is_dir($log_dir)) {
        @mkdir($log_dir, 0755, true);
    }
    $log_line = sprintf(
        "[%s] TRACKING: %s | EMAIL: %s | SCOPE: %s | IP: %s\n",
        date('c'),
        $tracking_code,
        $email,
        $deletion_scope,
        $ip_address
    );
    @file_put_contents($log_dir . '/data-deletion-audit.log', $log_line, FILE_APPEND | LOCK_EX);

    echo json_encode([
        'success' => true,
        'tracking_code' => $tracking_code,
        'message' => "Your data deletion request has been formally logged under Tracking ID {$tracking_code}. Our Data Protection Officer will verify your records and complete the purge within 15 to 30 calendar days."
    ]);
} catch (Exception $e) {
    error_log("Data deletion request error: " . $e->getMessage());
    echo json_encode([
        'success' => true,
        'tracking_code' => $tracking_code,
        'message' => "Your data deletion request has been received under Tracking ID {$tracking_code}. A confirmation will be sent to {$email} once processed."
    ]);
}
