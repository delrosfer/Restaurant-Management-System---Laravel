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

Route::get('/employee', 'EmployeeController@home')->name('home');

Route::get('/employee/orders', 'EmployeeController@showOrders')->name('showOrders');

Route::get('/employee/orders/id/edit', 'EmployeeController@editOrder')->name('editOrder');

Route::get('/employee/orders/id/delete', 'EmployeeController@deleteOrder')->name('deleteOrder');

Route::get('/employee/orders/new', 'EmployeeController@newOrder')->name('newOrder');

Route::get('/employee/tables', 'EmployeeController@showTables')->name('showTables');
