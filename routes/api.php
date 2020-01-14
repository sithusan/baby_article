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


Route::group(['middleware' => 'apiMiddleware'], function () {

    Route::get('/category',   'Api\ApiController@category');
    Route::get('/subCategory','Api\ApiController@subCategory');
    Route::get('/subSubCategory','Api\ApiController@subSubCategory');
    Route::get('/article',       'Api\ApiController@article');
    Route::post('/customer/register','Api\AuthController@register');
    Route::post('/customer/login',   'Api\AuthController@login');
});
