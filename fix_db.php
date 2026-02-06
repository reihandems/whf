<?php
define('ENVIRONMENT', 'development');
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR);
require 'app/Config/Paths.php';
$paths = new Config\Paths();
require $paths->systemDirectory . '/bootstrap.php';

$db = \Config\Database::connect();
try {
    echo "Running ALTER TABLE...\n";
    $db->query("ALTER TABLE produk ADD COLUMN views INT DEFAULT 0 AFTER foto_produk");
    echo "Successfully added 'views' column.\n";
} catch (\Exception $e) {
    if (strpos($e->getMessage(), 'Duplicate column name') !== false) {
        echo "Column 'views' already exists.\n";
    } else {
        echo "Error: " . $e->getMessage() . "\n";
    }
}
