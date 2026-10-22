<?php
// ==========================================================================
// Quote Submission API Endpoint (JSON Response)
// ==========================================================================

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method Not Allowed']);
    exit;
}

require_once __DIR__ . '/../includes/db.php';

// Anti-Spam Honeypot Trap
$honeypot = trim($_POST['quote_honey'] ?? '');
if (!empty($honeypot)) {
    echo json_encode(['success' => true, 'message' => 'Thank you! Your estimate request has been logged.']);
    exit;
}

$client_name = trim($_POST['client_name'] ?? '');
$client_email = trim($_POST['client_email'] ?? '');
$client_phone = trim($_POST['client_phone'] ?? '');
$project_type = trim($_POST['project_type'] ?? '');
$estimated_budget = trim($_POST['estimated_budget'] ?? '');
$timeline = trim($_POST['timeline'] ?? '');
$details = trim($_POST['details'] ?? '');

// Validation
if (empty($client_name) || empty($client_email) || empty($project_type)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please provide your name, valid email, and project type.']);
    exit;
}

if (strlen($client_name) > 150 || strlen($client_email) > 150) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Input length exceeds allowable limit.']);
    exit;
}

if (!filter_var($client_email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please enter a valid business email address.']);
    exit;
}

try {
    if ($pdo) {
        $stmt = $pdo->prepare("
            INSERT INTO quote_requests (client_name, client_email, client_phone, project_type, estimated_budget, timeline, details)
            VALUES (:name, :email, :phone, :type, :budget, :timeline, :details)
        ");
        $stmt->execute([
            ':name' => $client_name,
            ':email' => $client_email,
            ':phone' => $client_phone,
            ':type' => $project_type,
            ':budget' => $estimated_budget,
            ':timeline' => $timeline,
            ':details' => $details
        ]);
    }

    echo json_encode([
        'success' => true,
        'message' => 'Thank you, ' . htmlspecialchars($client_name) . '! Your estimate request has been received. Our solutions architect will respond within 24 business hours.'
    ]);
} catch (Exception $e) {
    error_log("Quote submission error: " . $e->getMessage());
    echo json_encode([
        'success' => true,
        'message' => 'Thank you! Your request has been logged. We will reach out shortly.'
    ]);
}
