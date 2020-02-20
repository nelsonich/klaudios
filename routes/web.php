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

Auth::routes();

Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::group([
    'middleware' => 'auth',
], function () {

    Route::group(['prefix' => "home"], function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/item/{id}', 'HomeController@newsItem');
    });
    
    // SuperAdmin
    Route::group(['prefix' => "dashboard",'middleware' => 'checkAdmin'], function () {
        Route::get('/', 'Dashboard\DashboardController@index');

        // News
        Route::group(['prefix' => "news"], function () {
            Route::get('/', 'Dashboard\DashboardController@getNews');
            Route::post('/add', 'Dashboard\DashboardController@addNews')->name('add-news');
            Route::post('/edit', 'Dashboard\DashboardController@editNews')->name('edit-news');
            Route::post('/delete', 'Dashboard\DashboardController@deleteNews')->name('delete-news');
        });
    });
});