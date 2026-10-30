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

$upi_id = trim($_POST['upi_id'] ?? '');
$bank_name = trim($_POST['bank_name'] ?? '');
$bank_account_no = trim($_POST['bank_account_no'] ?? '');
$bank_ifsc = trim(strtoupper($_POST['bank_ifsc'] ?? ''));
$bank_holder_name = trim($_POST['bank_holder_name'] ?? '');

if (empty($upi_id) && empty($bank_account_no)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please provide either a valid UPI ID or Bank Account Details.']);
    exit;
}

try {
    $stmt = $pdo->prepare("
        UPDATE partners SET 
            upi_id = :upi,
            bank_name = :bank,
            bank_account_no = :acc,
            bank_ifsc = :ifsc,
            bank_holder_name = :holder
        WHERE id = :id
    ");

    $stmt->execute([
        ':upi' => $upi_id,
        ':bank' => $bank_name,
        ':acc' => $bank_account_no,
        ':ifsc' => $bank_ifsc,
        ':holder' => $bank_holder_name,
        ':id' => $partner_id
    ]);

    echo json_encode(['success' => true, 'message' => 'Payout details updated successfully!']);
} catch (Exception $e) {
    error_log("Payout update error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Failed to save payout details.']);
}
