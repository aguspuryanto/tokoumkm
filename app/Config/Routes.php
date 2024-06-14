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

$routes->get('/konten', 'Konten::index');
$routes->get('/home-page', 'HomePage::index');
$routes->get('/Pengaturan', 'Pengaturan::index');