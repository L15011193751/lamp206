<?php

namespace App\Http\Controllers\admin;

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
    public function index(Request $request)
    {
        // 搜索关键字  分页
        $search = $request -> input('rec',''); 
        $data = Orders::where('rec','like','%'.$search.'%')->orderBy('id')->paginate(10);
        return view ('/admin/orders/index',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        // 获取修改表单数据
        $data = Orders::find($id);
        return view ('admin/orders/edit',['data'=>$data]);
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
        // 获取页面数据
        $data = $request -> except(['_token','_method']);
        // 根据条件写入数据库
        $res = Orders::where('id',$id)->update($data);
        if($res) {
            return redirect('/admin/orders')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 开启事务
        DB::beginTransaction();
        // 删除用户
        $res1 = Orders::destroy($id); 
        // 删除详情
        $res2 = Ordersdetail::where('ooid',$id)->delete();
        if($res1 && $res2){
            //提交事务
            DB::commit();
            return redirect('/admin/orders')->with('success','删除成功');
         }else{
            //回滚事务
            DB::rollBack();
            return back()->with('error','删除失败');
         }     


    }       
    
}
