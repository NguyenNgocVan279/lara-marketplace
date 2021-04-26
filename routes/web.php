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

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/auth', function () {
    return view('backend.admin.index');
});



Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');

// Admin
/* Route::get('/auth/category', function () {
    return view('backend.category.create');
}); */

Route::group(['prefix'=>'auth'], function() {
    Route::resource('/category', 'App\Http\Controllers\CategoryController');
});