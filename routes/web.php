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

Route::get('/', function () {
  return view('home');
});

Route::post('/add_new_visitor', 'VisitorsController@add_new');

Route::prefix('admin')->group(function () {
  Route::get('/login', 'Admin\LoginController@base_show')->name('adm_login');
  Route::post('/login', 'Admin\LoginController@auth');
  Route::get('/visitors', 'Admin\VisitorsListController@show');
  Route::get('/', 'Admin\BaseController@show')->name('adm_base');
});