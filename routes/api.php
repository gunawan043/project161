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

Route::get('/Customers', 'CustomersController@index');
Route::get('/Customers/{customers}', 'CustomersController@show');
Route::post('/Customers', 'CustomersController@store');
Route::delete('/Customers/{customers}', 'CustomersController@destroy');
Route::post('/Customers/{customers}', 'CustomersController@update');
