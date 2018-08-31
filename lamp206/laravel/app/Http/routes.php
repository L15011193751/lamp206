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
Route::get('/home/goods/index','home\IndexController@search');
//前台登录
Route::get('/home/login','home\LoginController@login');
Route::post('/dologin','home\LoginController@postDologin');
//前台个人中心
Route::get('/user/center','home\UserController@center');
//个人信息
Route::get('/user/info','home\UserController@info');
//收货地址
Route::get('/user/address','home\UserController@address');
//前台订单管理
Route::get('/order/index','home\OrdersController@index');
Route::get('/order/orderinfo','home\OrdersController@orderinfo');


//后台路由
//后台首页
 



//中间件
Route::group(['middleware'=>'login'],function(){
	Route::get('/admin/index','Admin\IndexController@index');
	Route::resource('/admin/index','Admin\IndexController@index');
	// Route::resource('/admin/user/create','Admin\UserController');
	Route::resource('/admin/user','Admin\UserController');
    Route::get('/admin/loginout','Admin\LoginController@loginout');
	
    
});
Route::get('/admin/login','Admin\LoginController@login');
Route::post('/admin/dologin','Admin\LoginController@dologin');
// Route::get('/admin','Admin\IndexController@index');
	//后台用户路由
 //生成验证码
// Route::get('/code','Admin\LoginController@verify');
//登录提交

// Route::resource('/admin/login','Admin\LoginController');
//中间件