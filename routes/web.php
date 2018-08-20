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

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@verify');

//employee routes
Route::get('/employee', 'EmployeeController@home')->name('employee.home');

Route::get('/employee/orders', 'EmployeeController@showOrders')->name('employee.showOrders');

Route::get('/employee/orders/id/edit', 'EmployeeController@editOrder')->name('employee.editOrder');

Route::get('/employee/orders/id/delete', 'EmployeeController@deleteOrder')->name('employee.deleteOrder');

Route::get('/employee/orders/new', 'EmployeeController@newOrder')->name('employee.newOrder');

Route::get('/employee/tables', 'EmployeeController@showTables')->name('employee.showTables');


//admin routes
Route::get('/admin', 'AdminController@home')->name('admin.home');

Route::get('/admin/items', 'AdminController@showItems')->name('admin.showItems');

Route::get('/admin/items/new', 'AdminController@newItem')->name('admin.newItem');
Route::post('/admin/items/new', 'AdminController@storeItem')->name('admin.storeItem');

Route::get('/admin/items/id/edit', 'AdminController@editItem')->name('admin.editItem');

Route::get('/admin/items/id/delete', 'AdminController@deleteItem')->name('admin.deleteItem');
