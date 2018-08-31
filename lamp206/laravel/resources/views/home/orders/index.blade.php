

<!DOCTYPE >
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="renderer" content="webkit" />
 
<meta http-equiv="content-language" content="zh-CN" />
<!-- <link rel="icon" type="image/x-icon" href="http://www.ismei.net/favicon.ico" media="screen" /> -->
<!-- <link rel="shortcut icon" type="image/x-icon" href="http://www.ismei.net/favicon.ico" media="screen" /> -->
<meta name="author" content="Hishop development team" />
<meta name="GENERATOR" content="2.2(kb21001)" />

    <title id='pageTitleName'>支付</title>
    <script type="text/javascript" src="/sy/js/jquery.js"></script>
   
    <script type="text/javascript" src="/sy/js/jquery_1.js"></script>
    <script src="/sy/js/icheck.min_1.js"></script>
    <link rel="stylesheet" href="/sy/css/bootstrap.min_1.css" rev="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/sy/css/_all_1.css" />
    <link rel="stylesheet" href="/sy/css/style_1.css" type="text/css" media="" />
    <link rel="stylesheet" href="/sy/css/menu_1.css" type="text/css" media="" />
    <script src="/sy/js/windows_1.js"></script>
    <link href="/sy/css/windows_1.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
<!-- <title>jQuery城市三级联动 - H-ui前端框架代码特效</title> -->
<meta name="keywords" content="jQuery城市三级联动,代码特效,H-ui前端框架">
<meta name="description" content="H-ui前端框架代码特效JS城市三级联动">
<!-- <link href="http://static.h-ui.net/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" /> -->
<style type="text/css">
          
            .cart_Order_submit2 {
                margin: 0 auto;
                width: 200px;
                height: 70px;
                background: #F32D0C;
                font-size: 25px;
               float: right;
            }
            .footer {
    width: 100%;
    background-color: #FAFAFA;
    border-top: 1px solid #e3e3e3;
    padding: 15px 0;
}
.footer {
    clear: both;
    width: 100%;
    overflow: hidden;
    margin: 0 auto;
    margin-top: 25px;
}

</style>

</head>
<body>
   
   
<script src="/sy/js/common_1.js" type="text/javascript"></script>
<script src="/sy/js/pagevalidator_1.js" type="text/javascript"></script>
<script src="/sy/js/submmitorder.helper_1.js" type="text/javascript"></script>
<script src="/sy/js/wdatepicker_1.js"></script>
<link href="/sycss/wdatepicker_1.css" rel="stylesheet" />

<style>
    .noused {
        color: #aaa;
        cursor: no-drop;
        background: #fff none repeat scroll 0 0;
        border: 1px solid #e5e5e5;
        float: left;
        height: 28px;
        line-height: 28px;
        padding: 1px 25px;
        position: relative;
    }
</style>



<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="01CD2A39" />
    <div class="main">
        <div class="cart_h">
            <div id="logo">
                <div class="logo cssEdite" type="logo" id="logo_1" >
<a href="/home/goods/">
<img src="/sy/images/201608221646389704980.png" />
</a>
</div>

            </div>
            <div class="cart_step">
                <img src="/home/images/360截图16230312115135146.png" alt="">
            </div>
        </div>

        <div class="cart_content">

            <div class="OrderSubmit">
                <table class="MessageError" cellspacing="0" cellpadding="0" border="0" width="100%">
 
</table>
<!-- 内容 -->
 <div class="cart_content">

        <div class="cart_payment">
            <div class="con">
                
                <div class="title"><b> <img src="/templates/master/default/images/cart/successico.png"></b><em id="FinishOrder_msgTitle">订单提交成功，请您尽快付款！</em> </div>


                <div class="info">
                    <span>订单号：{{ $red }}</span>

                    <span>
                        支付总金额：<em class="emcolor">
                            ￥<span id="FinishOrder_litOrderPrice">{{ $sum['0'] }}</span>
                        </em>
                    </span>
                </div>

                <div id="FinishOrder_promptMsg" class="info1">请您在订单提交后 <em>3天</em>内完成支付，否则订单自动取消。</div>
            </div>
            <div id="FinishOrder_onlinePayPanel" class="pay_way skin-flat">
                <h2>请选择支付方式</h2>
                <input name="FinishOrder$paymentModeId" type="hidden" id="paymentModeId">
                
<ul >
    
            <li>     
                <div id="zhifubao" style="border: 1px solid #463E3E;height: 60px">
                    <img  id="zhifubao"  style="margin-top:10px;" src="/home/images/360截图16230312092109.png" alt="支付宝">
                 </div>  
           
           </li>
            <li>    
                 <div id="weixin" style="border: 1px solid #463E3E;height: 60px"> 
                      <img  style="margin-top:10px;" src="/home/images/360截图16230313115116110.png" alt="微信支付">
                 </div>   
           </li>
        
</ul>
                            <!-- 支付选中 -->
                            <script type="text/javascript" >

                                    // $("#zhifubao").click(function(){
                                       // $("#zhifubao").css('background','red');
                                    // });  
                                                          
                                    // $("#weixin").click(function(){
                                       // $("#weixin").css('background','red');
                                    // });
                                    // 
                                    

                            </script>

                <div class="submit1"><input type="submit" name="FinishOrder$btnOrderPay" value="立即支付" onclick="return checkPayment();" id="FinishOrder_btnOrderPay" class="core_order_pay_sub"></div>
            </div>

        </div>
    </div>
<div class="footer" id="footer">
    <div class="footer-nav">
<!-- 内容结束 -->
<dl>
    <dt>客户服务 </dt>
    
            <dd>
                <a href='/sy/help/show-10.aspx' target="_blank" title='隐私条款'>
                    隐私条款
                </a>
            </dd>
        
            <dd>
                <a href='/sy/help/show-11.aspx' target="_blank" title='公司简介'>
                    公司简介
                </a>
            </dd>
        
            <dd>
                <a href='/sy/help/show-12.aspx' target="_blank" title='安全条款'>
                    安全条款
                </a>
            </dd>
        
            <dd>
                <a href='/sy/help/show-13.aspx' target="_blank" title='联系方式'>
                    联系方式
                </a>
            </dd>
        
            <dd>
                <a href='/sy/help/show-17.aspx' target="_blank" title='服务声明'>
                    服务声明
                </a>
            </dd>
        
</dl>


<dl>
    <dt>购物指南 </dt>
    
            <dd>
                <a href='/sy/help/show-15.aspx' target="_blank" title='绿植寓意'>
                    绿植寓意
                </a>
            </dd>
        
            <dd>
                <a href='/sy/help/show-16.aspx' target="_blank" title='鲜花枝数寓意'>
                    鲜花枝数寓意
                </a>
            </dd>
        
            <dd>
                <a href='/sy/help/show-18.aspx' target="_blank" title='购物须知'>
                    购物须知
                </a>
            </dd>
        
            <dd>
                <a href='/sy/help/show-19.aspx' target="_blank" title='送花礼仪'>
                    送花礼仪
                </a>
            </dd>
        
            <dd>
                <a href='/sy/help/show-29.aspx' target="_blank" title='如何购买'>
                    如何购买
                </a>
            </dd>
        
</dl>


<dl>
    <dt>支付方式 </dt>
    
            <dd>
                <a href='/sy/help/show-9.aspx' target="_blank" title='支付方式'>
                    支付方式
                </a>
            </dd>
        
            <dd>
                <a href='/sy/help/show-27.aspx' target="_blank" title='银行转账'>
                    银行转账
                </a>
            </dd>
        
            <dd>
                <a href='/sy/help/show-28.aspx' target="_blank" title='在线补款'>
                    在线补款
                </a>
            </dd>
        
</dl>


<dl>
    <dt>配送信息 </dt>
    
            <dd>
                <a href='/sy/help/show-8.aspx' target="_blank" title='关于配送'>
                    关于配送
                </a>
            </dd>
        
            <dd>
                <a href='/sy/help/show-20.aspx' target="_blank" title='定时配送'>
                    定时配送
                </a>
            </dd>
        
            <dd>
                <a href='/sy/help/show-21.aspx' target="_blank" title='配送说明'>
                    配送说明
                </a>
            </dd>
        
            <dd>
                <a href='/sy/help/show-22.aspx' target="_blank" title='发票说明'>
                    发票说明
                </a>
            </dd>
        
            <dd>
                <a href='/sy/help/show-23.aspx' target="_blank" title='配送范围及费用'>
                    配送范围及费用
                </a>
            </dd>
        
</dl>


<dl>
    <dt>售后服务 </dt>
    
            <dd>
                <a href='/sy/help/show-14.aspx' target="_blank" title='投诉建议'>
                    投诉建议
                </a>
            </dd>
        
            <dd>
                <a href='/sy/help/show-24.aspx' target="_blank" title='订单查询'>
                    订单查询
                </a>
            </dd>
        
            <dd>
                <a href='/sy/help/show-25.aspx' target="_blank" title='订单取消'>
                    订单取消
                </a>
            </dd>
        
</dl>


        <img src="/sy//sy/picture/fwrx_1.png">
    </div>
    <div class="bottom">
        <style>
            .footerbox {
                width: 800px;
                margin: 0 auto;
                padding-top: 0px;
            }
        </style>
        <div class="footerbox">
            <img src="/sy/images/cxwz.gif">
            <img src="/sy/images/smyz.gif">
            <img src="/sy/images/cnnic.png">
            <img src="/sy/images/pay.jpg">
            <img src="/sy/images/wchar.jpg">
            <img src="/sy/images/360.jpg">
        </div>
        <div class="footer_link">
            
           本地订花热线 : 400-00-0000
        </div>
        <div class="Copyright">
            
            
            鲜花网 蜀ICP备15011281号
        </div>
    <!--     <script type="text/javascript">
        var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape("%3Cspan id='cnzz_stat_icon_1260081895'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1260081895%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));
</script> -->
    </div>
    <!--bottom结束-->
