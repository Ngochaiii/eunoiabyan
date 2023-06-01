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
            Route::get('/brand_Eunoia', [DetailBlogController::class, 'brand_Eunoia'])->name('blogs.news.brand_Eunoia');
            Route::get('/kidmodel_vadete', [DetailBlogController::class, 'kidmodel_vadete'])->name('blogs.news.kidmodel_vadete');
            Route::get('/show_fashition', [DetailBlogController::class, 'show_fashition'])->name('blogs.news.show_fashition');
            Route::get('/Eunoia_Wonderland', [DetailBlogController::class, 'Eunoia_Wonderland'])->name('blogs.news.Eunoia_Wonderland');
            Route::get('/ceo_new', [DetailBlogController::class, 'ceo_new'])->name('blogs.news.ceo_new');
            Route::get('/ceo_VLA', [DetailBlogController::class, 'ceo_VLA'])->name('blogs.news.ceo_VLA');
            Route::get('/BST_black', [DetailBlogController::class, 'BST_black'])->name('blogs.news.BST_black');
            Route::get('/eunoia_by_AN', [DetailBlogController::class, 'eunoia_by_AN'])->name('blogs.news.eunoia_by_AN');
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
