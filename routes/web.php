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

use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contractUs')->name('contact');
Route::get('/admin', 'HomeController@admin')->name('admin');

Route::resource('products', 'ProductController')->name('get', 'products');
Route::resource('users', 'UserController')->name('get', 'users');
Route::resource('roles', 'RoleController')->name('get', 'roles');