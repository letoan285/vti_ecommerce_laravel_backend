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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products', 'ProductController@index')->middleware('auth:api');
Route::get('products/{id}', 'ProductController@show');
Route::put('products/{id}', 'ProductController@update');
Route::post('products', 'ProductController@store');
Route::delete('products/{id}', 'ProductController@destroy');



Route::get('categories', 'CategoryController@index');
Route::get('categories/{id}', 'CategoryController@show');
Route::get('categories/{id}/products', 'CategoryController@getProductsByCategoryId');
Route::put('categories/{id}', 'CategoryController@update');
Route::post('categories', 'CategoryController@store');
Route::delete('categories/{id}', 'CategoryController@destroy');

Route::get('carts', 'CartController@index');
Route::get('carts/{id}', 'CartController@show');
Route::put('carts/{id}', 'CartController@update');
Route::post('carts', 'CartController@store');
Route::delete('carts/{id}', 'CartController@destroy');
Route::get('carts/list/{id}', 'CartController@showCart');
Route::post('carts/add-to-cart', 'CartController@addToCart');

Route::prefix('/users')->group(function(){
    Route::get('/', 'UserController@index')->middleware('auth:api');
    Route::get('/{id}', 'UserController@show');
    Route::put('/{id}', 'UserController@update');
    Route::post('/register', 'UserController@store');
    Route::delete('/{id}', 'UserController@destroy');
    // Route::post('/login', 'UserController@userLogin');
    Route::post('/login', 'AuthController@login');
});
Route::get('/login', function(){
    return view('login');
})->name('login');