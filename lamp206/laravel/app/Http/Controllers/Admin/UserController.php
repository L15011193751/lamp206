<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Hash;
use App\Models\Userdetail;
use DB;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request -> input('search',''); //搜索关键字
        $count = $request -> input('count',3);  //搜索条数
        //获取数据 并且分页
        $data = User::where('username','like','%'.$search.'%')->orderBy('id','asc')->paginate($count);
        return view('admin.user.index',['data'=>$data,'title'=>'用户列表','request'=>$request->all()]);
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载模板
        return view('admin.user.create',['title'=>'用户添加']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {

        DB::beginTransaction(); //开启事务
        //插入到数据库
        $user = new User;
        $user -> username = $request -> input('username');
        $user -> password = $request -> input('password');
        $res1 = $user -> save(); //插入
        $id = $user -> id; //获取最后的id
        $userdetail = new Userdetail;
        $userdetail -> uid = $id;
        $userdetail -> phone = $request -> input('phone');
        $userdetail -> email = $request -> input('email');
        $res2 = $userdetail -> save();
        if($res1 && $res2){
            DB::commit(); //提交事务
            return redirect('admin/user')->with('success','添加成功');
        }else{
            //回滚事务
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
    public function edit(Request $request,$id)
    {
        $user=User::find($id);
        $user->userdetail->email;
        $user->userdetail->phone;

        // $userdetail Userdetail::find($id);
//         $userdetail -> uid = $id;
        
// dd($data);
                
        // dd($data);                
        return view('admin.user.edit',['user'=>$user,'title'=>'修改页面']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserStoreRequest $request, $id)
    {

        DB::beginTransaction(); //开启事务
        //插入到数据库
        $user = User::find($id);
        $user -> username = $request -> input('username');
        $user -> password = Hash::make($request -> input('password'));
        $res1 = $user->save(); //插入
        $id = $user -> id; //获取最后的id
        // dd($user);
        $user ->userdetail-> uid = $id;

        $user -> userdetail->phone = $request -> input('phone');
        $user-> userdetail->email = $request -> input('email');
        $res2 = $user ->userdetail->save();

        if($res1 && $res2){
            DB::commit(); //提交事务
            return redirect('/admin/user')->with('success','修改成功');
        }else{
            //回滚事务
            DB::rollBack();
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
        DB::beginTransaction(); //开启事务
        //删除用户
        $res1 = User::destroy($id);

        //删除详情
        $res2 = Userdetail::where('uid',$id)->delete();

        if($res1 && $res2){
            DB::commit(); //提交事务
            return back()->with('success','删除成功');
        }else{
            //回滚事务
            DB::rollBack();
            return back()->with('error','删除失败');
        }
    }
}
