<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Calculadora
$routes->get('/calculadora', 'Home::index');
$routes->get('/productos', 'Productos::index');

//Usuarios
$routes->get('/usuarios', 'UsuariosController::index');

//Ejercicios / PDF
$routes->get('/new_test', 'TestController::index');
$routes->get('/ejercicios', 'TestController::index2');
$routes->post('/upload', 'TestController::upload');
$routes->get('ejercicios/verpdf/(:num)', 'TestController::verPDF/$1');
