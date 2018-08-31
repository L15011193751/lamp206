<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Goods;

class IndexController extends Controller
{
    //显示首页
    public function index()
    {
        return view('home.index.index');
    }

   public function search(Request $request)
   {
     
     $search= $request -> input('gname','');//搜索关键字
     $count = $request -> input('count',3);//搜索条数
     //获取数据 并分页
     $data = Goods::where('gname','like','%'.$search.'%')->paginate($count);
     return view ('home.goods.index',['data'=>$data,'request'=>$request->all()]);

   } 
}
