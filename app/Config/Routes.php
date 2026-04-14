<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// Jalur untuk halaman Login dan Logout
$routes->get('/login', 'Auth::index');
$routes->post('/login/process', 'Auth::process');
$routes->get('/logout', 'Auth::logout');
// Jalur untuk Lupa Password
$routes->get('/forget_password', 'Auth::forgotPassword');
$routes->post('/forget_password/process', 'Auth::processForgotPassword');
$routes->get('/buat-admin', 'Auth::buatAdmin');