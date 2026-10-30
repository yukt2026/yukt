<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

unset($_SESSION['partner_id']);
unset($_SESSION['partner_code']);
unset($_SESSION['partner_name']);
unset($_SESSION['partner_email']);
unset($_SESSION['partner_shop']);
unset($_SESSION['partner_status']);

header('Location: partner.php?logout=1');
exit;
