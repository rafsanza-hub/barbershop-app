<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('category', 'Category::index');
$routes->post('category/save', 'Category::save');
$routes->post('category/update/(:num)', 'Category::update/$1');
$routes->delete('category/delete/(:num)', 'Category::delete/$1');
$routes->get('service', 'Service::index');

