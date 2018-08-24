<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Cates;
use DB;
class CatesController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $res=Cates::select(DB::raw('*,concat(path,id) as paths'))->
            orderBy('paths')->paginate(6);
          



        foreach ($res as $k=>$v ){
            $n=substr_count($v->path,',')-1;
           $v->cname=str_repeat('&nbsp;',$n*5).'|--'.$v->cname;


        }

        return view('admin.cate.index',['res'=>$res ,'title'=>'分类']);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    $res=Cates::all();


        return view('admin.cate.add',['title'=>'分类添加','res'=>$res]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //接受变单数

      $res = $request->except('_token');
       if($res['pid'] == '0'){

            $res['path'] = '0,';

        }else{
          $foo=Cates::where('id',$res['pid'])->first();

          $res['path'] = $foo->path.$foo->id.',';
          
        }

        $data=Cates::create($res);
        if($data){

            return redirect('/admin/cate')->with('success','添加成功');
        }else{}

            return back()->with('error','添加失败');


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
        

       $info = Cates::find($id);

        $res=Cates::select(DB::raw('*,concat(path,id) as paths'))->
            orderBy('paths')->
            get();



        foreach ($res as $k=>$v ){
            $n=substr_count($v->path,',')-1;
           $v->cname=str_repeat('&nbsp;',$n*5).'|--'.$v->cname;


        }


        return view('admin.cate.edit',
            [
                'title'=>'分类修改',
                'res'=>$res,
                'info'=>$info
            ]);
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



        $res = $request->except('_token','_method');

        try{
            $data = Cates::where('id',$id)->update($res);

            if($data){
                return redirect('/admin/cate')->with('success','修改成功');
            }
        }catch(\Exception $e){

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
       $cate=Cates::where('pid','=',$id)->first();

        //
        //判断有没有子类
        //如果有子类不能删除
        if($cate){
            return redirect('/admin/cate')->with('error','删除失败');
        }

        try {
            $res = Cates::where('id',$id)->delete();
            //如果没有就可以删除

            if($res){
                return redirect('/admin/cate')->with(['success'=>'删除成功']);
            }

        } catch (\Exception $e) {

                return redirect('/admin/cate')->with('error','删除失败');
        }

    }
}
