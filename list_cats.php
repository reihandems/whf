<?php
define('ENVIRONMENT', 'development');
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR);
require 'app/Config/Paths.php';
$paths = new Config\Paths();
require $paths->systemDirectory . '/bootstrap.php';

$db = \Config\Database::connect();
$res = $db->query('SELECT DISTINCT nama_kategori FROM kategori_produk')->getResultArray();
foreach ($res as $row) {
    echo $row['nama_kategori'] . "\n";
}
