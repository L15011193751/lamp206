
@extends('admin.layout.index')

@section('container')  
    <!-- Start Main Wrapper -->
        <div class="mws-panel grid_8" style="background: #A6EDEC" >
            <div class="mws-panel-header">
                <span>添加商品</span>
            </div>
            <div class="mws-panel-body no-padding" >
                <form class="mws-form" action="/admin/goods" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label class="mws-form-label text-info" >商品名称</label>
                            <div class="mws-form-item">
                                <input type="text" class="small" name="gname">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label text-info" >商品定价</label>
                            <div class="mws-form-item">
                                <input type="text" class="small" name="price">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label text-info" >商品库存</label>
                            <div class="mws-form-item">
                                <input type="text" class="small" name="stock">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label text-info" >商品销量</label>
                            <div class="mws-form-item">
                                <input type="text" class="small" name="ent">
                            </div>
                        </div>
                        <div class="mws-form-row" style="width: 630px">
                            <label class="mws-form-label">商品描述</label>
                            <div class="mws-form-item">
                                <textarea rows="" cols="" class="large" name="gdesc"></textarea>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label text-info">商品状态</label>
                            <div class="mws-form-item">
                                上架<input type="radio" name='state' value="1">
                                下架<input type="radio" name='state' value="2">
                            </div>
                        </div>
                        <div class="mws-form-row" style="width:400px">
                            <label class="mws-form-label text-info" >商品图片</label>
                            <div class="mws-form-item">
                                <input type="file"  name="gpic">
                            </div>
                        </div>
                        <div  class="pull-right" > 
                        <input type="submit" value="提交" class="btn btn-success " >

                         <input type="reset" value="重置" class="btn btn-info" style="">
                        </div>
                        
                    </div>
                </form>
            </div>      
        </div>

    <!-- JavaScript Plugins -->
@endsection