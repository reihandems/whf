<?php
// Script to check categories and add views column
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR);
require 'app/Config/Paths.php';
$paths = new Config\Paths();
require $paths->systemDirectory . '/bootstrap.php';

$db = \Config\Database::connect();

echo "Categories:\n";
$categories = $db->query("SELECT * FROM kategori_produk")->getResultArray();
print_r($categories);

echo "\nChecking if views column exists in produk table...\n";
$fields = $db->getFieldNames('produk');
if (!in_array('views', $fields)) {
    echo "Adding views column to produk table...\n";
    $db->query("ALTER TABLE produk ADD COLUMN views INT DEFAULT 0 AFTER foto_produk");
    echo "Done.\n";
} else {
    echo "Views column already exists.\n";
}
