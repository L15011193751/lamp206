
@extends('admin.layout.index')

@section('container')  
    <!-- Start Main Wrapper -->
        <div class="mws-panel grid_8" style="background: #A6EDEC" >
            <div class="mws-panel-header">
                <span>修改商品</span>
            </div>
            <div class="mws-panel-body no-padding" >
                <form class="mws-form" action="/admin/adver/{{$res->id}}" method="post" enctype="multipart/form-data">
                 	{{ csrf_field() }}
					      	    {{method_field('PUT')}}
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label class="mws-form-label text-info" >广告名称</label>
                            <div class="mws-form-item">
                                <input type="text" class="small" name="advername" value="{{$res->advername}}" >
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label text-info" >广告价格</label>
                            <div class="mws-form-item">
                            	<input type="text" class="small" name="price" value="{{$res->price}}">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label text-info" >广告位置</label>
                            <div class="mws-form-item">
                               <select class="form-controller" name="position">
                                
                                <option value="1" 
                                > 中部 优选广告位 左旗1</option>
                                <option value="2" 
                              	>中部  优选广告位 左旗2</option>
                                <option value="3"                         	
                               	>中部  优选广告位 左旗3</option>
                                <option value="4"
                         		>中部  优选广告位 左旗4</option>

                               </select>


                                
                            </div>
                        </div>

                    <div class="mws-form-row">
                            <label class="mws-form-label text-info" >开始时间</label>
                            <div class="mws-form-item">
                                <input type="text" class="small" name="adverstart" value="{{$res->adverstart}}">
                            </div>
                        </div>

                           <div class="mws-form-row">
                            <label class="mws-form-label text-info" >结束时间</label>
                            <div class="mws-form-item">
                                <input type="text" class="small" name="adverstop" value="{{$res->adverstop}}">
                            </div>
                        </div>


               
                
                        <div class="mws-form-row">
                            <label class="mws-form-label text-info" >广告图片</label>
                            <div class="mws-form-item">
                                <input type="file" class="small" name="gpic" value="{{$res->gpic}}">
                            </div>
                        </div>
                        <div class="mws-form-row" style="width: 630px">
                            <label class="mws-form-label text-info" >广告描述</label>
                         
                            <div class="mws-form-item">


                                <textarea rows="" cols="" class="large" name="desc" >{{$res->desc}}</textarea>
                                
                            </div>
                        </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label text-info" >广告链接</label>
                            <div class="mws-form-item">
                                <input type="text" class="small" name="piclink" value="{{$res->piclink}}">
                            </div>
                        </div>
                        
                        <div class="mws-form-row">
                            <label class="mws-form-label text-info">广告状态</label>
                            <div class="mws-form-item">
                            	
                               <input type="radio" name='status' value="1"  @if($res->status==1) checked>投放  @endif
                              <input type="radio" name='status' value="0" @if($res->status==0)>checked 结束 @endif
                                
                             
                             
                            </div>
                        </div>
                        
                        <div  class="pull-center" > 
                        <input type="submit" value="修改" class="btn btn-success " >

                        
                        </div>
                        
                    </div>
                </form>
            </div>      
        </div>

    <!-- JavaScript Plugins -->
@endsection