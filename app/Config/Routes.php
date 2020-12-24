<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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
$routes->get('/admin/adduser', 'Admin::addUsers');
$routes->post('/admin/storeuser', 'Admin::storeUsers');
$routes->post('/admin/updateuser', 'Admin::updateUsers');
$routes->get('/admin/orders', 'Admin::showOrders');
$routes->get('/admin/addorder', 'Admin::addOrders');
$routes->post('/admin/storeorder', 'Admin::storeOrders');
$routes->post('/admin/updateorder', 'Admin::updateOrders');
$routes->get('/admin/products', 'Admin::showProducts');
$routes->get('/admin/addcategory', 'Admin::addCategory');
$routes->post('/admin/storecategory', 'Admin::storeCategory');
$routes->get('/admin/addproduct', 'Admin::addProducts');
$routes->post('/admin/storeproduct', 'Admin::storeProducts');
$routes->post('/admin/updateproduct', 'Admin::updateProducts');
$routes->get('/admin/announcements', 'Admin::showAnnouncements');
$routes->get('/admin/addannouncement', 'Admin::addAnnouncements');
$routes->post('/admin/storeannouncement', 'Admin::storeAnnouncements');
$routes->post('/admin/updateannouncement', 'Admin::updateAnnouncements');
$routes->post('/submit-login', 'Admin::submitLogin');
$routes->get('/logout', 'Admin::logout');

// User Routes
$routes->get('/user', 'User::index');
$routes->post('/user-login', 'User::login');
$routes->get('/user/homepage', 'User::index');
$routes->get('/user/formpeminjaman', 'User::index');
$routes->get('/user/peminjamanruang', 'User::index');
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
