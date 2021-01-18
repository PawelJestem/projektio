<?php

use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ZamowieniaController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ContractorController;
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
Route::get('getOrderWithNip/{nip}', ['uses' => 'App\Http\Controllers\OrderController@getOrderWithNip']);
Route::resource('order', OrderController::class);
Route::resource('order_item', OrderItemController::class);
Route::resource('contractor', ContractorController::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
