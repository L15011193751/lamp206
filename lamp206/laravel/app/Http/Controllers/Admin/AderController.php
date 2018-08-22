<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Adver;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $res=Adver::all();
         //dump($res);
       


        return view('admin.adver.index',['title'=>'广告浏览','res'=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.adver.add',['title'=>'添加广告']);
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
       //dump($res);
       $file=$request->hasFile('gpic');
       $file=$request->file('gpic');
         if($request->hasFile('gpic')){
            $name=time().rand(100,999);
            $ext=$request->file('gpic')->getClientOriginalExtension();
            $filename=$name.'.'.$ext;

              $request->file('gpic')->move('./uploads/',$filename);


         }

             $res['gpic']='/uploads/'.$filename;


             $data=Adver::create($res);

             if($data){

                return redirect('/admin/adver')->with('success','添加成功');
             } else{

                return back();
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
          $res=Adver::find($id);
          //dump($res);

        return view('admin.adver.edit',['res'=>$res]);
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

        $foo = Adver::find($id);

        $urls = $foo->gpic;

        // dd($urls);

        $info = '@'.unlink('.'.$urls);
       //失败就返回
        if(!$info)  return;

         

        $res=$request->except('_token','_method','gpic');
        $file=$request->hasFile('gpic');
        if($request->hasFile('gpic')){

        $name=time().rand(100,999);
        $ext=$request->file('gpic')->getClientOriginalExtension();

         $filename=$name.'.'.$ext;
           $request->file('gpic')->move('./uploads/',$filename);
        echo $filename;

        }
         $res['gpic']='/uploads/'.$filename;
           

           $data=Adver::where('id',$id)->update($res);


           if($data){
                
                return redirect('/admin/adver')->with('success','修改成功');


           }else{

            return back();
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
        //
            $foo = Adver::find($id);

        $urls = $foo->gpic;

        // dd($urls);

        $info = '@'.unlink('.'.$urls);
       //失败就返回
        if(!$info)  return;

        $res=Adver::destroy($id);
          if($res){


            return redirect('/admin/adver')->with('success','
                删除成功');

    }else{

        return back();
    }
}
}
