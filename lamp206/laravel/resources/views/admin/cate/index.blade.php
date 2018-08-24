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
      <div id="DataTables_Table_1_length" class="dataTables_length">
        <label>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">显示</font></font>
          <select size="1" name="DataTables_Table_1_length" aria-controls="DataTables_Table_1">
            <option value="10" selected="selected">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">10</font></font>
            </option>
            <option value="25">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">25</font></font>
            </option>
            <option value="50">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">50</font></font>
            </option>
            <option value="100">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">100</font></font>
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
      
      <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
       
            <tr>
            
               <td class=" ">id</td>
               <td class=" ">类名</td>
               <td class=" ">父级id</td>
               <td class=" ">路径</td>
              
               <td class="" > 操       作 </td>

          </tr>
          
  
            @foreach($res as $k=>$v)
          <tr>
            <td >{{$v->id}}</td>
            <td >{{$v->cname}}</td>
            <td >{{$v->pid}}</td>
            <td >{{$v->path}}</td>
           

            <td>
               <form action="/admin/cate/{{$v->id}}/edit" class="btn btn-info">
                <button>修改</button>
               </form>
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
      
  <div class="paper">
    
 {!!$res->render()!!}
    

@endsection