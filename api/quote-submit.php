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

if (session_status() === PHP_SESSION_NONE) {
    session_start();
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

        // Referral Partner Attribution
        $refCode = $_SESSION['yukt_ref'] ?? $_COOKIE['yukt_ref'] ?? null;
        if (!empty($refCode)) {
            try {
                $refPartner = $pdo->prepare("SELECT id, partner_code FROM partners WHERE partner_code = :c LIMIT 1");
                $refPartner->execute([':c' => $refCode]);
                $pRow = $refPartner->fetch();

                if ($pRow) {
                    $tracking_code = 'ENQ-' . rand(10000, 99999);
                    $partnerEnq = $pdo->prepare("
                        INSERT INTO partner_enquiries (
                            tracking_code, partner_id, partner_code, customer_name, customer_phone, customer_email,
                            service_category, service_item, project_description, estimated_budget, status, commission_status, commission_rate
                        ) VALUES (
                            :trk, :pid, :pcode, :cname, :cphone, :cemail,
                            'Web / Digital', :item, :details, :budget, 'received', 'pending', 15.00
                        )
                    ");
                    $partnerEnq->execute([
                        ':trk' => $tracking_code,
                        ':pid' => $pRow['id'],
                        ':pcode' => $pRow['partner_code'],
                        ':cname' => $client_name,
                        ':cphone' => $client_phone ?? '',
                        ':cemail' => $client_email,
                        ':item' => $project_type,
                        ':details' => $details ?? 'Client inquiry submitted via website quote modal',
                        ':budget' => $estimated_budget
                    ]);

                    $refLog = $pdo->prepare("
                        INSERT INTO partner_referrals (
                            partner_code, visitor_ip, referred_client_name, referred_client_phone, referred_client_email, conversion_status
                        ) VALUES (
                            :code, :ip, :name, :phone, :email, 'lead_submitted'
                        )
                    ");
                    $refLog->execute([
                        ':code' => $pRow['partner_code'],
                        ':ip' => $_SERVER['REMOTE_ADDR'] ?? '',
                        ':name' => $client_name,
                        ':phone' => $client_phone ?? '',
                        ':email' => $client_email
                    ]);
                }
            } catch (Exception $e) {
                error_log("Referral quote link error: " . $e->getMessage());
            }
        }
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
