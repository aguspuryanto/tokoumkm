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
$routes->get('/products', 'Produk::index');
$routes->get('/products/create', 'Produk::create');
$routes->post('/products/store', 'Produk::store');
$routes->get('/products/edit/(:num)', 'Produk::edit/$1');
$routes->post('/products/update/(:num)', 'Produk::update/$1');
$routes->get('/products/delete/(:num)', 'Produk::delete/$1');

$routes->get('/artikel', 'Artikel::index');
$routes->get('/konten-generator', 'KontenGenerator::index');
$routes->get('/home-page', 'HomePage::index');
$routes->get('/Pengaturan', 'Pengaturan::index');