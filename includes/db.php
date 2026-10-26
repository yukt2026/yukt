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
    ");

} catch (PDOException $e) {
    // Fail gracefully without exposing database credentials
    error_log("Database connection error: " . $e->getMessage());
    $pdo = null;
}
