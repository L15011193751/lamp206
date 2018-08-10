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

<body>

    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
        <!-- Necessary markup, do not remove -->
        <div id="mws-sidebar-stitch"></div>
     <div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
           
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-database"></i>商品管理</a>
                        <ul>
                            <li><a href="/admin/goods/create">添加商品</a></li>
                            <li><a href="/admin/goods">浏览商品</a></li>
                           
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
            <!-- Inner Container Start -->
            <div class="container">
            
                <!-- Statistics Button Container -->
                <div class="mws-stat-container clearfix">
                    
                    <!-- Statistic Item -->
                    <a class="mws-stat" href="#">
                        <!-- Statistic Icon (edit to change icon) -->
                        <span class="mws-stat-icon icol32-building"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                            <span class="mws-stat-title">Floors Climbed</span>
                            <span class="mws-stat-value">324</span>
                        </span>
                    </a>

                    <a class="mws-stat" href="#">
                        <!-- Statistic Icon (edit to change icon) -->
                        <span class="mws-stat-icon icol32-sport"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                            <span class="mws-stat-title">Calories Burned</span>
                            <span class="mws-stat-value down">74%</span>
                        </span>
                    </a>

                    <a class="mws-stat" href="#">
                        <!-- Statistic Icon (edit to change icon) -->
                        <span class="mws-stat-icon icol32-walk"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                            <span class="mws-stat-title">Kilometers Walked</span>
                            <span class="mws-stat-value">14</span>
                        </span>
                    </a>
                    
                    <a class="mws-stat" href="#">
                        <!-- Statistic Icon (edit to change icon) -->
                        <span class="mws-stat-icon icol32-bug"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                            <span class="mws-stat-title">Bugs Fixed</span>
                            <span class="mws-stat-value up">22%</span>
                        </span>
                    </a>
                    
                    <a class="mws-stat" href="#">
                        <!-- Statistic Icon (edit to change icon) -->
                        <span class="mws-stat-icon icol32-car"></span>

                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                            <span class="mws-stat-title">Cars Repaired</span>
                            <span class="mws-stat-value">77</span>
                        </span>
                    </a>
                </div>
                
                <!-- Panels Start -->
                <div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span><i class="icon-table"></i>商品管理列表</span>
                    </div>
                    <div class="mws-panel-body no-padding">
        <table class="mws-datatable-fn mws-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>商品图片 </th>
                                    <th>商品名称</th>
                                    <th>产品描述</th>
                                    <th>价格</th>
                                    <th>库存</th>
                                    <th>销量</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $k => $v)
                                <tr>
                                    <td>{{ $v['id'] }}</td>
                                    <td>{{ $v['gpic'] }}</td>
                                    <td>{{ $v['gname'] }}</td>
                                    <td>{{ $v['gdesc'] }}</td>
                                    <td>{{ $v['price'] }}</td>
                                    <td>{{ $v['stock'] }}</td>
                                    <td>{{ $v['ent'] }}</td>
                                    <td>{{ $v['state'] == 1 ? '上架' : '下架'}}</td>
                                    <td style="display: inline;">
                                        <form action="/admin/goods/{{ $v['id'] }}/edit" method="get" style="display: inline;">
                                           
                                            <input type="submit" class="btn btn-success table table-hover" value="修改">
                                        </form>
                                        <form action="/admin/goods/{{ $v['id'] }}" method="post" style="display: inline;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <input type="submit" class="btn btn-warning btn-primary btn-sm" value="删除">
                                        </form>
                                        @if( $v['state'] == 1 )
                                        <button type="button" class="btn btn-info">上架</button>
                                        @else 
                                        <button type="button" class="btn btn-info">下架</button>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
              <div id="mws-footer">
              
            </div>
            
        </div>
        <!-- Main Container End -->
        
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
