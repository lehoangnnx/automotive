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

Auth::routes();

//Clear configurations:
Route::get('/config-clear', function() {
    $status = Artisan::call('config:clear');
    return '<h1>Configurations cleared</h1>';
});

//Clear cache:
Route::get('/cache-clear', function() {
    $status = Artisan::call('cache:clear');
    return '<h1>Cache cleared</h1>';
});

//Clear configuration cache:
Route::get('/config-cache', function() {
    $status = Artisan::call('config:cache');
    return '<h1>Configurations cache cleared</h1>';
});
// Clear config-cache. Config cache
Route::get('/clear', function() {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    return '<h1>Done</h1>';
});
Route::get('/', 'HomeController@index')->name('home');
Route::get('/detail/{id}', 'DetailController@index')->name('detail');
Route::post('/send-contact', 'HomeController@sendContact')->name('sendContact');
Route::get('/category/{id}', 'HomeController@productCategory')->name('productCategory');
Route::get('/intro', 'HomeController@goIntro')->name('goIntro');
Route::get('/category/99', 'HomeController@getOldCar')->name('getOldCar');
Route::get('/contact-to', 'HomeController@goContact')->name('contactTo');
Route::get('/test-drive-car', 'HomeController@goTestDriveCar')->name('goTestDriveCar');

Route::get('/admin', 'Admin\DashboardController@index')->name('admin');
Route::resource('admin/category', 'Admin\CategoryController');
Route::resource('admin/product', 'Admin\ProductController');
Route::resource('admin/contact', 'Admin\ContactController');

