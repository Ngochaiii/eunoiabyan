<?php

use App\Http\Controllers\Web\WebController;
use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\Web\CollectionController;
use App\Http\Controllers\Web\IntroduceController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\DetailBlogController;
use App\Http\Controllers\Web\SupportController;
use Illuminate\Support\Facades\Route;

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
Route::group(['prefix' => ''], function () {
    Route::get('/', [WebController::class, 'index'])->name('home');
    
    Route::group(['prefix' => 'blogs'], function () {
        Route::get('/news', [BlogController::class, 'index'])->name('blogs.news');
        Route::get('/new-2', [BlogController::class, 'moreNew'])->name('blogs.newsMore');
        Route::group(['prefix' => 'news'], function () {
            Route::get('/maika', [DetailBlogController::class, 'maika'])->name('blogs.news.maika');
            Route::get('/kidmodel', [DetailBlogController::class, 'kidmodel'])->name('blogs.news.kidmodel');
        });
    });
    Route::group(['prefix' => 'introduce'], function () {
        Route::get('/', [IntroduceController::class, 'index'])->name('introduce');
    });
    Route::group(['prefix' => 'collection'], function () {
        Route::get('/nangtho', [CollectionController::class, 'index'])->name('collection.nangtho');
        Route::get('/black', [CollectionController::class, 'more'])->name('collection.black');
        Route::get('/all', [CollectionController::class, 'all'])->name('collection.all');
    });
    Route::group(['prefix' => 'contact'], function () {
        Route::get('/', [ContactController::class, 'index'])->name('contact');
    });
    Route::group(['prefix' => 'cart'], function () {
        Route::get('/', [CartController::class, 'index'])->name('cart');
    });
    Route::group(['prefix' => 'support'], function () {
        Route::get('/size', [SupportController::class, 'index'])->name('support.size');
        Route::get('/privaryPolicy', [SupportController::class, 'privacyPolicy'])->name('support.privaryPolicy');
        Route::get('/payment', [SupportController::class, 'paymentPolicy'])->name('support.payment');
        Route::get('/shippingPolicy', [SupportController::class, 'shippingPolicy'])->name('support.shippingPolicy');
        Route::get('/returnPolicy', [SupportController::class, 'returnPolicy'])->name('support.returnPolicy');
        Route::get('/termsOfService', [SupportController::class, 'termsOfService'])->name('support.termsOfService');
    });
});
