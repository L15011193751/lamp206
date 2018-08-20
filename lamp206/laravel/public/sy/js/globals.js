///////////////////////////////////////////////////////////////////////////////////
// IE Check
///////////////////////////////////////////////////////////////////////////////////
var isIE = (document.all) ? true : false;

///////////////////////////////////////////////////////////////////////////////////
// Image Helper
///////////////////////////////////////////////////////////////////////////////////
var imageObject = null;
var currentObject = null;

function ResizeImage(I, W, H) {
    if (I.length > 0 && imageObject != null && currentObject != I) {
        setTimeout("ResizeImage('" + I + "'," + W + "," + H + ")", 100);
        return;
    }

    var F = null;
    if (I.length > 0) {
        F = document.getElementById(I);
    }

    if (F != null) {
        imageObject = F;
        currentObject = I;
    }

    if (isIE) {
        if (imageObject.readyState != "complete") {
            setTimeout("ResizeImage(''," + W + "," + H + ")", 50);
            return;
        }
    }
    else if (!imageObject.complete) {
        setTimeout("ResizeImage(''," + W + "," + H + ")", 50);
        return;
    }

    var B = new Image();
    B.src = imageObject.src;
    var A = B.width;
    var C = B.height;
    if (A > W || C > H) {
        var a = A / W;
        var b = C / H;
        if (b > a) {
            a = b;
        }
        A = A / a;
        C = C / a;
    }
    if (A > 0 && C > 0) {
        imageObject.style.width = A + "px";
        imageObject.style.height = C + "px";
    }

    imageObject.style.display = '';
    imageObject = null;
    currentObject = null;
}

///////////////////////////////////////////////////////////////////////////////////
// String Helper
///////////////////////////////////////////////////////////////////////////////////
String.format = function () {
    if (arguments.length == 0)
        return null;

    var str = arguments[0];
    for (var i = 1; i < arguments.length; i++) {
        var re = new RegExp('\\{' + (i - 1) + '\\}', 'gm');
        str = str.replace(re, arguments[i]);
    }
    return str;
}

///////////////////////////////////////////////////////////////////////////////////
// URL Helper
///////////////////////////////////////////////////////////////////////////////////
function GetQueryString(key) {
    var url = location.href;
    if (url.indexOf("?") <= 0) {
        return "";
    }

    var paraString = url.substring(url.indexOf("?") + 1, url.length).split("&");
    var paraObj = {};

    for (i1 = 0; j = paraString[i1]; i1++) {
        paraObj[j.substring(0, j.indexOf("=")).toLowerCase()] = j.substring(j.indexOf("=") + 1, j.length);
    }

    var returnValue = paraObj[key.toLowerCase()];
    if (typeof (returnValue) == "undefined") {
        return "";
    } else {
        return returnValue;
    }
}

function GetQueryStringKeys() {
    var keys = {};
    var url = location.href;

    if (url.indexOf("?") <= 0) {
        return keys;
    }

    keys = url.substring(url.indexOf("?") + 1, url.length).split("&");
    for (i2 = 0; i2 < keys.length; i2++) {
        if (keys[i2].indexOf("=") >= 0) {
            keys[i2] = keys[i2].substring(0, keys[i2].indexOf("="));
        }
    }

    return keys;
}

function GetCurrentUrl() {
    var url = location.href;

    if (url.indexOf("?") >= 0) {
        return url.substring(0, url.indexOf("?"));
    }

    return url;
}

function AppendParameter(key, pvalue) {
    var reg = /^[0-9]*[1-9][0-9]*$/;
    var url = GetCurrentUrl() + "?";
    var keys = GetQueryStringKeys();

    if (keys.length > 0) {
        for (i3 = 0; i3 < keys.length; i3++) {
            if (keys[i3] != key) {
                url += keys[i3] + "=" + GetQueryString(keys[i3]) + "&";
            }
        }
    }

    if (!reg.test(pvalue)) {
        alert_h("只能输入正整数");
        return url.substring(0, url.length - 1);
    }

    url += key + "=" + pvalue;
    return url;
}


///////////////////////////////////////////////////////////////////////////////////
// DataList Select Helper
///////////////////////////////////////////////////////////////////////////////////
function SelectAll() {

    var checkbox = document.getElementsByName("CheckBoxGroup");

    if (checkbox == null) {
        return false;
    }
    if (typeof checkbox.length != 'undefined') {
        if (checkbox.length > 0) {
            for (var i = 0; i < checkbox.length; i++) {
                checkbox[i].checked = true;
            }

        }
    }

    else {
        checkbox.checked = true;
    }


    return false;
}

function ReverseSelect() {

    var checkbox = document.getElementsByName("CheckBoxGroup");

    if (checkbox == null) {
        return false;
    }
    if (typeof checkbox.length != 'undefined') {
        if (checkbox.length > 0) {
            for (var i = 0; i < checkbox.length; i++) {
                checkbox[i].checked = !checkbox[i].checked;
            }

        }
    }

    else {
        checkbox.checked = !checkbox.checked;
    }
    return false;

}


//计算坐标方法,得到某obj的x,y坐标,兼容浏览器
function getWinElementPos(obj) {
    var ua = navigator.userAgent.toLowerCase();
    var isOpera = (ua.indexOf('opera') != -1);
    var isIE = (ua.indexOf('msie') != -1 && !isOpera); // not opera spoof
    var el = obj;
    if (el.parentNode === null || el.style.display == 'none') {
        return false;
    }
    var parent = null;
    var pos = [];
    var box;
    if (el.getBoundingClientRect) //IE
    {
        box = el.getBoundingClientRect();
        var scrollTop = Math.max(document.documentElement.scrollTop, document.body.scrollTop);
        var scrollLeft = Math.max(document.documentElement.scrollLeft, document.body.scrollLeft);
        return { x: box.left + scrollLeft, y: box.top + scrollTop };
    }
    else if (document.getBoxObjectFor) {
        box = document.getBoxObjectFor(el);
        var borderLeft = (el.style.borderLeftWidth) ? parseInt(el.style.borderLeftWidth) : 0;
        var borderTop = (el.style.borderTopWidth) ? parseInt(el.style.borderTopWidth) : 0;
        pos = [box.x - borderLeft, box.y - borderTop];
    }
    else // safari & opera
    {
        pos = [el.offsetLeft, el.offsetTop];
        parent = el.offsetParent;
        if (parent != el) {
            while (parent) {
                pos[0] += parent.offsetLeft;
                pos[1] += parent.offsetTop;
                parent = parent.offsetParent;
            }
        }
        if (ua.indexOf('opera') != -1
         || (ua.indexOf('safari') != -1 && el.style.position == 'absolute')) {
            pos[0] -= document.body.offsetLeft;
            pos[1] -= document.body.offsetTop;
        }
    }
    if (el.parentNode) { parent = el.parentNode; }
    else { parent = null; }
    while (parent && parent.tagName != 'BODY' && parent.tagName != 'HTML') { // account for any scrolled ancestors
        pos[0] -= parent.scrollLeft;
        pos[1] -= parent.scrollTop;

        if (parent.parentNode) { parent = parent.parentNode; }
        else { parent = null; }
    }
    return { x: pos[0], y: pos[1] };
}


function getElementsByClassName(className, root, tagName) {    //root：父节点，tagName：该节点的标签名。 这两个参数均可有可无
    if (root) {
        root = typeof root == "string" ? document.getElementById(root) : root;
    } else {
        root = document.body;
    }
    tagName = tagName || "*";
    if (document.getElementsByClassName) {                    //如果浏览器支持getElementsByClassName，就直接的用
        return root.getElementsByClassName(className);
    } else {
        var tag = root.getElementsByTagName(tagName);    //获取指定元素
        var tagAll = [];                                    //用于存储符合条件的元素
        for (var i = 0; i < tag.length; i++) {                //遍历获得的元素
            for (var j = 0, n = tag[i].className.split(' ') ; j < n.length; j++) {    //遍历此元素中所有class的值，如果包含指定的类名，就赋值给tagnameAll
                if (n[j] == className) {
                    tagAll.push(tag[i]);
                    break;
                }
            }
        }
        return tagAll;
    }
}

function getParam(paramName) {
    paramValue = "";
    isFound = false;
    paramName = paramName.toLowerCase();
    var arrSource = this.location.search.substring(1, this.location.search.length).split("&");
    if (this.location.search.indexOf("?") == 0 && this.location.search.indexOf("=") > 1) {
        if (paramName == "returnurl") {
            var retIndex = this.location.search.toLowerCase().indexOf('returnurl=');
            if (retIndex > -1) {
                var returnUrl = unescape(this.location.search.substring(retIndex + 10, this.location.search.length));
                if ((returnUrl.indexOf("http") != 0) && returnUrl != "" && returnUrl.indexOf(location.host.toLowerCase()) == 0) returnUrl = "http://" + returnUrl;
                return returnUrl;
            }
        }
        i = 0;
        while (i < arrSource.length && !isFound) {
            if (arrSource[i].indexOf("=") > 0) {
                if (arrSource[i].split("=")[0].toLowerCase() == paramName.toLowerCase()) {
                    paramValue = arrSource[i].toLowerCase().split(paramName + "=")[1];
                    paramValue = arrSource[i].substr(paramName.length + 1, paramValue.length);
                    isFound = true;
                }
            }
            i++;
        }
    }
    return paramValue;
}

String.prototype.trim = function () {
    return this.replace(/(^\s*)|(\s*$)/g, "");
}
String.prototype.ltrim = function () {
    return this.replace(/(^\s*)/g, "");
}
String.prototype.rtrim = function () {
    return this.replace(/(\s*$)/g, "");
}
//window.onerror=function(){return true;}

function ReplaceHeadMenu() {
    $("#jieri").html("爱情");
    $("#jieri").parent().parent().attr("href", "/browse/category-1-66_436.html");
    $("#txt_Search_Keywords").css("color", "#585858");
}
$(function () {
    ReplaceHeadMenu();
    GetTopBarHtml();
    ReplaceHeadMenuUrl();
   // AddImageDomainName();
    RemoveComanyName();
})
var domainName = "http://image.ismei.net";
function FmtImageUrl(url) {
    return domainName + url.replace("storage", "Storage").replace("http://", "").replace(/([a-zA-Z0-9]+).ismei.net/g, "");
}
function AddImageDomainName() {
    $.each($("img"), function (i, item) {
        var dataUrl = $(item).attr("data-url");
        if (dataUrl != "" && dataUrl != undefined && (dataUrl.indexOf("storage") > 0 || dataUrl.indexOf("Storage") > 0) && dataUrl.indexOf(domainName) <= 0) {
            $(item).attr("data-url", FmtImageUrl(dataUrl));
        }
    });
}

//移除公司名称
function RemoveComanyName() {
    $(".bottom .Copyright").html("蜀ICP备15011281号");
}
//导航下拉事件
$(function () {
    var url = location.href.toLowerCase();
    if (url.indexOf("default") > 0 || url == "http://www.ismei.net/" || url == "http://ismei.net/" || url == "http://m.ismei.net/") {
        $(".side-nav .left-nav").css({ "display": "block" });
    } else {
        //$(".side-nav .left-nav").css({ "display": "none" });
        //$(".side-nav .title").hover(function () {
        //    $(".side-nav .left-nav").css({ "display": "block" }).addClass("left-nav01");
        //}, function () {
        //    $(".side-nav .left-nav").css({ "display": "none" }).removeClass("left-nav01");
        //})
        $(".left-nav").css({ "display": "none" });
        var height = $(".top-nav .side-nav").height();
        $(".top-nav .side-nav").css("height", "auto");

        $(".side-nav .title").hover(function () {
            $(".top-nav .side-nav").css("height", "498px");
            $(".left-nav").css({ "display": "block" });
            $(".left-nav").addClass("left-nav01");
        }, function () {
            $(".left-nav").css({ "display": "none" });
        });

        $(".pro-menu").hover(function () {
            $(".left-nav").css({ "display": "block" });
            $(".left-nav").addClass("left-nav01");

        }, function () {
            $(".left-nav").css("display", "none");
        });
    }
})
///头部登录状态显示条
function GetTopBarHtml() {
    $.ajax({
        url: "/API/PreHtmlAjax.ashx?action=TopBarHtml",
        type: "post",
        data:{},
        success: function (data) {
            var ulhtml = $(".hea_fl ul").html();
            $(".hea_fl").html("<ul>" + ulhtml + "</ul>" + data.userName);//你好...
            $(".pp_car").html(data.shopingCart);//购物车
            $("#liLinkLogin").prev().html(data.loginOrOut);//登录退出
            $(".fore3").html(data.qRCode);//个人中心
            $("#liLinkLogin").html(data.userCenter);//二维码
            //$("#liLinkLogin").html("");
            $("#comments_4").html(data.keywordsUrl);//搜索下关键字链接
            $("#logo_1").children("a").attr("href", "/default.html");//网站logo
        }
    });
}

///替换主菜单和下拉菜单url
function ReplaceHeadMenuUrl() {
    $.ajax({
        url: "/API/PreHtmlAjax.ashx?action=GetMenuHtml",
        type: "post",
        data: {},
        success: function (data) {
            // $("ul[class='clearfix'] li:gt(0)").remove();//移除li
            // $("ul[class='clearfix']").append(data.primaryClass);//主菜单
            // ReplaceHeadMenu();
            // $(".dropdown-cate").html("");
            // var html = ToCategoryHtml(data);
            // $(".dropdown-cate").html(html);
        }
    });
}
///分类下拉框html
//data:异步数据
function ToCategoryHtml(data) {
    var html = '\
<h4>鲜花用途</h4>\
<div class="cate-list list-inline">';
    for (var i = 0; i < data.dtb_xhyt.length; i++) {
        if (i >= 10) { break; }
        var item = data.dtb_xhyt[i];
        html += '<li><a href="/browse/category-' + item.CategoryId + '-' + item.AttributeId + '_' + item.ValueId + '.html" target="_blank">' +
            item.ValueStr + '</a></li>';
    }
    html += '</div>\
<h4>鲜花花材</h4>\
<div class="cate-list list-inline">';
    for (var i = 0; i < data.dtb_xhhc.length; i++) {
        if (i >= 10) { break; }
        var item = data.dtb_xhhc[i];
        html += '<li><a href="/browse/category-' + item.CategoryId + '-' + item.AttributeId + '_' + item.ValueId + '.html" target="_blank">' +
            item.ValueStr + '</a></li>';
    }
    html += '</div>\
<h4>鲜花价格</h4>\
<div class="cate-list list-inline">';
    for (var i = 0; i < data.dtb_xhlb.length; i++) {
        if (i >= 10) { break; }
        var item = data.dtb_xhlb[i];
        html += '<li><a href="/browse/category-' + item.CategoryId + '-' + item.AttributeId + '_' + item.ValueId + '.html" style="font-size:11px;" target="_blank">' +
            item.ValueStr + '</a></li>';
    }
    html += '</div>\
<h4>开业花篮</h4>\
<div class="cate-list list-inline">';
    for (var i = 0; i < data.dtb_kyhl.length; i++) {
        if (i >= 10) { break; }
        var item = data.dtb_kyhl[i];
        html += '<li><a href="/browse/category-' + item.CategoryId + '-' + item.AttributeId + '_' + item.ValueId + '.html"  target="_blank">' +
            item.ValueStr + '</a></li>';
    }
    html += '</div>\
<div class="my_left_cat_list"><div class="h2_cat">\
<div style="font-size:14px;font-weight:bold;"> <a href="http://www.ismei.net/browse/category-2.html" style="color:#ff6a00;" target="_blank"></a></div>\
<div class="h3_cat" id="Div1" style="display:none;"><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><span></span><span></span><span></span><span></span><span></span><span></span></div></div></div><div class="my_left_cat_list"><div class="h2_cat">\
<div style="font-size:14px;font-weight:bold;"> <a href="http://www.ismei.net/browse/category-4-74_0.html" style="color:#ff6a00;" target="_blank"></a></div>\
<div class="h3_cat" id="#" style="display:none;"></div></div></div>';
    return html;
}

