@extends('admin.layout.index')

@section('title',$title)

@section('container')
<div class="wms-form-message success ">

{{session('success')}}

<div class="mws-panel grid_8">
  <div class="mws-panel-header">
   
  </div>

  <div class="mws-panel-body no-padding">
        <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">
      <form action="/admin/cate" method='get'>
              <div id="DataTables_Table_1_length" class="dataTables_length">
                  <label>
                      显示
                      <select name="num" size="1" aria-controls="DataTables_Table_1">

                            <option value="10" @if($request->num == 10)   selected="selected" @endif>
                                10
                            </option>
                            <option value="20" @if($request->num == 20)   selected="selected" @endif>
                                20
                            </option>
                            <option value="30" @if($request->num == 30)   selected="selected" @endif>
                                30
                            </option>
                           
                          
                      </select>
                      条数据
                  </label>
              </div>
              <div class="dataTables_filter" id="DataTables_Table_1_filter">
                  <label>
                      分类名:
                      <input type="text" name='search' value="{{$request->search}}" aria-controls="DataTables_Table_1">
                  </label>

                   

                  <button class='btn btn-info'>搜索</button>
              </div>
            </form>

      
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
      
  <div id="page_page">
    
 {!!$res->render()!!}
    

@endsection