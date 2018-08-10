<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Goods;
class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
<<<<<<< HEAD
    {   
        // 获取全部商品
        $data = Goods::all();
        // dd($data);
        return view('goods.index',['data' => $data]);
=======
    {
        //
		echo '111';
>>>>>>> 6c86c03b278c42d42ca57cf32f14c3ea7d14799f
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view ('goods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取表单提交
        $data = $request -> all();
       
        $gpic =  $data['gpic'];
        // 处理文件名称
        $temp_name = str_random(20);
        //获取后缀
        $ext =  $gpic -> getClientOriginalExtension();
        $name = $temp_name.'.'.$ext;
        // 拼接路径
        $dir = './uploads/'.date('Ymd',time());
        // 拼接向数据库存储的文件路径
        $filename = ltrim($dir.'/'.$name,'.');
       
         // 执行上传
         $gpic -> move($dir,$name);
         // 添加到数据库
        $res = goods::where('id','=',$id)->update($data);
        if($res) {
            return redirect('/admin/goods')->with('success','添加成功');
        }else{
            return back()->with('errror','添加失败');
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
        // 查询单条
       $data = Goods::find($id);

       return view ('goods/edit',['data'=>$data]);

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
            $data = $request -> except(['_token','_method']);
            if($request -> hasFile('gpic')){
                // 创建上传对象
                $gpic =  $data['gpic'];
                // 处理文件名称
                $temp_name = str_random(20);
                //获取后缀
                $ext =  $gpic -> getClientOriginalExtension();
                $name = $temp_name.'.'.$ext;
                // 拼接路径
                $dir = './uploads/'.date('Ymd',time());
                // 拼接向数据库存储的文件路径
                $filename = ltrim($dir.'/'.$name,'.');
                $data['gpic'] = $filename;
                 // 执行上传
                $gpic -> move($dir,$name);
            }
            $res = goods::where('id','=',$id)->update($data);
            if($res) {
                return redirect('/admin/goods')->with('success','修改成功');
            }else{
                return back()->with('errror','修改失败');
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
       // 删除数据
        $res = Goods::destroy($id);
        if($res) {
            return redirect('/admin/goods')->with('success','删除成功');
        }else{
            return back()->with('errror','删除失败');
        }

    }
}
