<?php
// ==========================================================================
// Database Connection & Schema Initialization (PDO MySQL)
// ==========================================================================

$db_host = '127.0.0.1';
$db_user = 'root';
$db_pass = '';
$db_name = 'yukt_db';
$db_charset = 'utf8mb4';

$pdo = null;

try {
    $dsn = "mysql:host=$db_host;charset=$db_charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    
    // Connect to MySQL server
    $tempPdo = new PDO($dsn, $db_user, $db_pass, $opt);
    $tempPdo->exec("CREATE DATABASE IF NOT EXISTS `$db_name` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    
    // Connect to specific database
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=$db_charset", $db_user, $db_pass, $opt);

    // Initialize Schema Tables if not exist
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS inquiries (
            id INT AUTO_INCREMENT PRIMARY KEY,
            full_name VARCHAR(150) NOT NULL,
            email VARCHAR(150) NOT NULL,
            phone VARCHAR(30) NULL,
            service_needed VARCHAR(100) NULL,
            budget VARCHAR(50) NULL,
            message TEXT NOT NULL,
            ip_address VARCHAR(45) NULL,
            status VARCHAR(30) DEFAULT 'new',
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

        CREATE TABLE IF NOT EXISTS quote_requests (
            id INT AUTO_INCREMENT PRIMARY KEY,
            client_name VARCHAR(150) NOT NULL,
            client_email VARCHAR(150) NOT NULL,
            client_phone VARCHAR(30) NULL,
            project_type VARCHAR(100) NOT NULL,
            estimated_budget VARCHAR(50) NULL,
            timeline VARCHAR(50) NULL,
            details TEXT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

        CREATE TABLE IF NOT EXISTS newsletter_subscribers (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(150) UNIQUE NOT NULL,
            subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

        CREATE TABLE IF NOT EXISTS data_deletion_requests (
            id INT AUTO_INCREMENT PRIMARY KEY,
            tracking_code VARCHAR(50) UNIQUE NOT NULL,
            requester_name VARCHAR(150) NOT NULL,
            email VARCHAR(150) NOT NULL,
            phone VARCHAR(30) NULL,
            interaction_type VARCHAR(100) NULL,
            deletion_scope VARCHAR(100) NULL,
            notes TEXT NULL,
            ip_address VARCHAR(45) NULL,
            status VARCHAR(30) DEFAULT 'received',
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

        -- ==========================================================
        -- YUKT DIGITAL BUSINESS PARTNER PROGRAM SCHEMA
        -- ==========================================================
        CREATE TABLE IF NOT EXISTS partners (
            id INT AUTO_INCREMENT PRIMARY KEY,
            partner_code VARCHAR(50) UNIQUE NOT NULL,
            full_name VARCHAR(150) NOT NULL,
            phone VARCHAR(30) NOT NULL,
            whatsapp VARCHAR(30) NOT NULL,
            email VARCHAR(150) UNIQUE NOT NULL,
            password_hash VARCHAR(255) NOT NULL,
            shop_name VARCHAR(150) NOT NULL,
            business_type VARCHAR(80) NOT NULL,
            state VARCHAR(80) NOT NULL,
            district VARCHAR(80) NOT NULL,
            city VARCHAR(80) NOT NULL,
            address TEXT NOT NULL,
            experience_years VARCHAR(30) NULL,
            interested_services TEXT NULL,
            preferred_language VARCHAR(50) DEFAULT 'Hinglish',
            referred_by VARCHAR(50) NULL,
            status VARCHAR(40) DEFAULT 'pending_verification',
            bank_name VARCHAR(100) NULL,
            bank_account_no VARCHAR(100) NULL,
            bank_ifsc VARCHAR(30) NULL,
            bank_holder_name VARCHAR(150) NULL,
            upi_id VARCHAR(100) NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            INDEX idx_partner_code (partner_code),
            INDEX idx_partner_email (email),
            INDEX idx_partner_status (status)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

        CREATE TABLE IF NOT EXISTS partner_referrals (
            id INT AUTO_INCREMENT PRIMARY KEY,
            partner_code VARCHAR(50) NOT NULL,
            visitor_ip VARCHAR(45) NULL,
            user_agent TEXT NULL,
            landing_page VARCHAR(255) NULL,
            referred_client_name VARCHAR(150) NULL,
            referred_client_phone VARCHAR(30) NULL,
            referred_client_email VARCHAR(150) NULL,
            conversion_status VARCHAR(40) DEFAULT 'visited',
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            INDEX idx_ref_code (partner_code)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

        CREATE TABLE IF NOT EXISTS partner_enquiries (
            id INT AUTO_INCREMENT PRIMARY KEY,
            tracking_code VARCHAR(50) UNIQUE NOT NULL,
            partner_id INT NULL,
            partner_code VARCHAR(50) NULL,
            customer_name VARCHAR(150) NOT NULL,
            customer_phone VARCHAR(30) NOT NULL,
            customer_email VARCHAR(150) NULL,
            service_category VARCHAR(100) NOT NULL,
            service_item VARCHAR(150) NOT NULL,
            project_description TEXT NOT NULL,
            estimated_budget VARCHAR(80) NULL,
            attachment_path VARCHAR(255) NULL,
            project_value DECIMAL(12, 2) DEFAULT 0.00,
            commission_rate DECIMAL(5, 2) DEFAULT 15.00,
            commission_amount DECIMAL(12, 2) DEFAULT 0.00,
            commission_status VARCHAR(40) DEFAULT 'pending',
            status VARCHAR(40) DEFAULT 'received',
            admin_notes TEXT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            INDEX idx_enq_partner (partner_id),
            INDEX idx_enq_code (partner_code),
            INDEX idx_enq_status (status)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

        CREATE TABLE IF NOT EXISTS partner_commissions (
            id INT AUTO_INCREMENT PRIMARY KEY,
            partner_id INT NOT NULL,
            enquiry_id INT NULL,
            project_title VARCHAR(200) NOT NULL,
            project_value DECIMAL(12, 2) NOT NULL,
            commission_rate DECIMAL(5, 2) NOT NULL,
            amount DECIMAL(12, 2) NOT NULL,
            status VARCHAR(40) DEFAULT 'pending',
            payment_method VARCHAR(50) NULL,
            transaction_ref VARCHAR(100) NULL,
            paid_at TIMESTAMP NULL,
            notes TEXT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            INDEX idx_comm_partner (partner_id),
            INDEX idx_comm_status (status)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

        CREATE TABLE IF NOT EXISTS partner_support_tickets (
            id INT AUTO_INCREMENT PRIMARY KEY,
            ticket_code VARCHAR(50) UNIQUE NOT NULL,
            partner_id INT NOT NULL,
            subject VARCHAR(200) NOT NULL,
            category VARCHAR(80) NOT NULL,
            priority VARCHAR(30) DEFAULT 'normal',
            message TEXT NOT NULL,
            admin_reply TEXT NULL,
            status VARCHAR(30) DEFAULT 'open',
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            resolved_at TIMESTAMP NULL,
            INDEX idx_ticket_partner (partner_id),
            INDEX idx_ticket_status (status)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ");

} catch (PDOException $e) {
    // Fail gracefully without exposing database credentials
    error_log("Database connection error: " . $e->getMessage());
    $pdo = null;
}
