
@extends('admin.layout.index')

@section('container')               
 
             <body>
              <div class="mws-panel grid_8"> 
               <div class="mws-panel-header"> 
                <span><i class="icon-table"></i> 订单浏览</span> 
               </div> 
                <div class="search-wrap pull-right" >
                    <div class="search-content">
                        <form action="/admin/orders/" method="get">                     
                             <table class="search-tab">
                                <tr>
                                    
                                    <td> <i class="icon-search"></i>  </td>
                                    <td><input class=" text-info" placeholder="关键字" name="rec" value="" id="" type="text"></td>
                                    <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div> 
                 <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
                  <thead> 
                   <tr role="row">
                    <th rowspan="1" colspan="1" style="width: 156px;"> 订单号</th>
                    <th rowspan="1" colspan="1" style="width: 212px;">收货人</th>
                    <th rowspan="1" colspan="1"style="width: 212px;">电话号</th>
                    <th rowspan="1" colspan="1" style="width: 212px;">收货地址</th>
                    <th rowspan="1" colspan="1"style="width: 212px;">收货时间</th>
                    <th  rowspan="1" colspan="1" style="width: 212px;">状态</th>
                    <th rowspan="1" colspan="1" style="width: 212px;">鲜花卡片</th>
                    <th rowspan="1" colspan="1" style="width: 212px;">操作</th>
                    
                   </tr> 
                  </thead> 
                  @foreach($data as $k => $v)
                  <tbody role="alert" aria-live="polite" aria-relevant="all"> 
                   <tr class="odd"> 
                    <td class=" ">{{ $v['oid'] }}</td>  
                    <td class=" ">{{ $v['rec'] }}</td>  
                    <td class=" ">{{ $v['phone'] }}</td>  
                    <td class=" ">{{ $v['addr'] }}</td>  
                    <td class=" ">{{ $v['ToDate'] }}</td>  
                    <td class=" ">{{ $v['state'] }}</td>  
                    <td class=" ">{{ $v['umsg'] }}</td>  
                    <td class=" ">
                        <form action="/admin/orders/{{ $v['id'] }}/edit" method="get">

                             <input type="submit" class="btn btn-success table table-hover" value="修改">
                        </form>
                        <form action="/admin/orders/{{ $v['id'] }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="submit" class="btn btn-warning btn-primary btn-sm" value="删除">
                        </form>
                    </td> 
                   </tr>
                  </tbody>
                  @endforeach
                 </table>
                 <div class="dataTables_info" id="DataTables_Table_1_info">
                 
                 </div>
               <!--   <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
                  <a tabindex="0" class="first paginate_button paginate_button_disabled" id="DataTables_Table_1_first">First</a>
                  <a tabindex="0" class="previous paginate_button paginate_button_disabled" id="DataTables_Table_1_previous">Previous</a>
                  <span><a tabindex="0" class="paginate_active">1</a><a tabindex="0" class="paginate_button">2</a><a tabindex="0" class="paginate_button">3</a><a tabindex="0" class="paginate_button">4</a><a tabindex="0" class="paginate_button">5</a></span>
                  <a tabindex="0" class="next paginate_button" id="DataTables_Table_1_next">Next</a>
                  <a tabindex="0" class="last paginate_button" id="DataTables_Table_1_last">Last</a>
                 </div> -->
                </div> 
               </div> 
              </div> 
              <div id="page_page" style="height: 20px">
                 {!! $data->appends($request)->render() !!} 
            </div>

             </body>

@endsection
 