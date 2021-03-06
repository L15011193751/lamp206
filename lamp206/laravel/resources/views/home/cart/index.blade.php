<!DOCTYPE>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <title>我的购物车</title>

        <link href="/home/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
        <link href="/home/basic/css/demo.css" rel="stylesheet" type="text/css" />
        <link href="/home/css/cartstyle.css" rel="stylesheet" type="text/css" />
        <link href="/home/css/optstyle.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript" src="/home/js/jquery.js"></script>
        <style type="text/css">
        
.btn-area {
    width: 180px;
    background: #F40;
    text-decoration: none;
    text-align: center;
}
.amount-sum, .price-sum, .btn-area {
    float: left;
    height: 48px;
    color: #3C3C3C;
    line-height: 48px;
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
                <div class="logo"><img src="" /></div>
                <div class="logoBig">
                    <li><img src="/sy/images/201608221646389704980.png" /></li>
                </div>

                <div class="search-bar pr">
                    
                        <img src="/home/images/360截图1623031497104132.png" alt="">
                </div> 
                
            </div><br>
              
            <div class="clear"></div>

            <!--购物车 -->
            <div class="concent">
                  <div >
                    
                    <p style="font-size: 22px ;color: " >购物车详情 :<p>
                </div>
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
                            <div class="th th-sum">
                                <div class="td-inner">金额</div>
                            </div>
                            <div class="th th-op">
                                <div class="td-inner">操作</div>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>
 
                    <tr class="item-list">
                        <div class="bundle  bundle-last ">
                            <div class="bundle-hd">
                                <div class="bd-promos">
                                    <div class="bd-has-promo">已享优惠:<span class="bd-has-promo-content">省￥19.50</span>&nbsp;&nbsp;</div>
                                    <div class="act-promo">
                                        <a href="#" target="_blank">第二束半价<span class="gt">&gt;&gt;</span></a>
                                    </div>
                                    <span class="list-change theme-login">编辑</span>
                                </div>
                            </div>
                            @foreach ($carts as $k => $v)
                         
                            <div class="clear"></div>
                            <div class="bundle-main">

                                <ul class="item-content clearfix">
                                    <li class="td td-chk">
                                        <div class="cart-checkbox ">
                                            <input class="check" id="checkbox_id" name="items[]" value="170037950254" type="checkbox">
                                            <label for="J_CheckBox_170037950254"></label>
                                        </div>
                                    </li>
             <script type="text/javascript">

                $('#checkbox_id').click(function(){
                    $('ul li div input:checkbox').attr({'checked':true});

                });
            </script>
                                  
                                    <li class="td td-item">
                                        <div class="item-pic">
                                            <a href="#" target="_blank" data-title="美康粉黛醉美东方唇膏口红正品 持久保湿滋润防水不掉色护唇彩妆" class="J_MakePoint" data-point="tbcart.8.12">
                                                <img style="width: 85px" src="{{ $v['gpic'] }}" class="itempic J_ItemImg"></a>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-basic-info">
                                                <a href="#" target="_blank" class="item-title J_MakePoint" data-point="tbcart.8.11">{{ $v['gname'] }}</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="td td-info">
                                        <div class="item-props item-props-can">
                                            <span class="sku-line">描述：{{ $v->gdesc }}</span>
                                            <span class="sku-line">包装：裸装</span>
                                            <!-- <span tabindex="0" class="btn-edit-sku theme-login">修改</span> -->
                                            <i class="theme-login am-icon-sort-desc"></i>
                                        </div>
                                    </li>
                      

                                <input type="hidden" name="gid" value="{$goods->gid}">
                                    <li class="td td-price">
                                        <div class="item-price price-promo-promo">
                                            <div class="price-content">
                                                <div class="price-line">
                                                    <em class="price-original">0.00</em>
                                                </div>
                                                <div class="price-line">
                                                    <em class="J_Price price-now" tabindex="0">{{ $v->price }}</em>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                            
                                    <li class="td td-amount">
                                        <div class="amount-wrapper ">
                                            <div class="item-amount ">
                                                <div class="sl">
                                                    <!-- min am-btn -->
                                                    <input class="jian_cart_btn am-btn" name="" type="button" value="-" />
                                                    <input class="text_box price_num" name="cnt" type="text" value="{{ $v['cnt'] }}" style="width:30px;" />
                                                    <input class="jia_cart_btn am-btn" name="" type="button" value="+" />
                                                    <!-- add am-btn -->
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="td td-sum">
                                        <div class="td-inner">
                                            小计 :<em tabindex="0" id="Money" class="J_ItemSum number">{{ $v['price']*$v['cnt'] }}</em>
                                        </div>
                                    </li>
                                   <script>
                                        function del(id,obj){
                                            // console.log(id);
                                        $.get("/home/ajaxcart",{'id':id},function(msg){
                                            console.log(msg);return;
                                            if(msg == 'success'){
                                               obj.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.romove();
                                            }else{
                                                alert('删除失败');
                                            }    
                                        },'html');
                                     }
                                </script>
                                    <!-- <li class="td td-op">  -->
                                             <a href="" onclick="del('{{ $v->id }}',this)">
                                                  <button type ="submit" onclick="return confirm('确认要删除这个商品吗')">删除1111</button>
                                             </a>                               
                                        <!-- </div>  -->
                                    <!-- </li> -->
                                </ul>       
                            </div>
                        </div>
                    </tr>

                    <div class="clear"></div>
                       
                
                    <div class="float-bar-wrapper">
                        

                    @endforeach
                    <div id="J_SelectAll2" class="select-all J_SelectAll" style="display: inline;">
                            <div class="cart-checkbox ">
                                <input class="check-all check  checkbox_cart_btn"  name="select-all" value="true" type="checkbox" >
                                <label for="J_SelectAllCbx2"></label>
                            </div>
                            <span>全 选</span>
                          
                </div>
                    
                    <div class="float-bar-right">
                        <div class="amount-sum">
                            <span class="txt">已选商品</span>
                            <em id="J_SelectedItemsCount">{{ $cnt }}</em><span class="txt">件</span>
                            <div class="arrow-box">
                                <span class="selected-items-arrow"></span>
                                <span class="arrow"></span>
                            </div>
                        </div>
                        <div class="price-sum">
                            <span class="txt">合计:</span>
                            <strong class="price money_price_bt " >¥<em >{{ $sum }}</em></strong>
                        </div>
                        <form action="/home/orders/" method="post">
                            {{ csrf_field() }}

                        <div class="btn-area">
                           
                                <button type="submit " class="btn-area "><h2>结&nbsp;算</h2></button>  
                        </div>
    </form>
                    </div>

                </div>

                <script type="text/javascript">
                        
                        $('.jia_cart_btn').click(function(){
                            var price_num = $(this).prev().val();
                            $(this).prev().val(++price_num);
                            var price = $(this).parent().parent().parent().parent().prev().find("em").eq(1).html();
                            
                            // console.log(price);
                            $(this).parent().parent().parent().parent().next().find("em").html(price_num *　price);
                          
                        });

                        $('.jian_cart_btn').click(function(){
                            var price_nx = $(this).next().val();
                            if(price_nx <= 1){
                                return alert('这是最后一个商品了');
                            }else{
                                $(this).next().val(--price_nx);
                                var price = $(this).parent().parent().parent().parent().prev().find("em").eq(1).html();

                                $(this).parent().parent().parent().parent().next().find("em").html(price_nx *　price);
                            }   

                        });

                  
                </script>
               

                <div class="footer">
                    <div class="footer-hd">
                        <p>
                           
                            <a href="#">商城首页</a>
                            <b>|</b>
                            <a href="#">支付宝</a>
                            <b>|</b>
                            <a href="#">物流</a>
                        </p>
                    </div>
                    <div class="footer-bd">
                        <p>
                           
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
                    <!-- <form class="theme-signin" name="loginform" action="" method="post"> -->

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

                    <!-- </form> -->
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