//如果是网站首页直接跳转到WAP端首页，如果是其它页面，且该页面对应WAP端有相应的页面对直接中转到对应的WAP页面，如果没有则不跳转
var pageurl = document.location.href.toLowerCase();
var sUserAgent = navigator.userAgent.toLowerCase();
var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
var bIsMidp = sUserAgent.match(/midp/i) == "midp";
var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
var bIsAndroid = sUserAgent.match(/android/i) == "android";
var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
var bIsWX = sUserAgent.match(/micromessenger/i) == "micromessenger";
//bIsWM = true;

if ((bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM || bIsWX) && (HasWapRight || HasVshopRight)) {
    //解决分享到微信时，浏览器跳转到网站首页的问题
    DirectUrl = GetWapUrl();
    if (DirectUrl != "")
        if (bIsWX && HasVshopRight)
            location.href = "/vShop/" + DirectUrl;
        else if (HasWapRight)
            location.href = "/Wapshop/" + DirectUrl;
}
///判断是否需要跳转，如果当前页面为首页或者帮助页，文单页则跳转，其它的不需要跳转
function IsDirect() {

    if (pageurl.indexOf("/default.aspx") > -1) return true;
    if (pageurl.indexOf("/article/") >= -1 && pageurl.indexOf("/help/") >= -1) return false;
    return true;
}
///获取PC端对应Wap端的页面地址，如果没有对应地址则返回空
function GetWapUrl() {
    var PageKey = "";
    var port = document.location.port;
    var domain = document.domain;
    var param = document.location.search;
    if (port != "80" && port != "") domain = domain + ":" + port;
    domain = "http://" + domain;
    if ((pageurl.length == domain.length || (pageurl.length - 1) == domain.length) && pageurl.indexOf(domain) == 0) { return "default.html"; }
    if (pageurl.indexOf("default.aspx") > -1) { return "default.html" + param; }
    if (pageurl.indexOf("groupbuyproduct_detail-") > -1) { PageKey = GetPageKey("groupbuyproduct_detail-"); return "GroupBuyProductDetails.aspx?productId=" + PageKey; }
    if (pageurl.indexOf("groupbuyproductdetails.aspx") > -1) { return "GroupBuyProductDetails.aspx" + param; }
    if (pageurl.indexOf("countdownproduct_detail-") > -1) { PageKey = GetPageKey("countdownproduct_detail-"); return "CountDownProductsDetails.aspx?productId=" + PageKey; }
    if (pageurl.indexOf("countdownproductsdetails.aspx") > -1) { return "CountDownProductsDetails.aspx" + param; }
    if (pageurl.indexOf("product_detail-") > -1) { PageKey = GetPageKey("product_detail-", false); return "ProductDetails.aspx?ProductId=" + PageKey; }
    if (pageurl.indexOf("productdetails.aspx") > -1) { return "ProductDetails.aspx" + param; }
    if (pageurl.indexOf("brand_detail-") > -1) { PageKey = GetPageKey("brand_detail-", false); return "BrandDetail.aspx?BrandId=" + PageKey; }
    if (pageurl.indexOf("brand.aspx") > -1) { return "brandlist.aspx" + param;; }
    if (pageurl.indexOf("category.aspx") > -1) { return "productsearch.aspx" + param; }
    if (pageurl.indexOf("browse/category-") > -1) { PageKey = GetPageKey("browse/category-", false); return "ProductList.aspx?categoryId=" + PageKey; }
    if (pageurl.indexOf("subcategory.aspx?keywords=") > -1) { PageKey = GetPageKey("keywords="); return "ProductList.aspx?keyWord=" + PageKey; }
    if (pageurl.indexOf("groupbuyproducts.aspx") > -1) { return "GroupBuyList.aspx" + param;; }
    if (pageurl.indexOf("countdownproducts.aspx") > -1) { return "CountDownProducts.aspx" + param;; }
    if (pageurl.indexOf("login.aspx") > -1) { return "login.aspx" + param; }
    if (pageurl.indexOf("register.aspx") > -1) { return "login.aspx" + param + (param == "" ? "?" : "&") + "&action=register"; }
    if (pageurl.indexOf("userdefault.aspx") > -1) { return "MemberCenter.aspx" + param; }
    if (pageurl.indexOf("userorders.aspx") > -1) { return "MemberOrders.aspx" + param; }
    if (pageurl.indexOf("usershippingaddresses.aspx") > -1) { return "ShippingAddresses.aspx" + param; }
    if (pageurl.indexOf("userprofile.aspx") > -1) { return "UserInfo.aspx" + param; }
    if (pageurl.indexOf("user/referralregisteragreement.aspx") > -1) { return "ReferralRegisterAgreement.aspx" + param; }
    if (pageurl.indexOf("user/referralregisterresults.aspx") > -1) { return "referralregisterresults.aspx"; }
    if (pageurl.indexOf("/user/") > -1) { return "MemberCenter.aspx"; }
    if (pageurl.indexOf("articles.aspx") > -1) { return "Articles.aspx" + param; }
    if (pageurl.indexOf("article/show-") > -1) { PageKey = GetPageKey("article/show-"); return "ArticleDetails.aspx?ArticleId=" + PageKey; }
    if (pageurl.indexOf("articledetails.aspx") > -1) { return "ArticleDetails.aspx" + param; }
    if (pageurl.indexOf("shoppingcart.aspx") > -1) { return "ShoppingCart.aspx" + param; }
    if (pageurl.indexOf("appdownload.aspx") > -1) { return "appdownload.aspx" + param; }
    if (pageurl.indexOf("registeredcoupons.aspx") > -1) { return "registeredcoupons.aspx" + param; }//解决扫码登录无法跳转的bug
    if (pageurl.indexOf("referralagreement.aspx") > -1) { return "ReferralAgreement.aspx" + param; }
    return "";
}


function GetPageKey(pagepre, IsEnd) {
    if (pageurl.indexOf(pagepre) > -1) {
        var endIndex = 0;
        if (!IsEnd) {
            endIndex = pageurl.indexOf(".aspx");
            if (endIndex <= -1) endIndex = pageurl.indexOf(".htm")
        }
        else {
            endIndex = pageurl.length;
        }
        var startIndex = pageurl.indexOf(pagepre) + pagepre.length;
        if (startIndex >= 0 && endIndex > startIndex)
            return pageurl.substring(startIndex, endIndex);
    }
    return "0";
}