
var domainName = "http://image.ismei.net";
function FmtImageUrl(url) {
    return url;
    //return domainName + url.replace("storage", "Storage").replace("http://", "").replace(/([a-zA-Z0-9]+).ismei.net/g, "");
}
//获取热销产品
//productsNum:加载产品数量
function GetHotProducts(productsNum) {
    $.ajax({
        url: "/API/ProductsHandler.ashx?action=GetHotProducts",
        type: "post",
        data: { productsNum: productsNum ,categoryId:"1"},
        success: function (data) {
            var htm = '<div class="sale_top160 cssEdite" type="top" ><ul>';
            for (var i = 0; i < data.hotProducts.length; i++) {
                var item = data.hotProducts[i];
                htm += '<li class="sale_top2"><em style=" display:none;">' + i + '</em>\
            <div class="pic">\
                <a target="_blank" href="/product_detail-' + item.ProductId + '.html">\
                    <img data-url="' + FmtImageUrl(item.ThumbnailUrl160) + '" alt="' + item.ProductName + '"></a>\
                    </div>\
            <div class="info">\
                <div class="name"><a target="_blank" href="/product_detail-' + item.ProductId + '.html">' + item.ProductName + '</a></div>\
                 <div class="price">\
                <b><em>￥</em>' + item.SalePrice + '</b>\
                <span><em>￥</em>' + item.MarketPrice + '</span>\
            </div>\
            </div>\
        </li>';
            }
            htm += '</ul></div>';
            $("#div_hotProducts").html(htm);
        }
    });
}

//获取产品ProdutId
function GetProductId() {
    var url = location.href;
    var reg = new RegExp("product_detail-([0-9]+).");
    var strs = url.match(reg);
    if (strs != null && strs.length >= 2) {
        return strs[1];
    }
}
//异步获取价格
function GetProductPrice() {
    var productId = GetProductId();
        $.ajax({
            url: "/API/ProductsHandler.ashx?action=GetProductPrice",
            type: "post",
            data: { ProductId: productId },
            success: function (data) {
                if (data.msg == true) {
                    $("#ProductDetails_lblMarkerPrice").text(data.MarketPrice);
                    $("#ProductDetails_lblBuyPrice").text(data.SalePrice); 
                    $(".product_sale").find("span[class='num']").find("em").text(data.ShowSaleCounts);
                }
            }
        });
}

//获取相关商品
function GetRelativeProducts(productsNum) {
    var productId = GetProductId();
    $.ajax({
        url: "/API/ProductsHandler.ashx?action=GetRelativeProducts",
        type: "post",
        data: { productsNum: productsNum, productId: productId },
        success: function (data) {
            var htm = '';
            for (var i = 0; i < data.relativeProducts.length; i++) {
                var item = data.relativeProducts[i];
                htm += '<li>\
    <div class="related_pic">\
        <a  href="/product_detail-' + item.ProductId + '.html" target="_blank">\
            <img data-url="' + FmtImageUrl(item.ThumbnailUrl160) + '">\
        </a>\
    </div>\
    <div class="related_name">\
         <a  href="/product_detail-' + item.ProductId + '.html" target="_blank">' + item.ProductName + '</a>\
    </div>\
    <div class="related_price">\
        <strong>￥<span >' + item.SalePrice + '</span></strong>\
    </div>\
</li>';
            }
            $("#ul_relativeProducts").html(htm);
        }
    });
}



$(function () {
    ///添加，产品个数无法自加而添加的方法
    $("#hidIsOpenMultiStore").val(1);
    //AddBottonStrip();
})

//底部条
function AddBottonStrip() {

    var kehu = 'http://www7.53kf.com/webCompany.php?arg=10139947&style=1&kflist=off&kf=23500853@qq.com,3314346980@qq.com,3270342009@qq.com,3544266363@qq.com,3263446264@qq.com&zdkf_type=1&language=zh-cn&charset=gbk&referer=http%3A%2F%2Fwww.ismei.net%2Fdefault.aspx&keyword=&tfrom=1&tpl=crystal_blue&timeStamp=1478502581960&ucust_id=';
    var htm = '<div style="width: 100%;height: 50px;position:fixed ; bottom: 0;background-color: #d00236;background-image: url(/templates/master/default/images/bgtel.png);z-index:100000;">\
	        <div class="" style="width: 1200px;margin: 0 auto;height: 50px; ">\
	        	<div style="float: left;margin-right: 60px;"><img src="/templates/master/default/images/tel4.png" alt="" /></div>\
	        	<div style="float: left;cursor: pointer;margin-top: 13px;margin-right: 60px;">\
                    <a  href="/LoveActive.html" target="_blank"><img src="/templates/master/default/images/tel5.png" alt="" /></a></div>\
	        	<div style="float: left;cursor: pointer;margin-top: 13px;">\
                    <a href="/BirthdayActive.html" target="_blank"><img src="/templates/master/default/images/tel7.png" alt="" /></a></div>\
	        	<div style="float: right;">\
	        		<ul>\
	        			<li style="float: left;margin-right: 30px;cursor: pointer;"onclick="javascript:window.open(\''+ kehu + '\')">\
                            <img src="/templates/master/default/images/tel1.png" alt="" /></li>\
	        			<li style="float: left;margin-top: 10px;"onclick="javascript:window.open(\''+ kehu + '\')">\
                            <img src="/templates/master/default/images/tel8.png" alt=""  /></li>\
	        		</ul>\
	        	</div>\
	        </div>\
        </div>';
    if ($("#bottom_strip").val() != null) {
        $("#bottom_strip").remove();
    }
    $("body").append(htm);
}


///53客户
$(function () {
    var _53code = document.createElement("script");
    _53code.src = "//tb.53kf.com/code/code/10139947/1";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(_53code, s);
});
//百度推广
var _hmt = _hmt || [];
(function () {
    var hm = document.createElement("script");
    hm.src = "https://hm.baidu.com/hm.js?305847495d77677dcd6d2afd1a077359";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
})();



