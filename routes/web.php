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

Route::get('/admin/items/{id}/edit', 'AdminController@editItem')->name('admin.editItem');
Route::post('/admin/items/{id}/edit', 'AdminController@updateItem');

Route::get('/admin/items/{id}/remove', 'AdminController@removeItem')->name('admin.removeItem');
Route::post('/admin/items/{id}/remove', 'AdminController@deleteItem');

Route::get('/admin/categories', 'AdminController@showCategories')->name('admin.showCategories');

Route::get('/admin/categories/new', 'AdminController@newCategory')->name('admin.newCategory');
Route::post('/admin/categories/new', 'AdminController@createCategory');

Route::get('/admin/categories/{id}/edit', 'AdminController@editCategory')->name('admin.editCategory');

Route::post('/admin/categories/{id}/edit', 'AdminController@updateCategory');

Route::get('/admin/categories/{id}/remove', 'AdminController@removeCategory')->name('admin.removeCategory');
Route::post('/admin/categories/{id}/remove', 'AdminController@deleteCategory');
