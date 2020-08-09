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

Route::get('products', 'ProductController@index');
Route::get('products/{id}', 'ProductController@show');
Route::put('products/{id}', 'ProductController@update');
Route::post('products', 'ProductController@store');
Route::delete('products/{id}', 'ProductController@destroy');

Route::get('users', 'UserController@index');
Route::get('users/{id}', 'UserController@show');
Route::put('users/{id}', 'UserController@update');
Route::post('users/register', 'UserController@store');
Route::delete('users/{id}', 'UserController@destroy');
Route::post('users/login', 'UserController@userLogin');

Route::get('categories', 'CategoryController@index');
Route::get('categories/{id}', 'CategoryController@show');
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