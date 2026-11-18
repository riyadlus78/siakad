<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/beranda', 'Home::index');

$routes->get('/mahasiswa', 'Mahasiswa::index');

$routes->get('/mahasiswa/create', 'Mahasiswa::create');

$routes->post('/mahasiswa/store', 'Mahasiswa::store');

$routes->get('/mahasiswa/edit/(:num)', 'Mahasiswa::edit/$1');

$routes->post('/mahasiswa/update/(:num)', 'Mahasiswa::update/$1');

$routes->post('/mahasiswa/delete/(:num)', 'Mahasiswa::delete/$1');

$routes->get('/dosen', 'Dosen::index');

$routes->get('/dosen/create', 'Dosen::create');

$routes->post('/dosen/store', 'Dosen::store');

$routes->get('/dosen/edit/(:num)', 'Dosen::edit/$1');

$routes->post('/dosen/update/(:num)', 'Dosen::update/$1');

$routes->post('/dosen/delete/(:num)', 'Dosen::delete/$1');

$routes->get('/mata-kuliah', 'Matakuliah::index');

$routes->get('/mata-kuliah/create', 'Matakuliah::create');

$routes->post('/mata-kuliah/store', 'Matakuliah::store');

$routes->get('/mata-kuliah/edit/(:num)', 'Matakuliah::edit/$1');

$routes->post('/mata-kuliah/update/(:num)', 'Matakuliah::update/$1');

$routes->post('/mata-kuliah/delete/(:num)', 'Matakuliah::delete/$1');

$routes->get('/tentang', 'Home::tentang');
