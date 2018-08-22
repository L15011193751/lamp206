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

        
        // dd(111111);->where('cname','like','%'.$request->input('search').'%')'num',
        $res=Cates::where('cname','like','%'.$request->input('search').'%')->select(DB::raw('*,concat(path,id) as paths'))->
        orderBy('paths','asc')->paginate(10);

        foreach($res as $k=>$v){
            $n=substr_count($v->path, ',')-1;
            if($n != 0){
               $v->cname=str_repeat('&nbsp;',$n*5).'|--'.$v->cname;
            }  
        }



               return view('admin.cate.index',['res'=>$res,'title'=>'分类浏览','request'=>$request]);
     

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

     $res = Cates::select(DB::raw('*,concat(path,id) as paths'))->
            orderBy('paths','asc')->
            get();

           foreach($res as $k=>$v){
            $n=substr_count($v->path,',')-1;
            $v->cname=str_repeat('&nbsp;',$n*5).'|--'.$v->cname;


        }


       return view('admin.cate.add',['title'=>'添加','res'=>$res]);
    
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
        $res=$request->except('_token');

        dump($res);

       
        if($res['pid'] == 0){

            $res['path'] = '0,';

        }else{

            $foo = Cates::where('id',$res['pid'])->first();

            $res['path'] = $foo->path.$foo->id.',';
        }

            $data=Cates::create($res);


         if($data)
        {        
           return redirect('/admin/cate')->with('success','添加成功');

         }else{


        return back()->with('error','失败');
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
       $info=Cates::find($id);
        //dump($info);

        $res= Cates::select(DB::raw('*,concat(path,id) as paths'))->orderBy('paths','asc')->get();


        foreach($res as $k=>$v){
            $n=substr_count($v->path,',')-1;
            $v->cname=str_repeat('&nbsp;',$n*5).'|--'.$v->cname;


        }
            return view('admin.cate.edit',['res'=>$res,'title'=>"修改",'info'=>$info]);
       
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

        $res=$request->except('_token','_method');

        //dump($res);
        $data=Cates::where('id',$id)->update($res);
        if($data){
        
        return redirect('/admin/cate')->with('success','修改成功');

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
      // echo $id;
        //判断有没有子类


         $cate=Cates::where('pid',$id)->first();

        if(!empty($cate)){

            return back()->with('error','当前类别下有子分分类，不能删除');
                exit;

        }
        
        
      /* if(Cates::destroy($id)){

            return redirect('/admin/cate')->with('success','删除成功');
       }else{
             return back()->with('error','删除失败');
       }      
*/


       
    
            $res = Cates::where('id',$id)->delete();
            //如果没有就可以删除

            if($res){
                return redirect('/admin/cate')->with(['success'=>'删除成功']);
            }else{

       

                return redirect('/admin/cate')->with('error','删除失败');
        }
     
    
       
}
}