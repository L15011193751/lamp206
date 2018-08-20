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
     
     $gname= $request->input('gname','');
     $data = Goods::where('gname','like','%' . $gname . '%')->paginate(5);

     // $language= $request->input('language');
     // $search = Goods::all();  
     // $search=$data::;
     // $language && $search->where('language','like','%' . $language . '%');
     // $all = $search->paginate(10); //分页
     return view ('home.goods.index',['data'=>$data,'request'=>$request->all()]);

     // return view ('home/goods')->with(array('all'=>$all,'gname'=>$gname,'gdesc'=>$gdesc,'language'=>$language));
    
    } 
}
