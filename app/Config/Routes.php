<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/**$routes->get('/', 'Home::index');
 */
$routes->get('/', 'RevistasController::index');
$routes->get('dashboard', 'Admin\DashboardController::index');
$routes->get('product', 'Admin\ProductController::index');
$routes->get('academico', 'AcademicoController::index');