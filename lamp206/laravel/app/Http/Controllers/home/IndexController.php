<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
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
      
     $pnum= $request->input('pnum');
     $pcom= $request->input('pcom');
     $ppart= $request->input('ppart');
     $search = Goods::all();  
     $pnum && $search->where('pnum','like','%' . $pnum . '%');
     $pcom && $search->where('pcom','like','%' . $pcom . '%');
     $ppart && $search->where('ppart','like','%' . $ppart . '%');
     $all = $search->paginate(10);//分页
     return view ('home.goods',['all'=>$all,'pnum'=>$pnum,'pcom'=>$pcom,'ppart'=>$ppart]);
     // return view ('home/goods')->with(array('all'=>$all,'pnum'=>$pnum,'pcom'=>$pcom,'ppart'=>$ppart));
    
    } 
}
