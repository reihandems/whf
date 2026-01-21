<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ALL ROLE
$routes->get('/', 'Home::index');

$routes->get('/produk', 'Produk::index');
$routes->get('/produk/detail', 'Produk::detail');

$routes->get('/trainer', 'Trainer::index');
$routes->get('/trainer/detail', 'Trainer::detail');

$routes->get('/blog', 'Blog::index');

$routes->get('/faq', 'FAQ::index');

$routes->get('/home', 'Customer\Home::index');
