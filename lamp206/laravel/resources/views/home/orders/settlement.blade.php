

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

    <title id='pageTitleName'>鲜花 | 本地实体花店</title>

   
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

                        </style>
                        <link rel="stylesheet" type="text/css" href="/home/layui-v2.3.0/layui/css/layui.css">
                        <script type="text/javascript" src="/home/layui-v2.3.0/layui/layui.js"></script>
                        <style type="text/css">
                        html,body{height:auto;}
                        #province select{margin-left:10px; width:100px}
                        </style>
                        </head>
                         <script>
                            //一般直接写在一个js文件中
                            layui.use(['layer', 'form'], function(){
                              var layer = layui.layer
                              ,form = layui.form;
                              
                             
                            });
                        </script> 
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
<a href="/">
<img src="/sy/images/201608221646389704980.png" />
</a>
</div>

            </div>
            <div class="cart_step">
                <ul class="cart_step2">
                    <li class="step-1"><b></b>1.我的购物车</li>
                    <li class="step-2"><b></b>2.填写核对订单信息</li>
                    <li class="step-3">3.成功提交订单</li>
                </ul>
            </div>
        </div>

        <div class="cart_content">

            <div class="OrderSubmit">
                <table class="MessageError" cellspacing="0" cellpadding="0" border="0" width="100%">
   
</table>
                <div class="cart_Order_deliver">
                    <h3>请选择收货地址</h3>
                </div>
                 <div id="pannel_noaddress">
    
                    
                    <div class="cart_Order_address" id="noaddressDiv" style="display:none;">
                        <div class="address_have" id="addresslist">
                            <div class="address_tab">

                            </div>
                           
                        </div>
                        <div class="comon_submmitorder_address">
                             
                        </div>
                    </div>
                    
                
</div> 
                    <div style=" background: #D1CDCD;border: 3px solid #E50D0D">
                         @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </div>
                   

                
                <div class="comon_submmitorder_address2">
                    <input type="hidden" id="hdcopyshipping" value="SubmmitOrder_txtShipTo,SubmmitOrder_txtCellPhone,SubmmitOrder_txtTelPhone,SubmmitOrder_txtZipcode,SubmmitOrder_txtAddress" />
                    
    


 <form action="/home/orders" method="post">  
     {{ csrf_field() }}
               <div  style=" font-size: 20px;">
                   <div class="cart_Order_address" id="user_shippingaddress" style="">
                    <div class="con">
                        <div class="title">
                            <h2 id="tr_addresstitle">填写收花信息</h2>
                            
                        </div>
   
                        <ul>
                            <li>
                                <h2><em>*</em>收花人姓名：</h2>
                                <input name="rec" type="text" id="SubmmitOrder_txtShipTo" class="textform form-control" validategroup="default">
                                <span id="SubmmitOrder_txtShipToTip"></span>
                            </li>
                            <li>
                                <h2><em>*</em>收花人手机：</h2>
                                <input name="phone" type="text" value="" id="" class="textform form-control" validategroup="default" placeholder=""> 
                                <span id="SubmmitOrder_txtCellPhoneTip"></span>
                            </li>
                            <li>
                                <h2><em>*</em>收花地址：</h2>
                                    <div style="font-size: 16px">
                                        <div id="province"></div>
                                        <script type="text/javascript" src="http://lib.h-ui.net/jquery/1.9.1/jquery.min.js"></script>
                                        <script type="text/javascript" src="/sy/jquery.provincesCity.js"></script>
                                        <script type="text/javascript" src="/sy/provincesData.js"></script>
                                        <script type="text/javascript">
                                        /*调用插件*/
                                        $(function(){
                                            $("#province").ProvinceCity();
                                        });
                                        </script>   
                                    </div>
                                                         
                            </li>
                            <li>
                                <h2><em>*</em>详细地址：</h2>
                                <input name="addr" type="text" id="SubmmitOrder_txtAddress" class="textform form-control" style="width:400px;" validategroup="default"><span id="SubmmitOrder_txtAddressTip"></span>
                            </li>
                            <li>
                                <h2><em>*</em>订花人姓名：</h2>
                                <input name="uname" type="text" id="SubmmitOrder_txtShipFrom" class="textform form-control">
                                <span id="SubmmitOrder_txtShipFromTip"></span>
                            </li>
                            <li>
                                <h2><em>*</em>订花人手机：</h2>
                                <input name="tel" type="text" id="SubmmitOrder_txtCellPhoneFrom" class="textform form-control"> 
                                <span id="SubmmitOrder_txtCellPhoneFromTip"></span>
                            </li>






                            <li style="display:none;">
                                <h2>邮政编码：</h2>
                                <input name="SubmmitOrder$txtZipcode" type="text" id="SubmmitOrder_txtZipcode" class="textform form-control"> 
                            </li>
                            <li style="display:none;">
                                <h2>电话号码：</h2>
                                <input name="SubmmitOrder$txtTelPhone" type="text" id="SubmmitOrder_txtTelPhone" class="textform form-control" validategroup="default"> 
                                <span id="SubmmitOrder_txtTelPhoneTip"></span>
                            </li>
                            
                            <li id="btnaddr" style="display: none;">
                                <a class="save" onclick="return AddShippAddress()">保存</a>
                            </li>
                        </ul>
                    </div>
                </div>
               </div>

                <div class="cart_Order_deliver">
                <div class="title"><h3>配送方式/送货时间</h3></div>
                <div class="step">
                    <div class="deliver_way">
 
 
                            <!-- 自提弹窗静态-->
                            <div class="mendian cart_Order_address2">
                                <div class="con">
                                    <div class="title">
                                        <h2 id="tr_addresstitle">修改自提门店</h2>
                                        <em><img id="imgCloseLogin" src="/sy/picture/close_btn_1.png" width="12" height="12" /></em>
                                    </div>
                                    <div class="info">
                                        <div class="info1">
                                            <h2>区域：</h2>
                                            <span>
                                                <select>
                                                    <option value="">全部区域</option>
                                                </select>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                       
                            <!-- onclick="WdatePicker({dateFmt:&#39;yyyy-MM-dd&#39;} -->

                        <div class="Order_deliver_time">
                            <h2>送货日期 :</h2>
                            <input name="SendDate" type="text" id="SubmmitOrder_txtSendDate" class="textform form-control" style="width:170px;height:28px;padding:0;padding-left: 10px;" )" autocomplete="off" placeholder="请选择日期" />
                        </div>
                        <script>
                            layui.use('laydate', function(){
                              var laydate = layui.laydate;
                              
                              //执行一个laydate实例
                              laydate.render({
                                elem: '#SubmmitOrder_txtSendDate' //指定元素
                              });
                            });
                        </script>
                        <div class="Order_deliver_time">
                            <h2>送货时间 :</h2>
                            <select name="ToDate" id="SubmmitOrder_drpShipToDate" style="height: 28px; border: 1px solid #e5e5e5; text-align: center; color: #585858; width: 170px; overflow: hidden; ">
                            <option value="不限时段    ">不限时段     </option>
                            <option value="上午        ">上午        </option>
                            <option value="下午        ">下午        </option>
                            <option value="晚上        ">晚上        </option>
                            <option value="08-10点     ">08-10点     </option>
                            <option value="10-12点     ">10-12点     </option>
                            <option value="12-14点     ">12-14点     </option>
                            <option value="14-16点     ">14-16点     </option>
                            <option value="16-18点     ">16-18点     </option>
                            <option value="18-20点     ">18-20点     </option>
                            <option value="20-22点     ">20-22点     </option>
                        </select>
                        </div>
                        </div>


                </div>
                <!-- end -->
            </div>
        </div>
        <!-- 支付方式静态-->
        <div class="cart_Order_deliver payment_way" style="display:none;">
            <div class="title"><h3>支付方式</h3></div>
            <div class="step">
                <ul>
                    <li><div class="zhifu"><b></b>在线支付</div></li>
                    <li style="display:none;"><div class="zhifu"><b></b>货到付款</div></li>
                    <li style="display:none;"><div class="zhifu"><b></b>到店支付</div></li>
                    <li style="display:none;"><div class="zhifu"><b></b>线下付款</div></li>
                </ul>
            </div>
        </div>

        <div class="cart_Order_info">
            <div id="divProductList">
                <h3>商品清单<a href="/home/cart/" class="return">返回改购物车</a></h3>
                <div class="cart_Order_info2">
                    
                <div class="list">
                    <div class="title">
                        <div class="name"><em>商品</em></div>
                        <div class="price">单价</div>
                        <div class="num">数量</div>
                        <div class="total">小计</div>
                    </div>
                    
                </div>

                @foreach($carts as $k => $v)
                    <div class="cart_Order_info2">
                    
<div class="list">
    
    
            <div class="con skuid_2611_0">
                <div class="name">
                    <div class="pic">
                        <a id="SubmmitOrder_Common_SubmmintOrder_ProductList___dataListShoppingCrat_ctl00_ProductDetailsLink2" href="/product_detail-2611.aspx" target="_blank"><img id="" src="{{ $v['gpic'] }}" style="width:80px;border-width:0px;"></a>
                    </div>
                    <div class="item-msg">
                        <a id="" href="{{ $v['gpic'] }}" target="_blank">{{ $v['gname'] }}</a>
                        <div class="p-extend">
                            
                        </div>
                        <div class="gift_list">
                            
                        </div>
                    </div>
                </div>
                <div class="price">
                    <span>￥<span id="" name="price">{{ $v['price'] }}</span></span>
                </div>
                <div class="num" name="cnt">
                    {{ $v['cnt'] }}
                </div>
                <div class="total" " >
                    <span>￥<span name="price">{{ $v['price']*$v['cnt'] }}</span></span>
                </div>
            </div>
        
</div>



                    <div class="cart_Weight" style="display:none;">
                        <strong>货物总重量（含礼品）：</strong><span style="color: Green; font-weight: 700;"><span id="SubmmitOrder_litAllWeight">0.00</span></span>
                        克
                    </div>
                </div>
           @endforeach

               

            <div class="cart_Order_info3">
                <div class="cart_Order_coupon3">

                    <div class="fl">
                        
                        <div class="">
                            <em><h2>卡片留言：</h2>&nbsp;</em>             
                            <span style="font-size: 20px;color: #34AFE7 " >
                                <textarea name="umsg" rows="4" cols="50" placeholder="您想说的话(50字以内)....">
                            </textarea>
                            </span>
                        </div>
                    </div>
                 </div>
             </div>
          <div class="cart_Order_total">

                <div class="list" id="divCoupons"><em>-￥<span id="SubmmitOrder_litCouponAmout">0.00</span></em><b>优惠券：</b></div>
                <div class="list" id="divPromtion"><em>- ￥<span id="SubmmitOrder_lblDeductibleMoney">0.00</span></em><b>满减：</b> </div>
                <div class="list" id="divFreight">
                    <em>
                        ￥<span id="" Freight="0">0</span>
                        <a id="" target="_blank" style="display:none;"></a>
                    </em>
                    <b><h2>运费：</h2></b>
                </div>
              
                <div class="list">
                    <div class="total"><em>￥<span id="">&nbsp;{{ $sum['0'] }}</span></em><b>
                        <h2>订单实付：</h2></b></div>
                </div>
                <div class="list" id="divGetPoints">
                    <div class="pointtotal">
                        可得积分
                        <span id=""></span><br />
                        <a id="" target="_blank" style="display:none;"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart_Order_submit2 ">
            <button  class="cart_Order_submit2" type="submit"> 提交订单</button>
        </div>
        </div>
</form>       
<!-- </form> -->
    <div class="zhezhao"></div>

    <!--所有的隐藏域-->
    

   
    
<div class="footer" id="footer">
    <div class="footer-nav">
        

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
            <img src="/sy/picture/cxwz_1.gif">
            <img src="/sy/picture/smyz_1.gif">
            <img src="/sy/picture/cnnic_1.png">
            <img src="/sy/picture/pay_1.jpg">
            <img src="/sy/picture/wchar_1.jpg">
            <img src="/sy/picture/360_1.jpg">
            <img src="/sy/picture/erm_1.jpg">
        </div>
        <div class="footer_link">
            
           本地订花热线 : 400-901-0239
        </div>
        <div class="Copyright">
            
            
            鲜花网 蜀ICP备15011281号
  
    </div>
    <!--bottom结束-->
