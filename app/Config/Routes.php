<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); // Ruta a la página de inicio

$routes->get('repartidor/menu', 'Repartidor::mostrarMenu'); // Ruta al menú del repartidor
$routes->get('/cerrarSesion', 'Usuario::cerrarSesion'); // Ruta para cerrar sesión

$routes->get('usuario/login', 'Usuario::index'); // Ruta a la página de inicio de sesión del usuario
$routes->post('usuario/login', 'Usuario::index'); // Ruta para procesar el inicio de sesión del usuario
$routes->get('usuario/cerrarSesion', 'Usuario::cerrarSesion'); // Ruta para cerrar sesión

$routes->get('admin/bienvenida', 'Admin::mostrarInicio'); // Ruta a la página de bienvenida del administrador

$routes->get('admin/agregar', 'Admin::agregar'); // Ruta a la página para agregar un repartidor
$routes->get('admin/mostrarR', 'Admin::mostrarRepartidores'); // Ruta a la página que muestra los repartidores
$routes->get('admin/buscar', 'Admin::buscar'); // Ruta a la página de búsqueda
$routes->get('admin/delete/(:num)', 'Admin::delete/$1'); // Ruta para eliminar un repartidor
$routes->get('admin/editar/(:num)', 'Admin::editar/$1'); // Ruta a la página para editar un repartidor

$routes->post('/admin/insert', 'Admin::insert'); // Ruta para insertar un repartidor
$routes->post('/admin/update', 'Admin::update');  // Ruta para actualizar un repartidor

// Rutas para los paquetes
$routes->get('admin/agregar_paq', 'Admin::agregarPaquete'); // Ruta a la página para agregar un paquete
$routes->get('admin/mostrarP', 'Admin::mostrarPaquetes'); // Ruta a la página que muestra los paquetes
$routes->get('admin/deleteP/(:num)', 'Admin::deleteP/$1'); // Ruta para eliminar un paquete
$routes->get('admin/editarP/(:num)', 'Admin::editarP/$1'); // Ruta a la página para editar un paquete

$routes->post('/admin/insertPaquetes', 'Admin::insertPaquetes'); // Ruta para insertar un paquete
$routes->post('/admin/updateP', 'Admin::updateP');  // Ruta para actualizar un paquete

// Rutas para los carros
$routes->get('admin/mostrarCarro', 'Admin::mostrarCarro'); // Ruta a la página que muestra los carros
$routes->get('admin/agregar_carro', 'Admin::agregarCarro'); // Ruta a la página para agregar un carro
$routes->get('admin/editarCarro/(:num)', 'Admin::editarCarro/$1'); // Ruta a la página para editar un carro
$routes->get('admin/deleteC/(:num)', 'Admin::deleteC/$1'); // Ruta para eliminar un carro

$routes->post('/admin/insertCarro', 'Admin::insertCarro'); // Ruta para insertar un carro
$routes->post('/admin/updateC', 'Admin::updateC'); // Ruta para actualizar un carro

// Rutas para PNR
$routes->get('admin/mostrarPNR', 'Admin::mostrarPNR'); // Ruta a la página que muestra los PNR
$routes->get('admin/crear_PNR', 'Admin::agregarPNR'); // Ruta a la página para agregar un PNR
$routes->post('/admin/insertPNR', 'Admin::insertPNR'); // Ruta para insertar un PNR

// Rutas para salidas
$routes->get('admin/mostrarSalidas', 'Admin::mostrarSalidas'); // Ruta a la página que muestra las salidas
$routes->get('admin/salidas', 'Admin::salidas'); // Ruta a la página de salidas
$routes->post('/admin/insertSalida', 'Admin::insertSalida'); // Ruta para insertar una salida

// Rutas para vistas de visitantes
$routes->get('admin/mostrarRV', 'Admin::mostrarRV'); // Ruta a la página que muestra los repartidores para visitantes
$routes->get('admin/bienvenidaVs', 'Admin::mostrarVs'); // Ruta a la página de bienvenida del administrador

//mostrarRutas
//mostrarPNR_Vis y Respuestas