<!DOCTYPE>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>搜索页面</title>

		<link href="/home/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
		<link href="/home/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" />

		<link href="/home/basic/css/demo.css" rel="stylesheet" type="text/css" />

		<link href="/home/css/seastyle.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/home/css/page_page.css" />

		<script type="text/javascript" src="/home/basic/js/jquery-1.7.min.js"></script>
		<script type="text/javascript" src="/home/js/script.js"></script>
	</head>

	<body>

		<!--顶部导航条 -->
		<div class="am-container header">
			<ul class="message-l">
				<div class="topMessage">
					<div class="menu-hd">
						<a href="#" target="_top" class="h">亲，请登录</a>
						<a href="#" target="_top">免费注册</a>
					</div>
				</div>
			</ul>
			<ul class="message-r">
				<div class="topMessage home">
					<div class="menu-hd"><a href="#" target="_top" class="h">商城首页</a></div>
				</div>
				<div class="topMessage my-shangcheng">
					<div class="menu-hd MyShangcheng"><a href="#" target="_top"><i class="am-icon-user am-icon-fw"></i>个人中心</a></div>
				</div>
				<div class="topMessage mini-cart">
					<div class="menu-hd"><a id="mc-menu-hd" href="" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>购物车</span><strong id="J_MiniCartNum" class="h">0</strong></a></div>
				</div>
				<div class="topMessage favorite">
					<div class="menu-hd"><a href="#" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>收藏夹</span></a></div>
			</ul>
			</div>

			<!--悬浮搜索框-->

			<div class="nav white">
				<!-- <div class="logo"><img src="/home/images/logo.png" /></div> -->
				<div class="logoBig">
					<a href="/home/orders/show">
							<img src="/sy/images/201608221646389704980.png">
					</a>
				</div>

				<div class="search-bar pr">
					<a name="gname" href="#"></a>
					<form action="/home/goods/index" method="get">
						<input id="" name="gname" type="text" placeholder="搜索" autocomplete="off">
						<input id="ai-topsearch" class="submit am-btn"  value="搜索" index="1" type="submit">
					</form>
				</div>
			</div>

			<div class="clear"></div>
			<b class="line"></b>
           <div class="search">
			<div class="search-list">
			<div class="nav-table">
					   <div class="long-title"><span class="all-goods">全部分类</span></div>
					   <div class="nav-cont">
							<ul>
								<li class="index"><a href="#">首页</a></li>
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
			
				<!-- <div>
					<img src="/home/images/fenlei.jpg" alt="" />
				</div> -->
					<div class="am-g am-g-fixed">
						<div class="am-u-sm-12 am-u-md-12">
	                  	<div class="theme-popover">										
							<ul class="select">
								<p class="title font-normal">
									<span class="total fl">搜索:  <strong class="num">鲜花</strong>种类样式</span>
								</p>
								<div class="clear"></div>
								<li class="select-result">
									<dl>
										<dt>已选</dt>
										<dd class="select-no"></dd>
										<p class="eliminateCriteria">清除</p>
									</dl>
								</li>
								<div class="clear"></div>
								<li class="select-list">
									<!-- <dl id="select1">
										<dt class="am-badge am-round">颜色</dt>	
									
										 <div class="dd-conent">										
											<dd class="select-all selected"><a href="#">全部</a></dd>
											<dd><a href="#"></a></dd>
											<dd><a href="">白色</a></dd>
											<dd><a href="#">粉色</a></dd>
											<dd><a href="#">紫色</a></dd>
											<dd><a href="#">红色</a></dd>
											<dd><a href="#">蓝色</a></dd>
											<dd><a href="#">香槟色</a></dd>
										 </div>
						
									</dl> -->
								</li>
								<li class="select-list">
									<dl id="select2">
										<dt class="am-badge am-round">支数</dt>
										<div class="dd-conent">
											<dd class="select-all selected"><a href="#">全部</a></dd>
											<dd><a href="#">11</a></dd>
											<dd><a href="#">12</a></dd>
											<dd><a href="#">16</a></dd>
											<dd><a href="#">19</a></dd>
											<dd><a href="#">22</a></dd>
											<dd><a href="#">29</a></dd>
											<dd><a href="#">33</a></dd>
											<dd><a href="#">365</a></dd>
											
											<dd><a href="#">999</a></dd>
										</div>
									</dl>
								</li>
								<li class="select-list">
									<dl id="select3">
										<dt class="am-badge am-round">价格</dt>
										<div class="dd-conent">
											<dd class="select-all selected"><a href="#">全部</a></dd>
											<dd><a href="#">1-100元</a></dd>
											<dd><a href="#">100-200元</a></dd>
											<dd><a href="#">200-300元</a></dd>
											<dd><a href="#">300-500元</a></dd>
											<dd><a href="#">500-8000元</a></dd>
											<dd><a href="#">800以上</a></dd>
										</div>
									</dl>
								</li>
					        	<!-- <li class="select-list">
									<dl id="select3">
										<dt class="am-badge am-round">花材</dt>
										<div class="dd-conent">
											<dd class="select-all selected"><a href="#">全部</a></dd>
											<dd><a href="#">玫瑰</a></dd>
											<dd><a href="#">百合</a></dd>
											<dd><a href="#">康乃馨</a></dd>
											<dd><a href="#">向日葵</a></dd>
											<dd><a href="#">扶郎</a></dd>
											<dd><a href="#">绣球</a></dd>
											<dd><a href="#">进口玫瑰</a></dd>
											<dd><a href="#">马蹄莲</a></dd>
										</div>
									</dl>
								</li> -->
								<!-- <li class="select-list">
									<dl id="select3">
										<dt class="am-badge am-round">节日专题</dt>
										<div class="dd-conent">
											<dd class="select-all selected"><a href="#">全部</a></dd>
											<dd><a href="#">七夕节</a></dd>
											<dd><a href="#">中秋节</a></dd>
											<dd><a href="#">母亲节</a></dd>
											<dd><a href="#">父亲节</a></dd>
											<dd><a href="#">元旦节</a></dd>
											<dd><a href="#">妇女节</a></dd>
											<dd><a href="#">感恩节</a></dd>
											<dd><a href="#">教师节</a></dd>
											<dd><a href="#">清明节</a></dd>
										</div>
									</dl>
								</li> -->
							</ul>
							<div class="clear"></div>
                        </div>
							<div class="search-content">
								<div class="sort">
									<li class="first"><a title="综合">综合排序</a></li>
									<li><a title="销量">销量排序</a></li>
									<li><a title="价格">价格优先</a></li>
									<li class="big"><a title="评价" href="#">评价为主</a></li>
								</div>
								<div class="clear"></div>

								<ul class="am-avg-sm-2 am-avg-md-3 am-avg-lg-4 boxes">
									@foreach($data as $k => $v)
									<li>
										<div class="i-pic limit">
											<a href="/home/goods/{{ $v['id'] }}">
												<img src="{{ $v['gpic'] }}" />
											</a>
											<p class="title fl">{{ $v['gname'] }}</p>
											<p class="price fl">
												<b>¥</b>
												<strong>{{ $v['price'] }}</strong>
											</p>
											<p class="number fl">
												销量<span>{{ $v['ent'] }}</span>
											</p>
											<p class="gname">
												名称:<span>{{ $v['gname'] }}</span>
											</p>		
										</div>
									</li>
									@endforeach
								</ul>
								 <div class="page_page">
                                    {!! $data->appends($request)->render() !!}
                                </div>
							</div>
							

							<div class="search-side">

								<div class="side-title">
									<h2>店长推荐</h2>
								</div>

								<li>
									<div class="i-pic check">
										<img src="/home/images/20161019180631_5036.png" />
										<p class="check-title">1F爱情爱情</p>
									</div>
								</li>
								<li>
									<div class="i-pic check">
										<img src="/home/images/20160817140529_3564.png" />
										<p class="check-title">2F爱情鲜花</p>
										
									</div>
								</li>
								
								<li>
									<div class="i-pic check">
										<img src="/home/images/20160817164500_6689.png" />
<<<<<<< HEAD
										<p class="check-title">3F生日鲜花</p>
										
									</div>
								</li>
								<li>
									<div class="i-pic check">
										<img src="/home/images/20160822174258_5826.png" />
										<p class="check-title">4F礼盒鲜花</p>
										
=======
										<p class="check-title">2F生日鲜花</p>
>>>>>>> origin/zz2544462508
									</div>
								</li>
							</div>
 
						</div>
					</div>
					<div class="footer">
						<div class="footer-hd">
							<p>
								<a href="#">恒望科技</a>
								<b>|</b>
								<a href="#">商城首页</a>
								<b>|</b>
								<a href="#">支付宝</a>
								<b>|</b>
								<a href="#">物流</a>
							</p>
						</div>
						<div class="footer-bd">
							<p>
								<a href="#">关于恒望</a>
								<a href="#">合作伙伴</a>
								<a href="#">联系我们</a>
								<a href="#">网站地图</a>
								<em>© 2015-2025 Hengwang.com 版权所有</em>
							</p>
						</div>
					</div>
				</div>

			</div>

		<!--引导 -->
		<div class="navCir">
			<li><a href="home.html"><i class="am-icon-home "></i>首页</a></li>
			<li><a href="sort.html"><i class="am-icon-list"></i>分类</a></li>
			<li><a href="shopcart.html"><i class="am-icon-shopping-basket"></i>购物车</a></li>	
			<li><a href="person/index.html"><i class="am-icon-user"></i>我的</a></li>					
		</div>

		<!--菜单 -->
		<div class=tip>
			
			<div id="prof-content" class="nav-content">
				<div class="nav-con-close">
					<i class="am-icon-angle-right am-icon-fw"></i>
				</div>
				<div>
					我
				</div>
			</div>
			<div id="shopCart-content" class="nav-content">
				<div class="nav-con-close">
					<i class="am-icon-angle-right am-icon-fw"></i>
				</div>
				<div>
					购物车
				</div>
			</div>
			<div id="asset-content" class="nav-content">
				<div class="nav-con-close">
					<i class="am-icon-angle-right am-icon-fw"></i>
				</div>
				<div>
					资产
				</div>

				<div class="ia-head-list">
					<a href="#" target="_blank" class="pl">
						<div class="num">0</div>
						<div class="text">优惠券</div>
					</a>
					<a href="#" target="_blank" class="pl">
						<div class="num">0</div>
						<div class="text">红包</div>
					</a>
					<a href="#" target="_blank" class="pl money">
						<div class="num">￥0</div>
						<div class="text">余额</div>
					</a>
				</div>

			</div>
			<div id="foot-content" class="nav-content">
				<div class="nav-con-close">
					<i class="am-icon-angle-right am-icon-fw"></i>
				</div>
				<div>
					足迹
				</div>
			</div>
			<div id="brand-content" class="nav-content">
				<div class="nav-con-close">
					<i class="am-icon-angle-right am-icon-fw"></i>
				</div>
				<div>
					收藏
				</div>
			</div>
			<div id="broadcast-content" class="nav-content">
				<div class="nav-con-close">
					<i class="am-icon-angle-right am-icon-fw"></i>
				</div>
				<div>
					充值
				</div>
			</div>
		</div>
		<script>
			window.jQuery || document.write('<script src="/home/basic/js/jquery-1.9.min.js"><\/script>');
		</script>
		<script type="text/javascript" src="/home/basic/js/quick_links.js"></script>

<div class="theme-popover-mask"></div>

	</body>

</html>