<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/productos', 'Home::index');
$routes->get('/editar/(:num)', 'Home::editar/$1');
$routes->post('/actualizar/(:num)', 'Home::actualizar/$1');