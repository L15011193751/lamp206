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

//前台路由
//前台首页
Route::get('/','home\IndexController@index');
//搜索分页
Route::get('/home/goods','home\IndexController@search');
//前台登录
Route::get('/home/login','home\LoginController@login');
Route::post('/home/index','home\LoginController@dologin');
//后台路由
//后台首页
Route::get('/admin/index','Admin\IndexController@index');
//后台用户路由
Route::resource('/admin/user','Admin\UserController');
//中间件
Route::group(['middleware'=>'/admin/login'],function(){
	Route::resource('/admin/user/create','Admin\UserController');
	Route::resource('/admin/user','Admin\UserController');
});
//中间件
 Route::get('/admin/login','Admin\LoginController@login');
 //生成验证码
Route::get('/code','Admin\LoginController@verify');
//登录提交
Route::post('/admin/index','Admin\LoginController@postDologin');

