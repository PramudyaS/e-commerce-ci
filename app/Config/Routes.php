<?php

namespace Config;

// Create a new instance of our RouteCollection class.
use App\Controllers\KategoriProdukController;

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
$routes->get('/', 'Home::index');

$routes->get('/kategori_produk','KategoriProdukController::index',['as'=>'kategori_produk.index']);
$routes->get('/kategori_produk/create','KategoriProdukController::create',['as'=>'kategori_produk.create']);
$routes->post('/kategori_produk/store','KategoriProdukController::store',['as'=>'kategori_produk.store']);
$routes->get('/kategori_produk/(:num)','KategoriProdukController::edit/$1',['as'=>'kategori_produk.edit']);
$routes->patch('/kategori_produk/(:num)','KategoriProdukController::update/$1',['as'=>'kategori_produk.update']);
$routes->get('/kategori_produk/delete/(:num)','KategoriProdukController::destroy/$1',['as'=>'kategori_produk.delete']);

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
