

@extends('admin.layout.index')

@section('title',$title)

@section('container')





           @if (count($errors) > 0)
                <div class="mws-form-message error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style='font-size:16px;list-style:none'>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                   <span>{{$title}}</li>
                </div>
           <div class="mws-panel-body no-padding">

        <form action="/admin/lunbo" method='post' class="mws-form" enctype='multipart/form-data'>
            <div class="mws-form-inline">

                <div class="mws-form-row">
                    <label class="mws-form-label">小标题</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name='title'>
                    </div>
                </div>

                

                <div class="mws-form-row">
                    <label class="mws-form-label">跳转地址</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name='url'>
                    </div>
                </div>

      
                <div class="mws-form-row" style="width:60%">
                    <label class="mws-form-label">头像</label>
                    <div class="mws-form-item">
                      <!--   <input type="file" class="small" name='profile'> -->

                 <input type="file" name='gpic' class="fileinput-preview" style="width: 100%; padding-right: 84px;" readonly="readonly" placeholder="No file selected...">
                    </div>
                </div>

                <!-- div class="mws-form-row">
                    <label class="mws-form-label">状态</label>
                    <div class="mws-form-item clearfix">
                        <ul class="mws-form-list inline">
                            <li><input type="radio" name='status' value='1' checked='checked'> <label>应用</label></li>
                            <li><input type="radio" name='status' value='0'> <label>关闭</label></li>
                        </ul>
                    </div>
                </div>

            </div> -->
            <div class="mws-button-row">

                {{csrf_field()}}
                <input type="submit" class="btn btn-success" value="提交">
            </div>
        </form>
    </div>      
</div>


@endsection

@section('js')
<script type="text/javascript">
    
 $('.mws-form-message').fadeOut(5000);

 </script>
@endsection


