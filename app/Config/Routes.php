<?php

use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/actualizar', 'Home::actualizar');
$routes->get('/eliminar/(:num)', 'Home::eliminar/$1');
$routes->post('/agregar', 'Home::agregar');