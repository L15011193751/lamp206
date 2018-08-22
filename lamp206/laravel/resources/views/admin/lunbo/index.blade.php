@extends('admin.layout.index')

@section('title',$title)


@section('container')
<div class="wms-form-message success ">

{{session('success')}}

</div>

<div class="mws-panel grid_8">
  <div class="mws-panel-header">
    <span>
      <i class="icon-table"></i>
      <font style="vertical-align: inherit;">
        </font>
    </span>
  </div>
  <div class="mws-panel-body no-padding">
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
    	<form action="/admin/lunbo">
      <div id="DataTables_Table_1_length" class="dataTables_length">
        <label>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">显示</font></font>
             <select name="num" size="1" aria-controls="DataTables_Table_1">

                            <option value="5" @if($request->num ==5)   selected="selected" @endif>
                              5
                            </option>
                            <option value="7" @if($request->num == 7)   selected="selected" @endif>
                              7
                            </option>
                            <option value="10" @if($request->num ==10)   selected="selected" @endif>
                                10
                            </option>
                           
	                        
	                    </select>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">项</font></font>
        </label>
      </div>
       <div class="dataTables_filter" id="DataTables_Table_1_filter">
	                <label>
	                    分类名:
	                    <input type="text" name='search' value="{{$request->search}}" aria-controls="DataTables_Table_1">
	                </label>

                   

	                <button class='btn btn-info'>搜索</button>
	            </div>
	            <div>
	            </div>

	         </form>   
      <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
       
            <tr>
            
               <td class=" ">id</td>
               <td class=" ">标题名</td>
               <td class=" ">跳转地址</td>
               <td class=" ">图片地址</td>

              <td class=" ">状态</td>
               <td class="" > 操       作 </td>

          </tr>
          
  
            @foreach($res as $k=>$v)
          <tr>
            <td >{{$v->id}}</td>
            <td >{{$v->title}}</td>
            <td >{{$v->url}}</td>
            <td >{{$v->gpic}}</td> 
            <td >{{$v->status}}</td>
           
           <td>
           <form action="/admin/cate/{{$v->id}}" method="post" style="display:inline">

                <button class="btn btn-danger" >删除</button>

                {{csrf_field()}}
                {{method_field('DELETE')}}
              </form>
              </td>
          </tr>
          @endforeach
         
      </table>




   <!--   <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
   
    <a tabindex="0" class="previous paginate_button paginate_button_disabled" id="DataTables_Table_1_previous">
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">前一个</font></font>
    </a>
    <span>
      <a tabindex="0" class="paginate_active">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">1</font></font>
      </a>
      <a tabindex="0" class="paginate_button">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">2</font></font>
      </a>
      <a tabindex="0" class="paginate_button">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">3</font></font>
      </a>
      <a tabindex="0" class="paginate_button">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">4</font></font>
      </a>
      <a tabindex="0" class="paginate_button">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">5</font></font>
      </a>
    </span>
    <a tabindex="0" class="next paginate_button" id="DataTables_Table_1_next">
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">下一个</font></font>
    </a>
    
  </div> -->
      
  <div id="page_page">
    
    {!!$res->render()!!}
    
      </div>

@endsection
