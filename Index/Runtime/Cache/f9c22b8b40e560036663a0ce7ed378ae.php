<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>电动葫芦，起重葫芦-成都虎跃起重机械一站式供应！手拉葫芦，起重设备，五金电力，吊装设备</title>
<link rel="stylesheet" href="__PUBLIC__/statics/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/themes/buy2012/images/css.css" />
<script type="text/javascript">
var Shop = {"set":{"path":"/","buytarget":"3","dragcart":null,"refer_timeout":365},"url":{"addcart":"http://www.qizejx.cn/?cart-ajaxadd.html","shipping":"http://www.qizejx.cn/?cart-shipping.html","payment":"http://www.qizejx.cn/?cart-payment.html","total":"http://www.qizejx.cn/?cart-total.html","viewcart":"http://www.qizejx.cn/?cart-view.html","ordertotal":"http://www.qizejx.cn/?cart-total.html","applycoupon":"http://www.qizejx.cn/?cart-applycoupon.html","diff":"http://www.qizejx.cn/?product-diff.html"}};
</script>
<script type="text/javascript" src="__PUBLIC__/statics/script/tools.js"></script>
<script type="text/javascript" src="__PUBLIC__/statics/script/goodscupcake.js"></script>
<script type="text/javascript">

window.addEvent('domready',function(){
			var ReferObj =new Object();
			$extend(ReferObj,{
				serverTime:1373334116,
				init:function(){				
        			var FIRST_REFER=Cookie.get('S[FIRST_REFER]');
					var NOW_REFER=Cookie.get('S[NOW_REFER]');				
					var nowDate=this.time=this.serverTime*1000;						
					if(!window.location.href.test('#r-')&&!document.referrer||document.referrer.test(document.domain))return;				
					if(window.location.href.test('#r-'))Cookie.dispose('S[N]');	
					if(!FIRST_REFER){
						if(NOW_REFER){
							this.writeCookie('S[FIRST_REFER]',NOW_REFER,this.getTimeOut(JSON.decode(NOW_REFER).DATE));
						}else{						
							this.setRefer('S[FIRST_REFER]',Shop.set.refer_timeout);
						}
					}
					this.setRefer('S[NOW_REFER]',Shop.set.refer_timeout);
					this.createGUID();
				},
				getUid:function(){
					var lf=window.location.href,pos=lf.indexOf('#r-');
					return pos!=-1?lf.substr(pos+4):'';	
				},
				getRefer:function(){
					return document.referrer?document.referrer:'';
				},
				setRefer:function(referName,timeout){
					var uid=this.getUid(),referrer=this.getRefer();
					var data={'ID':uid,'REFER':referrer,'DATE':this.time};
					if('S[NOW_REFER]'==referName){		
						var refer=JSON.decode(Cookie.get('S[FIRST_REFER]'));	
						if(uid!=''&&refer&&refer.ID==''){						
							var fdata={'ID':uid,'REFER':refer.REFER,'DATE':refer.DATE};
							this.writeCookie('S[FIRST_REFER]',JSON.encode(fdata),this.getTimeOut(refer.DATE));							
						}else if(uid==''){					
							$extend(data,{'ID':refer.ID});
						}	
					}	
					Cookie.set(referName,JSON.encode(data),{duration:(Shop.set.refer_timeout||15)});
				},				
				getTimeOut:function(nowDate){			
				    var timeout=nowDate+Shop.set.refer_timeout*24*3600*1000;
					var date=new Date(timeout);
					return date;
		 		},
				writeCookie:function(key,value,timeout){
					document.cookie=key+ '=' + value+'; expires=' + timeout.toGMTString();	
				},
				createGUID:function(){
					var GUID = (function(){
						var S4=function(){
							return (((1+Math.random())*0x10000)|0).toString(16).substring(1);
						};
						return (S4()+S4()+"-"+S4()+"-"+S4()+"-"+S4()+"-"+S4()+S4()+S4()).toUpperCase();
					})();
					Cookie.set('S[N]',GUID,{duration:3650});
				}
			});
			ReferObj.init();
});
</script>
<link rel="stylesheet" type="text/css"
	href="__PUBLIC__/themes/buy2012/images/css.css" />
</head>
<body>
<div class="AllWrap headerInfo">
  <div class="tangdd"></div>
  <div class="qbspfl" style="top: 225px;"> <a href="./?page-fl.html">全部商品分类</a> </div>
  <div class="tangzdy"> <font color="#660000" face="黑体"><font size="2" face="宋体">您好，欢迎来到起虎跃机械网上商城！</font><a href="#"type="url"><font size="2">这里就放关键字就行了</font></a> </div>
  <div class="qingzdy"></div>
  <div class="logo"> <a href="/"><img
				src="__PUBLIC__/themes/buy2012/images/loge.png"
				border="0" style="margin-top: 20px" /></a> </div>
  <div class="searchbar">
    <form action="index.php/Search" method="post"
				class="SearchBar">
      <table cellpadding="0" cellspacing="0">
        <tr>
          <td class="search_label"><span>关键字：</span>
            <input
							name="name[]" size="10" class="inputstyle keywords" value="" /></td>
          <td><input type="submit" value="搜索" class="btn_search"
							onfocus='this.blur();' /></td>
          <td><a href="#"
							class="btn_advsearch">高级搜索</a></td>
        </tr>
      </table>
    </form>
  </div>
  <div class="searchbarr"> 热门搜索：<a href="#">手拉葫芦</a><a
				href="#">液压千斤顶</a><a
				href="#">电动葫芦</a><a
				href="#">龙门吊架</a> </div>
  <div
			style="color: #EEEFF1; left: 680px; position: absolute; top: 80px;"> <img src="__PUBLIC__/themes/buy2012/images/dianhua.png" /> </div>
  <div
			style="color: #EEEFF1; left: 200px; position: absolute; top: 160px;"> <img src="__PUBLIC__/themes/buy2012/images/kouhao.png" /> </div>
  <div class="tangnav" id="Menu">
    <ul class="MenuList">
      <li><a href="/">首页</a></li>
      <li><a
					href="/new/about.html">虎跃介绍</a></li>
      <li><a href="#">品牌专区</a></li>
      <li><a
					href="index.php/New?id=1">公司动态</a></li>
      <li><a
					href="index.php/New?id=2">行业新闻</a></li>
      <li><a
					href="/new/con.html">联系我们</a></li>
      <li><a href="#">客户留言</a></li>
      <li style="position: relative; z-index: 65535;"
					class="wgt-menu-more" id="widgets_89_menu_base"
					onClick="if($('widgets_89_showMore').style.display=='none'){$('widgets_89_showMore').style.display='';}else{ $('widgets_89_showMore').style.display='none';}"><a
					class="wgt-menu-view-more" href="JavaScript:void(0)">更多导航</a>
        <div class="v-m-page"
						style="display: none; position: absolute; top: 25px; left: 0"
						id="widgets_89_showMore">
          <div> <a
								href="http://www.qizejx.cn/?page-%E8%B5%84%E8%B4%A8%E8%AF%81%E4%B9%A6.html">资质证书</a> </div>
          <div> <a
								href="http://www.qizejx.cn/?page-%E7%BD%91%E7%BB%9C%E8%90%A5%E9%94%80.html">网络营销</a> </div>
          <div> <a href="http://www.qizejx.cn/?artlist-119.html">动态新闻</a> </div>
          <div> <a
								href="http://www.qizejx.cn/?page-%E5%B8%AE%E5%8A%A9%E4%B8%AD%E5%BF%83.html">帮助中心</a> </div>
          <div> <a href="http://www.qizejx.cn/?link-showList.html">友情链接</a> </div>
        </div>
      </li>
    </ul>
    <script>
if($('widgets_89_showMore')){
	$('widgets_89_showMore').setOpacity(.8);
}
</script> 
  </div>
  <div class="loginbar">
    <div class="fr topmenu"> <a href="http://www.qizejx.cn//?page-about.html">关于我们</a> <a
					href="http://www.qizejx.cn/?page-%E8%B4%A7%E5%88%B0%E4%BB%98%E6%AC%BE.html">支付方式</a> <a href="http://www.qizejx.cn//?/page-helpcenter.html">帮助中心</a> </div>
  </div>
  <div id="menum">
    <div id="outer">
      <ul class="menum ulul">
        <li class="sub lili"
						style="background: url(000.jpg) left no-repeat;"><a
						class="aa" href="./">
          <comment>
          </a>
          </comment>
          <ins>
          <table class="ttable">
            <tr>
              <td><ul class="ulul">
                  <li class="lili">
                    <div class="borderb " id="widgets_92">
                      <div class="bodyb">
                        <style id="widwidgets_92_style">
.DuceDropNavs {
	_float: left;
	padding: 0px;
}

.DuceDropNavs .h3 {
	height: 32px;
	line-height: 31px;
	background:
		url("http://www.qizejx.cn/plugins/widgets/ducegoodscat/images/m_cat_icon.gif")
		no-repeat center 0;
	text-indent: -9999px;
	text-align: center;
	font-weight: 700;
}

.m-cat-depth-1 {
	*float: left;
	*width: 100%;
	height: 32px;
	border-bottom: 1px solid #fde6d2;
}

.m-cat-depth-1 a {
	text-align: left;
}

.m-cat-depth-1 .depth-1 {
	display: block;
	position: relative;
	font-size: 14px;
	height: 30px;
	padding: 0px 0px 0px 0px;
	background:
		url("http://www.qizejx.cn/plugins/widgets/ducegoodscat/images/16.gif")
		no-repeat 188px center;
	z-index: 8;
}

.m-cat-depth-1 .depth-1 em {
	display: block;
	background:
		url("http://www.qizejx.cn/plugins/widgets/ducegoodscat/images/15.jpg")
		no-repeat 10px center;
	padding-left: 19px;
	height: 30px;
	line-height: 29px;
	line-height: 33px\9;
	overflow: hidden;
	font-size: 14px;
	color: #333;
}

.m-cat-depth-1 a.gay em {
	background-position: right -132px;
}

.m-cat-depth-1 a:hover {
	text-decoration: none;
}

.m-cat-depth-1 .depth-1:hover em {
	font-weight: 700;
}

.DuceDropNavs .current .depth-1 {
	overflow: hidden;
	z-index: 999999;
	position: absolute;
	width: 185px;
	_width: 178px;
	border: 1px solid #c00;
	border-right: 0px;
	background: #FFF8F0;
	border-left: 0px;
}

.DuceDropNavs .current .depth-1 em {
	font-weight: 700;
	color: #c00;
}

.m-cat-popup {
	position: absolute;
	padding: 5px 8px 8px 1px;
	z-index: 99;
	display: none; /* top:30px;*/
	width: 467px;
	background: #fff
		url("http://www.qizejx.cn/plugins/widgets/ducegoodscat/images/17.gif")
		left top repeat-y;
	border: 1px solid #c00;
	border-left: 0px;
}

.m-cat-popup .bai {
	width: 2px;
	height: 30px;
	background: #FFF8F0;
	top: 0px;
	left: 0px;
	position: absolute;
}

.DuceDropNavs .current a:hover {
	color: #f00;
}

.m-cat-popup a,.m-cat-popup span { /*display:block;*/
	height: 22px;
	line-height: 22px;
	_line-height: 22px;
}

.m-cat-drop-2 {
	width: 465px;
	*padding-bottom: 5px;
	float: left;
}

.m-cat-drop-2 .m-cat-depth-0 {
	width: 465px;
	display: block;
	clear: both;
	font-weight: 700;
	padding: 6px 0px 6px 0px;
	border-bottom: 1px solid #ffefd7;
}

.m-depth-2 {
	text-align: right;
	display: inline;
}

.m-cat-drop-2 .m-cat-depth-2 {
	float: left;
	margin-top: 2px;
	height: 20px;
	overflow: hidden;
}

.m-cat-drop-2 .m-cat-depth-0 a {
	
}

.m-cat-drop-2 .m-cat-depth-2 a {
	padding: 0px 10px 0px 10px;
	float: left;
	border-left: 1px solid #ccc;
}

.m-cat-drop-3 a:hover,.m-cat-drop-2 .m-cat-depth-2 a:hover {
	text-decoration: underline;
}

.m-cat-drop-2 .bold a {
	color: #C00;
	font-weight: 700;
}

.m-depth-2 {
	font-weight: bold;
}

.m-cat-drop-3 {
	width: 100%;
}

.m-cat-drop-3 a {
	padding: 0px 10px 0px 10px;
	float: left;
	background:
		url("http://www.qizejx.cn/plugins/widgets/ducegoodscat/images/18.jpg")
		left no-repeat;
	white-space: nowrap;
}

.m-cat-drop-3 a:hover {
	background:
		url("http://www.qizejx.cn/plugins/widgets/ducegoodscat/images/18.jpg")
		left no-repeat;
}

.m-depth-2 {
	padding-right: 6px;
}

.m-cat-drop-4 {
	width: 168px;
	*padding-bottom: 5px;
	float: left;
	overflow: hidden;
}

.m-cat-drop-4 .m-cat-depth-0 {
	display: block;
	clear: both;
	font-weight: 700;
	padding: 3px 0 2px 2px;
}

.m-cat-drop-4 .m-cat-depth-0 a {
	padding-left: 5px;
}

.m-cat-drop-4 .m-cat-depth-2 {
	float: left;
	margin-top: 2px;
	width: 49%;
	height: 20px;
	overflow: hidden;
}

.m-cat-drop-4 .m-cat-depth-2 a {
	padding-left: 5px;
	font-weight: 400;
}

.m-cat-drop-4 .m-cat-depth-2 a:hover {
	text-decoration: underline;
}

.m-cat-drop-4 .bold a {
	color: #C00;
	font-weight: 700;
}

.DuceDropNavs li a {
	color: #444;
}

.DuceDropNavs span,.DuceDropNavs li a:hover {
	color: #C00;
}

.m-cat-depth-0 a.m-depth-2 {
	padding-left: 2px;
	background: none;
}

.DuceDropNavs li a.m-depth-2 {
	color: #c00;
	text-decoration: underline;
}
</style>
                        <div class="DuceDropNavs">
                          <ul>
                          </ul>
                          <div class="clear"></div>
                        </div>
                        <script>

window.addEvent('domready',function(e){

	$('widwidgets_92_style').inject($E('link'), 'before');

	var cats = $ES('.DuceDropNavs .m-cat-depth-1');

	if(!cats[0]) return;



	cats.each(function(cat, i){

		var popup = cat.getElement('.m-cat-popup');

		if(popup){

			cat.addEvents({

				'mouseenter':function(){

					this.addClass('current');

					var li = this.getSize();

					popup.setStyles({

						'display':'block',

						'margin': '-'+0+'px 0 0 '+(li.x-22)+'px'

					});

				},

				'mouseleave':function(){

					this.removeClass('current');

					popup.setStyle('display','none');

				}

			});

		}

	});

})

</script> 
                      </div>
                    </div>
                  </li>
                </ul></td>
            </tr>
          </table>
          </ins></a></li>
      </ul>
    </div>
  </div>
</div>
<script>
if($('_showMore')){
	$('_showMore').setOpacity(.8);
}
var objMenu = document.getElementById("Menu");
if (objMenu) {
	var objs = objMenu.getElementsByTagName("A");
	var currentPage = document.location.href.toString();
	currentPage = currentPage.substr(currentPage.lastIndexOf("/") + 1, currentPage.length);

	if (currentPage.length < 1) {
		objs[0].className = "hover";
	}
	else {
		for (var i = 0; i < objs.length; i++) {
			var page = objs[i].href;
			page = page.substr(page.lastIndexOf("/") + 1, page.length);
			if (page == currentPage) 
				objs[i].className = "hover";
		}
	}
}
</script>
<div class="AllWrap clearfix">
  <div class="tanga fl">
    <div class="borderb " id="widgets_104">
      <div class="bodyb">
        <style id="widwidgets_104_style">
.DuceDropNavs {
	_float: left;
	padding: 0px;
}

.DuceDropNavs .h3 {
	height: 32px;
	line-height: 31px;
	background:
		url("http://www.qizejx.cn/plugins/widgets/ducegoodscat/images/m_cat_icon.gif")
		no-repeat center 0;
	text-indent: -9999px;
	text-align: center;
	font-weight: 700;
}

.m-cat-depth-1 {
	*float: left;
	*width: 100%;
	height: 32px;
	border-bottom: 1px solid #fde6d2;
}

.m-cat-depth-1 a {
	text-align: left;
}

.m-cat-depth-1 .depth-1 {
	display: block;
	position: relative;
	font-size: 14px;
	height: 30px;
	padding: 0px 0px 0px 0px;
	background:
		url("http://www.qizejx.cn/plugins/widgets/ducegoodscat/images/16.gif")
		no-repeat 188px center;
	z-index: 8;
}

.m-cat-depth-1 .depth-1 em {
	display: block;
	background:
		url("http://www.qizejx.cn/plugins/widgets/ducegoodscat/images/15.jpg")
		no-repeat 10px center;
	padding-left: 19px;
	height: 30px;
	line-height: 29px;
	line-height: 33px\9;
	overflow: hidden;
	font-size: 14px;
	color: #333;
}

.m-cat-depth-1 a.gay em {
	background-position: right -132px;
}

.m-cat-depth-1 a:hover {
	text-decoration: none;
}

.m-cat-depth-1 .depth-1:hover em {
	font-weight: 700;
}

.DuceDropNavs .current .depth-1 {
	overflow: hidden;
	z-index: 999999;
	position: absolute;
	width: 185px;
	_width: 178px;
	border: 1px solid #c00;
	border-right: 0px;
	background: #FFF8F0;
	border-left: 0px;
}

.DuceDropNavs .current .depth-1 em {
	font-weight: 700;
	color: #c00;
}

.m-cat-popup {
	position: absolute;
	padding: 5px 8px 8px 1px;
	z-index: 99;
	display: none; /* top:30px;*/
	width: 467px;
	background: #fff
		url("http://www.qizejx.cn/plugins/widgets/ducegoodscat/images/17.gif")
		left top repeat-y;
	border: 1px solid #c00;
	border-left: 0px;
}

.m-cat-popup .bai {
	width: 2px;
	height: 30px;
	background: #FFF8F0;
	top: 0px;
	left: 0px;
	position: absolute;
}

.DuceDropNavs .current a:hover {
	color: #f00;
}

.m-cat-popup a,.m-cat-popup span { /*display:block;*/
	height: 22px;
	line-height: 22px;
	_line-height: 22px;
}

.m-cat-drop-2 {
	width: 465px;
	*padding-bottom: 5px;
	float: left;
}

.m-cat-drop-2 .m-cat-depth-0 {
	width: 465px;
	display: block;
	clear: both;
	font-weight: 700;
	padding: 6px 0px 6px 0px;
	border-bottom: 1px solid #ffefd7;
}

.m-depth-2 {
	text-align: right;
	display: inline;
}

.m-cat-drop-2 .m-cat-depth-2 {
	float: left;
	margin-top: 2px;
	height: 20px;
	overflow: hidden;
}

.m-cat-drop-2 .m-cat-depth-0 a {
	
}

.m-cat-drop-2 .m-cat-depth-2 a {
	padding: 0px 10px 0px 10px;
	float: left;
	border-left: 1px solid #ccc;
}

.m-cat-drop-3 a:hover,.m-cat-drop-2 .m-cat-depth-2 a:hover {
	text-decoration: underline;
}

.m-cat-drop-2 .bold a {
	color: #C00;
	font-weight: 700;
}

.m-depth-2 {
	font-weight: bold;
}

.m-cat-drop-3 {
	width: 100%;
}

.m-cat-drop-3 a {
	padding: 0px 10px 0px 10px;
	float: left;
	background:
		url("http://www.qizejx.cn/plugins/widgets/ducegoodscat/images/18.jpg")
		left no-repeat;
	white-space: nowrap;
}

.m-cat-drop-3 a:hover {
	background:
		url("http://www.qizejx.cn/plugins/widgets/ducegoodscat/images/18.jpg")
		left no-repeat;
}

.m-depth-2 {
	padding-right: 6px;
}

.m-cat-drop-4 {
	width: 168px;
	*padding-bottom: 5px;
	float: left;
	overflow: hidden;
}

.m-cat-drop-4 .m-cat-depth-0 {
	display: block;
	clear: both;
	font-weight: 700;
	padding: 3px 0 2px 2px;
}

.m-cat-drop-4 .m-cat-depth-0 a {
	padding-left: 5px;
}

.m-cat-drop-4 .m-cat-depth-2 {
	float: left;
	margin-top: 2px;
	width: 49%;
	height: 20px;
	overflow: hidden;
}

.m-cat-drop-4 .m-cat-depth-2 a {
	padding-left: 5px;
	font-weight: 400;
}

.m-cat-drop-4 .m-cat-depth-2 a:hover {
	text-decoration: underline;
}

.m-cat-drop-4 .bold a {
	color: #C00;
	font-weight: 700;
}

.DuceDropNavs li a {
	color: #333;
}

.DuceDropNavs span,.DuceDropNavs li a:hover {
	color: #C00;
}

.m-cat-depth-0 a.m-depth-2 {
	padding-left: 2px;
	background: none;
}

.DuceDropNavs li a.m-depth-2 {
	color: #c00;
	text-decoration: underline;
}
</style>
        <div class="DuceDropNavs">
          <ul>
            <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["sid"]) == "0"): ?><li class="m-cat-depth-1"><a class="depth-1" href="Product.php?id=<?php echo ($vo["id"]); ?>"><em><?php echo ($vo["name"]); ?></em></a>
                  <ul class="m-cat-popup">
                    <div class="hei">
                      <ul class="m-cat-drop-2">
                        <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i; if(($vo[id]) == $vo2["sid"]): ?><li class="m-cat-depth-0">
                              <table width="460" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="75" align="right"><a class="m-depth-2" href="Product.php?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo2["name"]); ?></a></td>
                                  <td><ul class="m-cat-drop-3">
                                      <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i; if(($vo2["id"]) == $vo3["sid"]): ?><a href="Product.php?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo3["name"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </ul></td>
                                </tr>
                              </table>
                            </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        <div class="clear"></div>
                      </ul>
                      <style>
.m-cat-popup {
	width: 633px;
}
</style>
                    </div>
                    <div class="bai"></div>
                  </ul>
                </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <div class="clear"></div>
        </div>
        <script>

window.addEvent('domready',function(e){

	$('widwidgets_104_style').inject($E('link'), 'before');

	var cats = $ES('.DuceDropNavs .m-cat-depth-1');

	if(!cats[0]) return;



	cats.each(function(cat, i){

		var popup = cat.getElement('.m-cat-popup');

		if(popup){

			cat.addEvents({

				'mouseenter':function(){

					this.addClass('current');

					var li = this.getSize();

					popup.setStyles({

						'display':'block',

						'margin': '-'+0+'px 0 0 '+(li.x-22)+'px'

					});

				},

				'mouseleave':function(){

					this.removeClass('current');

					popup.setStyle('display','none');

				}

			});

		}

	});

})

</script> 
      </div>
    </div>
  </div>
  <div class="tangb fl"> 
    <script>
				var FxScroll = new Class({
					Implements : [ Options ],
					options : {
						duration : 2000,
						direction : 'Left',
						controlEvent : 'mouseover'
					},
					initialize : function(options) {
						this.setOptions(options);
						this.FxContain = options.FxContain;
						this.FxItems = $ES('li', this.FxContain);
						this.curClass = options.curClass;
						if (!this.FxItems.length)
							return;
						this.ItemParent = this.FxItems[0].getParent();
						this.control = options.control;
						this.controlItems = $ES('a', this.control);
						this.controlEvent();
						this.init();
					},
					init : function() {
						if (this.options.direction == 'Left') {
							this.ItemSpace = this.FxItems[0].offsetWidth
									+ this.FxItems[0].getStyle('marginLeft')
											.toInt()
									+ this.FxItems[0].getStyle('marginRight')
											.toInt();
							var ItemParentW = this.ItemSpace
									* this.FxItems.length;
							this.ItemParent.setStyle('width', ItemParentW);
						} else {
							this.ItemSpace = this.FxItems[0].offsetHeight
									+ this.FxItems[0].getStyle('marginTop')
											.toInt()
									+ this.FxItems[0].getStyle('marginBottom')
											.toInt();
							var ItemParentH = this.ItemSpace
									* this.FxItems.length;
						}
						this.controlItems[0].addClass(this.curClass);
						this.start();
					},
					start : function() {
						this.timer = this.scroll.periodical(
								this.options.duration, this);
					},
					stop : function() {
						if (this.timer)
							$clear(this.timer);
					},
					controlEvent : function() {
						var that = this;
						this.controlItems.each(function(el, index) {
							el.addEvents({
								'mouseover' : function(e) {
									that.stop();
								},
								'mouseover' : function(e) {
									that.stop();
									if (that.turnTime)
										$clear(that.turnTime);
									that.turnTime = that.scroll.delay(500,
											that, index);
								},
								'mouseleave' : function(e) {
									that.start();
								}
							});
						});
					},
					scroll : function(index) {
						var space = this.FxContain.retrieve('space',
								this.ItemSpace);
						var myFx = new Fx.Scroll(this.FxContain, {
							'link' : 'cancel'
						});
						if (space >= this.FxItems.length * this.ItemSpace)
							space = 0;
						if ($chk(index)) {
							space = index * this.ItemSpace;
							cur = index
						}
						var cur = (space / this.ItemSpace).toInt();
						this.controlClass(cur);
						if (this.options.direction == 'Left') {
							var spaceY = 0;
							var spaceX = space;
						} else {
							var spaceY = space;
							var spaceX = 0;
						}
						myFx.start(spaceX, spaceY);
						this.FxContain.store('space', space + this.ItemSpace);
					},
					controlClass : function(index) {
						var cur = this.FxContain.retrieve('class', 0);
						if (!this.controlItems[cur]
								|| !this.controlItems[index])
							return;
						this.controlItems[cur].removeClass(this.curClass);
						this.controlItems[index].addClass(this.curClass);
						this.FxContain.store('class', index);
					}
				});

				window.addEvent('domready', function() {
					var options = {
						FxContain : $('slidecontainer'),
						duration : '3000',
						direction : 'Left',
						control : $('num_nav'),
						controlEvent : 'mouseover',
						curClass : 'active'
					};
					var vscroll = new FxScroll(options);
				});
			</script>
    <style id="slidewigetsStyle" name="">
#slidewigetscontrol #num_nav li {
	float: left;
	height: 12px;
	width: 25px;
	font-size: 10px;
	line-height: 12px;
	text-align: center;
	cursor: pointer;
}

#slidewigetscontrol #num_nav li a {
	display: block;
	background: #efefef;
	color: #0e0e0e;
	text-align: center;
}

#slidewigetscontrol #num_nav li a.active {
	background: #ff6600;
	color: #ffffff;
}
</style>
    <div id="slidecontainer"
				style="height: 280px; overflow: hidden; width: 550px;">
      <ul class="slideWrap" style="overflow: overflow; height: 280px;">
        <li class="slideitem" style="float: left"><a href=""><img
							width="550" height="280"
							src="http://www.qizejx.cn/themes/buy2012/images/g1.jpg" /></a></li>
        <li class="slideitem" style="float: left"><a href=""><img
							width="550" height="280"
							src="http://www.qizejx.cn/themes/buy2012/images/g2.jpg" /></a></li>
        <li class="slideitem" style="float: left"><a href=""><img
							width="550" height="280"
							src="http://www.qizejx.cn/themes/buy2012/images/g3.jpg" /></a></li>
        <li class="slideitem" style="float: left"><a href=""><img
							width="550" height="280"
							src="http://www.qizejx.cn/themes/buy2012/images/g4.jpg" /></a></li>
        <li class="slideitem" style="float: left"><a href=""><img
							width="550" height="280"
							src="http://www.qizejx.cn/themes/buy2012/images/g5.jpg" /></a></li>
      </ul>
    </div>
    <div id="slidewigetscontrol">
      <div id="play_btn"></div>
      <ul id="num_nav" class="clearfix">
        <li><a href="javascript:void(0)">1</a></li>
        <li><a href="javascript:void(0)">2</a></li>
        <li><a href="javascript:void(0)">3</a></li>
        <li><a href="javascript:void(0)">4</a></li>
        <li><a href="javascript:void(0)">5</a></li>
      </ul>
    </div>
    <script>
				window
						.addEvent(
								'domready',
								function() {
									$('slidewigetsStyle').inject($E('link'),
											'before');
									$$('#slidewigetscontrol #num_nav ul li')
											.setStyle(
													'width',
													($('slidecontainer')
															.getSize().x - 1)
															/ $$('#slidewigetscontrol #num_nav ul li').length)

								});
			</script>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td></td>
        <td align="center"></td>
        <td align="right"></td>
      </tr>
    </table>
  </div>
  <div class="tangc fr">
    <table width="100%" border="0" cellspacing="0" cellpadding="0"
				class="xing">
      <tr>
        <td align="center" style=""><img
						src="__PUBLIC__/themes/buy2012/images/r3.gif"><br />
          质量<br />
          保障</td>
        <td align="center" style=""><img
						src="__PUBLIC__/themes/buy2012/images/r2.gif"><br />
          满500元<br />
          免运费</td>
        <td align="center" style="border-right: 0px;"><img
						src="__PUBLIC__/themes/buy2012/images/r1.gif"><br />
          售后<br />
          上门</td>
      </tr>
    </table>
    <div class="borderpx " id="widgets_236">
      <div id="swfmovie_widgets_236">Flash Movie</div>
      <script type="text/javascript">
					window
							.addEvent(
									'domready',
									function() {

										var path = "plugins/widgets/ad_multiple/";

										var ad_style = "normal";

										var link_arr = "http://www.qizejx.cn/images//20130620/560a482685bad118.jpg|http://www.qizejx.cn/images//20130620/e6d2855e32321aac.jpg|http://www.qizejx.cn/images//20130620/9980866ab0c479c4.jpg|http://www.qizejx.cn/images//20130620/4efa3fdb73945215.jpg"
												.trim();

										var linktarget_arr = "http://www.qizejx.cn/?page-memberrank.html|http://www.qizejx.cn/?page-memberrank.html|http://www.qizejx.cn/?page-memberrank.html|"
												.trim();

										var image_length = getLength(4);

										if (ad_style == "graphics") {

											var tabtext_arr = "|||".trim();

											var tabsmallpic_arr = "|||".trim();

											var link_arr_test = link_arr
													.split(",");
											var tabsmallpic_arr_test = tabsmallpic_arr
													.split(",");
											var resetarr = false;

											for ( var i = link_arr_test.length - 1; i >= 0; i--) {
												if (link_arr_test[i] == ""
														&& tabsmallpic_arr_test[i] == "") {
													link_arr_test.splice(i, 1);
													tabsmallpic_arr_test
															.splice(i, 1);
													image_length--;
													resetarr = true;
												}
											}

											if (resetarr) {
												link_arr = "";
												tabsmallpic_arr = "";
												link_arr_test
														.each(function(item,
																index) {
															(link_arr_test.length - 1 == index) ? (link_arr += item)
																	: (link_arr += item
																			+ ",");
														});
												tabsmallpic_arr_test
														.each(function(item,
																index) {
															(tabsmallpic_arr_test.length - 1 == index) ? (tabsmallpic_arr += item)
																	: (tabsmallpic_arr += item
																			+ ",");
														});
											}

										}

										function getLength(l) {
											var len = l;
											if (link_arr == "")
												return 0;
											return len - 1;
										}

										var swfvars = {
											widgetpath : path,
											allimage : image_length,
											adstyle : ad_style,
											swfwidth : 216,
											swfheight : 200,
											swfviewstyle : "alpha",
											links : link_arr,
											linktarget : linktarget_arr,
											windowtarget : "_blank",
											changeimagespeed : 1
										};
										if (ad_style == "number") {
											swfvars.mouseevent = "move";
											swfvars.numberstyle = "inner";
											swfvars.numberposition = "rightbottom";
											swfvars.numberbtnstyle = "horizontal";
											swfvars.autochangeimage = 1;
											swfvars.imagewait = 3;
											swfvars.btncolor = "#1072c5";
											swfvars.btnbgcolor = "#cce4f2";
											swfvars.btnhovercolor = "#ffffff";
											swfvars.btnhoverbgcolor = "#076cb3";
											swfvars.btnbordercolor = "#74b4e1";
											swfvars.btnhoverbordercolor = "#0a6db2";
											swfvars.numbercolumncolor = "#c6d4e1";
											swfvars.numbercolumnalpha = 0.4;
											swfvars.displayarrow = 0;
											swfvars.swfbgcolor = "#ffffff";
										} else if (ad_style == "graphics") {
											swfvars.tabmode = "text";
											swfvars.tabstyle = "inner";
											swfvars.tabcount = 4;
											swfvars.tabsize = 60;
											swfvars.mouseevent_graphics = "move";
											swfvars.tabposition = "bottom";
											swfvars.autochangeimage_graphics = 1;
											swfvars.imagewait_graphics = 3;
											swfvars.btncolor_graphics = "#1072c5";
											swfvars.btnbgcolor_graphics = "#cce4f2";
											swfvars.btnhovercolor_graphics = "#ffffff";
											swfvars.btnhoverbgcolor_graphics = "#076cb3";
											swfvars.btnalpha = 0.7;
											swfvars.btnhoveralpha = 1;
											swfvars.tabcolumncolor = "#ffffff";
											swfvars.tabcolumnalpha = 1;
											swfvars.swfbgcolor_graphics = "#ffffff";
											swfvars.tabsmallpic = tabsmallpic_arr;
											swfvars.tabtext = tabtext_arr;
										}

										var obj = new Swiff(
												path + 'swf/main.swf',
												{
													width : 216,
													height : 200,
													container : $('swfmovie_widgets_236'),
													events : {
														load : function() {
															alert("Flash is loaded!");
														}
													},
													vars : swfvars
												});

									});
				</script> 
    </div>
  </div>
  <div class="clear" style="height: 6px; overflow: hidden;"></div>
  <div class="qinga fl"> 
    <script>
				var good_list = new Class({
					divSrc : '',
					divSrc2 : '',
					initialize : function(div1, div2) {
						this.divSrc = div1;
						this.divSrc2 = div2;

						this.tab = 'ttp_widgets_114';
					},
					changeTableing : function(type, div) {
						var i;
						for (i = 0; i < 5; i++) {
							if (i == type) {
								$(this.divSrc2 + i).setStyles({
									'display' : ''
								});

								$('widgets_114_more_' + i).setStyles({
									'display' : ''
								});
								$(this.tab + i).addClass('current');
							} else {
								$(this.divSrc2 + i).setStyles({
									'display' : 'none'
								});
								$('widgets_114_more_' + i).setStyles({
									'display' : 'none'
								});
								$(this.tab + i).removeClass('current');
							}
						}
					}
				});

				var ef_widgets_114 = new good_list('top_widgets_114',
						'widgets_114_list');
			</script>
    <style>
.itemsWrap {
	*display: inline;
	float: left;
	overflow: hidden;
}
</style>
    <div id="top_widgets_114" class="GoodsList-Tabs">
      <div class="current" style="float: left" id="ttp_widgets_1140"
					onMouseOver="ef_widgets_114.changeTableing(0)"> <span>推荐产品</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_1141"
					onMouseOver="ef_widgets_114.changeTableing(1,'widgets_114_more1')"> <span>最新上架</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_1142"
					onMouseOver="ef_widgets_114.changeTableing(2,'widgets_114_more2')"> <span>热卖产品</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_1143"
					onMouseOver="ef_widgets_114.changeTableing(3,'widgets_114_more3')"> <span>促销产品</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_1144"
					onMouseOver="ef_widgets_114.changeTableing(4,'widgets_114_more4')"> <span>猜您喜欢</span>&nbsp; </div>
    </div>
    <div class="GoodsListWrap">
      <div class="GoodsList">
        <div id="widgets_114_list0">
          <?php if(is_array($re)): $i = 0; $__LIST__ = $re;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="292" style="width: 24%;">
              <div class="item">
                <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html"	target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>"width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
                <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?><br />
                  </a> </h6>
                <ul>
                </ul>
              </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_114_more_0" class="more" style=""></div>
        <div id="widgets_114_list1" style="display: none">
          <?php if(is_array($Added)): $i = 0; $__LIST__ = $Added;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="409" style="width: 24%;">
              <div class="item">
                <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html"	target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>"width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
                <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?><br />
                  </a> </h6>
                <ul>
                </ul>
              </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_114_more_1" class="more" style="display: none;"> </div>
        <div id="widgets_114_list2" style="display: none">
          <?php if(is_array($Hot)): $i = 0; $__LIST__ = $Hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="179" style="width: 24%;">
              <div class="item">
                <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html"	target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>"width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
                <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?><br />
                  </a> </h6>
                <ul>
                </ul>
              </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_114_more_2" class="more" style="display: none;"> </div>
        <div id="widgets_114_list3" style="display: none">
          <?php if(is_array($Pro)): $i = 0; $__LIST__ = $Pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="705" style="width: 24%;">
              <div class="item">
                <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html"	target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>"width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
                <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?><br />
                  </a> </h6>
                <ul>
                </ul>
              </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_114_more_3" class="more" style="display: none;"> </div>
        <div id="widgets_114_list4" style="display: none">
          <?php if(is_array($like)): $i = 0; $__LIST__ = $like;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="1183" style="width: 24%;">
              <div class="item">
                <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html"	target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>"width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
                <h6>
                <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?><br />
                <ul>
                </ul>
              </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_114_more_4" class="more" style="display: none;"> </div>
      </div>
    </div>
  </div>
  <div class="qingb fr">
    <div class="borderaa " id="widgets_238">
      <div class="border-top">
        <h3>热搜产品排名</h3>
      </div>
      <div class="border-body">
        <div class="RankingList">
          <ul>
          
          <?php if(is_array($click)): $i = 0; $__LIST__ = $click;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="l1 dotsep" style="color: default;"><span><?php echo ($i); ?></span>&nbsp;<a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank"title="<?php echo ($vo["title"]); ?>" style="color: default;"> <?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </div>
        <div class="more clearfix"> <a
							href="http://www.qizejx.cn/?gallery-_ANY_-b,_ANY__t,_ANY_-5-grid.html">更多...</a> </div>
      </div>
    </div>
  </div>
  <div class="clear" style="height: 6px; overflow: hidden;"></div>
</div>
<div class="AllWrap clearfix">
  <div class="meia lan fl">
    <div class="sptit">
      <div class="AdvBanner"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank"> <img src='__PUBLIC__/themes/buy2012/images/tit1.png' style="" /> </a> </div>
    </div>
    <div class="spbg">
      <div class="spbga">
        <?php if(is_array($all1)): $i = 0; $__LIST__ = $all1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/product.php?id=<?php echo ($vo["id"]); ?>">· <?php echo ($vo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
      <div class="spbgb">
        <div class="AdvBanner"> <a href="/product.php?id=<?php echo ($vo["id"]); ?>" target="_blank"> <img
							src='__PUBLIC__/themes/buy2012/images/ti1.jpg' style="" /> </a> </div>
      </div>
    </div>
  </div>
  <div class="meib lan fr"> 
    <script>
				var good_list = new Class({
					divSrc : '',
					divSrc2 : '',
					initialize : function(div1, div2) {
						this.divSrc = div1;
						this.divSrc2 = div2;

						this.tab = 'ttp_widgets_119';
					},
					changeTableing : function(type, div) {
						var i;
						for (i = 0; i < 5; i++) {
							if (i == type) {
								$(this.divSrc2 + i).setStyles({
									'display' : ''
								});

								$('widgets_119_more_' + i).setStyles({
									'display' : ''
								});
								$(this.tab + i).addClass('current');
							} else {
								$(this.divSrc2 + i).setStyles({
									'display' : 'none'
								});
								$('widgets_119_more_' + i).setStyles({
									'display' : 'none'
								});
								$(this.tab + i).removeClass('current');
							}
						}
					}
				});
				var ef_widgets_119 = new good_list('top_widgets_119',
						'widgets_119_list');
			</script>
    <style>
.itemsWrap {
	*display: inline;
	float: left;
	overflow: hidden;
}
</style>
    <div id="top_widgets_119" class="GoodsList-Tabs">
      <div class="current" style="float: left" id="ttp_widgets_1190"
					onMouseOver="ef_widgets_119.changeTableing(0)"> <span>手拉葫芦</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_1191"
					onMouseOver="ef_widgets_119.changeTableing(1,'widgets_119_more1')"> <span>手扳葫芦</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_1192"
					onMouseOver="ef_widgets_119.changeTableing(2,'widgets_119_more2')"> <span>电动葫芦</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_1193"
					onMouseOver="ef_widgets_119.changeTableing(3,'widgets_119_more3')"> <span>手摇/电动绞盘</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_1194"
					onMouseOver="ef_widgets_119.changeTableing(4,'widgets_119_more4')"> <span>悬臂吊/龙门吊架</span>&nbsp; </div>
    </div>
    <div class="GoodsListWrap">
      <div class="GoodsList">
      
        <div id="widgets_119_list0">
        <?php if(is_array($shola)): $i = 0; $__LIST__ = array_slice($shola,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="1203" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6><a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>          
          <div class="clear"></div>
                  <?php if(is_array($shola)): $i = 0; $__LIST__ = array_slice($shola,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="1203" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6><a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>          
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_119_more_0" class="more" style=""></div>
        <div id="widgets_119_list1" style="display: none">
        
        
        <?php if(is_array($shoban)): $i = 0; $__LIST__ = array_slice($shoban,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="1203" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6><a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          
          
          
          
          
          <div class="clear"></div>
                  <?php if(is_array($shoban)): $i = 0; $__LIST__ = array_slice($shoban,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="1203" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6><a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>          
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_119_more_1" class="more" style="display: none;"> </div>
        <div id="widgets_119_list2" style="display: none">
        
         <?php if(is_array($diand)): $i = 0; $__LIST__ = array_slice($diand,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="1203" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="#/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6><a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          
          
          
          <div class="clear"></div>
           <?php if(is_array($diand)): $i = 0; $__LIST__ = array_slice($diand,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="1203" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6><a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_119_more_2" class="more" style="display: none;"> </div>
        <div id="widgets_119_list3" style="display: none">
         <?php if(is_array($shouya)): $i = 0; $__LIST__ = array_slice($shouya,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="1203" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6><a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          
          
          
          <div class="clear"></div>
            <?php if(is_array($shouya)): $i = 0; $__LIST__ = array_slice($shouya,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="1203" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6><a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_119_more_3" class="more" style="display: none;"> </div>
        <div id="widgets_119_list4" style="display: none">
        
           <?php if(is_array($xuanbi)): $i = 0; $__LIST__ = array_slice($xuanbi,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="1203" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6><a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          
          <div class="clear"></div>
          <?php if(is_array($xuanbi)): $i = 0; $__LIST__ = array_slice($xuanbi,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="1203" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6><a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_119_more_4" class="more" style="display: none;"> </div>
      </div>
    </div>
  </div>
  <div class="clear" style="height: 10px; overflow: hidden;"></div>
  <div class="meia hong fl">
    <div class="sptit">
      <div class="AdvBanner"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank"> <img
						src='__PUBLIC__/themes/buy2012/images/tit3.png' style="" /> </a> </div>
    </div>
    <div class="spbg">
      <div class="spbga"> 
      <?php if(is_array($all2)): $i = 0; $__LIST__ = $all2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/product.php?id=<?php echo ($vo["id"]); ?>">· <?php echo ($vo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?></div>
      <div class="spbgb">
        <div class="AdvBanner"> <a href="/product.php?id=<?php echo ($vo["id"]); ?>" target="_blank"> <img src='__PUBLIC__/themes/buy2012/images/ti3.jpg' style="" /> </a> </div>
      </div>
    </div>
  </div>
  <div class="meib fr"> 
    <script>
				var good_list = new Class({
					divSrc : '',
					divSrc2 : '',
					initialize : function(div1, div2) {
						this.divSrc = div1;
						this.divSrc2 = div2;

						this.tab = 'ttp_widgets_207';
					},
					changeTableing : function(type, div) {
						var i;
						for (i = 0; i < 5; i++) {
							if (i == type) {
								$(this.divSrc2 + i).setStyles({
									'display' : ''
								});

								$('widgets_207_more_' + i).setStyles({
									'display' : ''
								});
								$(this.tab + i).addClass('current');
							} else {
								$(this.divSrc2 + i).setStyles({
									'display' : 'none'
								});
								$('widgets_207_more_' + i).setStyles({
									'display' : 'none'
								});
								$(this.tab + i).removeClass('current');
							}
						}
					}
				});

				var ef_widgets_207 = new good_list('top_widgets_207',
						'widgets_207_list');
			</script>
    <style>
.itemsWrap {
	*display: inline;
	float: left;
	overflow: hidden;
}
</style>
    <div id="top_widgets_207" class="GoodsList-Tabs">
      <div class="current" style="float: left" id="ttp_widgets_2070"
					onMouseOver="ef_widgets_207.changeTableing(0)"> <span>搬运工具</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_2071"
					onMouseOver="ef_widgets_207.changeTableing(1,'widgets_207_more1')"> <span>吊装索具</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_2072"
					onMouseOver="ef_widgets_207.changeTableing(2,'widgets_207_more2')"> <span>钢板吊钳</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_2073"
					onMouseOver="ef_widgets_207.changeTableing(3,'widgets_207_more3')"> <span>永磁吸盘</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_2074"
					onMouseOver="ef_widgets_207.changeTableing(4,'widgets_207_more4')"> <span>弹簧平衡器</span>&nbsp; </div>
    </div>
    <div class="GoodsListWrap">
      <div class="GoodsList">
        <div id="widgets_207_list0">
        	<?php if(is_array($banyun)): $i = 0; $__LIST__ = array_slice($banyun,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="816" style="width: 24%;">
            <div class="item">
              <div class="goodsImg" style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img				src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>  
          
          <div class="clear"></div>
           <?php if(is_array($banyun)): $i = 0; $__LIST__ = array_slice($banyun,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="816" style="width: 24%;">
            <div class="item">
              <div class="goodsImg" style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img				src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>          
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_207_more_0" class="more" style=""></div>
        <div id="widgets_207_list1" style="display: none">
        <?php if(is_array($dzsj)): $i = 0; $__LIST__ = array_slice($dzsj,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="816" style="width: 24%;">
            <div class="item">
              <div class="goodsImg" style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img				src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>          
          <div class="clear"></div>
                  <?php if(is_array($dzsj)): $i = 0; $__LIST__ = array_slice($dzsj,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="816" style="width: 24%;">
            <div class="item">
              <div class="goodsImg" style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img				src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>           
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_207_more_1" class="more" style="display: none;"> </div>
        <div id="widgets_207_list2" style="display: none">        
         <?php if(is_array($gbdq)): $i = 0; $__LIST__ = array_slice($gbdq,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="816" style="width: 24%;">
            <div class="item">
              <div class="goodsImg" style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img				src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>          
          <div class="clear"></div>          
         <?php if(is_array($gbdq)): $i = 0; $__LIST__ = array_slice($gbdq,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="816" style="width: 24%;">
            <div class="item">
              <div class="goodsImg" style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img				src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?> 
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_207_more_2" class="more" style="display: none;"> </div>
        <div id="widgets_207_list3" style="display: none">
        <?php if(is_array($ycxp)): $i = 0; $__LIST__ = array_slice($ycxp,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="816" style="width: 24%;">
            <div class="item">
              <div class="goodsImg" style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img				src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
          <?php if(is_array($ycxp)): $i = 0; $__LIST__ = array_slice($ycxp,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="816" style="width: 24%;">
            <div class="item">
              <div class="goodsImg" style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img				src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
        </div>
        
        <div id="widgets_207_more_3" class="more" style="display: none;"> </div>
        <div id="widgets_207_list4" style="display: none">
         <?php if(is_array($thphq)): $i = 0; $__LIST__ = array_slice($thphq,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="816" style="width: 24%;">
            <div class="item">
              <div class="goodsImg" style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img				src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
                   <?php if(is_array($thphq)): $i = 0; $__LIST__ = array_slice($thphq,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="816" style="width: 24%;">
            <div class="item">
              <div class="goodsImg" style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img				src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_207_more_4" class="more" style="display: none;"> </div>
      </div>
    </div>
  </div>
  <div class="clear" style="height: 10px; overflow: hidden;"></div>
  <div class="meia hong fl">
    <div class="sptit">
      <div class="AdvBanner"> <a href="" target="_blank"> <img
						src='__PUBLIC__/themes/buy2012/images/tit4.png' style="" /> </a> </div>
    </div>
    <div class="spbg">
      <div class="spbga">
      <?php if(is_array($all3)): $i = 0; $__LIST__ = $all3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/product.php?id=<?php echo ($vo["id"]); ?>">· <?php echo ($vo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
       </div>
      <div class="spbgb">
        <div class="AdvBanner"> <a href="/product.php?id=<?php echo ($vo["id"]); ?>" target="_blank"> <img
							src='__PUBLIC__/themes/buy2012/images/ti4.jpg' style="" /> </a> </div>
      </div>
    </div>
  </div>
  <div class="meib fr"> 
    <script>
				var good_list = new Class({
					divSrc : '',
					divSrc2 : '',
					initialize : function(div1, div2) {
						this.divSrc = div1;
						this.divSrc2 = div2;

						this.tab = 'ttp_widgets_208';
					},
					changeTableing : function(type, div) {
						var i;
						for (i = 0; i < 5; i++) {
							if (i == type) {
								$(this.divSrc2 + i).setStyles({
									'display' : ''
								});

								$('widgets_208_more_' + i).setStyles({
									'display' : ''
								});
								$(this.tab + i).addClass('current');
							} else {
								$(this.divSrc2 + i).setStyles({
									'display' : 'none'
								});
								$('widgets_208_more_' + i).setStyles({
									'display' : 'none'
								});
								$(this.tab + i).removeClass('current');
							}
						}
					}
				});

				var ef_widgets_208 = new good_list('top_widgets_208',
						'widgets_208_list');
			</script>
    <style>
.itemsWrap {
	*display: inline;
	float: left;
	overflow: hidden;
}
</style>
    <div id="top_widgets_208" class="GoodsList-Tabs">
      <div class="current" style="float: left" id="ttp_widgets_2080"
					onMouseOver="ef_widgets_208.changeTableing(0)"> <span>千斤顶</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_2081"
					onMouseOver="ef_widgets_208.changeTableing(1,'widgets_208_more1')"> <span>液压油缸</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_2082"
					onMouseOver="ef_widgets_208.changeTableing(2,'widgets_208_more2')"> <span>液压泵浦</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_2083"
					onMouseOver="ef_widgets_208.changeTableing(3,'widgets_208_more3')"> <span>液压拉马</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_2084"
					onMouseOver="ef_widgets_208.changeTableing(4,'widgets_208_more4')"> <span>液压顶升配件</span>&nbsp; </div>
    </div>
    <div class="GoodsListWrap">
      <div class="GoodsList">
        <div id="widgets_208_list0">
        
        <?php if(is_array($qjd)): $i = 0; $__LIST__ = array_slice($qjd,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="705" style="width: 24%;">
            <div class="item"><div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" 	width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>          
          <div class="clear"></div>
          <?php if(is_array($qjd)): $i = 0; $__LIST__ = array_slice($qjd,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="705" style="width: 24%;">
            <div class="item"><div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" 	width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_208_more_0" class="more" style=""></div>
        <div id="widgets_208_list1" style="display: none">
           <?php if(is_array($yyyg)): $i = 0; $__LIST__ = array_slice($yyyg,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="705" style="width: 24%;">
            <div class="item"><div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" 	width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
           <?php if(is_array($yyyg)): $i = 0; $__LIST__ = array_slice($yyyg,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="705" style="width: 24%;">
            <div class="item"><div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" 	width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_208_more_1" class="more" style="display: none;"> </div>
        <div id="widgets_208_list2" style="display: none">
          <?php if(is_array($yybp)): $i = 0; $__LIST__ = array_slice($yybp,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="705" style="width: 24%;">
            <div class="item"><div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" 	width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          
          
          
          <div class="clear"></div>
           <?php if(is_array($yybp)): $i = 0; $__LIST__ = array_slice($yybp,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="705" style="width: 24%;">
            <div class="item"><div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" 	width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          
          
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_208_more_2" class="more" style="display: none;"> </div>
        <div id="widgets_208_list3" style="display: none">
         <?php if(is_array($yylm)): $i = 0; $__LIST__ = array_slice($yylm,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="705" style="width: 24%;">
            <div class="item"><div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" 	width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          
          
          
          <div class="clear"></div>
           <?php if(is_array($yylm)): $i = 0; $__LIST__ = array_slice($yylm,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="705" style="width: 24%;">
            <div class="item"><div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" 	width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>          
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_208_more_3" class="more" style="display: none;"> </div>
        <div id="widgets_208_list4" style="display: none">
          <?php if(is_array($yadsp)): $i = 0; $__LIST__ = array_slice($yadsp,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="705" style="width: 24%;">
            <div class="item"><div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" 	width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>   
               
          
          
          
          <div class="clear"></div>
         <?php if(is_array($yadsp)): $i = 0; $__LIST__ = array_slice($yadsp,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="705" style="width: 24%;">
            <div class="item"><div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" 	width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?> 
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_208_more_4" class="more" style="display: none;"> </div>
      </div>
    </div>
  </div>
  <div class="clear" style="height: 10px; overflow: hidden;"></div>
  <div class="meia huang fl">
    <div class="sptit">
      <div class="AdvBanner"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank"> <img
						src='__PUBLIC__/themes/buy2012/images/tit5.png' style="" /></a></div>
    </div>
    <div class="spbg">
      <div class="spbga">
      <?php if(is_array($all4)): $i = 0; $__LIST__ = $all4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/product.php?id=<?php echo ($vo["id"]); ?>">·<?php echo ($vo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
       </div>
      <div class="spbgb">
        <div class="AdvBanner"> <a href="/product.php?id=<?php echo ($vo["id"]); ?>" target="_blank"> <img
							src='__PUBLIC__/themes/buy2012/images/ti5.jpg' style="" /> </a> </div>
      </div>
    </div>
  </div>
  <div class="meib huang fr"> 
    <script>
				var good_list = new Class({
					divSrc : '',
					divSrc2 : '',
					initialize : function(div1, div2) {
						this.divSrc = div1;
						this.divSrc2 = div2;

						this.tab = 'ttp_widgets_209';
					},
					changeTableing : function(type, div) {
						var i;
						for (i = 0; i < 5; i++) {
							if (i == type) {
								$(this.divSrc2 + i).setStyles({
									'display' : ''
								});

								$('widgets_209_more_' + i).setStyles({
									'display' : ''
								});
								$(this.tab + i).addClass('current');
							} else {
								$(this.divSrc2 + i).setStyles({
									'display' : 'none'
								});
								$('widgets_209_more_' + i).setStyles({
									'display' : 'none'
								});
								$(this.tab + i).removeClass('current');
							}
						}
					}
				});

				var ef_widgets_209 = new good_list('top_widgets_209',
						'widgets_209_list');
			</script>
    <style>
.itemsWrap {
	*display: inline;
	float: left;
	overflow: hidden;
}
</style>
    <div id="top_widgets_209" class="GoodsList-Tabs">
      <div class="current" style="float: left" id="ttp_widgets_2090"
					onMouseOver="ef_widgets_209.changeTableing(0)"> <span>单轨小车</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_2091"
					onMouseOver="ef_widgets_209.changeTableing(1,'widgets_209_more1')"> <span>工业遥控器</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_2092"
					onMouseOver="ef_widgets_209.changeTableing(2,'widgets_209_more2')"> <span>起重滑轮</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_2093"
					onMouseOver="ef_widgets_209.changeTableing(3,'widgets_209_more3')"> <span>起重吊索具</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_2094"
					onMouseOver="ef_widgets_209.changeTableing(4,'widgets_209_more4')"> <span>起重辅助设备</span>&nbsp; </div>
    </div>
    <div class="GoodsListWrap">
      <div class="GoodsList">
        <div id="widgets_209_list0">
        <?php if(is_array($dzxc)): $i = 0; $__LIST__ = array_slice($dzxc,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="1139" style="width: 24%;">          
            <div class="item">
              <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>"width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
          <?php if(is_array($dzxc)): $i = 0; $__LIST__ = array_slice($dzxc,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="1139" style="width: 24%;">          
            <div class="item">
              <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>"width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_209_more_0" class="more" style=""></div>
        <div id="widgets_209_list1" style="display: none">
          <?php if(is_array($gyykq)): $i = 0; $__LIST__ = array_slice($gyykq,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="1139" style="width: 24%;">          
            <div class="item">
              <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>"width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>          
          <div class="clear"></div>
          <?php if(is_array($gyykq)): $i = 0; $__LIST__ = array_slice($gyykq,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="1139" style="width: 24%;">          
            <div class="item">
              <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>"width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_209_more_1" class="more" style="display: none;"> </div>
        <div id="widgets_209_list2" style="display: none">
          <?php if(is_array($hzhl)): $i = 0; $__LIST__ = array_slice($hzhl,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="1139" style="width: 24%;">          
            <div class="item">
              <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>"width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
          <?php if(is_array($hzhl)): $i = 0; $__LIST__ = array_slice($hzhl,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="1139" style="width: 24%;">          
            <div class="item">
              <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>"width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_209_more_2" class="more" style="display: none;"> </div>
        <div id="widgets_209_list3" style="display: none">
                   <?php if(is_array($qzdsj)): $i = 0; $__LIST__ = array_slice($qzdsj,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="1139" style="width: 24%;">          
            <div class="item">
              <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>"width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
           <?php if(is_array($qzdsj)): $i = 0; $__LIST__ = array_slice($qzdsj,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="1139" style="width: 24%;">          
            <div class="item">
              <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>"width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_209_more_3" class="more" style="display: none;"> </div>
        <div id="widgets_209_list4" style="display: none">
           <?php if(is_array($qzfzsb)): $i = 0; $__LIST__ = array_slice($qzfzsb,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="1139" style="width: 24%;">          
            <div class="item">
              <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>"width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
          <?php if(is_array($qzfzsb)): $i = 0; $__LIST__ = array_slice($qzfzsb,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="1139" style="width: 24%;">          
            <div class="item">
              <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>"width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
        </div>
        <div id="widgets_209_more_4" class="more" style="display: none;"> </div>
      </div>
    </div>
  </div>
  <div class="clear" style="height: 10px; overflow: hidden;"></div>
  <div class="meia huang fl">
    <div class="sptit">
      <div class="AdvBanner"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank"> <img
						src='__PUBLIC__/themes/buy2012/images/tit6.png' style="" /> </a> </div>
    </div>
    <div class="spbg">
      <div class="spbga">
      	<?php if(is_array($all5)): $i = 0; $__LIST__ = $all5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/product.php?id=<?php echo ($vo["id"]); ?>">· <?php echo ($vo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                   </div>
      <div class="spbgb">
        <div class="AdvBanner"> <a href="/product.php?id=<?php echo ($vo["id"]); ?>" target="_blank"> <img
							src='__PUBLIC__/themes/buy2012/images/ti6.jpg' style="" /> </a> </div>
      </div>
    </div>
  </div>
  <div class="meib fr""> 
    <script>
				var good_list = new Class({
					divSrc : '',
					divSrc2 : '',
					initialize : function(div1, div2) {
						this.divSrc = div1;
						this.divSrc2 = div2;

						this.tab = 'ttp_widgets_210';
					},
					changeTableing : function(type, div) {
						var i;
						for (i = 0; i < 5; i++) {
							if (i == type) {
								$(this.divSrc2 + i).setStyles({
									'display' : ''
								});

								$('widgets_210_more_' + i).setStyles({
									'display' : ''
								});
								$(this.tab + i).addClass('current');
							} else {
								$(this.divSrc2 + i).setStyles({
									'display' : 'none'
								});
								$('widgets_210_more_' + i).setStyles({
									'display' : 'none'
								});
								$(this.tab + i).removeClass('current');
							}
						}
					}
				});

				var ef_widgets_210 = new good_list('top_widgets_210',
						'widgets_210_list');
			</script>
    <style>
.itemsWrap {
	*display: inline;
	float: left;
	overflow: hidden;
}
</style>
    <div id="top_widgets_210" class="GoodsList-Tabs">
      <div class="current" style="float: left" id="ttp_widgets_2100"
					onMouseOver="ef_widgets_210.changeTableing(0)"> <span>起重吊钩</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_2101"
					onMouseOver="ef_widgets_210.changeTableing(1,'widgets_210_more1')"> <span>起重吊环/吊点</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_2102"
					onMouseOver="ef_widgets_210.changeTableing(2,'widgets_210_more2')"> <span>链条调节器</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_2103"
					onMouseOver="ef_widgets_210.changeTableing(3,'widgets_210_more3')"> <span>起重卸扣</span>&nbsp; </div>
      <div style="float: left" id="ttp_widgets_2104"
					onMouseOver="ef_widgets_210.changeTableing(4,'widgets_210_more4')"> <span>吊索具连接件</span>&nbsp; </div>
    </div>
    <div class="GoodsListWrap">
      <div class="GoodsList">
        <div id="widgets_210_list0">
        <?php if(is_array($qzdq)): $i = 0; $__LIST__ = array_slice($qzdq,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="933" style="width: 24%;">
            <div class="item">
              <div class="goodsImg" style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
          <?php if(is_array($qzdq)): $i = 0; $__LIST__ = array_slice($qzdq,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="933" style="width: 24%;">
            <div class="item">
              <div class="goodsImg" style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_210_more_0" class="more" style=""></div>
        <div id="widgets_210_list1" style="display: none">
         <?php if(is_array($qzdh)): $i = 0; $__LIST__ = array_slice($qzdh,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="933" style="width: 24%;">
            <div class="item">
              <div class="goodsImg" style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
                   <?php if(is_array($qzdh)): $i = 0; $__LIST__ = array_slice($qzdh,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="933" style="width: 24%;">
            <div class="item">
              <div class="goodsImg" style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_210_more_1" class="more" style="display: none;"> </div>
        <div id="widgets_210_list2" style="display: none">
           <?php if(is_array($lttjq)): $i = 0; $__LIST__ = array_slice($lttjq,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="933" style="width: 24%;">
            <div class="item">
              <div class="goodsImg" style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
            <?php if(is_array($lttjq)): $i = 0; $__LIST__ = array_slice($lttjq,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="933" style="width: 24%;">
            <div class="item">
              <div class="goodsImg" style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_210_more_2" class="more" style="display: none;"> </div>
        <div id="widgets_210_list3" style="display: none">
          <?php if(is_array($qzxk)): $i = 0; $__LIST__ = array_slice($qzxk,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="933" style="width: 24%;">
            <div class="item">
              <div class="goodsImg" style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>          
          <div class="clear"></div>
          <?php if(is_array($qzxk)): $i = 0; $__LIST__ = array_slice($qzxk,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="933" style="width: 24%;">
            <div class="item">
              <div class="goodsImg" style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>           
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_210_more_3" class="more" style="display: none;"> </div>
        <div id="widgets_210_list4" style="display: none">
           <?php if(is_array($dsjlj)): $i = 0; $__LIST__ = array_slice($dsjlj,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="933" style="width: 24%;">
            <div class="item">
              <div class="goodsImg" style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?> 
          <div class="clear"></div>
        <?php if(is_array($dsjlj)): $i = 0; $__LIST__ = array_slice($dsjlj,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="933" style="width: 24%;">
            <div class="item">
              <div class="goodsImg" style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="130" height="130" title="<?php echo ($vo["title"]); ?>"></a> </div>
              <h6> <a href="/Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
              <ul>
              </ul>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?> 
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_210_more_4" class="more" style="display: none;"> </div>
      </div>
    </div>
  </div>
  <div class="clear" style="height: 10px; overflow: hidden;"></div>
  <div class="fl" style="width: 772px;"></div>
  <div class="fr" style="width: 218px;"></div>
</div>
<div class="AllWrap footer">
  <div class="foota">
    <div class="bordercc " id="widgets_76">
      <div class="border-top">
        <h3>关于我们</h3>
      </div>
      <div class="border-body">
        <div class="TreeList">
          <div class="cat2"> <a href="http://www.qizejx.cn/?page-notice.html">起泽介绍</a> </div>
          <div class="cat2"> <a href="http://www.qizejx.cn/?page-memberrank.html">资质证书</a> </div>
          <div class="cat2"> <a href="http://www.qizejx.cn/?page-orderstatus.html">合作伙伴</a> </div>
          <div class="cat2"> <a href="http://www.qizejx.cn/?page-scoreplan.html">行业新闻</a> </div>
          <div class="cat2"> <a href="http://www.qizejx.cn/?page-returngood.html">联系我们</a> </div>
        </div>
      </div>
    </div>
  </div>
  <div class="foota" style="width: 103px;">
    <div class="bordercc " id="widgets_77">
      <div class="border-top">
        <h3>配送方式</h3>
      </div>
      <div class="border-body">
        <div class="TreeList">
          <div class="cat2"> <a href="http://www.qizejx.cn/?page-shipping.html">上海地区配送</a> </div>
          <div class="cat2"> <a href="http://www.qizejx.cn/?page-orderinfo.html">外埠、外地配送</a> </div>
          <div class="cat2"> <a
								href="http://www.qizejx.cn/?page-%E4%B8%8A%E6%B5%B7%E5%9C%B0%E5%8C%BA%E9%85%8D%E9%80%81.html">邮政快递EMS</a> </div>
          <div class="cat2"> <a href="http://www.qizejx.cn/?page-shippinginfo.html">关于送货和验货</a> </div>
        </div>
      </div>
    </div>
  </div>
  <div class="foota" style="width: 102px;">
    <div class="bordercc " id="widgets_78">
      <div class="border-top">
        <h3>支付方式</h3>
      </div>
      <div class="border-body">
        <div class="TreeList">
          <div class="cat2"> <a
								href="http://www.qizejx.cn/?page-%E8%B4%A7%E5%88%B0%E4%BB%98%E6%AC%BE.html">货到付款</a> </div>
          <div class="cat2"> <a
								href="http://www.qizejx.cn/?page-%E4%B8%AA%E4%BA%BA%E8%B4%A6%E6%88%B7.html">个人账户</a> </div>
          <div class="cat2"> <a
								href="http://www.qizejx.cn/?page-%E9%93%B6%E8%A1%8C%E7%94%B5%E6%B1%87.html">银行电汇</a> </div>
          <div class="cat2"> <a
								href="http://www.qizejx.cn/?page-%E5%85%AC%E5%8F%B8%E8%BD%AC%E8%B4%A6.html">公司转账</a> </div>
          <div class="cat2"> <a
								href="http://www.qizejx.cn/?page-%E6%94%AF%E4%BB%98%E5%AE%9D%E4%BB%98%E6%AC%BE.html">支付宝付款</a> </div>
          <div class="cat2"> <a href="http://www.qizejx.cn/?page-onlinepayment.html">网上支付小贴士</a> </div>
        </div>
      </div>
    </div>
  </div>
  <div class="foota" style="width: 103px;">
    <div class="bordercc " id="widgets_79">
      <div class="border-top">
        <h3>购物指南</h3>
      </div>
      <div class="border-body">
        <div class="TreeList">
          <div class="cat2"> <a href="http://www.qizejx.cn/?page-nonmember.html">顾客必读</a> </div>
          <div class="cat2"> <a href="http://www.qizejx.cn/?page-terms.html">购买流程</a> </div>
          <div class="cat2"> <a href="http://www.qizejx.cn/?page-process.html">购买保障</a> </div>
          <div class="cat2"> <a href="http://www.qizejx.cn/?page-service.html">体贴的售后服务</a> </div>
          <div class="cat2"> <a href="http://www.qizejx.cn/?page-disclaimer.html">网站免责声明</a> </div>
          <div class="cat2"> <a
								href="http://www.qizejx.cn/?page-%E5%95%86%E5%93%81%E9%80%80%E6%8D%A2%E8%B4%A7%E4%BF%9D%E9%9A%9C.html">商品退换货保障</a> </div>
        </div>
      </div>
    </div>
  </div>
  <div class="foota" style="width: 103px;">
    <div class="bordercc " id="widgets_80">
      <div class="border-top">
        <h3>售后服务</h3>
      </div>
      <div class="border-body">
        <div class="TreeList">
          <div class="cat2"> <a href="http://www.qizejx.cn/?page-license.html">退换货政策</a> </div>
          <div class="cat2"> <a href="http://www.qizejx.cn/?page-privacy.html">隐私保护政策</a> </div>
          <div class="cat2"> <a
								href="http://www.qizejx.cn/?page-%E5%AE%89%E5%85%A8%E6%80%A7%E8%AF%B4%E6%98%8E.html">安全性说明</a> </div>
          <div class="cat2"> <a
								href="http://www.qizejx.cn/?page-%E4%BA%89%E8%AE%AE%E5%A4%84%E7%90%86.html">争议处理</a> </div>
          <div class="cat2"> <a
								href="http://www.qizejx.cn/?page-%E9%83%91%E9%87%8D%E5%A3%B0%E6%98%8E.html">郑重声明</a> </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footar"></div>
  <div class="clear"></div>
</div>
<div style="line-height: 24px; overflow: hidden; text-align: center;"> <img src="index.php?cron=page%3Aindex&p=" width="1" height="1"
			border="none" />
  <div id='template-modal' style='display: none;'>
    <div class='dialog'>
      <div class='dialog-title'>
        <div class='title span-auto'>{title}</div>
        <div class='dialog-close-btn'>X</div>
        <div style="clear: both"></div>
      </div>
      <div class='dialog-content'>{content}</div>
    </div>
  </div>
  <style id="thridpartystyle">
.thridpartyicon {
	background: url(__PUBLIC__/statics/icons/thridparty0.gif) no-repeat left center;
	height: 30px;
	line-height: 30px;
	text-indent: 35px;
}

#accountlogin {
	width: 180px;
	border: 2px solid #badbf2;
	position: absolute;
	background: #fff;
	padding: 5px;
}

#accountlogin h5 {
	border-bottom: 1px solid #e2e2e2;
	margin: 0px 5px 10px 5px;
	padding: 0;
	height: 22px;
	line-height: 22px;
	color: #333333;
	font-weight: normal;
}

#accountlogin .logoimg {
	float: left;
	margin-left: 5px;
}

#accountlogin .logoimg span img {
	margin: 6px 3px 0 3px;
}

#accountlogin .more {
	text-align: right;
	float: right;
}

#accountlogin .more a {
	text-decoration: underline;
}

.trustlogos li {
	display: inline;
	padding: 2px;
}

.btn-trustlogin {
	background: url(statics/btn-trustlogin.gif);
	width: 87px;
	height: 30px;
	margin-bottom: 35px;
}

.trustdialog .dialog-content {
	padding: 0px;
	height: 320px;
}

.RegisterWrap {
	
}

.RegisterWrap h4 {
	height: 30px;
	line-height: 30px;
}

.RegisterWrap .more {
	height: 30px;
	line-height: 30px;
	text-align: right;
	font-size: 14px;
	color: #333333;
}

.RegisterWrap .more a {
	text-decoration: underline;
}

.RegisterWrap .form {
	
}

.RegisterWrap #formlogin,.RegisterWrap #formthridlogin {
	height: 160px;
	border: 1px solid #CCCCCC;
	margin: 10px 0;
	padding: 15px;
}

.RegisterWrap .customMessages {
	height: 40px;
}

.dialog-title {
	margin: 0 5px;
}

.dialog-title .title {
	padding: 10px 0 2px 10px;
}

.dialog-title .dialog-close-btn {
	font-family: Arial Black;
	color: #fff;
	background: #FF9955;
	border: 1px #FA6400 solid;
	font-size: 14px;
	cursor: pointer;
	width: 21px;
	margin-top: 5px;
	text-align: center;
}

.dialog-title .dialog-close-btn:hover {
	background: #ff6655;
	border-color: #ff6655;
}
</style>
  <script>
			$('thridpartystyle').inject(document.head);
		</script>
  <div class="themefoot">
    <div class="themefootText textcenter"> <img
					src="http://www.qizejx.cn/images//20121014/ac5cd606dc3fc5b0.jpg"><br />
      <table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0"
						width="100%">
        <tbody>
          <tr>
            <td><div align="center"> <img
											src="http://www.qizejx.cn/images//20121015/db19ed0b0069b188.gif"> <img
											src="http://www.qizejx.cn/images//20121015/f0c8a8c3a0c4c32f.jpg"> <img
												src="http://www.qizejx.cn/images//20121015/fe5df7463bac8bb2.png"><strong>&nbsp;&nbsp; </strong><font color="#990000" size="3"> </font> </div></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div
			style="font-family: Verdana; line-height: 20px !important; height: auto !important; font-size: 11px !important; text-align: center; overflow: none !important; text-indent: 0 !important;"> <a href="http://www.miibeian.gov.cn/" target="blank"
				style="color: #666; text-decoration: none; cursor: pointer; display: block;"
				class="textcenter">沪ICP备09062953号-9 </a><span style="display: none"></span> </div>
</div>
</body>
</html>