<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

$routes->get('login', 'AdminController::login');
$routes->post('loginCheck', 'AdminController::loginCheck');
$routes->get('dashboard', 'AdminController::dashboard');

$routes->get('logout', 'AdminController::logout');
$routes->get('leads', 'AdminController::leads');
$routes->get('leads/export_excel', 'AdminController::export_excel');



$routes->get('products/add', 'AdminController::add');

$routes->get('products', 'ProductController::index');
$routes->get('leads', 'AdminController::leads');
$routes->get('products/add', 'ProductController::add');
$routes->post('products/save', 'ProductController::save');
$routes->get('products/delete/(:num)', 'ProductController::delete/$1');
$routes->get('products/edit/(:num)', 'ProductController::edit/$1');
$routes->post('products/update/(:num)', 'ProductController::update/$1');
$routes->get('plastic_surgeon', 'HomeController::plastic_surgeon');
$routes->get('plastic_home', 'HomeController::plastic_home');
$routes->get('neuro_surgeon', 'HomeController::neuro_surgeon');
$routes->get('neuro_home', 'HomeController::neuro_home');
$routes->get('aboutus', 'HomeController::aboutus');
$routes->get('contactus', to: 'HomeController::contactus');
$routes->get('services', 'HomeController::services');
$routes->get('microforceps', 'HomeController::microforceps');
$routes->get('microscissors', 'HomeController::microscissors');
$routes->get('microvascularclamps', 'HomeController::microvascularclamps');
$routes->get('tray', 'HomeController::tray');
$routes->get('instrumentssets', 'HomeController::instrumentssets');
$routes->post('home/save_lead', 'HomeController::save_lead');




