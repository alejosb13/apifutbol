<?php

use Illuminate\Http\Request;
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

Route::post('register', 'JWTAuthController@register');
Route::post('login', 'JWTAuthController@login');

// Route::group([
//     'middleware' => 'auth:api',
//     'prefix' => 'auth'
// ], function ($router) {
//     Route::post('logout', 'JWTAuthController@logout');
//     Route::post('refresh', 'JWTAuthController@refresh');
//     Route::get('profile', 'JWTAuthController@profile');

// });



Route::middleware(
    [
        'auth:api',         // jwt autenticate
        'role:admin,caja'   // role
    ]
    )
    ->prefix('auth')->group(function () {
    Route::post('logout', 'JWTAuthController@logout');
    Route::post('refresh', 'JWTAuthController@refresh');
    Route::get('profile', 'JWTAuthController@profile');
});
