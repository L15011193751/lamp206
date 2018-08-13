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

<<<<<<< HEAD
=======



>>>>>>> b5c409cfea9072384920178bed1e7316c1db8022








Route::resource('admin/cate','admin\CatesController');


// 前台商品列表
Route::resource('home/goods','Home\GoodsController');




//后台用户路由
Route::resource('/admin/user','Admin\UserController');




// 商品浏览
Route::resource('/admin/goods','Admin\GoodsController');
<<<<<<< HEAD
//上架下架
// Route::get('/admin/goods','Admin\GoodsController@up');
// Route::get('/admin/goods','Admin\GoodsController@down');

// 订单
Route::resource('/admin/orders','Admin\OrdersController');
=======


//后台用户路由
Route::resource('/admin/user','Admin\UserController');

>>>>>>> b5c409cfea9072384920178bed1e7316c1db8022
