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
    return view('welcome');
});
//后台的商品
Route::prefix('goods')->group(function () {
    Route::get('add','Admin\ShopGoodsController@add');
    Route::post('add_do','Admin\ShopGoodsController@add_do');
    Route::get('list','Admin\ShopGoodsController@list');
    Route::get('delete/{gid}','Admin\ShopGoodsController@destroy');
    Route::get('update/{gid}','Admin\ShopGoodsController@update');
    Route::post('update_do/{gid}','Admin\ShopGoodsController@update_do');
});

