<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>电动葫芦，起重葫芦-起泽起重机械一站式供应！手拉葫芦，起重设备，五金电力，吊装设备</title>
<link rel="stylesheet" href="__PUBLIC__/statics/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/index.css" />
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
  <div class="tangzdy"> <font color="#660000" face="黑体"><font size="2" face="宋体">您好，欢迎来到起泽起重机械网上商城！</font><a href="#"type="url"><font size="2">这里就放关键字就行了</font></a> </div>
  <div class="qingzdy"></div>
  <div class="logo"> <a href="./"><img
				src="__PUBLIC__/themes/buy2012/images/loge.png"
				border="0" style="margin-top: 20px" /></a> </div>
  <div class="searchbar">
    <form action="http://www.qizejx.cn/?search-result.html" method="post"
				class="SearchBar">
      <table cellpadding="0" cellspacing="0">
        <tr>
          <td class="search_label"><span>关键字：</span>
            <input
							name="name[]" size="10" class="inputstyle keywords" value="" /></td>
          <td><input type="submit" value="搜索" class="btn_search"
							onfocus='this.blur();' /></td>
          <td><a href="http://www.qizejx.cn/?search.html"
							class="btn_advsearch">高级搜索</a></td>
        </tr>
      </table>
    </form>
  </div>
  <div class="searchbarr"> 热门搜索：<a href="http://www.qizejx.cn/?gallery-9-grid.html">手拉葫芦</a><a
				href="http://www.qizejx.cn/?gallery-40-grid.html">液压千斤顶</a><a
				href="http://www.qizejx.cn/?gallery-11-b,29-0--1--grid.html">电动葫芦</a><a
				href="http://www.qizejx.cn/?gallery-24-grid.html">龙门吊架</a> </div>
  <div
			style="color: #EEEFF1; left: 680px; position: absolute; top: 80px;"> <img src="__PUBLIC__/themes/buy2012/images/dianhua.png" /> </div>
  <div
			style="color: #EEEFF1; left: 200px; position: absolute; top: 160px;"> <img src="__PUBLIC__/themes/buy2012/images/kouhao.png" /> </div>
  <div class="tangnav" id="Menu">
    <ul class="MenuList">
      <li><a href="http://www.qizejx.cn/?">首页</a></li>
      <li><a
					href="http://www.qizejx.cn/?page-%E8%B5%B7%E6%B3%BD%E4%BB%8B%E7%BB%8D.html">起泽介绍</a></li>
      <li><a href="http://www.qizejx.cn/?brand-showList.html">品牌专区</a></li>
      <li><a
					href="http://www.qizejx.cn/?page-%E7%BB%84%E5%90%88%E8%AE%BE%E5%A4%87.html">组合设备</a></li>
      <li><a
					href="http://www.qizejx.cn/?page-%E5%B1%95%E4%BC%9A%E7%8E%B0%E5%9C%BA.html">展会现场</a></li>
      <li><a
					href="http://www.qizejx.cn/?page-%E8%81%94%E7%B3%BB%E6%88%91%E4%BB%AC.html">联系我们</a></li>
      <li><a href="http://www.qizejx.cn/?message.html">客户留言</a></li>
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
        <div class="DuceDropNavs">
          <ul>
            <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["sid"]) == "0"): ?><li class="m-cat-depth-1"><a class="depth-1" href="#"><em><?php echo ($vo["name"]); ?></em></a>
                  <ul class="m-cat-popup">
                    <div class="hei">
                      <ul class="m-cat-drop-2">
                        <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i; if(($vo[id]) == $vo2["sid"]): ?><li class="m-cat-depth-0">
                              <table width="460" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="75" align="right"><a class="m-depth-2" href="#"><?php echo ($vo2["name"]); ?></a></td>
                                  <td><ul class="m-cat-drop-3">
                                      <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i; if(($vo2["id"]) == $vo3["sid"]): ?><a href="#"><?php echo ($vo3["name"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
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
          <div class="itemsWrap " product="292" style="width: 24%;">
          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="item">
              <div class="goodsImg"	style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="#" target="_blank" title="<?php echo ($vo["title"]); ?>"><img	src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="135" height="135" title="<?php echo ($vo["title"]); ?>"></a> </div><h6> <a href="#" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a></h6>
              <ul>
              </ul>
            </div>
          </div>
          <div class="itemsWrap " product="299" style="width: 24%;"><?php endforeach; endif; else: echo "" ;endif; ?>
          
            <div class="item">
              <div class="goodsImg"
									style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="http://www.qizejx.cn/?product-299.html"
										target="_blank" title="KNTO-2吨日立环链电动葫芦"><img
										src="http://www.qizejx.cn/images/goods/20121129/de5c82cf0a09cbd2.jpg"
										width="135" height="135" title="KNTO-2吨日立环链电动葫芦"></a> </div>
              <h6> <a href="http://www.qizejx.cn/?product-299.html"
										target="_blank" title="KNTO-2吨日立环链电动葫芦">KNTO-2吨日立环链电动葫芦</a> </h6>
              <ul>
              </ul>
            </div>
          </div>
          <div class="itemsWrap " product="307" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"
									style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="http://www.qizejx.cn/?product-307.html"
										target="_blank" title="KNTO-3吨日立环链电动葫芦"><img
										src="http://www.qizejx.cn/images/goods/20121129/ed38e1f59b42f369.jpg"
										width="135" height="135" title="KNTO-3吨日立环链电动葫芦"></a> </div>
              <h6> <a href="http://www.qizejx.cn/?product-307.html"
										target="_blank" title="KNTO-3吨日立环链电动葫芦">KNTO-3吨日立环链电动葫芦</a> </h6>
              <ul>
              </ul>
            </div>
          </div>
          <div class="itemsWrap last" product="311" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"
									style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="http://www.qizejx.cn/?product-311.html"
										target="_blank" title="KNTO-5吨日立环链电动葫芦"><img
										src="http://www.qizejx.cn/images/goods/20121129/b924a3774cb2d508.jpg"
										width="135" height="135" title="KNTO-5吨日立环链电动葫芦"></a> </div>
              <h6> <a href="http://www.qizejx.cn/?product-311.html"
										target="_blank" title="KNTO-5吨日立环链电动葫芦">KNTO-5吨日立环链电动葫芦</a> </h6>
              <ul>
              </ul>
            </div>
          </div>
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_114_more_0" class="more" style=""></div>
        <div id="widgets_114_list1" style="display: none">
          <div class="itemsWrap " product="409" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"
									style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="http://www.qizejx.cn/?product-409.html"
										target="_blank" title="小金刚DCW-250迷你型钢丝绳电动葫芦"><img
										src="http://www.qizejx.cn/images/goods/20121206/cc2eb7e504a35804.jpg"
										width="135" height="135" title="小金刚DCW-250迷你型钢丝绳电动葫芦"></a> </div>
              <h6> <a href="http://www.qizejx.cn/?product-409.html"
										target="_blank" title="小金刚DCW-250迷你型钢丝绳电动葫芦">小金刚DCW-250迷你型钢丝绳电动葫芦</a> </h6>
              <ul>
              </ul>
            </div>
          </div>
          <div class="itemsWrap " product="275" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"
									style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="http://www.qizejx.cn/?product-275.html"
										target="_blank" title="台湾小金刚DU-300A迷你型钢丝绳电动葫芦"><img
										src="http://www.qizejx.cn/images/goods/20121128/282c2ecea4ba48b2.jpg"
										width="135" height="135" title="台湾小金刚DU-300A迷你型钢丝绳电动葫芦"></a> </div>
              <h6> <a href="http://www.qizejx.cn/?product-275.html"
										target="_blank" title="台湾小金刚DU-300A迷你型钢丝绳电动葫芦">台湾小金刚DU-300A迷你型钢丝绳电动葫芦</a> </h6>
              <ul>
              </ul>
            </div>
          </div>
          <div class="itemsWrap " product="274" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"
									style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="http://www.qizejx.cn/?product-274.html"
										target="_blank" title="台湾小金刚DU-250A迷你型钢丝绳电动葫芦"><img
										src="http://www.qizejx.cn/images/goods/20121128/5bb6524f687e5299.jpg"
										width="135" height="135" title="台湾小金刚DU-250A迷你型钢丝绳电动葫芦"></a> </div>
              <h6> <a href="http://www.qizejx.cn/?product-274.html"
										target="_blank" title="台湾小金刚DU-250A迷你型钢丝绳电动葫芦">台湾小金刚DU-250A迷你型钢丝绳电动葫芦</a> </h6>
              <ul>
              </ul>
            </div>
          </div>
          <div class="itemsWrap last" product="273" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"
									style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="http://www.qizejx.cn/?product-273.html"
										target="_blank" title="台湾小金刚DU-230A迷你型钢丝绳电动葫芦"><img
										src="http://www.qizejx.cn/images/goods/20121128/2324e506a927cb9a.jpg"
										width="135" height="135" title="台湾小金刚DU-230A迷你型钢丝绳电动葫芦"></a> </div>
              <h6> <a href="http://www.qizejx.cn/?product-273.html"
										target="_blank" title="台湾小金刚DU-230A迷你型钢丝绳电动葫芦">台湾小金刚DU-230A迷你型钢丝绳电动葫芦</a> </h6>
              <ul>
              </ul>
            </div>
          </div>
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_114_more_1" class="more" style="display: none;"> </div>
        <div id="widgets_114_list2" style="display: none">
          <div class="itemsWrap " product="179" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"
									style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="http://www.qizejx.cn/?product-179.html"
										target="_blank" title="铁壳/铝壳-钢丝绳牵引器<0.8吨/1.6吨/3.2吨/5.4吨>"><img
										src="http://www.qizejx.cn/images/goods/20130623/0484ec6dc62c82f6.jpg"
										width="135" height="135"
										title="铁壳/铝壳-钢丝绳牵引器<0.8吨/1.6吨/3.2吨/5.4吨>"></a> </div>
              <h6> <a href="http://www.qizejx.cn/?product-179.html"
										target="_blank" title="铁壳/铝壳-钢丝绳牵引器<0.8吨/1.6吨/3.2吨/5.4吨>">铁壳/铝壳-钢丝绳牵引器<0.8吨/1.6吨/3.2吨/5.4吨></a> </h6>
              <ul>
              </ul>
            </div>
          </div>
          <div class="itemsWrap " product="197" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"
									style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="http://www.qizejx.cn/?product-197.html"
										target="_blank" title="镁铝合金链条手扳葫芦<0.75吨/1.5吨/3吨/4吨>"><img
										src="http://www.qizejx.cn/images/goods/20130623/ae48866fd9b4b1af.jpg"
										width="135" height="135" title="镁铝合金链条手扳葫芦<0.75吨/1.5吨/3吨/4吨>"></a> </div>
              <h6> <a href="http://www.qizejx.cn/?product-197.html"
										target="_blank" title="镁铝合金链条手扳葫芦<0.75吨/1.5吨/3吨/4吨>">镁铝合金链条手扳葫芦<0.75吨/1.5吨/3吨/4吨></a> </h6>
              <ul>
              </ul>
            </div>
          </div>
          <div class="itemsWrap " product="1271" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"
									style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="http://www.qizejx.cn/?product-1271.html"
										target="_blank" title="迷你型不锈钢手扳葫芦<0.25吨/0.75吨两种规格选择>"><img
										src="http://www.qizejx.cn/images/goods/20130623/6df1e841bdbb881a.jpg"
										width="135" height="135" title="迷你型不锈钢手扳葫芦<0.25吨/0.75吨两种规格选择>"></a> </div>
              <h6> <a href="http://www.qizejx.cn/?product-1271.html"
										target="_blank" title="迷你型不锈钢手扳葫芦<0.25吨/0.75吨两种规格选择>">迷你型不锈钢手扳葫芦<0.25吨/0.75吨两种规格选择></a> </h6>
              <ul>
              </ul>
            </div>
          </div>
          <div class="itemsWrap last" product="1270" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"
									style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="http://www.qizejx.cn/?product-1270.html"
										target="_blank" title="迷你型手扳葫芦<0.25公斤-9吨>"><img
										src="http://www.qizejx.cn/images/goods/20130622/2103667812ce802d.jpg"
										width="135" height="135" title="迷你型手扳葫芦<0.25公斤-9吨>"></a> </div>
              <h6> <a href="http://www.qizejx.cn/?product-1270.html"
										target="_blank" title="迷你型手扳葫芦<0.25公斤-9吨>">迷你型手扳葫芦<0.25公斤-9吨></a> </h6>
              <ul>
              </ul>
            </div>
          </div>
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_114_more_2" class="more" style="display: none;"> </div>
        <div id="widgets_114_list3" style="display: none">
          <div class="itemsWrap " product="705" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"
									style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="http://www.qizejx.cn/?product-705.html"
										target="_blank" title="QJC-B型手摇挎顶(1.5t/3t/5t/10t/16t/20t)"><img
										src="http://www.qizejx.cn/images/goods/20130624/e6b09e49ace1759b.jpg"
										width="135" height="135"
										title="QJC-B型手摇挎顶(1.5t/3t/5t/10t/16t/20t)"></a> </div>
              <h6> <a href="http://www.qizejx.cn/?product-705.html"
										target="_blank" title="QJC-B型手摇挎顶(1.5t/3t/5t/10t/16t/20t)">QJC-B型手摇挎顶(1.5t/3t/5t/10t/16t/20t)</a> </h6>
              <ul>
              </ul>
            </div>
          </div>
          <div class="itemsWrap " product="1279" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"
									style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="http://www.qizejx.cn/?product-1279.html"
										target="_blank" title="叉式千斤顶"><img
										src="http://www.qizejx.cn/images/goods/20130704/93dfbcf9b2c64f62.jpg"
										width="135" height="135" title="叉式千斤顶"></a> </div>
              <h6> <a href="http://www.qizejx.cn/?product-1279.html"
										target="_blank" title="叉式千斤顶">叉式千斤顶</a> </h6>
              <ul>
              </ul>
            </div>
          </div>
          <div class="itemsWrap " product="1278" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"
									style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="http://www.qizejx.cn/?product-1278.html"
										target="_blank" title="叉式千斤顶"><img
										src="http://www.qizejx.cn/images/goods/20130704/156f79be9c2059f5.jpg"
										width="135" height="135" title="叉式千斤顶"></a> </div>
              <h6> <a href="http://www.qizejx.cn/?product-1278.html"
										target="_blank" title="叉式千斤顶">叉式千斤顶</a> </h6>
              <ul>
              </ul>
            </div>
          </div>
          <div class="itemsWrap last" product="1277" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"
									style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="http://www.qizejx.cn/?product-1277.html"
										target="_blank" title="机床千斤顶"><img
										src="http://www.qizejx.cn/images/goods/20130704/c618c852c8cfd176.jpg"
										width="135" height="135" title="机床千斤顶"></a> </div>
              <h6> <a href="http://www.qizejx.cn/?product-1277.html"
										target="_blank" title="机床千斤顶">机床千斤顶</a> </h6>
              <ul>
              </ul>
            </div>
          </div>
          <div class="clear"></div>
          <div class="clear"></div>
        </div>
        <div id="widgets_114_more_3" class="more" style="display: none;"> </div>
        <div id="widgets_114_list4" style="display: none">
          <div class="itemsWrap " product="1183" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"
									style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="http://www.qizejx.cn/?product-1183.html"
										target="_blank" title="乌鱼开口滑车"><img
										src="http://www.qizejx.cn/images/goods/20130325/fe5252b714f37386.jpg"
										width="135" height="135" title="乌鱼开口滑车"></a> </div>
              <h6> <a href="http://www.qizejx.cn/?product-1183.html"
										target="_blank" title="乌鱼开口滑车">乌鱼开口滑车</a> </h6>
              <ul>
              </ul>
            </div>
          </div>
          <div class="itemsWrap " product="1154" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"
									style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="http://www.qizejx.cn/?product-1154.html"
										target="_blank" title="微型小滑车"><img
										src="http://www.qizejx.cn/images/goods/20130624/dff18de199a812c9.jpg"
										width="135" height="135" title="微型小滑车"></a> </div>
              <h6> <a href="http://www.qizejx.cn/?product-1154.html"
										target="_blank" title="微型小滑车">微型小滑车</a> </h6>
              <ul>
              </ul>
            </div>
          </div>
          <div class="itemsWrap " product="1139" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"
									style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="http://www.qizejx.cn/?product-1139.html"
										target="_blank" title="起泽牌电动单轨小车1吨"><img
										src="http://www.qizejx.cn/images/goods/20130321/0601d776a5ad2747.jpg"
										width="135" height="135" title="起泽牌电动单轨小车1吨"></a> </div>
              <h6> <a href="http://www.qizejx.cn/?product-1139.html"
										target="_blank" title="起泽牌电动单轨小车1吨">起泽牌电动单轨小车1吨</a> </h6>
              <ul>
              </ul>
            </div>
          </div>
          <div class="itemsWrap last" product="1138" style="width: 24%;">
            <div class="item">
              <div class="goodsImg"
									style="overflow: hidden; text-align: center; vertical-align: middle; width: 130px; height: 130px;"> <a href="http://www.qizejx.cn/?product-1138.html"
										target="_blank" title="起泽牌电动单轨小车0.5吨"><img
										src="http://www.qizejx.cn/images/goods/20130321/132fc600dc56126e.jpg"
										width="135" height="135" title="起泽牌电动单轨小车0.5吨"></a> </div>
              <h6> <a href="http://www.qizejx.cn/?product-1138.html"
										target="_blank" title="起泽牌电动单轨小车0.5吨">起泽牌电动单轨小车0.5吨</a> </h6>
              <ul>
              </ul>
            </div>
          </div>
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
            <li class="l1 dotsep" style="color: default;"><span>1</span>&nbsp;<a
								href="http://www.qizejx.cn/?product-292.html" target="_blank"
								title="KNTO-1吨日立环链电动葫芦" style="color: default;"> KNTO-1吨日立环链电动葫芦</a></li>
            <li class="l2 dotsep" style="color: default;"><span>2</span>&nbsp;<a
								href="http://www.qizejx.cn/?product-702.html" target="_blank"
								title="QL型螺旋千斤顶(3.2T—320T规格)" style="color: default;"> QL型螺旋千斤顶(3.2T—320T...</a></li>
            <li class="l3 dotsep" style="color: default;"><span>3</span>&nbsp;<a
								href="http://www.qizejx.cn/?product-290.html" target="_blank"
								title="KNTO-1吨(单链)上下左右运行式环链电动葫芦" style="color: default;"> KNTO-1吨(单链)上下左右运...</a></li>
            <li class="l4 dotsep" style="color: default;"><span>4</span>&nbsp;<a
								href="http://www.qizejx.cn/?product-283.html" target="_blank"
								title="起泽牌PA型固定式微型电动葫芦" style="color: default;"> 起泽牌PA型固定式微型电...</a></li>
            <li class="l5 dotsep" style="color: default;"><span>5</span>&nbsp;<a
								href="http://www.qizejx.cn/?product-1155.html" target="_blank"
								title="定滑轮" style="color: default;"> 定滑轮</a></li>
            <li class="l6 dotsep" style="color: default;"><span>6</span>&nbsp;<a
								href="http://www.qizejx.cn/?product-289.html" target="_blank"
								title="KNTO-1吨(单链)低净空环链电动葫芦" style="color: default;"> KNTO-1吨(单链)低净空环链...</a></li>
          </ul>
        </div>
        <div class="more clearfix"> <a
							href="http://www.qizejx.cn/?gallery-_ANY_-b,_ANY__t,_ANY_-5-grid.html">更多...</a> </div>
      </div>
    </div>
  </div>
  <div class="clear" style="height: 6px; overflow: hidden;"></div>
</div>
<!--这里开始循环内容-->
<div class="hybig">
  <div class="hybiglift"> <a href="#"><img src="__PUBLIC__/themes/buy2012/images/tit1.png"></a>
    <ul>
      <li><span>asdfasdf</span></li>
      <li><span>asdfasdf</span></li>
      <li><span>asdfasdf</span></li>
      <li><span>asdfasdf</span></li>
      <li><span>asdfasdf</span></li>
    </ul>
    <img src="__PUBLIC__/themes/buy2012/images/ti1.jpg" style="margin-bottom:0px;"/> </div>
  <div class="htybigright">
    <div class="htybigrightli">
      <ul>
        <?php if(is_array($all1)): $i = 0; $__LIST__ = $all1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($i) == "0"): ?><li><span><?php echo ($vo["name"]); ?></span></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    <div class="htybigrightdiv">
      <ul>
        <li><img src="http://www.qizejx.cn/images/goods/20130326/764460b97a535c8c.jpg" width="135" height="135" />
          <p align="center">这是一个商品</p>
        </li>
        <li><img src="http://www.qizejx.cn/images/goods/20130326/764460b97a535c8c.jpg" width="135" height="135" />
          <p align="center">这是一个商品</p>
        </li>
        <li><img src="http://www.qizejx.cn/images/goods/20130326/764460b97a535c8c.jpg" width="135" height="135" />
          <p align="center">这是一个商品</p>
        </li>
        <li><img src="http://www.qizejx.cn/images/goods/20130326/764460b97a535c8c.jpg" width="135" height="135" />
          <p align="center">这是一个商品</p>
        </li>
        <li><img src="http://www.qizejx.cn/images/goods/20130326/764460b97a535c8c.jpg" width="135" height="135" />
          <p align="center">这是一个商品</p>
        </li>
        <li><img src="http://www.qizejx.cn/images/goods/20130326/764460b97a535c8c.jpg" width="135" height="135" />
          <p align="center">这是一个商品</p>
        </li>
        <li><img src="http://www.qizejx.cn/images/goods/20130326/764460b97a535c8c.jpg" width="135" height="135" />
          <p align="center">这是一个商品</p>
        </li>
        <li><img src="http://www.qizejx.cn/images/goods/20130326/764460b97a535c8c.jpg" width="135" height="135" />
          <p align="center">这是一个商品</p>
        </li>
        <li><img src="http://www.qizejx.cn/images/goods/20130326/764460b97a535c8c.jpg" width="135" height="135" />
          <p align="center">这是一个商品</p>
        </li>
        <li><img src="http://www.qizejx.cn/images/goods/20130326/764460b97a535c8c.jpg" width="135" height="135" />
          <p align="center">这是一个商品</p>
        </li>
      </ul>
    </div>
  </div>
</div>
<div style="clear:both"></div>
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