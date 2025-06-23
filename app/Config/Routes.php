<?php

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('registrarse', 'Home::registrarse');
$routes->get('login', 'Home::login');
$routes->get('horarios', 'Home::horarios');
$routes->get('aranceles', 'Home::aranceles');

/*rutas del registro de usuario*/
$routes->get('/registrarse', 'usuarios_controller::create');
$routes->post('/enviar-form', 'usuarios_controller::formValidation');


/*rutas del login*/
$routes->get('/login', 'login_controller::index');
$routes->post('/enviarlogin', 'login_controller::auth');
$routes->get('/panel', 'panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');


$routes->get('/usuarios', 'usuarios_controller::index');
$routes->get('/usuarios/edit/(:num)', 'usuarios_controller::edit/$1');
$routes->post('/usuarios/update/(:num)', 'usuarios_controller::update/$1');
$routes->get('/usuarios/delete/(:num)', 'usuarios_controller::delete/$1');


if (is_file(APPPATH . 'config/' . ENVIRONMENT . '/Routes.php')){
    require APPPATH . 'config/' . ENVIRONMENT . '/Routes.php';
}