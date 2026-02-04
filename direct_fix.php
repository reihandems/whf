<?php
$host = 'localhost';
$db   = 'db_whf';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Connected to database.\n";

    // Check if column exists
    $stmt = $pdo->query("SHOW COLUMNS FROM produk LIKE 'views'");
    $column = $stmt->fetch();

    if (!$column) {
        echo "Adding 'views' column...\n";
        $pdo->exec("ALTER TABLE produk ADD COLUMN views INT DEFAULT 0 AFTER foto_produk");
        echo "Successfully added 'views' column.\n";
    } else {
        echo "Column 'views' already exists.\n";
    }
} catch (\PDOException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
