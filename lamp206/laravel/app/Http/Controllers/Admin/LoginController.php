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
        // echo '111';
        // $user = new User;
        // $uname=$user->all('username');

        // $username=$request->all();
        $res=$request->except('_token');
        $uname=User::where('username',$res['username'])->first();
        if(!$uname){
            return back()->with('error','用户名和密码不能为空');
       }

        if($res['password']!=$uname->password){
        //如果说密码失败
            return back()->with('error','用户名或密码不正确');
       }

        if($uname['auth'] != 2)
        {
            return back()->with('error','您没有管理员权限') -> withInput();
        }


        session(['id'=>$uname->id]);
      
      session(['uname'=>$uname->username]);
    


     return redirect('/admin/index');


        // dd($username);
        // // dump($uname);
       
        // $password=$request->input('password');
        // $names=[];
        // foreach ($uname as $key => $value) {
        //     array_push($names,$value->username);
        // }
        // // dump($names);
        // $res = in_array($username,$names);
        // // dump($res);
        // if($res){
        //         $pass=User::where('username','=',$username)->first();
        //         // dump($pass);
                


        //    }else{
        //         return back()->with('error','用户名填写错误');
        //    }   
        // if($pass['password'] == $password){
        //     // $sess=$username['username'];
        //     session(['key' => "$username"]);
        // // dd(session);
        //     return redirect('/admin')->with('success','登陆成功');
        // }else{
        //     return back()->with('error','密码填写错误');
        // }
    }


    public function loginout()
    {
        session(['uname'=>'']);
        return view('/admin/login/login');
    }
}