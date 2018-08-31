<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// DB::listen(function($sql, $bindings, $time){
//      //写入sql
//      dump($sql);
// });
Route::get('/', function () {
    return view('welcome');
});

//后台首页
Route::get('/admin','Admin\IndexController@index');

//后台分类路由
Route::resource('admin/cate','admin\CatesController');
//轮播图路由
Route::resource('admin/lunbo','admin\LunboController');
//类别
Route::resource('admin/cate','admin\CatesController');


// 前台商品列表
Route::resource('/home/goods','home\GoodsController');
// 购物车
Route::get('/home/ajaxcart','home\CartController@ajaxcart');
Route::resource('/home/cart','home\CartController');
// 前台订单
Route::get('/home/ajaxorder','home\OrdersController@aorder');
Route::resource('/home/orders','home\OrdersController');

//后台用户路由
// Route::resource('/admin/user','Admin\UserController');
//后台用户路由
Route::resource('/admin/user','Admin\UserController');
// 商品浏览
Route::resource('/admin/goods','Admin\GoodsController');
// 订单
Route::resource('/admin/orders','Admin\OrdersController');



