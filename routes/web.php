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

// ADMIN

Route::group(['prefix'=>'auth'], function() {
    Route::resource('/category', 'App\Http\Controllers\CategoryController');
    Route::resource('/subcategory', 'App\Http\Controllers\SubcategoryController');
    Route::resource('/childcategory', 'App\Http\Controllers\ChildcategoryController');
});

