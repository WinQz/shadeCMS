<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->group('', function ($routes) {
    $routes->get('/info/terms', 'Content\PageController::terms');
    $routes->get('/info/rules', 'Content\PageController::rules');
    $routes->get('/info/privacy', 'Content\PageController::privacy');

    $routes->get('/community/values', 'Content\PageController::value');
    $routes->get('/community/secondvalues', 'Content\PageController::secondvalue');
    $routes->get('/community/management', 'Session\Community\StaffController::index');

    $routes->add('/profile/(:any)', 'Players\Profilecontroller::getProfile/$1');
    $routes->add('/community/search', 'Players\Searchcontroller::searchUser');
});

$routes->group('', ['filter' => 'GuestFilter'], function ($routes) {
    $routes->get('/', 'Auth\Login::index');
    $routes->post('/account/submit', 'Auth\Login::authentication');
    $routes->get('/registreren', 'Auth\Registration::index');
    $routes->post('/registreren/create', 'Auth\Registration::create');
});

$routes->group('', ['filter' => 'LoginFilter'], function ($routes) {
    $routes->get('/logout', 'Auth\Login::logout');
    $routes->get('/me', 'Session\Me::index');
    $routes->get('/hotel', 'Hotel\Hotel::view');

    $routes->get('/account/information', 'Session\Settings\Settingscontroller::index');
    $routes->get('/account/email', 'Session\Settings\Settingscontroller::email');
    $routes->post('/account/email/save', 'Session\Settings\Settingscontroller::saveEmail');
    $routes->get('/account/password', 'Session\Settings\Settingscontroller::password');
    $routes->post('/account/password/save', 'Session\Settings\Settingscontroller::savePassword');
});



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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
