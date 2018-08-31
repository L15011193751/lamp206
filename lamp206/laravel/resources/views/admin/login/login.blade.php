<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台登录管理</title>
	<link rel="stylesheet" type="text/css" href="/mws/login/css/admin_login.css"/>
</head>
<body>
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
<div class="admin_login_wrap">
    <div class="adming_login_border">
    <h1><b><font color="black" style="text-align:center;">后台管理</font></b></h1>
        <div class="admin_input">
            <form action="/admin/dologin" method="post">
                {{ csrf_field() }}
                <ul class="admin_items">
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="username" autocomplete="off" value="" id="user" size="40" class="admin_input_style"/>
                    </li>
                    <li>
                        <label for=="password">密码：</label>
                        <input type="password" name="password"  size="40" class="admin_input_style" />
                    </li>
                    
                    <li>
                        <input type="submit" tabindex="3" value="提交" class="btn btn-primary" />
                    </li>
                </ul>
            </form>
        </div>
    </div>
    <p class="admin_copyright"><a tabindex="5" href="#" target="_blank">进入前台</a> &copy; 2018 Powered by <a href="#" target="_blank">你的大名</a></p>
</div>
</body>
</html>