<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>首页</title>

		<link href="/home/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
		<link href="/home/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" />

		<link href="/home/basic/css/demo.css" rel="stylesheet" type="text/css" />

		<link href="/home/css/hmstyle.css" rel="stylesheet" type="text/css"/>
		<link href="/home/css/skin.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/home/css/page_page.css" />
		
		<script src="/home/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
		<script src="/home/AmazeUI-2.4.2/assets/js/amazeui.min.js"></script>
		
	</head>

	<body>
		<div class="hmtop">
			<!--顶部导航条 -->
			<div class="am-container header">
				<ul class="message-l">
					<div class="topMessage">
						<div class="menu-hd">
							<a href="/home/login" target="_top" class="h">亲，请登录</a>
							<a href="#" target="_top">免费注册</a>
						</div>
					</div>
				</ul>
				<ul class="message-r">
					<div class="topMessage home">
						<div class="menu-hd"><a href="/" target="_top" class="h">商城首页</a></div>
					</div>


					<!-- <div class="topMessage my-shangcheng">
						<div class="dl-sort">
							<a href="#" title="个人中心">个人中心</a>
						</div>	
					</div> -->
  <style>
    #nav li a{	display:block;	width:100px;	text-align:center;	text-decoration:none;}	
    #nav li{	position:relative;	margin-bottom:-10px; float:left; margin-right:5px;	}	
    #nav li ul{	position:absolute;	left:0px;	top:10px;	display:none;width:80px;	}	
    #nav li:hover ul{	display:block;	}
	#hei li a{ color:blue;}
  </style> 		
		  				<div class="topMessage my-shangcheng">
						<div class="dl-sort">
							<ul id="nav">
							   <li><a href="/user/center">个人中心</a>
							    <ul id="hei">
							     <li><a href="/user/info">个人信息</a></li>
							    <!--  <li><a href="www.baidu.com">购物车</a></li>
							     <li><a href="#">收藏夹</a></li> -->
							     <li><a href="/order/orderinfo">我的订单</a></li>
							    </ul>
							   </li>
							</ul>  		
							<div class="topMessage favorite">
				</ul>
						</div>
						</div>
						</div>



				<!--悬浮搜索框-->

				<div class="nav white">
					<div class="logo"><img src="/home/images/logo.png" /></div>
					<div class="logoBig">
						<li><img src="/home/images/logobig.png" /></li>
					</div>

					<div class="search-bar pr">
						<a name="gname" href="#"></a>
						<form action="/home/goods/index" method="get">
							
							<input id="searchInput" name="gname" type="text" placeholder="商品关键字" autocomplete="off">
							<input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit">
							
						</form>
						
					</div>
					
				</div>

				<div class="clear"></div>
			</div>
			<div class="banner">
                      <!--轮播 -->
						
						<div class="clear"></div>	
			</div>
			<div class="shopNav">
				<div class="slideall">
					
					   <div class="long-title"><span class="all-goods">全部分类</span></div>
					   <div class="nav-cont">
							<ul>
								<li class="index"><a href="/">首页</a></li>
                                <li class="qc"><a href="#">闪购</a></li>
                                <li class="qc"><a href="#">限时抢</a></li>
                                <li class="qc"><a href="#">团购</a></li>
                                <li class="qc last"><a href="#">大包装</a></li>
							</ul>
						    <div class="nav-extra">
						    	<i class="am-icon-user-secret am-icon-md nav-user"></i><b></b>我的福利
						    	<i class="am-icon-angle-right" style="padding-left: 10px;"></i>
						    </div>
						</div>					
		        </div>
		    </div>

		


		<!--菜单 -->
	
		
	</body>

</html>