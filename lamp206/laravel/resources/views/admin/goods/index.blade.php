
@extends('admin.layout.index')

@section('container')               
            <div class="search-wrap pull-right" >
            <div class="search-content">
                <form action="/admin/goods/" method="get">                     
                     <table class="search-tab">
                        <tr>
                            
                            <td> <i class="icon-search"></i>  </td>
                            <td><input class=" text-info" placeholder="关键字" name="gname" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div> 
        <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-table"></i>商品管理列表</span>
        </div>
        </div>
        
        <div class="mws-panel-body no-padding">
            <table class="mws-datatable-fn mws-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>商品图片 </th>
                                        <th>商品名称</th>
                                        <th>产品描述</th>
                                        <th>价格</th>
                                        <th>库存</th>
                                        <th>销量</th>
                                        <th>状态</th>
                                        <th>操作</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $k => $v)
                                    <tr>
                                        <td>{{ $v['id'] }}</td>
                                        <td><img src="{{ $v['gpic'] }}" style="width: 120px"></td>
                                        <td>{{ $v['gname'] }}</td>
                                        <td>{{ $v['gdesc'] }}</td>
                                        <td>{{ $v['price'] }}</td>
                                        <td>{{ $v['stock'] }}</td>
                                        <td>{{ $v['ent'] }}</td>
                                        <td>{{ $v['state'] == 1 ? '上架' : '下架'}}</td>
                                        <td style="display: inline;">
                                            <form action="/admin/goods/{{ $v['id'] }}/edit" method="get" style="display: inline;">
                                               
                                                <input type="submit" class="btn btn-success table table-hover" value="修改">
                                            </form>
                                            <form action="/admin/goods/{{ $v['id'] }}" method="post" style="display: inline;">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <input type="submit" class="btn btn-warning btn-primary btn-sm" value="删除">
                                            </form>
                                            @if( $v['state'] == 1 )
                                                <button class="btn btn-info"><a href="/admin/goods/up/{{ $v['id'] }}">上架</a></button>
                                                
                                            @else 
                                                <button class="btn btn-info"><a href="/admin/goods/{{ $v['id'] }}/down">上架</a></button>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
            </table>
            <div id="page_page" style="height: 20px">
                 {!! $data->appends($request)->render() !!} 
            </div>
                                
        </div>
        </div>
                    
        <!-- Panels End -->
        </div>
        <!-- Inner Container End -->
                           
         <!-- Footer -->
        <div id="mws-footer">
                  
        </div>
                
        </div>
         <!-- Main Container End -->
            
        </div>

@endsection
 