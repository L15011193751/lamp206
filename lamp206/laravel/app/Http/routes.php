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

Route::get('/', function () {
    return view('welcome');
});

//后台首页
Route::get('/admin','Admin\IndexController@index');


























// 前台商品列表
Route::resource('home/goods','home\GoodsController');
// 购物车
Route::resource('home/cart','home\CartController');
// 前台订单
Route::resource('home/orders','home\OrdersController');



//后台用户路由
// Route::resource('/admin/user','Admin\UserController');
//后台用户路由
Route::resource('/admin/user','Admin\UserController');




// 商品浏览
Route::resource('/admin/goods','Admin\GoodsController');

//上架下架
// Route::get('/admin/goods','Admin\GoodsController@up');
// Route::get('/admin/goods','Admin\GoodsController@down');

// 订单
Route::resource('/admin/orders','Admin\OrdersController');




//后台类别
Route::resource('/admin/cate','admin\CatesController');
//后台轮播
Route::resource('/admin/lunbo','admin\LunboController');

//前台首页
Route::get('','home\FirstController@index');

//后台广告
Route::resource('/admin/adver','admin\AderController');
