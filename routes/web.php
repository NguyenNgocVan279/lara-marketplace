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

Route::get('/auth', function () {
    return view('backend.admin.index');
});

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');

Route::get('/', 'App\Http\Controllers\MenuController@menu');

//ads
Route::get('/ads/create', 'App\Http\Controllers\AdvertisementController@create')->name('ads.create')->middleware('auth');
Route::post('/ads/store', 'App\Http\Controllers\AdvertisementController@store')->middleware('auth')->name('ads.store');
Route::get('/ads', 'App\Http\Controllers\AdvertisementController@index')->name('ads.index')->middleware('auth');
Route::get('/ads/{id}/edit', 'App\Http\Controllers\AdvertisementController@edit')->name('ads.edit')->middleware('auth');
Route::put('/ads/{id}/update', 'App\Http\Controllers\AdvertisementController@update')->name('ads.update')->middleware('auth');

// User profile
Route::get('/profile', 'App\Http\Controllers\ProfileController@index')->name('profile')->middleware('auth');
Route::post('/profile', 'App\Http\Controllers\ProfileController@updateProfile')->name('update.profile')->middleware('auth');

// ADMIN
Route::group(['prefix'=>'auth'], function() {
    Route::resource('/category', 'App\Http\Controllers\CategoryController');
    Route::resource('/subcategory', 'App\Http\Controllers\SubcategoryController');
    Route::resource('/childcategory', 'App\Http\Controllers\ChildcategoryController');
});

