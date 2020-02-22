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
use Illuminate\Support\Facades\Route;

Route::get('/', 'StaticPages\HomePageController@index');
Route::post('/request-quote', 'StaticPages\HomePageController@requestQuote')->name('request-quote');

Auth::routes();

Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::group([
    'middleware' => 'auth',
], function () {

    Route::group(['prefix' => "home"], function () {
        Route::get('/', 'HomeController@index')->name('home');
        /* News */
        Route::get('/item/{id}', 'HomeController@newsItem');
        Route::post('/like-news', 'HomeController@likeNews')->name('like-news');
        Route::post('/comments-news', 'HomeController@commentsNews')->name('comments-news');
        Route::post('/create-comment-news', 'HomeController@createCommentNews')->name('create-comment-news');

        Route::get('/profile', 'HomeController@profile')->name('profile');
        Route::post('/edit-profile', 'HomeController@editProfile')->name('edit-profile');
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

        // Home
        //About
        Route::group(['prefix' => "about"], function () {
            Route::get('/', 'Dashboard\DashboardController@getAbout');
            Route::post('/edit', 'Dashboard\DashboardController@editAbout')->name('edit-about');
        });

        // Static Information
        Route::group(['prefix' => "static-information"], function () {
            Route::get('/', 'Dashboard\DashboardController@getStaticInfo');
            Route::post('/edit', 'Dashboard\DashboardController@editStaticInformation')->name('edit-static-information');
        });
    });
});
