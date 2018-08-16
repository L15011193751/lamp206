<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $carts = session('cart.$id');
        $sum = session("orders.sum");
        
       // dd($sum);
       return view('home/orders/settlement',['carts'=>$carts,'sum'=>$sum]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session('orders.rec', $request->input('rec')) ;//收货人
        session('orders.tel', $request->input('tel')) ;//联系电话
        session('orders.addr', $request->input('addr')) ;//收货地址
        session('orders.umsg', $request->input('umsg')) ;//买家留言
        session('orders.oid',date('YmdHis').mt_rand(1000,9999));//订单号
        session('orders.user_uid',session('homeUserInfo.uid'));//下单人ID号
        session('orders.status',1);//订单状态
        session('orders.create_at',time());//下单时间

        dd(ession('orders'));

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
    public function destroy($id)
    {
        //
    }
}
