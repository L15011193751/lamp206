@extends('admin.layout.index')
@section('title',$title)
@section('container')







@if (count($errors) > 0)
    <div class="mws-form-message error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i>{{ $title }}</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
                       
                            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                                <thead>
                                    <tr >
                                    	<th >ID</th>
                                    	<th style="width:70px">广告名称</th>
                                    	<th style="width:70px">广告描述</th>
                                    	<th >位置</th>
                                    	<th>费用</th>
                                    	<th style="width:70px">广告图片</th>
                                    	<th style="width:70px">广告连接</th>
                                    	<th>状态</th>
                                    	<th>投放时间</th>
                                    	<th>结束时间</th>
                                
                                    	<th>操作</th>
                                    </tr>
                                </thead>
                                
                            <tbody role="alert" aria-live="polite" aria-relevant="all">
    							@foreach($res as $k=>$v)
                                <tr >
                                    <td>{{$v->id}}</td>   
                                    <td>{{$v->advername}}</td> 
                                    <td>{{$v->desc}}</td>
                                    <td>
                                    	@if($v->position==1)广告位左旗1
                                    	@elseif($v->position==2)广告位左旗2
                                    	@elseif($v->position==3)广告位左旗3
                                    	@else
                                    	   广告位左旗4

                                    	 @endif  

                                    </td>   
                                    <td>{{$v->price}}</td> 
                                    <td><img src="{{$v->gpic}}" art="" width="30px"></td>
                                    <td>{{$v->piclink}}</td>
                                    <td>
                                    	@if($v->status==1)投放

                                    	@else 结束
                                    	@endif

                                    </td>
                                     <td>{{date('Y-m-d', time())}}</td>
                                   <td>{{date('Y-m-d',time())}}</td>
                                    <!-- <td>{{$v->stopadver|date('Y-m-d')}}</td> -->
                                     
                                    <td>


                                    <a href="/admin/adver/{{$v->id}}/edit" class="btn btn-info">修改</a>


                                    <form action="/admin/adver/{{$v->id}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}

                                   <button class="btn btn-info">删除</button>

                                      <from>   
                                      </td>
                                </tr>

                              @endforeach


                            </tbody>
                            </table>
                            
                            
                            </div>
                    </div>
                </div>

@endsection




