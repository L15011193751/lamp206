<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use App\User;
use Code;
use App\Http\Requests\LoginPostRequest;

class LoginController extends Controller
{
    //显示一个登录表单
    public function login()
    {
        return view('admin.login.login');
    }

     /**
     * 验证码生成
     * @param  [type] $tmp [description]
     * @return [type]      [description]
     */
    public function verify(){
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
   
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null );
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        Session::flash('milkcaptcha', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }

    public function dologin(LoginPostRequest $request)
    {
        $data = $request -> all();
        $name = User::all('username');
         // dump($data['password']);
         // exit;
        $names = [];
        foreach ($name as $key => $value) {
            array_push($names,$value->username);
        }
        $res = in_array($data['username'], $names);
        //dump($res);
        if($res){
            $passwords = User::where('username','=',$data['username'])->first(); 
            //dump($passwords['password']);
        }else{
            return back()->with('error','用户名错误');
        }
        if($data['upwd'] == $passwords['password']){
            $sess = $data['username'];
            session(['key' => $sess]);
            return redirect('admin/index/index');
        }else{
            return back()->with('error','密码错误');
        }
    }


    public function getOut()
    {
        session(['key'=>'']);
        return view('admin.login');
    }
}
