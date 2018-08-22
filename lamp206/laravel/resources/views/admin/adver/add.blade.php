add.blade.php
@extends('admin.layout.index')

@section('container')  
    <!-- Start Main Wrapper -->
        <div class="mws-panel grid_8" style="background: #A6EDEC" >
            <div class="mws-panel-header">
                <span>添加商品</span>
            </div>
            <div class="mws-panel-body no-padding" >
                <form class="mws-form" action="/admin/adver" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label class="mws-form-label text-info" >广告名称</label>
                            <div class="mws-form-item">
                                <input type="text" class="small" name="advername">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label text-info" >广告价格</label>
                            <div class="mws-form-item">
                                <input type="text" class="small" name="price">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label text-info" >广告位置</label>
                            <div class="mws-form-item">
                               <select class="form-controller" name="position">


                                <option value="0" selected>请你选择投放的广告位置</option>
                                <option value="1">中部 优选广告位 左旗1</option>
                                <option value="2">中部  优选广告位 左旗2</option>
                                <option value="3">中部  优选广告位 左旗3</option>
                                <option value="4">中部  优选广告位 左旗4</option>
                                   




                               </select>


                                
                            </div>
                        </div>

                    <div class="mws-form-row">
                            <label class="mws-form-label text-info" >开始时间</label>
                            <div class="mws-form-item">
                                <input type="text" class="small" name="adverstart">
                            </div>
                        </div>

                           <div class="mws-form-row">
                            <label class="mws-form-label text-info" >结束时间</label>
                            <div class="mws-form-item">
                                <input type="text" class="small" name="adverstop">
                            </div>
                        </div>
<!-- 
                        <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right">广告位置:</label>
                    <div class="col-sm-4" >
                        <select class="form-control" name="adposition" style="width:232px">
                                <option value="0" selected>--请您选择要投放的广告位--</option>
                                <option value="1">中部 优选广告位1 左起1</option>
                                <option value="2">中部 优选广告位1 左起2</option>
                                <option value="3">中部 优选广告位1 左起3</option>
                                <option value="4">中部 优选广告位1 左起4</option>
                        </select>
                    </div>
                </div> -->

               
                
                        <div class="mws-form-row">
                            <label class="mws-form-label text-info" >广告图片</label>
                            <div class="mws-form-item">
                                <input type="file" class="small" name="gpic">
                            </div>
                        </div>
                        <div class="mws-form-row" style="width: 630px">
                            <label class="mws-form-label text-info" >广告描述</label>
                         
                            <div class="mws-form-item">
                                <textarea rows="" cols="" class="large" name="desc"></textarea>
                            </div>
                        </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label text-info" >广告链接</label>
                            <div class="mws-form-item">
                                <input type="text" class="small" name="piclink">
                            </div>
                        </div>
                        
                        <div class="mws-form-row">
                            <label class="mws-form-label text-info">广告状态</label>
                            <div class="mws-form-item">
                                投放<input type="radio" name='status' value="1">
                                结束<input type="radio" name='status' value="0">
                            </div>
                        </div>
                        
                        <div  class="pull-center" > 
                        <input type="submit" value="提交" class="btn btn-success " >

                        
                        </div>
                        
                    </div>
                </form>
            </div>      
        </div>

    <!-- JavaScript Plugins -->
@endsection