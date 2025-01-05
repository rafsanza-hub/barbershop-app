<?php

use CodeIgniter\Router\RouteCollection;
use \Myth\Auth\Config\Auth as AuthConfig;

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

$routes->get('admin', 'Admin::index');
$routes->get('admin/create', 'Admin::create');
$routes->post('admin/save', 'Admin::save');
$routes->get('admin/edit/(:num)', 'Admin::edit/$1');
$routes->post('admin/update/(:num)', 'Admin::update/$1');
$routes->delete('admin/delete/(:num)', 'Admin::delete/$1');

$routes->get('barber', 'Barber::index');
$routes->get('barber/create', 'Barber::create');
$routes->post('barber/save', 'Barber::save');
$routes->get('barber/edit/(:num)', 'Barber::edit/$1');
$routes->post('barber/update/(:num)', 'Barber::update/$1');
$routes->delete('barber/delete/(:num)', 'Barber::delete/$1');

$routes->get('customer', 'Customer::index');
$routes->get('customer/create', 'Customer::create');
$routes->post('customer/save', 'Customer::save');
$routes->get('customer/edit/(:num)', 'Customer::edit/$1');
$routes->post('customer/update/(:num)', 'Customer::update/$1');
$routes->delete('customer/delete/(:num)', 'Customer::delete/$1');

$routes->get('booking', 'Booking::index');
$routes->get('customer/booking', 'Home::booking');
$routes->post('customer/booking/save', 'Home::save');


$routes->get('auth/google/login', 'GoogleAuthController::login');
$routes->get('auth/google/register', 'GoogleAuthController::login');
$routes->get('auth/google/callback', 'GoogleAuthController::callback');



// OVERRIDE AUTH ROUTES
$routes->group('', ['namespace' => 'App\Controllers'], static function ($routes) {
    // Load the reserved routes from Auth.php
    $config         = config(AuthConfig::class);
    $reservedRoutes = $config->reservedRoutes;

    // Login/out
    $routes->get($reservedRoutes['login'], 'AuthController::login', ['as' => $reservedRoutes['login']]);
    $routes->post($reservedRoutes['login'], 'AuthController::attemptLogin');
    $routes->get($reservedRoutes['logout'], 'AuthController::logout');

    // Registration
    $routes->get($reservedRoutes['register'], 'AuthController::register', ['as' => $reservedRoutes['register']]);
    $routes->post($reservedRoutes['register'], 'AuthController::attemptRegister');

    // Activation
    $routes->get($reservedRoutes['activate-account'], 'AuthController::activateAccount', ['as' => $reservedRoutes['activate-account']]);
    $routes->get($reservedRoutes['resend-activate-account'], 'AuthController::resendActivateAccount', ['as' => $reservedRoutes['resend-activate-account']]);

    // Forgot/Resets
    $routes->get($reservedRoutes['forgot'], 'AuthController::forgotPassword', ['as' => $reservedRoutes['forgot']]);
    $routes->post($reservedRoutes['forgot'], 'AuthController::attemptForgot');
    $routes->get($reservedRoutes['reset-password'], 'AuthController::resetPassword', ['as' => $reservedRoutes['reset-password']]);
    $routes->post($reservedRoutes['reset-password'], 'AuthController::attemptReset');
});


