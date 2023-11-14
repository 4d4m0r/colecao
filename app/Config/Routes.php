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
$routes->get('/sobre', 'Home::sobre');
$routes->get('/contato', 'Home::contato');
$routes->post('/searchCultura', 'Home::searchCultura');
// $routes->get('/insere', 'Home::insere');
$routes->get('/login', 'Login::index');
$routes->post('login/signIn', 'Login::signIn');
$routes->get('login/signOut', 'Login::signOut');


$routes->get('/dashboard', 'Login::dashboard');

// CRUD MEIO DE CULTIVO
$routes->get('/meio', 'MeioCultivo::index');
$routes->get('/meio/delete/(:num)', 'MeioCultivo::delete/$1');
$routes->get('/meio/create/', 'MeioCultivo::create');
$routes->post('/meio/store/', 'MeioCultivo::store');
$routes->get('/meio/edit/(:num)', 'MeioCultivo::singleMeio/$1');
$routes->post('/update_meio', 'MeioCultivo::update');

// CRUD ESPÉCIE
$routes->get('/especie', 'Especie::index');
$routes->get('/especie/delete/(:num)', 'Especie::delete/$1');
$routes->get('/especie/create/', 'Especie::create');
$routes->post('/especie/store/', 'Especie::store');
$routes->post('/get_especie_details', 'Especie::get_especie_details');
$routes->get('/especie/visualizar/(:num)', 'Especie::verEspecie/$1');
$routes->get('/especie/edit/(:num)', 'Especie::singleEspecie/$1');
$routes->post('/update_especie', 'Especie::update');

// CRUD CULTURA
$routes->get('/cultura', 'Cultura::index');
$routes->get('/cultura/delete/(:num)', 'Cultura::delete/$1');
$routes->get('/cultura/create/', 'Cultura::create');
$routes->post('/cultura/store/', 'Cultura::store');
$routes->get('/cultura/visualizar/(:num)', 'Cultura::verCultura/$1');
$routes->get('/cultura/edit/(:num)', 'Cultura::singleCultura/$1');
$routes->post('/update_cultura', 'Cultura::update');
$routes->post('/especie_cultura', 'Cultura::especie_cultura');

// CRUD CONTATO
$routes->get('/contatos', 'Contato::contatos');
$routes->post('/contatos/store/', 'Contato::store');
$routes->get('/contatos/ver_contato/(:num)', 'Contato::verContato/$1');

// PLANILHA
$routes->get('/export','Planilha::export');
$routes->post('/import','Planilha::import');
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
