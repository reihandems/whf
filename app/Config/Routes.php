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
$routes->post('/login-process', 'Auth\Auth::loginProcess');
$routes->get('/register', 'Auth\Auth::register');
$routes->post('/register-process', 'Auth\Auth::registerProcess');
$routes->get('/logout', 'Auth\Auth::logout');


// -- CUSTOMER (Requires Login) --   
$routes->group('user', ['filter' => 'auth'], function ($routes) {
    $routes->get('home', 'Customer\Home::index');
    $routes->get('produk', 'Customer\Produk::index');
    $routes->get('produk/detail', 'Customer\DetailProduk::index');
    $routes->get('trainer', 'Customer\Trainer::index');
    $routes->get('trainer/detail', 'Customer\DetailTrainer::index');
    $routes->get('blog', 'Customer\Blog::index');
    $routes->get('faq', 'Customer\FAQ::index');
    $routes->get('cart', 'Customer\Cart::index');
    $routes->get('checkout', 'Customer\Checkout::index');
    $routes->get('checkout-trainer', 'Customer\CheckoutTrainer::index');
    $routes->get('pesanan', 'Customer\Pesanan::index');
    $routes->get('pesanan/detail', 'Customer\DetailPesanan::index');
    $routes->get('booking', 'Customer\Booking::index');
    $routes->get('booking/detail', 'Customer\DetailBooking::index');
    $routes->get('profil', 'Customer\Profil::index');
});


// ADMIN (Requires Admin Role)
$routes->group('admin', ['filter' => 'is_admin'], function ($routes) {
    $routes->get('dashboard', 'Admin\Dashboard::index');
    $routes->get('data-produk', 'Admin\Produk::index');
    $routes->post('data-produk/store', 'Admin\Produk::store');
    $routes->post('data-produk/update', 'Admin\Produk::update');
    $routes->get('data-produk/delete/(:num)', 'Admin\Produk::delete/$1');

    $routes->get('data-kategori', 'Admin\Kategori::index');
    $routes->post('data-kategori/store', 'Admin\Kategori::store');
    $routes->post('data-kategori/update', 'Admin\Kategori::update');
    $routes->get('data-kategori/delete/(:num)', 'Admin\Kategori::delete/$1');

    $routes->get('data-brand', 'Admin\Brand::index');
    $routes->post('data-brand/store', 'Admin\Brand::store');
    $routes->post('data-brand/update', 'Admin\Brand::update');
    $routes->get('data-brand/delete/(:num)', 'Admin\Brand::delete/$1');

    $routes->get('data-customer', 'Admin\Customer::index');
    $routes->get('data-customer/delete/(:num)', 'Admin\Customer::delete/$1');
    $routes->get('data-trainer', 'Admin\Trainer::index');
    $routes->post('data-trainer/store', 'Admin\Trainer::store');
    $routes->post('data-trainer/update', 'Admin\Trainer::update');
    $routes->get('data-trainer/delete/(:num)', 'Admin\Trainer::delete/$1');

    $routes->get('data-supplier', 'Admin\Supplier::index');
    $routes->post('data-supplier/store', 'Admin\Supplier::store');
    $routes->post('data-supplier/update', 'Admin\Supplier::update');
    $routes->get('data-supplier/delete/(:num)', 'Admin\Supplier::delete/$1');

    $routes->get('data-blog', 'Admin\Blog::index');
    $routes->post('data-blog/store', 'Admin\Blog::store');
    $routes->post('data-blog/update', 'Admin\Blog::update');
    $routes->get('data-blog/delete/(:num)', 'Admin\Blog::delete/$1');
});

// SUPPLIER (Requires Supplier Role)
$routes->group('supplier', ['filter' => 'is_supplier'], function ($routes) {
    $routes->get('dashboard', 'Supplier\Dashboard::index');
    $routes->get('pesanan', 'Supplier\Pesanan::index');
    $routes->get('pesanan/detail', 'Supplier\DetailPesanan::index');
    $routes->get('profil', 'Supplier\Profil::index');
});

// TRAINER (Requires Trainer Role)
$routes->group('trainer', ['filter' => 'is_trainer'], function ($routes) {
    $routes->get('dashboard', 'Trainer\Dashboard::index');
    $routes->get('booking', 'Trainer\Booking::index');
    $routes->get('profil', 'Trainer\Profil::index');
});
