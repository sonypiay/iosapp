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

Route::get('/listitems', 'Api\BarangApiController@listitems');
Route::get('/getitems/{id}', 'Api\BarangApiController@getitems');
Route::post('/add/items', 'Api\BarangApiController@store');
Route::put('/edit/items/{id}', 'Api\BarangApiController@update');
Route::delete('/delete/items/{id}', 'Api\BarangApiController@destroy');
