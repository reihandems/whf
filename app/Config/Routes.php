<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// -- ALL ROLE - LANDING PAGE --
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');

// ALL ROLE - PRODUK
$routes->get('/produk', 'Produk::index');
$routes->get('/produk/detail', 'Produk::detail');

// ALL ROLE - TRAINER
$routes->get('/trainer', 'Trainer::index');
$routes->get('/trainer/detail', 'Trainer::detail');

// ALL ROLE - BLOG
$routes->get('/blog', 'Blog::index');

// ALL ROLE - FAQ
$routes->get('/faq', 'FAQ::index');

// ALL ROLE - AUTH
$routes->get('/login', 'Auth\Auth::login');
$routes->get('/register', 'Auth\Auth::register');


// -- CUSTOMER --   
$routes->get('user/home', 'Customer\Home::index');
$routes->get('user/produk', 'Customer\Produk::index');
$routes->get('user/produk/detail', 'Customer\DetailProduk::index');
$routes->get('user/trainer', 'Customer\Trainer::index');
$routes->get('user/trainer/detail', 'Customer\DetailTrainer::index');
$routes->get('user/blog', 'Customer\Blog::index');
$routes->get('user/faq', 'Customer\FAQ::index');
$routes->get('user/cart', 'Customer\Cart::index');
$routes->get('user/checkout', 'Customer\Checkout::index');
$routes->get('user/checkout-trainer', 'Customer\CheckoutTrainer::index');
$routes->get('user/pesanan', 'Customer\Pesanan::index');
$routes->get('user/pesanan/detail', 'Customer\DetailPesanan::index');
$routes->get('user/booking', 'Customer\Booking::index');
$routes->get('user/booking/detail', 'Customer\DetailBooking::index');
$routes->get('user/profil', 'Customer\Profil::index');
