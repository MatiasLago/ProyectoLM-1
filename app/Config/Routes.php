<?php

namespace Config;

$routes = Services::routes();

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);


use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::principal');      // La raíz ("/") carga principal
$routes->get('principal', 'Home::principal');
//$routes->get('productos', 'Home::productos');
$routes->get('nosotros', 'Home::nosotros');
$routes->get('contacto', 'Home::contacto');
$routes->get('comercializacion', 'Home::comercializacion');
$routes->get('terminos', 'Home::terminos');



