<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('create_notification', 'Create_notification::create_notification');
$routes->get('notifypro', 'Notify_pro::notifypro');
$routes->get('user/home_page', 'User::home_page');
$routes->get('user/login', 'User::login');
$routes->get('admin', 'Admin::index');
$routes->get('admin/category', 'Admin::category_list');
$routes->get('admin/companies', 'Admin::companies_list');
$routes->get('admin/add_company', 'Admin::add_company');
$routes->get('admin/users', 'Admin::users_list');
$routes->get('admin/add_user', 'Admin::add_user');
$routes->get('admin/category/add', 'Admin::add_category');
$routes->get('vendor/thank_you', 'Vendor::thank_you');
$routes->get('user/list', 'User::list');
$routes->get('user/create_notification', 'User::create_notification');
$routes->get('user/create_notification_details', 'User::create_notification_details');
$routes->get('user/document_confirmation', 'User::document_confirmation');
$routes->get('vendor', 'Vendor::index');
$routes->get('expense', 'Vendor::expense');
$routes->get('addmore', 'Vendor::addmore');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
