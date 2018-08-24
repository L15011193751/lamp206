<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Config;
use App\Models\Lunbo;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LunboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $res=Lunbo::where('title','like','%'.$request->input('search').'%')->
        paginate($request->input('num',2));
        //dump($res);



       return view('admin.lunbo.index',['title'=>'轮播列表','res'=>$res,'request'=>$request]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //it
        
    

        return view ('admin.lunbo.add',['title'=>'轮播']);
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
       $res=$request->except('_token','gpic');
       //判断是否有文件上传
       $file=$request->hasFile('gpic');
       $file=$request->file('gpic');
       dump($file);

       if($file)
             {
             //自动生成文件名
              $name=time().rand(100,999);
             //求文件后缀nsion
              $ext=$request->file('gpic')->getClientOriginalExtension();
              $filename=$name.'.'.$ext;
             //上传文件移动到指定的位置
               //dump($filename);
              $request->file('gpic')->move('./uploads/',$filename);
        
           }
       
            $res['gpic']='/uploads/'.$filename;//
       //模型出错
      
        $data=Lunbo::create($res);

            if($data){
                return  redirect('admin/lunbo')->with('success','添加成功');

            }else{



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
        //
        $res=Lunbo::find($id);


        $data=Lunbo::where('id',$id)->delete();

        if($data){

           return  redirect('/admin/Lunbo')->with('success','删除成功');
        }else{

            return back()->with('error','失败');
        }


    }
}
