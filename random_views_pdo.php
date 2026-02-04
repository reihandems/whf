<?php
$host = 'localhost';
$db   = 'db_whf';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->exec("UPDATE produk SET views = FLOOR(RAND() * 1000)");
    echo "Randomized views for products.\n";
} catch (\PDOException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
