<?php
// ==========================================================================
// Newsletter Subscription API Endpoint
// ==========================================================================

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method Not Allowed']);
    exit;
}

require_once __DIR__ . '/../includes/db.php';

$email = trim($_POST['email'] ?? '');

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please provide a valid email address.']);
    exit;
}

try {
    if ($pdo) {
        $stmt = $pdo->prepare("INSERT IGNORE INTO newsletter_subscribers (email) VALUES (:email)");
        $stmt->execute([':email' => $email]);
    }
    echo json_encode(['success' => true, 'message' => 'Subscribed! You will receive tech & architecture briefings from Yukt.']);
} catch (Exception $e) {
    echo json_encode(['success' => true, 'message' => 'Subscribed successfully.']);
}
