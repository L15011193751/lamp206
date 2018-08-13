@extends('layout.index')

@section('title','后台的首页')

@section('content')



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
        
    </div>
    <div class="mws-panel-body no-padding">




   <!--     @if (count($errors) > 0)
                <div class="mws-form-message error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style='font-size:16px;list-style:none'>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif  -->
        
    <form action="/admin/cate" method='post' class="mws-form" enctype='multipart/form-data'>
            <div class="mws-form-inline">
                <div class="mws-form-row">
                     {{ csrf_field() }}
                    <label class="mws-form-label">分类名称</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name='cname'>
                    </div>
                </div>

                


                <div class="mws-form-row" style="width:60%">
                                    <label class="mws-form-label">类别</label>
                                    <div class="mws-form-item">

                                        <select name="pid"class="large"value="" >
                                               <option value="0" >请选择</option>
                                            @foreach($res as $k=>$v)
                                         
                                            <option value="{{$v->id}}">{{$v->cname}}</option>
                                        
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                
            </div>
            <div class="mws-button-row">

              
                <input type="submit" class="btn btn-success" value="提交">
              
            </div>
        </form>
  </div>
</div>

@endsection