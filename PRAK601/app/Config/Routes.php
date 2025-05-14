<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'berandaController::index');
$routes->add('/profil', 'profilController::index');