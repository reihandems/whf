<?php
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR);
require 'vendor/autoload.php';
require 'app/Config/Paths.php';
$paths = new Config\Paths();
require $paths->systemDirectory . '/bootstrap.php';

echo "CI_ENVIRONMENT: " . env('CI_ENVIRONMENT') . "\n";
echo "DOKU_CLIENT_ID: " . env('DOKU_CLIENT_ID') . "\n";
echo "DOKU_SECRET_KEY: " . (env('DOKU_SECRET_KEY') ? 'LOADED' : 'NOT LOADED') . "\n";
echo "DOKU_URL: " . env('DOKU_URL') . "\n";
