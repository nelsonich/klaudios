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

use App\Models\Languages;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

View::composer('layouts.app', function($view)
{
    $languages = Languages::where('status', 1)->get();
    $view->with(
        [
            'languages' => $languages,
        ]);
});


Route::get('/', 'StaticPages\HomePageController@index');
Route::get('/lang/{locale}', 'StaticPages\HomePageController@lang');
Route::get('/faq', 'StaticPages\HomePageController@faq');
Route::get('/coronavirus', 'StaticPages\HomePageController@coronavirus');
Route::get('/terms', 'StaticPages\HomePageController@terms');
Route::get('/privacy', 'StaticPages\HomePageController@privacy');
Route::get('/cookies', 'StaticPages\HomePageController@cookies');
Route::post('/request-quote', 'StaticPages\HomePageController@requestQuote')->name('request-quote');

Auth::routes();

Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::group([
    'middleware' => 'auth',
], function () {

    Route::group(['prefix' => "home"], function () {
        Route::get('/', 'HomeController@index')->name('home');

        /* Chat */
        Route::get('/chat', 'HomeController@getUsers');
        Route::get('/message/{id}', 'HomeController@getMessages')->name('message');
        Route::post('message', 'HomeController@sendMessage');

        /* News */
        Route::get('/item/{id}', 'HomeController@newsItem');
        Route::post('/like-news', 'HomeController@likeNews')->name('like-news');
        Route::post('/comments-news', 'HomeController@commentsNews')->name('comments-news');
        Route::post('/create-comment-news', 'HomeController@createCommentNews')->name('create-comment-news');
        Route::post('/like-comment-news', 'HomeController@likeCommentNews')->name('like-comment-news');
        Route::post('/get-news-name', 'HomeController@getNewsName')->name('get-news-name');
        Route::get('/search-news', 'HomeController@searchNews')->name('search-news');

        /* Change Profile Settings */
        Route::get('/profile', 'HomeController@profile')->name('profile');
        Route::post('/edit-profile', 'HomeController@editProfile')->name('edit-profile');
        Route::post('/edit-profile-password', 'HomeController@editProfilePassword')->name('edit-profile-password');

        /* Game Accept Modal */
        Route::post('/acceptNextGameModal', 'Game\GameController@acceptNextGameModal')->name('acceptNextGameModal');

        /* Games */
        Route::get('/games/{complexity_id}', 'Game\GameController@getGamesCategories');
        Route::get('/game-category/{game_category_id}', 'Game\GameController@getGames');
        Route::post('/select-answer', 'Game\GameController@selectAnswer')->name('select-answer');
        Route::get('/rating', 'Game\GameController@getRating');
    });

    // SuperAdmin
    Route::group(['prefix' => "dashboard",'middleware' => 'checkAdmin'], function () {
        Route::get('/', 'Dashboard\DashboardController@index');
        Route::post('/edit-userData', 'Dashboard\DashboardController@editUserData')->name('edit-userData');

        // News
        Route::group(['prefix' => "news"], function () {
            Route::get('/', 'Dashboard\DashboardController@getNews');
            Route::post('/add', 'Dashboard\DashboardController@addNews')->name('add-news');
            Route::post('/edit', 'Dashboard\DashboardController@editNews')->name('edit-news');
            Route::post('/delete', 'Dashboard\DashboardController@deleteNews')->name('delete-news');
        });

        Route::group(['prefix' => "games"], function () {
            Route::get('/', 'Dashboard\DashboardController@getGames');
            Route::post('/add', 'Dashboard\DashboardController@addGame')->name('add-game');
            Route::post('/edit', 'Dashboard\DashboardController@editGame')->name('edit-game');
            Route::post('/change-right-answer', 'Dashboard\DashboardController@changeRightAnswer')->name('change-right-answer');
        });

        Route::group(['prefix' => "change-games-answers"], function () {
            Route::get('/', 'Dashboard\DashboardController@getChangedGames');
            Route::post('/edit/{id?}', 'Dashboard\DashboardController@editChangedGame')->name('edit-changed-game');
        });

        Route::group(['prefix' => "games-categories"], function () {
            Route::get('/', 'Dashboard\DashboardController@getGameCategory');
            Route::post('/add', 'Dashboard\DashboardController@addGameCategory')->name('add-gameCategory');
            Route::post('/edit', 'Dashboard\DashboardController@editGameCategory')->name('edit-gameCategory');
            Route::post('/edit-category-status', 'Dashboard\DashboardController@editGameCategoryStatus')->name('edit-category-status');
        });

        // FAQ
//        Route::group(['prefix' => "faq"], function () {
//            Route::get('/', 'Dashboard\DashboardController@getFaq');
//            Route::post('/add', 'Dashboard\DashboardController@addFaq')->name('add-faq');
//            Route::post('/edit', 'Dashboard\DashboardController@editFaq')->name('edit-faq');
//            Route::post('/delete', 'Dashboard\DashboardController@deleteFaq')->name('delete-faq');
//        });

        // Home
        //About
        Route::group(['prefix' => "about"], function () {
            Route::get('/', 'Dashboard\DashboardController@getAbout');
            Route::post('/edit/{lang?}', 'Dashboard\DashboardController@editAbout')->name('edit-about');
        });

        // Static Information
        Route::group(['prefix' => "static-information"], function () {
            Route::get('/', 'Dashboard\DashboardController@getStaticInfo');
            Route::post('/edit', 'Dashboard\DashboardController@editStaticInformation')->name('edit-static-information');
        });

        // Features
        Route::group(['prefix' => "features"], function () {
            Route::get('/', 'Dashboard\DashboardController@getFeatures');
            Route::post('/edit/{lang?}', 'Dashboard\DashboardController@editFeatures')->name('edit-features');
        });

        // Request Quotes
        Route::group(['prefix' => "request-quote"], function () {
            Route::get('/', 'Dashboard\DashboardController@getRequestQuote');
        });

        // Languages
        Route::group(['prefix' => "languages"], function () {
            Route::get('/', 'Dashboard\DashboardController@getLanguages');
            Route::post('/change-lang-status', 'Dashboard\DashboardController@editLangStatus')->name('change-lang-status');
        });

        //Terms
        Route::group(['prefix' => "terms"], function () {
            Route::get('/terms-and-conditions', 'Dashboard\DashboardController@getTerms');
            Route::get('/privacy-policy', 'Dashboard\DashboardController@getPrivacy');
            Route::get('/cookies-policy', 'Dashboard\DashboardController@getCookies');
            Route::post('/edit-terms', 'Dashboard\DashboardController@editTerms')->name('edit-terms');
            Route::post('/edit-privacy', 'Dashboard\DashboardController@editPrivacy')->name('edit-privacy');
            Route::post('/edit-cookies', 'Dashboard\DashboardController@editCookies')->name('edit-cookies');
        });
    });

    Route::group(['prefix' => "paypal"], function () {
        Route::get('/', 'PayPalController@paypal')->name('paypal');
        Route::post('/payment-with-paypal', 'PayPalController@payWithpaypal')->name('payment-with-paypal');
        Route::get('/status', 'PayPalController@getPaymentStatus')->name('status');
    });

});
