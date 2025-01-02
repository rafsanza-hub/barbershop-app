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
$routes->get('admin/create', 'User::create/admin');
$routes->get('barber/create', 'User::create/barber');
$routes->get('customer/create', 'User::create/customer');
$routes->get('user/admin', 'User::index/admin');
$routes->get('user/barber', 'User::index/barber');
$routes->get('user/customer', 'User::index/customer');
$routes->get('auth/google/login', 'GoogleAuthController::login');
$routes->get('auth/google/register', 'GoogleAuthController::login');
$routes->get('auth/google/callback', 'GoogleAuthController::callback');
$routes->get('booking', 'Booking::index');
$routes->get('customer/booking', 'Customer::booking');
$routes->post('user/save', 'User::save');



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


