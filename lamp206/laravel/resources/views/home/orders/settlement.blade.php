

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="renderer" content="webkit" />

    <script language="javascript" type="text/javascript"> 
            var applicationPath = "";
            var skinPath = "/templates/master/default";
            var subsiteuserId = "0";
            var HasWapRight = true;
            var IsOpenStores = false;
            var IsOpenReferral = 1;
            var HasVshopRight = true;
        </script>
<meta http-equiv="content-language" content="zh-CN" />
<link rel="icon" type="image/x-icon" href="http://www.ismei.net/favicon.ico" media="screen" />
<link rel="shortcut icon" type="image/x-icon" href="http://www.ismei.net/favicon.ico" media="screen" />
<meta name="author" content="Hishop development team" />
<meta name="GENERATOR" content="2.2(kb21001)" />

    <title id='pageTitleName'>爱上鲜花网 | 本地实体花店</title>

    <meta name="description" content="爱上鲜花网,中国爱上鲜花网-中国鲜花网知名品牌,Ismei.net专注鲜花速递服务10年,销量居中国鲜花网站前列！爱上鲜花网可24小时预订鲜花，同城送花、异地送花服务,网上订花后最快3小时即可将鲜花快递上门,送花服务覆盖中国900多城市！" />
<meta name="keywords" content="中国鲜花网,鲜花,鲜花网,订购鲜花,定购鲜花,预定鲜花,预订鲜花,配送鲜花,快递鲜花,速递鲜花,鲜花订购,鲜花定购,鲜花预定,鲜花预订,鲜花配送,鲜花快递,鲜花速递,爱上鲜花网,中国鲜花网,鲜花速递网站,网上订花送花上门,鲜花快递网上花店" />

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
<link href="http://static.h-ui.net/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<style type="text/css">
html,body{height:auto;}
#province select{margin-left:10px; width:100px}
.cart_Order_address {
    background: #F1F0F6;
    padding: 20px;

}
.cart_Order_address, .cart_Order_info {
    width: 998px;

}
cart_Order_deliver, .cart_Order_info2 {
    width: 1000px;
    padding-bottom: 0px;
   }
.item-content {
    width: 100%;
    overflow: hidden;
    position: relative;
    padding-bottom: 15px;
    border-top: #F5F5F5 1px solid;
}
.cart2 {
    width: 1000px;
    color: #9f9f9f;
    padding-bottom: 20px;
    overflow: hidden;
    clear: both;
    float: left;
}

</style>
</head>
<body>
    <style>
        * {
            box-sizing: content-box;
        }

        .main {
            margin: 0 auto;
            width: 1000px;
            clear: both;
            overflow: hidden;
        }

        .top .top-main {
            width: 1000px;
        }
    </style>

    <div id="header" class="top">
        <div class="top-w">
            <div class="top-main">
                <span style="display: none;">
                    
                </span>
                <div class="header_top1">
                    <div class="fl">
                        您好，欢迎光临爱上鲜花网 | 本地实体花店
                    </div>
                    <div class="fr top1_r">
                        <ul>
                            <li>
                                <a id="SubmmitOrder_ctl00___linkMyAccount" href="/Register.aspx">注册</a></li>
                            <li id="liLinkLogin">
                                <a href="/User/login.aspx?ReturnUrl=/SubmmitOrder.aspx?productSku=1865_0,2140_0,2694_0">登录</a><input type="hidden" id="hidIsLogin" value="0"/></li>
                            <li class="fore3">
                                <div class="cw-icon"><em><a href="javascript:;">微信商城</a><i><img src="/sy/picture/jiantou_03_1.png"></i></em></div><div class="dorpdown-layer"><img src="/sy/picture/www.ismei.net_vshop_1.png" /></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function () {
            $('.cart_chekout').click(function () {
                $('.modal_qt').css('display', 'none');
            })

            $("#imgCloseLogin").bind("click", function () {
                $("#loginForBuy").hide();
                $(".modal_qt").remove();

            });
            $('.dialog_title_r').click(function(){
                $('.login_tan').hide();
                $('.modal_qt').hide();
            })
            var hidIsLogin = $("#hidIsLogin");
            if (hidIsLogin.val() == "1") {
                $("#liLinkLogin").addClass("fore3");
            } else {
                $("#liLinkLogin").removeClass("fore3");
            }
        }
        )
    </script>

<script src="/sy/js/common_1.js" type="text/javascript"></script>
<script src="/sy/js/pagevalidator_1.js" type="text/javascript"></script>
<script src="/sy/js/submmitorder.helper_1.js" type="text/javascript"></script>
<script src="/sy/js/wdatepicker_1.js"></script>
<link href="/sycss/wdatepicker_1.css" rel="stylesheet" />
<script language="javascript" type="text/javascript">
    function InitValidators() {
        initValid(new InputValidator('SubmmitOrder_txtShipTo', 2, 20, false, '[\u4e00-\u9fa5a-zA-Z]+[\u4e00-\u9fa5_a-zA-Z0-9]*', '名字不能为空，只能是汉字或字母开头，长度在2-20个字符之间'));
        initValid(new InputValidator('SubmmitOrder_txtAddress', 3, 200, false, null, '详细地址不能为空,3-200个字符'));
        initValid(new InputValidator('SubmmitOrder_txtTelPhone', 3, 20, true, '^[0-9-]*$', '电话号码长度限制在3-20个字符之间，只能输入数字和字符“-”'));
        initValid(new InputValidator('SubmmitOrder_txtCellPhone', 3, 20, true, '^[0-9]*$', '收货人的手机号码,只能输入数字'));

    }
    $(document).ready(function () {
        javascript: window.history.forward(1);
        $(".ap_content a").live("click", function (e) {
            ChooiceRegion($(this).attr("id"), e);
            var regionId = GetSelectedRegionId();
            ResetShipingModel(regionId);
        });
        $('.con em img').click(function () {
            $('.mendian').css('display', 'none');
            $('.zhezhao').css('display', 'none');
        })

        $('.addr-detail .name input').on('ifChecked', function (event) {
            $('.addr-detail').removeClass('select');
            $(this).parents('.addr-detail').addClass('select');
        });
        $('.skin-flat input').iCheck({
            checkboxClass: 'icheckbox_flat-red',
            radioClass: 'iradio_flat-red'
        });

        InitValidators();
        Bind();
    });



    function Bind()
    {
        $("#expresslist .item").bind("click", function ()
        {
            var price = ($(this).children(".el2").val() * 1).toFixed(2);



            var title = $(this).children(".el1").val();


            //$("#expresslist .item").removeAttr("b");

            $("#expresslist .item b").remove();
            $("#expresslist .item").attr("style", "border:1px solid #808080");

            if ($(this).attr("style")) {
                $(this).removeAttr("style");
                $(this).html("<b></b>" + $(this).html());
            }
            $("#SubmmitOrder_lblShippModePrice").attr("freight", price);
            $("#SubmmitOrder_lblShippModePrice").html(price);




            var total = ($("#hidTotalPrice").val()*1).toFixed(2);

            total = price * 1 + total * 1;

            $("#SubmmitOrder_lblOrderTotal").html(total);

            $("#hidFreightTitle").val(title);

            $("#hidFreight").val(price);

            return false;
        });
    }

</script>
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

<form name="aspnetForm" method="post" action="SubmmitOrder.aspx?productSku=1865_0%2c2140_0%2c2694_0" id="aspnetForm">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUJMzQyNzc1MDk5D2QWAmYPZBYCZg9kFgQCBg9kFgQCJg9kFgJmD2QWAgIBDxYCHgtfIUl0ZW1Db3VudAIDFgZmD2QWAmYPFQMO6L+c6YOKKCs1MOWFgykO6L+c6YOKKCs1MOWFgykHNTAuMDAwMGQCAQ9kFgJmDxUDDumDiuWMuigrMzDlhYMpDumDiuWMuigrMzDlhYMpBzMwLjAwMDBkAgIPZBYCZg8VAw7luILljLoo5YWN6LS5KQ7luILljLoo5YWN6LS5KQYwLjAwMDBkAkwPDxYCHgRUZXh0BQEwFgIeB0ZyZWlnaHQFATBkAggPZBYCZg9kFgICAQ8WAh8AAgUWCmYPZBYCZg9kFgRmDxUBDOWuouaIt+acjeWKoWQCAQ8WAh8AAgUWCmYPZBYEZg8VAhIvaGVscC9zaG93LTEwLmFzcHgM6ZqQ56eB5p2h5qy+ZAIBDxYCHwEFDOmakOengeadoeasvmQCAQ9kFgRmDxUCEi9oZWxwL3Nob3ctMTEuYXNweAzlhazlj7jnroDku4tkAgEPFgIfAQUM5YWs5Y+4566A5LuLZAICD2QWBGYPFQISL2hlbHAvc2hvdy0xMi5hc3B4DOWuieWFqOadoeasvmQCAQ8WAh8BBQzlronlhajmnaHmrL5kAgMPZBYEZg8VAhIvaGVscC9zaG93LTEzLmFzcHgM6IGU57O75pa55byPZAIBDxYCHwEFDOiBlOezu+aWueW8j2QCBA9kFgRmDxUCEi9oZWxwL3Nob3ctMTcuYXNweAzmnI3liqHlo7DmmI5kAgEPFgIfAQUM5pyN5Yqh5aOw5piOZAIBD2QWAmYPZBYEZg8VAQzotK3nianmjIfljZdkAgEPFgIfAAIFFgpmD2QWBGYPFQISL2hlbHAvc2hvdy0xNS5hc3B4DOe7v+akjeWvk+aEj2QCAQ8WAh8BBQznu7/mpI3lr5PmhI9kAgEPZBYEZg8VAhIvaGVscC9zaG93LTE2LmFzcHgS6bKc6Iqx5p6d5pWw5a+T5oSPZAIBDxYCHwEFEumynOiKseaeneaVsOWvk+aEj2QCAg9kFgRmDxUCEi9oZWxwL3Nob3ctMTguYXNweAzotK3nianpobvnn6VkAgEPFgIfAQUM6LSt54mp6aG755+lZAIDD2QWBGYPFQISL2hlbHAvc2hvdy0xOS5hc3B4DOmAgeiKseekvOS7qmQCAQ8WAh8BBQzpgIHoirHnpLzku6pkAgQPZBYEZg8VAhIvaGVscC9zaG93LTI5LmFzcHgM5aaC5L2V6LSt5LmwZAIBDxYCHwEFDOWmguS9lei0reS5sGQCAg9kFgJmD2QWBGYPFQEM5pSv5LuY5pa55byPZAIBDxYCHwACAxYGZg9kFgRmDxUCES9oZWxwL3Nob3ctOS5hc3B4DOaUr+S7mOaWueW8j2QCAQ8WAh8BBQzmlK/ku5jmlrnlvI9kAgEPZBYEZg8VAhIvaGVscC9zaG93LTI3LmFzcHgM6ZO26KGM6L2s6LSmZAIBDxYCHwEFDOmTtuihjOi9rOi0pmQCAg9kFgRmDxUCEi9oZWxwL3Nob3ctMjguYXNweAzlnKjnur/ooaXmrL5kAgEPFgIfAQUM5Zyo57q/6KGl5qy+ZAIDD2QWAmYPZBYEZg8VAQzphY3pgIHkv6Hmga9kAgEPFgIfAAIFFgpmD2QWBGYPFQIRL2hlbHAvc2hvdy04LmFzcHgM5YWz5LqO6YWN6YCBZAIBDxYCHwEFDOWFs+S6jumFjemAgWQCAQ9kFgRmDxUCEi9oZWxwL3Nob3ctMjAuYXNweAzlrprml7bphY3pgIFkAgEPFgIfAQUM5a6a5pe26YWN6YCBZAICD2QWBGYPFQISL2hlbHAvc2hvdy0yMS5hc3B4DOmFjemAgeivtOaYjmQCAQ8WAh8BBQzphY3pgIHor7TmmI5kAgMPZBYEZg8VAhIvaGVscC9zaG93LTIyLmFzcHgM5Y+R56Wo6K+05piOZAIBDxYCHwEFDOWPkeelqOivtOaYjmQCBA9kFgRmDxUCEi9oZWxwL3Nob3ctMjMuYXNweBXphY3pgIHojIPlm7Tlj4rotLnnlKhkAgEPFgIfAQUV6YWN6YCB6IyD5Zu05Y+K6LS555SoZAIED2QWAmYPZBYEZg8VAQzllK7lkI7mnI3liqFkAgEPFgIfAAIDFgZmD2QWBGYPFQISL2hlbHAvc2hvdy0xNC5hc3B4DOaKleivieW7uuiurmQCAQ8WAh8BBQzmipXor4nlu7rorq5kAgEPZBYEZg8VAhIvaGVscC9zaG93LTI0LmFzcHgM6K6i5Y2V5p+l6K+iZAIBDxYCHwEFDOiuouWNleafpeivomQCAg9kFgRmDxUCEi9oZWxwL3Nob3ctMjUuYXNweAzorqLljZXlj5bmtohkAgEPFgIfAQUM6K6i5Y2V5Y+W5raIZBgBBR5fX0NvbnRyb2xzUmVxdWlyZVBvc3RCYWNrS2V5X18WAgUTU3VibW1pdE9yZGVyJGNoa1RheAUbU3VibW1pdE9yZGVyJGNoa0lzVXNlUG9pbnRz+KGoz/0+TAwQFi+Ggxg/0RyTAdk=" />

<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="01CD2A39" />
    <div class="main">
        <div class="cart_h">
            <div id="logo">
                <div class="logo cssEdite" type="logo" id="logo_1" >
<a href="/">
<img src="/sy/picture/201608221646389704980_1.png" />
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
    <tr>
        <td style="padding-right: 3px;"><img src="/sy/picture/warning_1.gif" align="absmiddle" style="padding-right: 3px;" /></td><td align="left" width="100%"><nobr>购物车中已经没有任何商品<nobr/></td>
    </tr>
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
                <div class="comon_submmitorder_address2">
                    <input type="hidden" id="hdcopyshipping" value="SubmmitOrder_txtShipTo,SubmmitOrder_txtCellPhone,SubmmitOrder_txtTelPhone,SubmmitOrder_txtZipcode,SubmmitOrder_txtAddress" />
                    

<table id="tab_pasteaddress" style="display:none">
<tr><td rowspan="3">粘贴收货人地址：</td>
<td>请先选择您的代销网站类型，然后去网店复制下单用户的收货人地址，在下列大方框用"Ctrl+V"粘贴。</td>
</tr>
<tr><td>
<input type="radio" name="radaddresstype" id="radtaobao" value="taobao" checked="checked"  onclick="return PasteAddress()"/>淘宝　　
<input type="radio" name="radaddresstype" id="radpaipai" value="paipai" onclick="return PasteAddress()" />拍拍　　　
</td></tr>
<tr><td><textarea rows="5" cols="50" id="txtarea" onblur="return PasteAddress()"></textarea></td></tr>
</table>

<script>
    function PasteAddress() {
        if ($("#hdcopyshipping").val().replace(/\s/g, "") == null || $("#hdcopyshipping").val().replace(/\s/g, "") == "undefined" || $("#hdcopyshipping").val().replace(/\s/g, "") == "") {
            alert("指定参数无效！");
            return false;
        }

        if ($("#hdcopyshipping").val().replace(/\s/g, "").split(',') != null && $("#hdcopyshipping").val().replace(/\s/g, "").split(',').length != 5) {
            alert("指定参数长度有误！");
            return false;
        }

        var shippingaddress = $("#hdcopyshipping").val().replace(/\s/g, "").split(',');

        var pastetype = "";
        $("#tab_pasteaddress input[type='radio']").each(function () {
            if ($(this).attr("checked")) {
                pastetype = $(this).val();
            }
        });
        var pastecontent = $("#txtarea").val();
        var shipto = ""; //收货人
        var regioncity = ""; //城市
        var regionpro = ""; //省份
        var regionarea = ""; //区
        var ship_region_addr;
        if (pastecontent != null && pastecontent != "" && pastecontent != "undefined") {
            switch (pastetype) {
                case "taobao":
                    ship_info_arr = pastecontent.split('，');
                    var index = 0;
                    if (ship_info_arr[index]) { $("#" + shippingaddress[0]).val(ship_info_arr[index]); $("#" + shippingaddress[0]).focus(); index++; }
                    if (ship_info_arr[index].indexOf('-') == -1) { $("#" + shippingaddress[1]).val(ship_info_arr[index]); index++; }
                    if (ship_info_arr[index].indexOf(' ') == -1) { $("#" + shippingaddress[2]).val(ship_info_arr[index]); index++; }
                    if (ship_info_arr[index]) { ship_region_addr = ship_info_arr[index].split(' '); index++; }
                    if (ship_info_arr[index]) { $("#" + shippingaddress[3]).val(ship_info_arr[index]); $("#" + shippingaddress[4]).focus(); }
                    if (ship_region_addr != null && ship_region_addr != "undefined" && ship_region_addr.length >= 3) {
                        if (ship_region_addr[0]) regionpro = ship_region_addr[0];
                        if (ship_region_addr[1]) regioncity = ship_region_addr[1];
                        if (ship_region_addr[2]) regionarea = ship_region_addr[2];
                        if (ship_region_addr[3]) $("#" + shippingaddress[4]).val(ship_region_addr[3]);
                        for (var i = 4; i < ship_region_addr.length - 1; i++) {
                            $("#" + shippingaddress[4]).val($("#" + shippingaddress[4]).val() + " " + ship_region_addr[i]);
                        }
                    }
                    break;
                case "paipai":
                    ship_info_arr = pastecontent.split(' ，');
                    if (ship_info_arr[0]) $("#" + shippingaddress[0]).val(ship_info_arr[0]);
                    if (ship_info_arr[1]) {
                        if (ship_info_arr[1].split('，')[0] && ship_info_arr[1].split('，')[0]) $("#" + shippingaddress[2]).val(ship_info_arr[1].split('，')[0]);
                        ship_region_addr = ship_info_arr[1].split('，')[1].split(' ');
                    }
                    if (ship_info_arr[2]) $("#" + shippingaddress[3]).val(ship_info_arr[2]);
                    if (ship_region_addr != null && ship_region_addr != "undefined" && ship_region_addr.length >= 3) {
                        if (ship_region_addr[0]) regionpro = ship_region_addr[0] + "省";
                        if (ship_region_addr[1]) regioncity = ship_region_addr[1];
                        if (ship_region_addr[2]) regionarea = ship_region_addr[2];
                        if (ship_region_addr[3]) $("#" + shippingaddress[4]).val(ship_region_addr[3]);
                        for (var i = 4; i < ship_region_addr.length; i++) {
                            $("#" + shippingaddress[4]).val($("#" + shippingaddress[4]).val() + " " + ship_region_addr[i]);
                        }
                    }
                    break;
                default:
                    break;
            };
            $.ajax({
                url: "SubmmitOrderHandler.aspx",
                type: 'post', dataType: 'json', timeout: 10000,
                data: { Action: "GetRegionId", Prov: regionpro, City: regioncity, Areas: regionarea },
                async: false,
                success: function (resultData) {
                    if (resultData.Status == "OK") {
                        ResetSelectedRegion(resultData.RegionId);
                        CalculateFreight(resultData.RegionId);
                    }
                    else {
                        alert("收货地址粘贴格式错误，请重试!");
                    }
                }
            });
        }

    }
</script>


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
                                <input name="tel" type="text" value="13082200375" id="SubmmitOrder_txtCellPhone" class="textform form-control" validategroup="default"> 
                                <span id="SubmmitOrder_txtCellPhoneTip"></span>
                            </li>
                            <li>
                                <h2><em>*</em>收花地址：</h2>
                                <span id="SubmmitOrder_dropRegions"><div class="address_wap"><div class="dp_border" style="display: none;"></div><div class="dp_address"><a id="province_top" href="javascript:" class="dropdown_box"><span id="provincename" class="dropdown_selected">请选择省</span><span class="dropdown_button"></span></a><a id="city_top" href="javascript:" class="dropdown_box"><span id="cityname" class="dropdown_selected">市：</span><span class="dropdown_button"></span></a><a id="area_top" href="javascript:" class="dropdown_box"><span id="areaname" class="dropdown_selected">区/县：</span><span class="dropdown_button"></span></a><a id="street_top" href="javascript:" class="dropdown_box"><span id="streetname" class="dropdown_selected">街道</span><span class="dropdown_button"></span></a>
                                </div>
                                </div>
                                <link id="SubmmitOrder_regionStyle" rel="stylesheet" href="/WebResource.axd?d=8v9m_PJYMjdpLH1CQa0HRRf6KEVnnbX_q1OAjcwz52T5VqZ5xv5n2EBK4fIDyxmAVeYmzR23R0J1w1KrY9tQIZLyUa0f_hBZgMXNAfdjoBORiAsKuWMVGk7_Gt-S1gLdEcSflhWCpYkyhuw6jhdDG0nE5YE1&amp;t=636124900090229874" type="text/css" media="screen"></span><input id="regionSelectorValue" name="regionSelectorValue" value="0" type="hidden" depth="0"><input id="regionIsShift" name="regionIsShift" value="false" type="hidden"><input id="regionSelectorName" name="regionSelectorName" value="" type="hidden"><input id="regionSelectorNull" name="regionSelectorNull" value="-请选择-" type="hidden"><input id="regionDisplayStreet" name="regionDisplayStreet" value="true" type="hidden">
                                                                <script src="/Utility/SubmitOrderRegion.Helper.js" type="text/javascript"></script>
                            </li>
                            <li>
                                <h2><em>*</em>详细地址：</h2>
                                <input name="addr" type="text" id="SubmmitOrder_txtAddress" class="textform form-control" style="width:400px;" validategroup="default"><span id="SubmmitOrder_txtAddressTip"></span>
                            </li>
                            <li>
                                <h2><em>*</em>订花人姓名：</h2>
                                <input name="SubmmitOrder$txtShipFrom" type="text" id="SubmmitOrder_txtShipFrom" class="textform form-control">
                                <span id="SubmmitOrder_txtShipFromTip"></span>
                            </li>
                            <li>
                                <h2><em>*</em>订花人手机：</h2>
                                <input name="SubmmitOrder$txtCellPhoneFrom" type="text" id="SubmmitOrder_txtCellPhoneFrom" class="textform form-control"> 
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
                        <div class="Order_deliver_time">
                            <h2>送货日期 :</h2>
                            <input name="SubmmitOrder$txtSendDate" type="text" id="SubmmitOrder_txtSendDate" class="textform form-control" style="width:170px;height:28px;padding:0;padding-left: 10px;" onclick="WdatePicker({dateFmt:&#39;yyyy-MM-dd&#39;})" />
                        </div>
                        <div class="Order_deliver_time">
                            <h2>送货时间 :</h2>
                            <select name="SubmmitOrder$drpShipToDate" id="SubmmitOrder_drpShipToDate" style="height: 28px; border: 1px solid #e5e5e5; text-align: center; color: #585858; width: 170px; overflow: hidden; ">
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
                <h3>商品清单<a href="/ShoppingCart.aspx" class="return">返回改购物车</a></h3>
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
                            <div class="cart2">
                            <div class="name">
                                <div class="pic">
                                    <a id="SubmmitOrder_Common_SubmmintOrder_ProductList___dataListShoppingCrat_ctl00_ProductDetailsLink2" href="/product_detail-2611.aspx" target="_blank"><img id="SubmmitOrder_Common_SubmmintOrder_ProductList___dataListShoppingCrat_ctl00_ListImage1" src="/storage/master/product/thumbs180/180_201710261626019857280.jpg" style="width:80px;border-width:0px;"></a>
                                </div>
                                <div class="item-msg">
                                    <a id="SubmmitOrder_Common_SubmmintOrder_ProductList___dataListShoppingCrat_ctl00_ProductDetailsLink1" href="/product_detail-2611.aspx" target="_blank">今生至爱----红玫瑰19枝</a>
                                    <div class="p-extend">
                                        
                                    </div>
                                    <div class="gift_list">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="price">
                                <span>￥<span id="SubmmitOrder_Common_SubmmintOrder_ProductList___dataListShoppingCrat_ctl00_FormatedMoneyLabel1">319.00</span></span>
                            </div>
                            <div class="num">
                                1
                            </div>
                            <div class="total">
                                <span>￥<span id="SubmmitOrder_Common_SubmmintOrder_ProductList___dataListShoppingCrat_ctl00_FormatedMoneyLabel2">319.00</span></span>
                            </div>
                        </div>
              @endforeach     
            <div class="cart_Order_info3">
                <div class="cart_Order_coupon3">

                    <div class="fl">
                        
                        <div class="">
                            <em><h2>卡片留言：</h2>&nbsp;</em>
                            <span>
                                <textarea name="SubmmitOrder$txtMessage" rows="6" cols="50" id="SubmmitOrder_txtMessage">
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
                    <div class="total"><em>￥<span id="">-{{ $sum['0'] }}</span></em><b>
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
     <form action="/home/orders" method="post">
        {{ csrf_field() }}
        <div class="cart_Order_submit2">
            <input type="submit"  value="提交订单"  />
        </div>
        </div>
</form>
    <div class="zhezhao"></div>

    <!--所有的隐藏域-->
    <input name="SubmmitOrder$htmlCouponCode" type="hidden" id="SubmmitOrder_htmlCouponCode" />
    <input name="SubmmitOrder$inputPaymentModeId" type="hidden" id="SubmmitOrder_inputPaymentModeId" />
    <input name="SubmmitOrder$inputShippingModeId" type="hidden" id="SubmmitOrder_inputShippingModeId" />
    <input name="SubmmitOrder$hdbuytype" type="hidden" id="SubmmitOrder_hdbuytype" />
    <input name="SubmmitOrder$hidStoreId" type="hidden" id="SubmmitOrder_hidStoreId" />
    <input name="SubmmitOrder$hidStoreCount" type="hidden" id="SubmmitOrder_hidStoreCount" />
    <input name="SubmmitOrder$hidShipperId" type="hidden" id="SubmmitOrder_hidShipperId" />
    <input type="hidden" id="hidAllStores" />
    <input name="SubmmitOrder$hidIsAnonymous" type="hidden" id="SubmmitOrder_hidIsAnonymous" value="1" />
    <input name="SubmmitOrder$hidShoppingDeduction" type="hidden" id="SubmmitOrder_hidShoppingDeduction" />
    <input name="SubmmitOrder$hidShoppingDeductionRatio" type="hidden" id="SubmmitOrder_hidShoppingDeductionRatio" />
    <input name="SubmmitOrder$hidCanPointUseWithCoupon" type="hidden" id="SubmmitOrder_hidCanPointUseWithCoupon" />
    <input name="SubmmitOrder$hidMyPoints" type="hidden" id="SubmmitOrder_hidMyPoints" />


    <input name="SubmmitOrder$hidFreight" type="hidden" id="hidFreight" value="0" />

    <input name="SubmmitOrder$hidFreightTitle" type="hidden" id="hidFreightTitle" value="0" />

    <input name="SubmmitOrder$hidCanUsePoint" type="hidden" id="hidCanUsePoint" value="false" /><!--是否可以使用积分-->
    <input name="SubmmitOrder$hidGetgoodsOnStores" type="hidden" id="hidGetgoodsOnStores" value="false" /><!--是否可以上门自提-->
    <input name="SubmmitOrder$hidPaymentId_Podrequest" type="hidden" id="hidPaymentId_Podrequest" value="0" /><!--货到付款支付ID-->
    <input name="SubmmitOrder$hidPaymentId_Offline" type="hidden" id="hidPaymentId_Offline" value="0" /><!--货到付款支付ID-->
    <input name="SubmmitOrder$hidTotalPrice" type="hidden" id="hidTotalPrice" value="0" /><!--商品总金额减去促销金额后的金额-->
    <!--结束-->
</form>
    
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
            
            
            爱尚美网络科技有限公司 蜀ICP备15011281号
        </div>
        <script type="text/javascript">
        var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape("%3Cspan id='cnzz_stat_icon_1260081895'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1260081895%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));
</script>
    </div>
    <!--bottom结束-->
</div>
<script src="/sy/js/china_1.js"></script>
<script src="/sy/js/jquery.cookie_1.js"></script>
<script type="text/javascript">
    var uid = 0;
    $(document).ready(function () {
        uid = parseInt($.cookie("uid"));
        if (isNaN(uid)) uid = 0;
        if (uid == 1) {
            uid ? (run()) : (run());
            $("#id_c").html("切换简体");
        }
    });
    $(document).bind('click', function (e) {
        var a = $(e.target).attr('id');
        if (a == 'id_c') {
            uid ? (run()) : (run());
            (uid == 1) ? (uid = 0, $('#id_c').html('切换繁体')) : (uid += 1, $('#id_c').html('切换简体'));
            $.cookie("uid", uid);
        }
    });
</script>
</body>
</html> 

