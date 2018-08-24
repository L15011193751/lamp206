<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Goods;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $carts = $request->session()->get('cart.id');
        $sum = 0;
        $cnt = 0;
        foreach ($carts as $k => $v)
        {
            // 总净额
            $sum += $v->price*$v->cnt;
            // 总数量
            $cnt += $v->cnt;
        }
        session()->push("orders.sum",$sum);
        $request->session()->forget('orders.sum');
        session()->push("orders.sum",$sum);
        session()->push("orders.cnt",$cnt);

        return view('home/cart/index',['carts'=>$carts,'cnt'=>$cnt,'sum'=>$sum]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
       

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // 获取详情页的id 
        $red = $request -> input('id');

        // 获取数据库的id'
        $data = Goods::find($red);
        // 获取数量
        $data->cnt = $request -> input('cnt'); 
        
        // 数据存入session 
        session()->push('cart.id',$data);
        // 数据存入session
       
        return redirect('/home/cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
       $res = $request->session()->flush();
        if ($res){
            return redirect()->with('success','删除成功');  
        }else{
            return back()->with('error','删除失败');
        } 
    }   
}
