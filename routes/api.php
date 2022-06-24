<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('register', 'App\Http\Controllers\LoginC@register');
    Route::post('login',    'App\Http\Controllers\LoginC@login');
    Route::post('logout',   'App\Http\Controllers\LoginC@logout');
    Route::post('refresh',  'App\Http\Controllers\LoginC@refresh');
    Route::post('me',      'App\Http\Controllers\LoginC@me');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'plan'
], function ($router) {
    Route::get('index','App\Http\Controllers\PlanC@index');
    Route::post('store','App\Http\Controllers\PlanC@store');
    Route::put('update/{id}','App\Http\Controllers\PlanC@update');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'suscripcion'
], function ($router) {
    Route::get('index','App\Http\Controllers\PlanC@index');
    Route::post('store','App\Http\Controllers\SuscripcionC@store');
  
});