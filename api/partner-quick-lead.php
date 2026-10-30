<?php
// ==========================================================================
// YUKT PARTNER PROGRAM — QUICK CALLBACK & INQUIRY API
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
    echo json_encode(['success' => true, 'message' => 'Your request has been received.']);
    exit;
}

$full_name = trim($_POST['full_name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$shop_name = trim($_POST['shop_name'] ?? '');
$city = trim($_POST['city'] ?? '');
$business_type = trim($_POST['business_type'] ?? 'Cyber Cafe / CSC');
$service = trim($_POST['service'] ?? 'General Partnership');

if (empty($full_name)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Kripya apna naam darj karein (Please enter your name).']);
    exit;
}

$clean_phone = preg_replace('/[^0-9]/', '', $phone);
if (strlen($clean_phone) < 10) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Kripya 10-digit mobile number darj karein.']);
    exit;
}

// Generate pre-filled WhatsApp message
$waMessage = "Namaste YUKT Team! Mera naam {$full_name} hai. Meri shop ka naam '{$shop_name}' ({$city}) hai. Main YUKT Partner Program ke baare me janna chahta hu. Business Type: {$business_type}, Service: {$service}.";
$waUrl = getWhatsAppUrl($waMessage, '918235411806');

// Save into partner_enquiries table if available
if (isset($pdo) && $pdo) {
    try {
        $stmt = $pdo->prepare("
            INSERT INTO partner_enquiries 
            (partner_id, client_name, client_phone, client_email, service_category, service_title, project_budget, status, notes)
            VALUES 
            (0, :name, :phone, '', :cat, :title, 0, 'new', :notes)
        ");
        $notes = "Quick Partner Callback: Shop: {$shop_name}, City: {$city}, Business: {$business_type}";
        $stmt->execute([
            ':name' => $full_name,
            ':phone' => $phone,
            ':cat' => 'Partner Onboarding',
            ':title' => $service,
            ':notes' => $notes
        ]);
    } catch (Exception $e) {
        // Log silently
        error_log('Partner quick lead DB error: ' . $e->getMessage());
    }
}

echo json_encode([
    'success' => true,
    'message' => 'Dhanyawad! Aapki request mil gayi hai. YUKT team aapse jald hi call ya WhatsApp par baat karegi.',
    'whatsapp_url' => $waUrl
]);
exit;
