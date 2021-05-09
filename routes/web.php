<?php

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

/* Route::get('/', function () {
    return view('index');
}); */

Route::get('/home', function () {
    return view('home');
});

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');

Route::get('/', 'App\Http\Controllers\MenuController@menu');

//ads
Route::get('/ads/create', 'App\Http\Controllers\AdvertisementController@create')->name('ads.create')->middleware('auth');
Route::post('/ads/store', 'App\Http\Controllers\AdvertisementController@store')->middleware('auth')->name('ads.store');
Route::get('/ads', 'App\Http\Controllers\AdvertisementController@index')->name('ads.index')->middleware('auth');
Route::get('/ads/{id}/edit', 'App\Http\Controllers\AdvertisementController@edit')->name('ads.edit')->middleware('auth');
Route::put('/ads/{id}/update', 'App\Http\Controllers\AdvertisementController@update')->name('ads.update')->middleware('auth');
Route::delete('/ads/{id}/delete', 'App\Http\Controllers\AdvertisementController@destroy')->name('ads.destroy')->middleware('auth');

// User profile
Route::get('/profile', 'App\Http\Controllers\ProfileController@index')->name('profile')->middleware('auth');
Route::post('/profile', 'App\Http\Controllers\ProfileController@updateProfile')->name('update.profile')->middleware('auth');

// ADMIN
Route::group(['prefix'=>'auth','middleware'=>'admin'], function() {
    Route::get('/', function () {
        return view('backend.admin.index');
    });
    Route::resource('/category', 'App\Http\Controllers\CategoryController');
    Route::resource('/subcategory', 'App\Http\Controllers\SubcategoryController');
    Route::resource('/childcategory', 'App\Http\Controllers\ChildcategoryController');
    
    //admin listing
    Route::get('/allads','App\Http\Controllers\AdminListingController@index')->name('all.ads');
});

// User ads
Route::get('/ads/{userId}/view','App\Http\Controllers\FrontendController@viewUserAds')->name('show.user.ads');

// Frontend
Route::get('/product/{categorySlug}', 'App\Http\Controllers\FrontendController@findBasedOnCategory')->name('category.show');
Route::get('/product/{categorySlug}/{subcategorySlug}', 'App\Http\Controllers\FrontendController@findBasedOnSubcategory')->name('subcategory.show');
Route::get('/product/{categorySlug}/{subcategorySlug}/{childcategorySlug}', 'App\Http\Controllers\FrontendController@findBasedOnChildcategory')->name('childcategory.show');
Route::get('/products/{id}/{slug}', 'App\Http\Controllers\FrontendController@show')->name('product.view');

// Message
Route::post('/send/message','App\Http\Controllers\SendMessageController@store')->middleware('auth');
Route::get('messages','App\Http\Controllers\SendMessageController@index')->middleware('auth');
Route::get('/users','App\Http\Controllers\SendMessageController@chatWithThisUser');
Route::get('/message/user/{id}','App\Http\Controllers\SendMessageController@showMessages');
Route::post('/start-conversation','App\Http\Controllers\SendMessageController@startConversation');

//Login with facebook
Route::get('auth/facebook', 'App\Http\Controllers\SocialLoginController@facebookRedirect');
Route::get('auth/facebook/callback', 'App\Http\Controllers\SocialLoginController@loginWithFacebook');

//Report this ad
route::post('/report-this-ad','App\Http\Controllers\FraudController@store')->name('report.ad');