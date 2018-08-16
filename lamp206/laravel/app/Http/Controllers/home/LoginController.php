<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login()
    {
        return view('home.login.login');
    }

    public function dologin()
    {
        echo '111';
    }
}
