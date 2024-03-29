<?php

use Illuminate\Http\Request;

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

Route::resource('product', 'ProductController');

Route::get('product', 'ProductController@index');
Route::get('/product/{id}', 'ProductController@show');
Route::post('product', 'ProductController@create');
Route::put('/product/{id}', 'ProductController@update');
Route::delete('/product/{id}', 'ProductController@delete');