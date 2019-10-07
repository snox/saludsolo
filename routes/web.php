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

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    $locale = LaravelLocalization::getCurrentLocale();
    app()->setLocale($locale);

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/contact', 'HomeController@contractUs')->name('contact');
    Route::get('/admin', 'HomeController@admin')->name('admin');

    Route::resource('products', 'ProductController')->name('get', 'products');
    Route::get('products/cate/{id}', 'ProductController@cate')->name('products_cate');

    Route::get('product/categories', 'ProductCategoryController@index')->name('product_category_index');
    Route::post('product/category/locale', 'ProductCategoryController@updateLocale');
});

Route::resource('users', 'UserController')->name('get', 'users');
Route::resource('roles', 'RoleController')->name('get', 'roles');

Route::group(['prefix' => 'admin', 'namespace' => 'Auth', 'middleware' => 'web'], function () {
    
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::get('logout', 'LoginController@logout')->name('logout');
});


// Route::group(['prefix' => '/'], function() {    
//     Route::get('', function() {
//         return view('FrontendContents.index');
//     })->name('home');
//     Route::get('category/{id}-{slug}', 'Frontend\CategoryController@detail')->name('category');
    
// });
