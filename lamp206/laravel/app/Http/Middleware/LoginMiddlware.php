<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddlware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
         // 检测用户是否登录
             if($request->session()->has('key')){
              
                 return $next($request);//通过  执行下一次请求
             }else{
                 //跳转到登录页面
                 return redirect('/admin/login'); 
              }
    }
}
