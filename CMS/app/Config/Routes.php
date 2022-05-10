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
    $routes->get('/info/terms', 'User\Content\PageController::terms');
    $routes->get('/info/rules', 'User\Content\PageController::rules');
    $routes->get('/info/privacy', 'User\Content\PageController::privacy');

    $routes->get('/community/values', 'User\Content\PageController::value');
    $routes->get('/community/secondvalues', 'User\Content\PageController::secondvalue');
    $routes->get('/community/management', 'User\Community\StaffController::index');

    $routes->add('/profile/(:any)', 'User\Players\Profilecontroller::getProfile/$1');
	$routes->post('/report/(:any)', 'User\Players\Profilecontroller::reportPlayer/$1');
    $routes->add('/news/(:any)', 'User\Community\Newscontroller::getNews/$1');

    $routes->post('/community/search', 'User\Players\Searchcontroller::searchUser');
});

$routes->group('', ['filter' => 'GuestFilter'], function ($routes) {
    $routes->get('/', 'User\Auth\Login::index');
    $routes->post('/account/submit', 'User\Auth\Login::authentication');
    $routes->get('/registreren', 'User\Auth\Registration::index');
    $routes->post('/registreren/create', 'User\Auth\Registration::create');
});

$routes->group('', ['filter' => 'LoginFilter'], function ($routes) {
    $routes->get('/logout', 'User\Auth\Login::logout');
    $routes->get('/me', 'User\Session\Me::index');
    $routes->get('/hotel', 'User\Hotel\Hotel::view');

    $routes->get('/account/information', 'User\Session\Settings\Settingscontroller::index');
    $routes->get('/account/email', 'User\Session\Settings\Settingscontroller::email');
    $routes->post('/account/email/save', 'User\Session\Settings\Settingscontroller::saveEmail');
    $routes->get('/account/password', 'User\Session\Settings\Settingscontroller::password');
    $routes->post('/account/password/save', 'User\Session\Settings\Settingscontroller::savePassword');

    $routes->get('/shop/badgeshop', 'User\Shop\BadgeShopController::getBadges');
    $routes->add('/shop/badgeshop/(:any)', 'User\Shop\BadgeShopController::buyBadge/$1');
});

$routes->group('', ['filter' => 'AdminFilter'], function ($routes) {
    $routes->get('/admin/dashboard', 'Admin/Content/PageController::dashboard');
    $routes->get('/admin/community/online', 'Admin/Players/Onlinecontroller::onlineUsers');
	$routes->get('/admin/moderation/reports', 'Admin/Moderation/Reportcontroller::reportLogs');
	$routes->get('/admin/moderation/login', 'Admin/Moderation/Loginusercontroller::getUsers');
	
	$routes->get('/admin/moderation/rcon', 'Admin\Moderation\RCON\Rconcontroller::getRcon');
	$routes->post('/admin/moderation/rcon/alert', 'Admin\Moderation\RCON\Rconcontroller::sendRcon');
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
