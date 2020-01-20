<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin','middleware' => ['auth']], function () {

    Route::resource('/category',            'CategoryController');
    Route::resource('/subCategory',         'SubCategoryController');
    Route::resource('/subSubCategory',      'SubSubCategoryController');
    Route::resource('/article',             'ArticleController');
    Route::get('/customer',					'CustomerController@index');

});