<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //前台登录页面
    public function login()
    {
        return view('home.login.login');
    }
    //接受登陆表单数据，进行验证
    public function postDologin(Request $request)
    {
        $uname = $request::post('uname');
        $upwd = $request::post('upwd','','md5');
        $user = User::where('uname','=',$uname)->where('upwd','=',$upwd)->find();

        echo '<pre>';
        var_dump($user);
    }
}
