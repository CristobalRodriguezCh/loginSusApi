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

Route::view('login','login.login')->name('loginView')->middleware('guest');
Route::view('register','login.register')->name('registerView')->middleware('guest');
Route::view('home','home')->name('home')->middleware('auth:web');
Route::view('profile','profile.profile')->name('profile')->middleware('auth:web');

Route::post('login','App\Http\Controllers\LoginCw@login')->name('login')->middleware('guest');
Route::post('logout','App\Http\Controllers\LoginCw@logout')->name('logout')->middleware('auth:web');
Route::post('edit','App\Http\Controllers\LoginCw@edit')->name('edit')->middleware('auth:web');
Route::post('register','App\Http\Controllers\loginCw@register')->name('register')->middleware('guest');

/**suscripciones*/
Route::get('subscriptions','App\Http\Controllers\suscripcionCw@index')->name('MiSubscrips')->middleware('auth:web');

/**planes */

Route::get('plans','App\Http\Controllers\planCw@index')->name('planes')->middleware('auth:web');
Route::get('suscripcionPlan/{plan}','App\Http\Controllers\suscripcionCw@store')->middleware('auth:web');