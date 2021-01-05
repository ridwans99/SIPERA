<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Portal Routes
$routes->get('/', 'Home::index');
// $routes->get('/daftar-layanan', 'Home::daftarLayanan');

// Admin Routes
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/users', 'Admin::showUsers');
$routes->get('/admin/ruangan', 'Admin::showRuangan');
$routes->get('/admin/barang', 'Admin::showBarang');
$routes->get('/admin/transaksiruangan', 'Admin::showTransaksiRuangan');
$routes->get('/admin/transaksibarang', 'Admin::showTransaksiBarang');
$routes->get('/admin/inputdata', 'Admin::showInputData');
$routes->post('/submit-login', 'Admin::submitLogin');
$routes->get('/logout', 'Admin::logout');

// User Routes
$routes->get('/user', 'User::index');
$routes->get('/user/formpeminjamanruang', 'User::formpeminjamanruang');
$routes->get('/user/peminjamanruang', 'User::showDay1');
$routes->get('/user/selasa', 'User::showDay2');
$routes->get('/user/rabu', 'User::showDay3');
$routes->get('/user/kamis', 'User::showDay4');
$routes->get('/user/jumat', 'User::showDay5');
$routes->get('/user/pemilihanbarang', 'User::pemilihanbarang');
$routes->get('/user/peminjamanbarang', 'User::peminjamanbarang');
$routes->get('/user/pengembalianbarang', 'User::pengembalianbarang');
$routes->get('/user/verifikasipeminjamanbarang', 'User::verifikasipeminjamanbarang');
// $routes->get('/user/daftarlayanan', 'User::daftarLayanan');
// $routes->get('/user/pengumuman', 'User::pengumuman');
// $routes->get('/user/pesanan', 'User::pesanan');
// $routes->get('/user/riwayatpemesanan', 'User::riwayatPemesanan');
// $routes->post('/user/storeorder', 'User::storeOrders');
// $routes->post('/user/updatepembayaran', 'User::updatePembayaran');

/**
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
