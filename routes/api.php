<?php

use Illuminate\Http\Request;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

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
Route::post('register', 'App\Http\Controllers\UserController@register');
Route::post('login', 'App\Http\Controllers\UserController@authenticate');

Route::group(['middleware' => ['jwt.verify']], function() {

    Route::get('user', 'App\Http\Controllers\UserController@getAuthenticatedUser');

// Articulos
    Route::get('articles', 'App\Http\Controllers\ArticleController@index');
    Route::get('articles/{article}', 'App\Http\Controllers\ArticleController@show');
    Route::post('articles', 'App\Http\Controllers\ArticleController@store');
    Route::put('articles/{article}', 'App\Http\Controllers\ArticleController@update');
    Route::delete('articles/{article}', 'App\Http\Controllers\ArticleController@delete');
// Proveedores
    Route::get('suppliers', 'App\Http\Controllers\SupplierController@index');
    Route::get('suppliers/{supplier}', 'App\Http\Controllers\SupplierController@show');
    Route::post('suppliers', 'App\Http\Controllers\SupplierController@store');
    Route::put('suppliers/{supplier}', 'App\Http\Controllers\SupplierController@update');
    Route::delete('suppliers/{supplier}', 'App\Http\Controllers\SupplierController@delete');
// Clientas
    Route::get('customers', 'App\Http\Controllers\CustomerController@index');
    Route::get('customers/{customer}', 'App\Http\Controllers\CustomerController@show');
    Route::post('customers', 'App\Http\Controllers\CustomerController@store');
    Route::put('customers/{customer}', 'App\Http\Controllers\CustomerController@update');
    Route::delete('customers/{customer}', 'App\Http\Controllers\CustomerController@delete');
// Servicios
    Route::get('services', 'App\Http\Controllers\ServiceController@index');
    Route::get('services/{service}', 'App\Http\Controllers\ServiceController@show');
    Route::post('services', 'App\Http\Controllers\ServiceController@store');
    Route::put('services/{service}', 'App\Http\Controllers\ServiceController@update');
    Route::delete('services/{service}', 'App\Http\Controllers\ServiceController@delete');

});

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
