<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/contact-us', 'Home::contactus');
$routes->get('/terms-and-conditions', 'Home::termsAndConditions');
$routes->get('/privacy-and-policy', 'Home::privacy');
$routes->get('/courses', 'Home::courses');
$routes->get('/cca-course', 'Home::cca_course');
$routes->post('submit-contact-form', 'FormController::submitContactForm');
$routes->post('submit-call-request-form', 'FormController::requestCallForm');

#### admin routes #####

$routes->get('/admin', 'Admin\LoginController::index');
$routes->get('/admin/dashboard', 'Admin\HomeController::dashboard');
$routes->get('/admin/contact-list', 'Admin\HomeController::contactList');
$routes->get('/admin/call-request', 'Admin\HomeController::callRequestList');
$routes->get('/admin/edit-applied-visa/(:segment)', 'Admin\HomeController::editAppliedVisaList/$1');
$routes->post('update-applied-visa/(:segment)/(:segment)/(:segment)', 'Admin\HomeController::updateVisaForm/$1/$2/$3');
$routes->post('submit-form', 'Admin\LoginController::setUserLogin');
$routes->get('admin/logout', 'Admin\LoginController::UserlogOut');
