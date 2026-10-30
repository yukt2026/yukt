<?php
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

$partner_id = $_SESSION['partner_id'] ?? null;
if (!$partner_id) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => 'Unauthorized']);
    exit;
}

$subject = trim($_POST['subject'] ?? '');
$category = trim($_POST['category'] ?? 'General Support');
$priority = trim($_POST['priority'] ?? 'normal');
$message = trim($_POST['message'] ?? '');

if (empty($subject) || empty($message)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please fill in Subject and Message.']);
    exit;
}

try {
    $ticket_code = 'TKT-' . rand(10000, 99999);
    $stmt = $pdo->prepare("
        INSERT INTO partner_support_tickets (ticket_code, partner_id, subject, category, priority, message, status)
        VALUES (:code, :pid, :subj, :cat, :prio, :msg, 'open')
    ");
    $stmt->execute([
        ':code' => $ticket_code,
        ':pid' => $partner_id,
        ':subj' => $subject,
        ':cat' => $category,
        ':prio' => $priority,
        ':msg' => $message
    ]);

    echo json_encode([
        'success' => true,
        'message' => 'Support ticket created successfully! Ticket ID: ' . $ticket_code,
        'ticket_code' => $ticket_code
    ]);
} catch (Exception $e) {
    error_log("Ticket submission error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Failed to create ticket.']);
}
