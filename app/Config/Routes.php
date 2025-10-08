<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'LandingPage::index');

$routes->get('login', 'Login::index');

$routes->get('admin/dashboard', 'Admin\Dashboard::index');

$routes->get('admin/galeri', 'Admin\Galeri::index');
