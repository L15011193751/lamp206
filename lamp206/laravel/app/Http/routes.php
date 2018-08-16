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











//后台分类路由
Route::resource('admin/cate','admin\CatesController');
//轮播图路由
Route::resource('admin/lunbo','admin\LunboController');









// 商品浏览
Route::resource('/admin/goods','Admin\GoodsController');


//后台用户路由
Route::resource('/admin/user','Admin\UserController');

