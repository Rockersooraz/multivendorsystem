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
    return view('welcome');
});

// Route::resource('/category','Category\CategoryController');
Route::resource('/home' ,'HomeController');


//admin related routes
Route::resource('/category','Category\CategoryController');
Route::get('admin/merchant/detail','admin\AdminController@index')->name('admin.merchant.detail');

 

Auth::routes();