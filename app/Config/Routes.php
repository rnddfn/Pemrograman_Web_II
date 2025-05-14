<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'berandaController::index');
$routes->get('/profil', 'profilController::profil');