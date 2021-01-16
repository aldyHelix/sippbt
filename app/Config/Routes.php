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

//Route Pasien
$routes->get('/pasien', 'KelPasienController::index', ['as' => 'pasien.index']);
$routes->get('/pasien/create', 'KelPasienController::create', ['as' => 'pasien.create']);
$routes->post('/pasien/save', 'KelPasienController::save', ['as' => 'pasien.save']);
$routes->get('/pasien/edit/(:num)', 'KelPasienController::edit/$1', ['as' => 'pasien.edit']);
$routes->add('/pasien/update/(:num)', 'KelPasienController::update/$1', ['as' => 'pasien.update']);
$routes->add('/pasien/delete/(:num)', 'KelPasienController::delete/$1', ['as' => 'pasien.delete']);
//Route Dokter
$routes->get('/dokter', 'KelDokterController::index', ['as' => 'dokter.index']);
$routes->get('/dokter/create', 'KelDokterController::create', ['as' => 'dokter.create']);
$routes->post('/dokter/save', 'KelDokterController::save', ['as' => 'dokter.save']);
$routes->get('/dokter/edit/(:num)', 'KelDokterController::edit/$1', ['as' => 'dokter.edit']);
$routes->add('/dokter/update/(:num)', 'KelDokterController::update/$1', ['as' => 'dokter.update']);
$routes->add('/dokter/delete/(:num)', 'KelDokterController::delete/$1', ['as' => 'dokter.delete']);
//Route Obat
$routes->get('/obat', 'KelObatController::index', ['as' => 'obat.index']);
$routes->get('/obat/create', 'KelObatController::create', ['as' => 'obat.create']);
$routes->post('/obat/save', 'KelObatController::save', ['as' => 'obat.save']);
$routes->get('/obat/edit/(:num)', 'KelObatController::edit/$1', ['as' => 'obat.edit']);
$routes->add('/obat/update/(:num)', 'KelObatController::update/$1', ['as' => 'obat.update']);
$routes->add('/obat/delete/(:num)', 'KelObatController::delete/$1', ['as' => 'obat.delete']);
//Route Pendaftaran
$routes->get('/pendaftaran', 'KelPendaftaranController::index', ['as' => 'pendaftaran.index']);
$routes->get('/pendaftaran/create', 'KelPendaftaranController::create', ['as' => 'pendaftaran.create']);
$routes->post('/pendaftaran/save', 'KelPendaftaranController::save', ['as' => 'pendaftaran.save']);
$routes->get('/pendaftaran/edit/(:num)', 'KelPendaftaranController::edit/$1', ['as' => 'pendaftaran.edit']);
$routes->add('/pendaftaran/update/(:num)', 'KelPendaftaranController::update/$1', ['as' => 'pendaftaran.update']);
$routes->add('/pendaftaran/delete/(:num)', 'KelPendaftaranController::delete/$1', ['as' => 'pendaftaran.delete']);
//Route Pemeriksaan
$routes->get('/pemeriksaan', 'KelPemeriksaanController::index', ['as' => 'pemeriksaan.index']);
$routes->get('/pemeriksaan/create', 'KelPemeriksaanController::create', ['as' => 'pemeriksaan.create']);
$routes->post('/pemeriksaan/save', 'KelPemeriksaanController::save', ['as' => 'pemeriksaan.save']);
$routes->get('/pemeriksaan/edit/(:num)', 'KelPemeriksaanController::edit/$1', ['as' => 'pemeriksaan.edit']);
$routes->add('/pemeriksaan/update/(:num)', 'KelPemeriksaanController::update/$1', ['as' => 'pemeriksaan.update']);
$routes->add('/pemeriksaan/delete/(:num)', 'KelPemeriksaanController::delete/$1', ['as' => 'pemeriksaan.delete']);
//Route Laporan
$routes->get('/laporan', 'KelLaporanController::index', ['as' => 'laporan.index']);
$routes->get('/laporan/create', 'KelLaporanController::create', ['as' => 'laporan.create']);
$routes->post('/laporan/save', 'KelLaporanController::save', ['as' => 'laporan.save']);
$routes->get('/laporan/edit', 'KelLaporanController::edit', ['as' => 'laporan.edit']);
$routes->add('/laporan/update/(:num)', 'KelLaporanController::update/$1', ['as' => 'laporan.update']);
$routes->add('/laporan/delete/(:num)', 'KelLaporanController::delete/$1', ['as' => 'laporan.delete']);
// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'DashboardController::index', ['as' => 'dashboard']);



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
