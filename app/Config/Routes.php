<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// -- ALL ROLE - LANDING PAGE --
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/testenv', 'TestEnv::index');
$routes->post('/notification/doku', 'Notification\Payment::doku');

// ALL ROLE - PRODUK
$routes->get('/produk', 'Produk::index');
$routes->get('/produk/detail/(:num)', 'Produk::detail/$1');

// ALL ROLE - TRAINER
$routes->get('/trainer', 'Trainer::index');
$routes->get('/trainer/detail/(:num)', 'Trainer::detail/$1');

// ALL ROLE - BLOG
$routes->get('/blog', 'Blog::index');
$routes->get('/blog/detail/(:any)', 'Blog::detail/$1');

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
    $routes->get('produk/detail/(:num)', 'Customer\DetailProduk::index/$1');
    $routes->get('trainer', 'Customer\Trainer::index');
    $routes->get('trainer/detail/(:num)', 'Customer\DetailTrainer::index/$1');
    $routes->get('blog', 'Customer\Blog::index');
    $routes->get('blog/detail/(:any)', 'Customer\Blog::detail/$1');
    $routes->get('faq', 'Customer\FAQ::index');
    $routes->get('cart', 'Customer\Cart::index');
    $routes->post('cart/add', 'Customer\Cart::add');
    $routes->post('cart/update', 'Customer\Cart::update');
    $routes->get('cart/delete/(:num)', 'Customer\Cart::delete/$1');
    $routes->get('checkout', 'Customer\Checkout::index');
    $routes->post('checkout/process', 'Customer\Checkout::process');
    $routes->get('checkout-trainer', 'Customer\CheckoutTrainer::index');
    $routes->post('checkout-trainer/process', 'Customer\CheckoutTrainer::process');
    $routes->get('pesanan', 'Customer\Pesanan::index');
    $routes->get('pesanan/detail/(:num)', 'Customer\DetailPesanan::index/$1');
    $routes->get('pesanan/complete/(:num)', 'Customer\Pesanan::complete/$1');
    $routes->get('pesanan/get-items/(:num)', 'Customer\Pesanan::getItems/$1');
    $routes->post('pesanan/review/submit', 'Customer\Pesanan::submitReview');
    $routes->get('pesanan/reorder/(:num)', 'Customer\Pesanan::reorder/$1');
    $routes->get('booking', 'Customer\Booking::index');
    $routes->get('booking/detail/(:num)', 'Customer\Booking::detail/$1');
    $routes->post('booking/review/submit', 'Customer\Booking::submitReview');
    $routes->get('profil', 'Customer\Profil::index');
    $routes->post('profil/update', 'Customer\Profil::update');
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
    $routes->get('pesanan/detail/(:num)', 'Supplier\DetailPesanan::index/$1');
    $routes->get('pesanan/process/(:num)', 'Supplier\Pesanan::process/$1');
    $routes->get('pesanan/ship/(:num)', 'Supplier\Pesanan::ship/$1');
    $routes->get('profil', 'Supplier\Profil::index');
});

// TRAINER (Requires Trainer Role)
$routes->group('trainer', ['filter' => 'is_trainer'], function ($routes) {
    $routes->get('dashboard', 'Trainer\Dashboard::index');
    $routes->get('booking', 'Trainer\Booking::index');
    $routes->get('booking/complete/(:num)', 'Trainer\Booking::complete/$1');
    $routes->get('profil', 'Trainer\Profil::index');
});
