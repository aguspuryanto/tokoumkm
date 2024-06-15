<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Auth::login');
$routes->post('/auth/loginProcess', 'Auth::loginProcess');
$routes->get('/register', 'Auth::register');
$routes->post('/auth/registerProcess', 'Auth::registerProcess');
$routes->get('/logout', 'Auth::logout');
$routes->get('/dashboard', 'Dashboard::index');

// $routes->get('/produk', 'Produk::index');
$routes->get('/produk', 'Produk::index');
$routes->get('/produk/create', 'Produk::create');
$routes->post('/produk/store', 'Produk::store');
$routes->get('/produk/edit/(:num)', 'Produk::edit/$1');
$routes->post('/produk/update/(:num)', 'Produk::update/$1');
$routes->get('/produk/delete/(:num)', 'Produk::delete/$1');

// $routes->get('/artikel', 'Artikel::index');
$routes->get('/artikel', 'Artikel::index');
$routes->get('/artikel/create', 'Artikel::create');
$routes->post('/artikel/store', 'Artikel::store');
$routes->get('/artikel/edit/(:num)', 'Artikel::edit/$1');
$routes->post('/artikel/update/(:num)', 'Artikel::update/$1');
$routes->get('/artikel/delete/(:num)', 'Artikel::delete/$1');

// $routes->get('/konten', 'Konten::index');
$routes->get('/konten', 'Kontent::index');
$routes->get('/konten/create', 'Kontent::create');
$routes->post('/konten/store', 'Kontent::store');
$routes->get('/konten/edit/(:num)', 'Kontent::edit/$1');
$routes->post('/konten/update/(:num)', 'Kontent::update/$1');
$routes->get('/konten/delete/(:num)', 'Kontent::delete/$1');

$routes->get('/home-page', 'HomePage::index');
$routes->get('/home-page/create', 'HomePage::create');
$routes->post('/home-page/store', 'HomePage::store');
$routes->get('/home-page/edit/(:num)', 'HomePage::edit/$1');
$routes->post('/home-page/update/(:num)', 'HomePage::update/$1');
$routes->get('/home-page/delete/(:num)', 'HomePage::delete/$1');

// $routes->get('/Pengaturan', 'Pengaturan::index');
$routes->get('/pengaturan', 'Pengaturan::index');
$routes->get('/pengaturan/create', 'Pengaturan::create');
$routes->post('/pengaturan/store', 'Pengaturan::store');
$routes->get('/pengaturan/edit/(:num)', 'Pengaturan::edit/$1');
$routes->post('/pengaturan/update/(:num)', 'Pengaturan::update/$1');
$routes->get('/pengaturan/delete/(:num)', 'Pengaturan::delete/$1');
