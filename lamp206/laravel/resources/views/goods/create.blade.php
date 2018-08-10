<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/wme/plugins/colorpicker/colorpicker.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/wme/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/wme/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/wme/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/wme/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/wme/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/wme/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/wme/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/wme/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/wme/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/wme/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/wme/css/themer.css" media="screen">

<title>MWS Admin - Table</title>

</head>

<body style="height: 100%">

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
                        <div class="mws-form-row">
                            <label class="mws-form-label text-info" >商品图片</label>
                            <div class="mws-form-item">
                                <input type="file" class="small" name="gpic">
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
    <script src="/wme/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/wme/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/wme/js/libs/jquery.placeholder.min.js"></script>
    <script src="/wme/custom-/wme/plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/wme/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/wme/jui/jquery-ui.custom.min.js"></script>
    <script src="/wme/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/wme/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/wme/plugins/colorpicker/colorpicker-min.js"></script>

    <!-- Core Script -->
    <script src="/wme/bootstrap/js/bootstrap.min.js"></script>
    <script src="/wme/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/wme/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/wme/js/demo/demo.table.js"></script>

</body>
</html>
