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

/* Encryption keys generated successfully.
Personal access client created successfully.
Client ID: 1
Client Secret: ACDsKKoB0ylDnsMQ6YUB3t6mgxjs5iPF8GATdUzL
Password grant client created successfully.
Client ID: 2
Client Secret: PQ3v1GipcCe8e6oEAyvkvgdE0IE7siWTUOGanS6B */

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::post('purchase', 'PurchaseController')->middleware('auth:api');