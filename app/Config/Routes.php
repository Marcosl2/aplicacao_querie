<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');

//sistema de login / logout
$routes->get('/', 'Main::login');
$routes->post('login_submit', 'Main::login_submit');
$routes->get('logout', 'Main::logout');

