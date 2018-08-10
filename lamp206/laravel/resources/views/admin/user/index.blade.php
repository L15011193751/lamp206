@extends('admin.layout.index')


@section('container')

<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i>{{ $title }}</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
                        <form action="/admin/user" method="get">
                            <div id="DataTables_Table_1_length" class="dataTables_length"><label>显示 <select size="1" name="count" aria-controls="DataTables_Table_1">
                            <option value="2" @if(!empty($request['count']) && isset($request['count']) && $request['count'] == 2) selected @endif>2</option>
                            <option value="5" @if(!empty($request['count']) && isset($request['count']) && $request['count'] == 5) selected @endif>5</option>
                            <option value="10" @if(!empty($request['count']) && isset($request['count']) && $request['count'] == 10) selected @endif>10</option>
                            </select> 条</label>
                            </div><div class="dataTables_filter" id="DataTables_Table_1_filter">
                            <label>关键字: <input type="text" name="search" aria-controls="DataTables_Table_1" value="{{ $request['search'] or '' }}">
                            </label>
                             <input type="submit" value="搜索" class="btn btn-info">
                            </div>

                        </form>
                            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                                <thead>
                                    <tr role="row">
                                    	<th>ID</th>
                                    	<th>用户名</th>
                                    	<th>邮箱</th>
                                    	<th>手机号</th>
                                    	<th>状态</th>
                                    	<th>操作</th>
                                    </tr>
                                </thead>
                                
                            <tbody role="alert" aria-live="polite" aria-relevant="all">
    								@foreach($data as $k=>$v)
                            		<tr class="odd">
                                        <td>{{ $v->id }}</td>
                                        <td>{{ $v->username }}</td>
                                        <td>{{ $v->userdetail->email }}</td>
                                        <td>{{ $v->userdetail->phone }}</td>
                                        <td>{{ $v->status == 1 ? '激活' : '未激活'}}</td>
                                        <td>
                                        	<a href="" class="btn btn-warning">修改</a>
                                            <form action="/admin/user/{{ $v->id }}" method="post" style="display: inline;">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <input type="submit" value="删除" class="btn btn-danger">
                                            </form>
                                        	
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                            </table>
                            <div id="page_page">
                                {!! $data->appends($request)->render() !!}
                            </div>
                            
                            </div>
                    </div>
                </div>

@endsection