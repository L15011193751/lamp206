<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Goods;
use App\Models\Ordersdetail;
use App\Http\Requests\OrderStoreRequest;
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
      
       return view('home/orders/settlement',['carts'=>$carts,'sum'=>$sum]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {  

       // 获取购买商品
        $order = Orders::get();

        foreach($order as $k=>$v){
          // 获取gid
          $gid = $v->od->gid;
        
          $odata  =[];
          // 查找单条数据
          $data = Goods::find($gid);
          
                // 商品图片
                $odata['gpic'] = $data->gpic;
                // 商品图片
                $odata['price'] = $data->price;
                $odata['gname'] = $data->gname;
                return view('home.orders.order',['order'=>$order,'odata'=>$odata]);
        }  
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderStoreRequest $request)
    {
        DB::beginTransaction(); //开启事务
         $sum = session("orders.sum");
         $cnt = session("orders.cnt");
        $red = date('YmdHis').mt_rand(1000,9999);
        $data = $request->all();
        $orders = new Orders;
        $orders->oid = $red;
        $orders ->rec = $data['rec'];  // 收货人
        $orders ->addr = $data['addr'];// 收货地址
        $orders ->phone =  $data['phone'];
        $orders ->umsg =  $data['umsg'];
        $orders ->SendDate =  $data['SendDate'];
        $orders ->ToDate =  $data['ToDate'];
        $orders ->cnt = $cnt['0'];// 获取总金额  总数量
        $orders ->sum = $sum['0'];
        $orders ->state =1; // 状态
        $res1 = $orders -> save(); // 保存

        $carts = session('cart.id');
        foreach($carts as $k => $v)
        {
            $ordesdetail = new Ordersdetail;
            $ordesdetail ->oid = $orders->id;
            $ordesdetail ->order_oid = $red;// 关联订单号 
            $ordesdetail ->gid = $v['id']; // gid
            $ordesdetail ->price = $v['price'];//  单价
            $ordesdetail ->cnt = $v['cnt'];//  数量
            $res2 =  $ordesdetail -> save();
        }
        if($res1 && $res2){
            DB::commit(); // 提交事务
           return view('home.orders.index',['red'=> $red ,'sum'=>$sum]);
        }else{              // 回滚事务
            DB::rollBack();
            return back()->with('error','添加失败');
        }
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
        
        DB::beginTransaction();//开启事务
        // 删除用户
        $res1 = Orders::destroy($id);
        // 删除详情
        $res2 = Ordersdetail::where('oid',$id)->delete();
        if($res1 && $res2){
            DB::commit();//提交事务
             return redirect('/home/orders/order')->with('success','删除成功');
         }else{
            DB::rollBack();//回滚事务
            return back()->with('error','删除失败');
         }     


    }       
}
