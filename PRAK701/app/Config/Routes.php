<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Auth::showLogin');
$routes->get('/login', 'Auth::showLogin');
$routes->post('/auth/login', 'Auth::login');

$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('/buku', 'Buku::index');
    $routes->get('/buku/create', 'Buku::create');
    $routes->post('/buku/save', 'Buku::save');
    $routes->get('/buku/edit/(:num)', 'Buku::edit/$1');
    $routes->put('/buku/update/(:num)', 'Buku::update/$1');
    $routes->delete('/buku/(:num)', 'Buku::delete/$1');
    $routes->get('/logout', 'Auth::logout');
});