<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <title>购物车页面</title>

        <link href="AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
        <link href="/home/basic/css/demo.css" rel="stylesheet" type="text/css" />
        <link href="/home/css/cartstyle.css" rel="stylesheet" type="text/css" />
        <link href="/home/css/optstyle.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript" src="/home/js/jquery.js"></script>
        <style type="text/css">
        .btn-area {
            width: 80px;
            background: #DF0815;
            text-decoration: none;
            text-align: center;
        }
      
        }
        .cart_h {
            width: 1000px;
            margin: 0 auto;
            overflow: hidden;
            padding: 20px 0 10px;
            margin-bottom: 10px;
        }
       
        </style>
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
                    <div class="menu-hd"><a id="mc-menu-hd" href="#" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>购物车</span><strong id="J_MiniCartNum" class="h">0</strong></a></div>
                </div>
                <div class="topMessage favorite">
                    <div class="menu-hd"><a href="#" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>收藏夹</span></a></div>
            </ul>
            </div>

            <!--悬浮搜索框-->

            <div class="nav white">
                <div class="logo"><img src="/home/images/logo.png" /></div>
                <div class="logoBig">
                    <li><img src="/home/images/logobig.png" /></li>
                </div>

                <div class="search-bar pr">
                    <div id="header" class="cart_h">
        <div id="logo">
            <div class="logo cssEdite" type="logo" id="logo_1">
                <a href="/">
                <img src="/utility/pics/201608221646389704980.png">
                </a>
                </div>

                 </div>
                         <div class="cart_content">
            <span style="color: #C7C9BB;float: right;font-size: 25px;font-weight: bold;">确认详情:</span>
        </div>

                    </div>
                </div>
            </div>

            <div class="clear"></div>

            <!--购物车 -->
            <div class="concent">
      
                <div id="cartTable">
                    <div class="cart-table-th">
                        <div class="wp">
                            <div class="th th-chk">
                                <div id="J_SelectAll1" class="select-all J_SelectAll">

                                </div>
                            </div>
                            <div class="th th-item">
                                <div class="td-inner">商品信息</div>
                            </div>
                            <div class="th th-price">
                                <div class="td-inner">单价</div>
                            </div>
                            <div class="th th-amount">
                                <div class="td-inner">数量</div>
                            </div>
                            <!-- <div class="th th-sum">
                                <div class="td-inner">金额</div>
                            </div> -->
                            <div class="th th-op">
                                <div class="td-inner">操作</div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>

                    <tr class="item-list">
                        <div class="bundle  bundle-last ">
                            
                            <div class="clear"></div>
                            <div class="bundle-main">
                                <ul class="item-content clearfix">
                                    <li class="td td-chk">
                                        <!-- <div class="cart-checkbox ">
                                            <input class="check" id="J_CheckBox_170037950254" name="items[]" value="170037950254" type="checkbox">
                                            <label for="J_CheckBox_170037950254"></label>
                                        </div> -->
                                    </li>
                                    <li class="td td-item">
                                        <div class="item-pic">
                                            <a href="#" target="_blank" data-title="美康粉黛醉美东方唇膏口红正品 持久保湿滋润防水不掉色护唇彩妆" class="J_MakePoint" data-point="tbcart.8.12">
                                                <img src="{{ $data['gpic'] }}" style="width: 85px"></a>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-basic-info">
                                                <a href="#" target="_blank" title="美康粉黛醉美唇膏 持久保湿滋润防水不掉色" class="item-title J_MakePoint" data-point="tbcart.8.11">{{ $data['gname'] }}</a>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li class="td td-info">
                                        <div class="item-props ">
                                          
                                        </div>
                                    </li> 
                                    <li class="td td-price">
                                        <div class="item-price price-promo-promo">
                                            <div class="price-content">
                                                <div class="price-line">
                                                    <em class="price-original">78.00</em>
                                                </div>
                                                <div class="price-line">
                                                    <em class="J_Price price-now" tabindex="0">{{ $data['price'] }}</em>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="td td-amount">
                                        <div class="amount-wrapper ">
                                            <div class="item-amount ">
                                                <div class="sl">
                                                    <input class="min am-btn" name="" type="button" value="-" />
                                                    <input class="text_box" name="" type="text" value="{{ $data['cnt'] }}" style="width:30px;" />
                                                    <input class="add am-btn" name="" type="button" value="+" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li class="td td-op">
                                        <div class="td-inner">
                                            <a title="移入收藏夹" class="btn-fav" href="#">
                  移入收藏夹</a>
                                            <a href="javascript:;" data-point-url="#" class="delete">
                  删除</a>
                                        </div>
                                    </li>
                                </ul>
                                

                            </div>
                        </div>
                    </tr>
                    <div class="clear"></div>
                </div>
                <div class="float-bar-wrapper">
                    <div id="J_SelectAll2" class="select-all J_SelectAll">
                        <!-- <div class="cart-checkbox">
                            <input class="check-all check" id="J_SelectAllCbx2" name="select-all" value="true" type="checkbox">
                            <label for="J_SelectAllCbx2"></label>
                        </div> -->
                        <span>全选</span>
                    </div>
                    <!-- <div class="operations">
                        <a href="#" hidefocus="true" class="deleteAll">删除</a>
                        <!-- <a href="#" hidefocus="true" class="J_BatchFav">移入收藏夹</a> -->
                    <!-- </div> -->
                     <form action="/home/cart/" method="post">
                        {{ csrf_field() }}
                    <div class="float-bar-right">

                        <div class="btn-area">   
                                <button style="submit font-size: 16px;" class="btn-area">确认商品</button>
                        </div>

                    </div>
</form>
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

            <!--操作页面-->

            <div class="theme-popover-mask"></div>

            <div class="theme-popover">
                <div class="theme-span"></div>
                <div class="theme-poptit h-title">
                    <a href="javascript:;" title="关闭" class="close">×</a>
                </div>
                <div class="theme-popbod dform">
                    <form class="theme-signin" name="loginform" action="" method="post">

                        <div class="theme-signin-left">

                            <li class="theme-options">
                                <div class="cart-title">颜色：</div>
                                <ul>
                                    <li class="sku-line selected">12#川南玛瑙<i></i></li>
                                    <li class="sku-line">10#蜜橘色+17#樱花粉<i></i></li>
                                </ul>
                            </li>
                            <li class="theme-options">
                                <div class="cart-title">包装：</div>
                                <ul>
                                    <li class="sku-line selected">包装：裸装<i></i></li>
                                    <li class="sku-line">两支手袋装（送彩带）<i></i></li>
                                </ul>
                            </li>
                            <div class="theme-options">
                                <div class="cart-title number">数量</div>
                                <dd>
                                    <input class="min am-btn am-btn-default" name="" type="button" value="-" />
                                    <input class="text_box" name="" type="text" value="1" style="width:30px;" />
                                    <input class="add am-btn am-btn-default" name="" type="button" value="+" />
                                    <span  class="tb-hidden">库存<span class="stock">1000</span>件</span>
                                </dd>

                            </div>
                            <div class="clear"></div>
                            <div class="btn-op">
                                <div class="btn am-btn am-btn-warning">确认</div>
                                <div class="btn close am-btn am-btn-warning">取消</div>
                            </div>

                        </div>
                        <div class="theme-signin-right">
                            <div class="img-info">
                                <img src="images/kouhong.jpg_80x80.jpg" />
                            </div>
                            <div class="text-info">
                                <span class="J_Price price-now">¥39.00</span>
                                <span id="Stock" class="tb-hidden">库存<span class="stock">1000</span>件</span>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        <!--引导 -->
        <div class="navCir">
            <li><a href="home.html"><i class="am-icon-home "></i>首页</a></li>
            <li><a href="sort.html"><i class="am-icon-list"></i>分类</a></li>
            <li class="active"><a href="shopcart.html"><i class="am-icon-shopping-basket"></i>购物车</a></li>  
            <li><a href="person/index.html"><i class="am-icon-user"></i>我的</a></li>                 
        </div>
    </body>

</html>