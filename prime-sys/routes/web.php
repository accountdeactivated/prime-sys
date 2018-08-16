<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Prime System Web Application Routes 
//Done By: PrivateAirJET

//Reference Implementation of the Core Data
// Route::get('/', function () {return view('login_view');});
// Route::get('/dashboard', function () {return view('dashboard');});
// Route::get('/service', function () {return view('service');});
// Route::get('/material', function () {return view('material');});
// Route::get('/client', function () {return view('client');});
// Route::get('/user', function () {return view('user');});
// Route::get('/car', function () {return view('car');});
// Route::get('/carmaker', function () {return view('carmaker');});

//Implementation of Resource Routes
//Done By: PrivateAirJET
Route::resource('service', 'ServicesController');
Route::resource('car', 'CarsController');
Route::resource('carmaker', 'CarMakersController');
Route::resource('order', 'OrdersController');
Route::resource('orderDetail', 'OrderDetailsController');
Route::resource('supplier', 'SuppliersController');
Route::resource('supplierOrder', 'SupplierOrdersController');
Route::resource('supplierDetail', 'SupplierOrderDetailController');
Route::resource('clients', 'ClientsController');
Route::resource('account', 'AccountsController');
Route::resource('administrator', 'AdministratorsController');
Route::resource('dashboard', 'DashboardsController');

//jeremy dog
Route::resource('materials', "MaterialsController");

//Done By: nandarionndr1
Route::resource('/', 'IndexController');
Route::post('logd', 'LoginController@store')->name('logd');
Route::post('upd', 'ClientsController@create')->name('upd');

Route::resource('repairOrder', 'RepairOrdersController');
Route::resource('logout', 'LogoutController');
Route::post('/supplier/create', 'SuppliersController@create')->name('supplier.create');
Route::post('getPOdetails','SupplierOrdersController@ajaxGetPOdetails');

//Reports Route
Route::resource('reports', 'ReportsController');
Route::resource('procreport', 'ReportsController');
Route::resource('invtreport', 'ReportsController');
Route::resource('salsreport', 'ReportsController');

//Schedule Route
Route::resource('schedule', 'ScheduleController');
//Live AJAX Update
//Done By: PrivateAirJET
Route::post('liveAddService','ServiceAddLiveUpdateController@liveUpdate');
Route::post('liveEditService','ServiceEditLiveUpdateController@liveUpdate');


//Auth Route
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
