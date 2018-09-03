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

        //订单管理
        return view('home.orders.index');
    }

    public function orderinfo()
    {
        //订单详情
        return view('home.orders.orderinfo');

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
    public function store(OrderStoreRequest $request)
    {
        DB::beginTransaction();            //开启事务
         $sum = session("orders.sum");
         $cnt = session("orders.cnt");
        $red = date('YmdHis').mt_rand(1000,9999);
        $data = $request->all();
        $orders = new Orders;
        // $orders->uid = $red;             //  uid
        $orders->oid = $red;
        $orders ->rec = $data['rec'];       // 收货人
        $orders ->addr = $data['addr'];     // 收货地址
        $orders ->phone =  $data['phone'];
        $orders ->umsg =  $data['umsg'];
        $orders ->SendDate =  $data['SendDate'];
        $orders ->ToDate =  $data['ToDate'];
        $orders ->cnt = $cnt['0'];          // 获取总金额  总数量
        $orders ->sum = $sum['0'];
        $orders ->state =1;                 // 状态
        $res1 = $orders -> save();          // 保存
        
        $carts = session('cart.id');
        foreach($carts as $k => $v)
        {
            $ordesdetail = new Ordersdetail;
            $ordesdetail ->ooid = $orders->id;
            $ordesdetail ->order_oid = $red;    // 关联订单号 
            $ordesdetail ->gid = $v['id'];      // gid
            $ordesdetail ->price = $v['price']; //  单价
            $ordesdetail ->cnt = $v['cnt'];     //  数量
            $res2 =  $ordesdetail -> save();
        }                                                           
        $request->session()->flush();           //清楚session所有数据
        if($res1 && $res2){
            DB::commit();                       // 提交事务
           return view('home.orders.index',['red'=> $red ,'sum'=>$sum]);
        }else{                                  // 回滚事务
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
        $uid = session('homeUserInfo.uid');
           // $uid = 22;
           $data = DB::table('users')
               ->leftjoin('orders','orders.uid','=','users.id')
               ->leftjoin('ordersdetail','orders.id','=','ordersdetail.ooid')
               ->leftjoin('goods','goods.id','=','ordersdetail.gid')
               ->where('users.id','=',$uid)
               ->select('users.username','orders.*','ordersdetail.*','goods.gpic','goods.gname')
               ->get();
           
            
                return view('home.orders.order',['data'=>$data]); 
            
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
        
    //     DB::beginTransaction();                                       //开启事务
    //     $res1 = Orders::destroy($id);                                 // 删除用户
    //     $res2 = Ordersdetail::where('oid',$id)->delete();             // 删除详情
    //     if($res1 && $res2){
    //         DB::commit();
    //         return redirect('home/orders/show')->with('success','删除成功');  //提交事务
    //     }else{
    //         DB::rollBack();
    //         return back()->with('error','删除失败');                       //回滚事务
    //      }     
    } 

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function aorder(Request $request)
    {
        $id = $request->input('id'); 
        dd($id);                       
        $res1 = Orders::destroy($id);                       // 删除orders表订单        
        $res2 = Ordersdetail::where('ooid',$id)->delete();  // 删除ordersdestroy表的详情
        if($res1 && $res2){
            echo 'success';
        }else{
            echo 'error';
        }      
    }
}