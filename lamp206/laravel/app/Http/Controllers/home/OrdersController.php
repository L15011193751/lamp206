<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Ordersdetail;
use DB;
class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $carts = session('cart.id');
        $sum = session("orders.sum");
      
       // dd($carts);
       return view('home/orders/settlement',['carts'=>$carts,'sum'=>$sum]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   // 收货人
    //     session('orders.rec', $request->input('rec')) ;
    //     // 联系电话
    //     session('orders.tel', $request->input('phone')) ;
    //     // 收货地址
    //     session('orders.addr', $request->input('addr')) ;
    //     // 买家留言
    //     session('orders.umsg', $request->input('umsg')) ;
    //     // 订单号
    //     $res = session('orders.oid',date('YmdHis').mt_rand(1000,9999));
    //     // 下单人id
    //     session('orders.uid',session('homeUserInfo.uid'));
    //     //  订单状态
    //     session('orders.status',1);
    //     // 下单时间
    //     session('orders.create_at',time());
        

        DB::beginTransaction(); //开启事务
         $sum = session("orders.sum");
         // dd($sum);
        // 存入数据表
       
        $orders = new Orders;
        $orders -> rec =$request->input('rec');
        $orders -> addr =$request->input('addr');
        $orders -> state =1;
        $orders -> create_at =time();
       
        $orders -> save();
        $red = date('YmdHis').mt_rand(1000,9999);
        $aa = $request->input('price');
        // dd($aa);
        $ordesdetail = new  Ordersdetail;
        // $ordersdetail -> order_oid =$red;
        // $ordersdetail -> price = $request->input('price');
        // $ordersdetail -> cnt = $request->input('cnt');

         // $ordesdetail -> save();
        // if($res1 && $res2){
        //     DB::commit(); // 提交事务
           return view('home.orders.index',['red'=>$red  ,'sum'=>$sum]);
        // }else{              // 回滚事务
        //     DB::rollBack();
        //     return back()->with('error','添加失败');
        // }

        
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            echo '1111';
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
