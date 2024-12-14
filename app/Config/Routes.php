<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::dashboard');

$routes->get('category', 'Category::index');
$routes->post('category/save', 'Category::save');
$routes->post('category/update/(:num)', 'Category::update/$1');
$routes->delete('category/delete/(:num)', 'Category::delete/$1');
$routes->get('service', 'Service::index');
$routes->get('service/create', 'Service::create');
$routes->post('service/update/(:num)', 'Service::update/$1');
$routes->post('service/save', 'Service::save');
$routes->get('service/edit/(:num)', 'Service::edit/$1');
$routes->delete('service/delete/(:num)', 'Service::delete/$1');
$routes->get('admin/create', 'User::create/admin');
$routes->get('barber/create', 'User::create/barber');
$routes->get('client/create', 'User::create/client');
$routes->get('user/admin', 'User::index/admin');
$routes->get('user/barber', 'User::index/barber');
$routes->get('user/client', 'User::index/client');
$routes->get('auth/google/login', 'GoogleAuthController::login');
$routes->get('auth/google/register', 'GoogleAuthController::login');
$routes->get('auth/google/callback', 'GoogleAuthController::callback');
