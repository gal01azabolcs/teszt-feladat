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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/apitest',function(){
    return ['message' => 'ghello'];
});*/
Route::get('transactions','TransactionController@index');
Route::get('transaction/{id}','TransactionController@show');
Route::post('transaction','TransactionController@store');
Route::put('transaction,TransactionController@store');
Route::delete('transaction/{id}','TransactionController@destroy');
