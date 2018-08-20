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

        // 提取
        $carts = session('cart.$id');
       
        // 求总金额,总数量
        $sum = 0;
        $cnt = 0;
        foreach ($carts as $k => $v)
        {
            // 总净额
            $sum += $v->price*$v->cnt;
            // 总数量
            $cnt += $v->cnt;
        }

        // 数据存入session
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

        // 获取详情页的id 
        $red = $request -> input('id');
        // 获取数据库的id'
        $data = Goods::find($red);
        // 获取数量
        $data->cnt = $request -> input('cnt');  
        // session('cart.id',$data);
        session()->push('cart.$id', $data);
        // dump($data);
        // dd(session('cart.id'));
        return view('home.cart.carate',['data'=>$data]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $red = $request -> all();
        // // dd($red);
        // return view('home.cart.index');
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
        // 删除
        // session('cart'.$id,null);
        dump($id);
        $red = $request->session()->forget($id);
        // $request->session()->forget('key');
         // dd($red);
        // return redirect('/home/cart');
    }
}
