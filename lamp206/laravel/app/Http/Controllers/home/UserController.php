<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function center()
    {
        //个人中心页面
        return view('home.user.center');
    }

    public function info()
    {
        //个人信息页面
        return view('home.user.info');
    }

    public function address()
    {
        //收货地址
        return view('home.user.address');
    }    
}
