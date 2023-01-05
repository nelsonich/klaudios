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
use Illuminate\Support\Facades\View;

use App\Models\Languages;
use App\Http\Controllers\StaticPages\HomePageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Game\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PayPalController;

View::composer('layouts.app', function ($view) {
    $languages = Languages::where('status', 1)->get();
    $view->with(
        [
            'languages' => $languages,
        ]
    );
});


Route::get('/', [HomePageController::class, 'index']);
Route::get('/lang/{locale}', [HomePageController::class, 'lang']);
Route::get('/faq', 'StaticPages\HomePageController@faq');
Route::get('/coronavirus', [HomePageController::class, 'coronavirus']);
Route::get('/terms', [HomePageController::class, 'terms']);
Route::get('/privacy', [HomePageController::class, 'privacy']);
Route::get('/cookies', [HomePageController::class, 'cookies']);
Route::post('/request-quote', [HomePageController::class, 'requestQuote'])->name('request-quote');

Auth::routes();

Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::group([
    'middleware' => 'auth',
], function () {

    Route::group(['prefix' => "home"], function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');

        /* Chat */
        Route::get('/chat', [HomeController::class, 'getUsers']);
        Route::get('/message/{id}', [HomeController::class, 'getMessages'])->name('message');
        Route::post('message', [HomeController::class, 'sendMessage']);

        /* News */
        Route::get('/item/{id}', [HomeController::class, 'newsItem']);
        Route::post('/like-news', [HomeController::class, 'likeNews'])->name('like-news');
        Route::post('/comments-news', [HomeController::class, 'commentsNews'])->name('comments-news');
        Route::post('/create-comment-news', [HomeController::class, 'createCommentNews'])->name('create-comment-news');
        Route::post('/like-comment-news', [HomeController::class, 'likeCommentNews'])->name('like-comment-news');
        Route::post('/get-news-name', [HomeController::class, 'getNewsName'])->name('get-news-name');
        Route::get('/search-news', [HomeController::class, 'searchNews'])->name('search-news');

        /* Change Profile Settings */
        Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
        Route::post('/edit-profile', [HomeController::class, 'editProfile'])->name('edit-profile');
        Route::post('/edit-profile-password', [HomeController::class, 'editProfilePassword'])->name('edit-profile-password');
        Route::post('/edit-profile-avatar', [HomeController::class, 'editProfileAvatar'])->name('edit-profile-avatar');

        /* Game Accept Modal */
        Route::post('/acceptNextGameModal', [GameController::class, 'acceptNextGameModal'])->name('acceptNextGameModal');

        /* Games */
        Route::get('/games/{complexity_id}', [GameController::class, 'getGamesCategories']);
        Route::get('/game-category/{game_category_id}', [GameController::class, 'getGames']);
        Route::post('/select-answer', [GameController::class, 'selectAnswer'])->name('select-answer');
        Route::get('/rating', [GameController::class, 'getRating']);
    });

    // SuperAdmin
    Route::group(['prefix' => "dashboard", 'middleware' => 'checkAdmin'], function () {
        Route::get('/', [DashboardController::class, 'index']);
        Route::post('/edit-userData', [DashboardController::class, 'editUserData'])->name('edit-userData');

        // News
        Route::group(['prefix' => "news"], function () {
            Route::get('/', [DashboardController::class, 'getNews']);
            Route::post('/add', [DashboardController::class, 'addNews'])->name('add-news');
            Route::post('/edit', [DashboardController::class, 'editNews'])->name('edit-news');
            Route::post('/delete', [DashboardController::class, 'deleteNews'])->name('delete-news');
        });

        Route::group(['prefix' => "games"], function () {
            Route::get('/', [DashboardController::class, 'getGames']);
            Route::post('/add', [DashboardController::class, 'addGame'])->name('add-game');
            Route::post('/edit', [DashboardController::class, 'editGame'])->name('edit-game');
            Route::post('/change-right-answer', [DashboardController::class, 'changeRightAnswer'])->name('change-right-answer');
        });

        Route::group(['prefix' => "change-games-answers"], function () {
            Route::get('/', [DashboardController::class, 'getChangedGames']);
            Route::post('/edit/{id?}', [DashboardController::class, 'editChangedGame'])->name('edit-changed-game');
        });

        Route::group(['prefix' => "games-categories"], function () {
            Route::get('/', [DashboardController::class, 'getGameCategory']);
            Route::post('/add', [DashboardController::class, 'addGameCategory'])->name('add-gameCategory');
            Route::post('/edit', [DashboardController::class, 'editGameCategory'])->name('edit-gameCategory');
            Route::post('/edit-category-status', [DashboardController::class, 'editGameCategoryStatus'])->name('edit-category-status');
        });

        // FAQ
        // Route::group(['prefix' => "faq"], function () {
        //     Route::get('/', [DashboardController::class, 'getFaq']);
        //     Route::post('/add', [DashboardController::class, 'addFaq'])->name('add-faq');
        //     Route::post('/edit', [DashboardController::class, 'editFaq'])->name('edit-faq');
        //     Route::post('/delete', [DashboardController::class, 'deleteFaq'])->name('delete-faq');
        // });

        //About
        Route::group(['prefix' => "about"], function () {
            Route::get('/', [DashboardController::class, 'getAbout']);
            Route::post('/edit/{lang?}', [DashboardController::class, 'editAbout'])->name('edit-about');
        });

        // Static Information
        Route::group(['prefix' => "static-information"], function () {
            Route::get('/', [DashboardController::class, 'getStaticInfo']);
            Route::post('/edit', [DashboardController::class, 'editStaticInformation'])->name('edit-static-information');
        });

        // Features
        Route::group(['prefix' => "features"], function () {
            Route::get('/', [DashboardController::class, 'getFeatures']);
            Route::post('/edit/{lang?}', [DashboardController::class, 'editFeatures'])->name('edit-features');
        });

        // Request Quotes
        Route::group(['prefix' => "request-quote"], function () {
            Route::get('/', [DashboardController::class, 'getRequestQuote']);
        });

        // Languages
        Route::group(['prefix' => "languages"], function () {
            Route::get('/', [DashboardController::class, 'getLanguages']);
            Route::post('/change-lang-status', [DashboardController::class, 'editLangStatus'])->name('change-lang-status');
        });

        //Terms
        Route::group(['prefix' => "terms"], function () {
            Route::get('/terms-and-conditions', [DashboardController::class, 'getTerms']);
            Route::get('/privacy-policy', [DashboardController::class, 'getPrivacy']);
            Route::get('/cookies-policy', [DashboardController::class, 'getCookies']);
            Route::post('/edit-terms', [DashboardController::class, 'editTerms'])->name('edit-terms');
            Route::post('/edit-privacy', [DashboardController::class, 'editPrivacy'])->name('edit-privacy');
            Route::post('/edit-cookies', [DashboardController::class, 'editCookies'])->name('edit-cookies');
        });
    });

    Route::group(['prefix' => "paypal"], function () {
        Route::get('/', [PayPalController::class, 'paypal'])->name('paypal');
        Route::post('/payment-with-paypal', [PayPalController::class, 'payWithPaypal'])->name('payment-with-paypal');
        Route::get('/status', [PayPalController::class, 'getPaymentStatus'])->name('status');
    });
});
