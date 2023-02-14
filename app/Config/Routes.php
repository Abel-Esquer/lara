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
$routes->get('/agregar', 'UsuarioController::save');
$routes->get('/form', 'UsuarioController::form');

// Equivalent to the following:
//Formulario para crear un usuario
//Regresar un view
$routes->get('usuario/new', 'UsuarioController::new');
$routes->get('empresa/new', 'EmpresaController::new');

//Crea al usuario en la base de datos
//Regresa un true
$routes->post('usuario', 'UsuarioController::create');
$routes->post('empresa', 'EmpresaController::create');


//Regresa lista con todos los usuarios de la base de datos
$routes->get('usuario', 'UsuarioController::index');
$routes->get('empresa', 'EmpresaController::index');

//Regresa el usuario con el id proporcionado
$routes->get('usuario/(:segment)', 'UsuarioController::show/$1');
$routes->get('empresa/(:segment)', 'EmpresaController::show/$1');

//Formulario para editar el usuario
//Regresa un view
$routes->get('usuario/(:segment)/edit', 'UsuarioController::edit/$1');
$routes->get('empresa/(:segment)/edit', 'EmpresaController::edit/$1');

//Edita al usuario en la base de daos
//$routes->put('usuario/(:segment)', 'UsuarioController::update/$1');

//Edita al usuario en la base de datos
$routes->post('usuario/(:segment)/edit', 'UsuarioController::update/$1');
$routes->post('empresa/(:segment)/edit', 'EmpresaController::update/$1');

//Edita al usuario en la base de datos
$routes->patch('usuario/(:segment)', 'UsuarioController::update/$1');
$routes->patch('empresa/(:segment)', 'EmpresaController::update/$1');

//Elimina al usuario en la base de datos
$routes->delete('usuario/(:segment)', 'UsuarioController::delete/$1');
$routes->delete('empresa/(:segment)', 'EmpresaController::delete/$1');

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
