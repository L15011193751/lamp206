<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">

		<title>订单管理</title>

		<link href="/home/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/home/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

		<link href="/home/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/home/css/orstyle.css" rel="stylesheet" type="text/css">

		<script src="/home/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
		<script src="/home/AmazeUI-2.4.2/assets/js/amazeui.js"></script>
		<script src="/sy/ajax3.0-min.js"></script>

	</head>

	<body>
		<!--头 -->
		 <
		<header>
			<article>
				<div class="mt-logo">
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
								<div class="menu-hd"><a id="mc-menu-hd" href="#" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>购物车</span><strong id="J_MiniCartNum" class="h">0</strong></a></div>
							</div>
							<div class="topMessage favorite">
								<div class="menu-hd"><a href="#" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>收藏夹</span></a></div>
						</ul>
						</div>

						<!--悬浮搜索框-->

						<div class="nav white">
							<div class="logoBig">
								<a href="/home/goods"><li><img src="/sy/images/201608221646389704980.png" /></li></a>
								
							</div>

							<div class="search-bar pr">
								<a name="index_none_header_sysc" href="#"></a>
								<form>
									<input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off">
									<input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit">
								</form>
							</div>
						</div>

						<div class="clear"></div>
					</div>
				</div>
			</article>
		</header>
            <div class="nav-table">
					   <div class="long-title"><span class="all-goods">全部分类</span></div>
					   <div class="nav-cont">
							<ul>
								<li class="index"><a href="/home/goods">首页</a></li>
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
			<b class="line"></b>
		<div class="center">
			<div class="col-main">
				<div class="main-wrap">

					<div class="user-order">

						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">我的订单</strong> / <small></small></div>
						</div>
						<hr/>

						<div class="am-tabs am-tabs-d2 am-margin" data-am-tabs>

							<ul class="am-avg-sm-5 am-tabs-nav am-nav am-nav-tabs">
								<li class="am-active" style="width: 100%"><a href="#tab1">所有订单</a></li>
								
							</ul>

							<div class="am-tabs-bd">
								<div class="am-tab-panel am-fade am-in am-active" id="tab1">
									<div class="order-top">
										<div class="th th-item">
											<td class="td-inner">商品</td>
										</div>
										<div class="th th-price">
											<td class="td-inner">单价</td>
										</div>
										<div class="th th-number">
											<td class="td-inner">数量</td>
										</div>
										<div class="th th-operation">
											<td class="td-inner">商品操作</td>
										</div>
										<div class="th th-amount">
											<td class="td-inner">合计</td>
										</div>
										
										<div class="th th-change">
											<td class="td-inner">交易操作</td>
										</div>
									</div>
					
									<div class="order-main">
										<div class="order-list">
											
										@foreach($data as $k => $v)
											
											<!--交易成功-->
											<div class="order-status5">
												
												<div class="order-title">
													<div class="dd-num">订单编号：<a href="javascript:;">{{ $v->order_oid }}
													</div>
													<span>成交时间：{{ $v->created_at }}</span>
													<!--    <em>店铺：小桔灯</em>-->
												</div>
											
												<div class="order-content">
													
													<div class="order-left">
														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a href="#" class="J_MakePoint">
																		<img src="{{ $v->gpic }}" class="itempic J_ItemImg">
																	</a>
																</div>
																<div class="item-info">
																	<div class="item-basic-info">
																		<a href="#">
																			<p>{{ $v->gname }}</p>
																			<p class="info-little">
																				<br/> </p>
																		</a>
																	</div>
																</div>
															</li>

															<li class="td td-price">
																<div class="item-price">
																	{{ $v->price }}
																</div>
															</li>
															<li class="td td-number">
																<div class="item-number">
																	<span>×</span>{{ $v->cnt }}
																</div>
															</li>
															<li class="td td-operation">
																<div class="item-operation">
																	
																</div>
															</li>
														</ul>
														
													</div>
													
													<div class="order-right">
														<li class="td td-amount">
															<div class="item-amount">
																合计：{{ $v->sum }}
																<p>含运费：<span>0.00</span></p>
															</div>
														</li>
														<div class="move-right">
															
															<script>							
																function del(id,obj){

																		$.get('/home/ajaxorder',{'id':id},function(msg){
																			// console.log(msg);
																			if(msg == 'success'){
																				obj.parentNode.parentNode.parentNode.parentNode.parentNode.remove();
																			}else{
																				alert('删除失败');
																			}
																		},'html');
																	}
											         		</script>
																<a class="td td-change"  onclick="del('{{ $v->id }}',this)" >
																	<button  onclick="return confirm('确定删除吗?')" class="am-btn am-btn-danger anniu">
																		删除订单</button>

																</a>
															<!-- </form>	 -->
														</div>
													</div>
												</div>
											
											</div>
										</div>
									@endforeach
									</div>
									
								</div>
							</div>

						</div>
					</div>
				</div>
					<!-- <script>
											function del(id,obj){

													// $.get('/home/ajaxorder',{'id':id},function(msg){
													// 	console.log(msg);return;
													// 	if(msg == 'success'){
													// 		obj.parentNode.parentNode.parentNode.parentNode.parentNode.remove();
													// 	}else{
													// 		alert('删除失败');
													// 	}
													// },'html');
													$.ajax({
														type:'get',
														url:'/home/ajaxorder',
														data:{'id':id},
														datatype:'json',
														async:true
														success:function(msg){
															console.log(msg);
														}
													})

												}
							</script> -->
<!-- 
				底部 -->
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
			<aside class="menu">
				<ul>
					<li class="person">
						<a href="index.html">个人中心</a>
					</li>
					<li class="person">
						<a href="#">个人资料</a>
						<ul>
							<li> <a href="information.html">个人信息</a></li>
							<li> <a href="safety.html">安全设置</a></li>
							<li> <a href="address.html">收货地址</a></li>
						</ul>
					</li>
				</ul>

			</aside>
		</div>

	</body>

</html>
