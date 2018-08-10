
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
<link rel="stylesheet" type="text/css" href="/mws/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/mws/custom-plugins/picklist/picklist.css" media="screen">
<link rel="stylesheet" type="text/css" href="/mws/plugins/select2/select2.css" media="screen">
<link rel="stylesheet" type="text/css" href="/mws/plugins/ibutton/jquery.ibutton.css" media="screen">
<link rel="stylesheet" type="text/css" href="/mws/plugins/cleditor/jquery.cleditor.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/mws/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/mws/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/mws/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/mws/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/mws/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/mws/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/mws/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/mws/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/mws/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/mws/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/mws/css/themer.css" media="screen">
<link rel="stylesheet" type="text/css" href="/mws/css/page_page.css">
<title>MWS Admin - Form Elements</title>

</head>

<body>


    <!-- Header -->
    <div id="mws-header" class="clearfix">
    
        <!-- Logo Container -->
        <div id="mws-logo-container">
        
            <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
            <div id="mws-logo-wrap">
                <img src="/mws/images/mws-logo.png" alt="mws admin">
            </div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
 
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
                <!-- User Photo -->
                <div id="mws-user-photo">
                    <img src="/mws/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, John Doe
                    </div>
                    <ul>
                        <li><a href="#">修改文件</a></li>
                        <li><a href="#">修改密码</a></li>
                        <li><a href="index.html">退出</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
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
            
            <!-- Searchbox -->
            <div id="mws-searchbox" class="mws-inset">
                <form action="typography.html">
                    <input type="text" class="mws-search-input" placeholder="Search...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    
                    <li class="active">
                        <a href="#"><i class="icon-user"></i> 用户管理</a>
                        <ul>
                            <li><a href="/admin/user">用户列表</a></li>
                            <li><a href="/admin/user/create">用户添加</a></li>
                            <li><a href="">用户删除</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
            <!-- 内容开始 -->
            <div class="container">
                
                @if(session('success'))
                <!-- 读取跳转信息 -->
                <div class="mws-form-message success">
                     {{ session('success') }}                   
                </div>
                @endif

                @if(session('error'))
                <div class="mws-form-message error">
                     {{ session('error') }}                   
                </div>
                @endif

                @section('container')
                

                @show

            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
            <div id="mws-footer">
                Copyright Your Website 2012. All Rights Reserved.
            </div>
            
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/mws/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/mws/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/mws/js/libs/jquery.placeholder.min.js"></script>
    <script src="/mws/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/mws/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/mws/jui/jquery-ui.custom.min.js"></script>
    <script src="/mws/jui/js/jquery.ui.touch-punch.js"></script>

    <script src="/mws/jui/js/globalize/globalize.js"></script>
    <script src="/mws/jui/js/globalize/cultures/globalize.culture.en-US.js"></script>

    <!-- Plugin Scripts -->
    <script src="/mws/custom-plugins/picklist/picklist.min.js"></script>
    <script src="/mws/plugins/autosize/jquery.autosize.min.js"></script>
    <script src="/mws/plugins/select2/select2.min.js"></script>
    <script src="/mws/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/mws/plugins/validate/jquery.validate-min.js"></script>
    <script src="/mws/plugins/ibutton/jquery.ibutton.min.js"></script>
    <script src="/mws/plugins/cleditor/jquery.cleditor.min.js"></script>
    <script src="/mws/plugins/cleditor/jquery.cleditor.table.min.js"></script>
    <script src="/mws/plugins/cleditor/jquery.cleditor.xhtml.min.js"></script>
    <script src="/mws/plugins/cleditor/jquery.cleditor.icon.min.js"></script>

    <!-- Core Script -->
    <script src="/mws/bootstrap/js/bootstrap.min.js"></script>
    <script src="/mws/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/mws/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/mws/js/demo/demo.formelements.js"></script>

</body>
</html>

