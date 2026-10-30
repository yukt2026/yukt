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

if (session_status() === PHP_SESSION_NONE) {
    session_start();
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

        // Partner Referral Attribution
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
                            'Contact Desk', :item, :details, :budget, 'received', 'pending', 15.00
                        )
                    ");
                    $partnerEnq->execute([
                        ':trk' => $tracking_code,
                        ':pid' => $pRow['id'],
                        ':pcode' => $pRow['partner_code'],
                        ':cname' => $full_name,
                        ':cphone' => $phone ?? '',
                        ':cemail' => $email,
                        ':item' => $service_needed ?: 'General Consultation',
                        ':details' => $message,
                        ':budget' => $budget
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
                        ':ip' => $ip_address,
                        ':name' => $full_name,
                        ':phone' => $phone ?? '',
                        ':email' => $email
                    ]);
                }
            } catch (Exception $e) {
                error_log("Referral contact link error: " . $e->getMessage());
            }
        }
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
