<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>成都虎跃-商品列表</title>
<meta name="keywords" content=''>
<link rel="stylesheet" href="__PUBLIC__/statics/style.css"
		type="text/css" />
<script type="text/javascript">
var Shop = {"set":{"path":"/","buytarget":"3","dragcart":null,"refer_timeout":365},"url":{"addcart":"http:/","shipping":"http:/","payment":"http:/","total":"http:/","viewcart":"http:/","ordertotal":"http:/","applycoupon":"http:/","diff":"http:/"}};
</script>
<script type="text/javascript" src="__PUBLIC__/statics/script/tools.js">
</script>
<script type="text/javascript"
		src="__PUBLIC__/statics/script/goodscupcake.js"></script>
<script type="text/javascript">

window.addEvent('domready',function(){
			var ReferObj =new Object();
			$extend(ReferObj,{
				serverTime:1373850280,
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

var xmlHttp

function showHint()
{
  xmlHttp=GetXmlHttpObject()

  if (xmlHttp==null)
    {
    alert ("您的浏览器不支持AJAX！");
    return;
    }

  var url="/product.php/Cookie/showcookie";
  xmlHttp.onreadystatechange=stateChanged;
  xmlHttp.open("GET",url,true);
  xmlHttp.send(null);
} 

function stateChanged() 
{ 
if (xmlHttp.readyState==4)
{ 
document.getElementById("ssp").innerHTML=xmlHttp.responseText;
}
}

function GetXmlHttpObject()
{
  var xmlHttp=null;
  try
    {
    // Firefox, Opera 8.0+, Safari
    xmlHttp=new XMLHttpRequest();
    }
  catch (e)
    {
    // Internet Explorer
    try
      {
      xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
      }
    catch (e)
      {
      xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    }
return xmlHttp;
}
  
</script>
<link rel="stylesheet" type="text/css"
		href="__PUBLIC__/themes/buy2012/images/css.css" />
</head>
<body onload="showHint()">
<div class="AllWrap headerInfo">
  <div class="tangdd"></div>
  <div class="qbspfl" style="top: 225px;"> <a href="#">全部商品分类</a> </div>
  <div class="tangzdy"> <font color="#660000" face="黑体"><font size="2" face="宋体">您好，欢迎来到起虎跃机械网上商城！</font><a href="#"type="url"><font size="2">这里就放关键字就行了</font></a></font> </div>
  <div class="qingzdy"></div>
  <div class="logo"> <a href="./"><img src="__PUBLIC__/themes/buy2012/images/loge.png"
				border="0" /></a> </div>
  <div class="searchbar">
    <form action="/index.php/Search" method="post" class="SearchBar">
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
  <div class="searchbarr"> 热门搜索：<a href="#>手拉葫芦</a><a href="#">液压千斤顶</a><a
				href="#">电动葫芦</a><a
				href="#">龙门吊架</a> </div>
  <div
			style="color: #EEEFF1; left: 680px; position: absolute; top: 80px;"> <img src="__PUBLIC__/themes/buy2012/images/dianhua.png" /> </div>
  <div
			style="color: #EEEFF1; left: 200px; position: absolute; top: 160px;"> <img src="__PUBLIC__/themes/buy2012/images/kouhao.png" /> </div>
  <div class="tangnav" id="Menu">
    <ul class="MenuList">
     	            <li><a  href="/" >首页</a></li>
      <li><a  href="/new/about.html">虎跃介绍</a></li>
      <li><a  href="#">品牌专区</a></li>
      <li><a  href="/index_1.html">公司动态</a></li>
      <li><a  href="/technical.html">技术资料</a></li>
      <li><a  href="#">网站地图</a></li>
    </ul>
    <script>
if($('widgets_89_showMore')){
	$('widgets_89_showMore').setOpacity(.8);
}
</script> 
  </div>
  <div class="loginbar">
    <div class="fr topmenu"> </div>
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
		url("")
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
		url("")
		no-repeat 188px center;
	z-index: 8;
}

.m-cat-depth-1 .depth-1 em {
	display: block;
	background:
		url("")
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
		url("")
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
		url("")
		left no-repeat;
	white-space: nowrap;
}

.m-cat-drop-3 a:hover {
	background:
		url("")
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
                        <div class="DuceDropNavs">
                          <ul>
                            <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["sid"]) == "0"): ?><li class="m-cat-depth-1"><a class="depth-1"
																		href="/Product.php?id=<?php echo ($vo["id"]); ?>"><em><strong><?php echo ($vo["name"]); ?></strong></em></a>
                                  <ul class="m-cat-popup">
                                    <div class="hei">
                                      <ul class="m-cat-drop-2">
                                        <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i; if(($vo[id]) == $vo2["sid"]): ?><li class="m-cat-depth-0">
                                              <table width="460" border="0" cellspacing="0"
																							cellpadding="0">
                                                <tr>
                                                  <td width="75" align="right"><a
																									class="m-depth-2"
																									href="/Product.php?id=<?php echo ($vo2["id"]); ?>"><?php echo ($vo2["name"]); ?></a></td>
                                                  <td><ul class="m-cat-drop-3">
                                                      <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i; if(($vo2["id"]) == $vo3["sid"]): ?><a
																											href="/Product.php?id=<?php echo ($vo3["id"]); ?>"><?php echo ($vo3["name"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
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
<div class="AllWrapInside clearfix" style="padding-top: 0px;">
  <div class="Navigation"> <!-- 这就是位置 -->
    </td>
     </div>
  <div class="mainColumn">
    <div id="h22" class="clearfix">
      <div id="h22left">
        <div id="h22right">
          <style>
.itemsWrap {
	*display: block;
	float: left;
	overflow: hidden;
}
</style>
          <input type="hidden" name="goods_num" id="goods_num" value="3">
          <div class="GoodsListWrap">
            <div class="GoodsList">              
                    <div class="itemsWrap "  style="width: 100%;">
                  <div class="item" style="width:900px;">
                    <table width="100%" border="0" cellspacing="0"
												cellpadding="0">
                      <tr>
                        <td width="100"><div class="goodsImg" 	style="overflow: hidden; text-align: center; vertical-align: middle; width: 100px; height: 100px;"> <a href="/Product_<?php echo ($sss["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img
																width="100" height="100"
																src="__PUBLIC__/Uploads/<?php echo ($sss["image2"]); ?>" alt="<?php echo ($sss["alt"]); ?>" title="<?php echo ($sss["alt"]); ?>"></a> </div></td>
                        <td width="800"><span style="width:800px;"><?php echo ($sss["intro"]); ?></span></td>
                      </tr>
                    </table>
                  </div>
                </div>
              <div class="clear"></div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="shtop">商品筛选</div>
    <div id="qin">
      <div class="clear"></div>
      <div class="GoodsSearchWrap">
        <form method="post"
						action="#"
						id='selector-form'>
          <input type="hidden" name="filter" value="" />
          <input
							type="hidden" name="cat_id" value="8">
          <div class="GoodsSelector division boxGray">
            <div class="division boxBrown">
              <table>
                <tr>
                  <td class="textright"
												style="padding-right: 6px; width: 72px; white-space: nowrap">分类名称：</td>
                  <td
												style="line-height: 22px; white-space: normal; word-break: break-all"><?php if(is_array($er)): $i = 0; $__LIST__ = $er;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="#"><?php echo ($vo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?></td>
                </tr>
              </table>
            </div>
             <div class="division boxBrown" id="selector_contents">
              <table width="100%">
                <tr>
                  <td class="textright"	style="padding-right: 6px; width: 72px; white-space: nowrap">品牌：</td>
                  <td style="line-height: 22px; white-space: normal; word-break: break-all">
                  <?php if(is_array($allshop)): $i = 0; $__LIST__ = $allshop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="#"><?php echo ($vo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </td>
                </tr>
              </table>
            </div>
             <div class="division boxBrown" id="selector_contents">
              <table width="100%">
                <tr>
                  <td class="textright"	style="padding-right: 6px; width: 72px; white-space: nowrap">性能：</td>
                  <td style="line-height: 22px; white-space: normal; word-break: break-all">
                  <?php if(is_array($allproperty)): $i = 0; $__LIST__ = $allproperty;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="#"><?php echo ($vo["property"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </td>
                </tr>
              </table>
            </div>
              <div class="division boxBrown" id="selector_contents">
              <table width="100%">
                <tr>
                  <td class="textright"	style="padding-right: 6px; width: 72px; white-space: nowrap">用途：</td>
                  <td style="line-height: 22px; white-space: normal; word-break: break-all">
                  <?php if(is_array($use1)): $i = 0; $__LIST__ = $use1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="#"><?php echo ($vo["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </td>
                </tr>
              </table>
            </div>
               <div class="division boxBrown" id="selector_contents">
              <table width="100%">
                <tr>
                  <td class="textright"	style="padding-right: 6px; width: 72px; white-space: nowrap">吨位</td>
                  <td style="line-height: 22px; white-space: normal; word-break: break-all">
                  <?php if(is_array($allunit)): $i = 0; $__LIST__ = $allunit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="#"><?php echo ($vo["unit"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </td>
                </tr>
              </table>
            </div>
             <div class="division" id="selector_contents">
              <table width="100%">
                <tr>
                  <td class="textright"	style="border-bottom: 1px solid #eee;padding-right: 6px; width: 72px; white-space: nowrap">所在地：</td>
                  <td style="border-bottom: 1px solid #eee;line-height: 22px;">
                  <?php if(is_array($allshop)): $i = 0; $__LIST__ = $allshop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="#"><?php echo ($vo["address"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </td>
                </tr>
              </table>
            </div>
          </div>
        </form>
        <script type='text/javascript'>
      var fixEmpeyPanel = (function(el){
         el.setStyle('display',el.get('text').clean().trim()?'block':'none');
         return arguments.callee; 
      })($('selector-form'));
         
         if($('selector-form').style.display!='none'){
            $$('#selector-form .division').each(fixEmpeyPanel);
         }
      </script>
        <div class="search_total"></div>
        <div class="title" id='gallerybar'>
          <table width="100%" cellpadding=0 cellspacing=0>
            <tbody>
              <tr>
                <td></td>
                <td><div class='filtmode'>
                    <label></label>
                  </div></td>
              <tr>
            </tbody>
          </table>
        </div>
        <?php if(is_array($er)): $i = 0; $__LIST__ = $er;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(is_array($vo['th'])): $i = 0; $__LIST__ = $vo['th'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><div style="width:780px; height:240px; margin-top:10px;"> <h1><?php echo ($d["name"]); ?></h1><a href="Product_<?php echo ($d["id"]); ?>.html"><img src="__PUBLIC__/Uploads/<?php echo ($d["image"]); ?>" alt="<?php echo ($d["alt"]); ?>" title="<?php echo ($d["alt"]); ?>" height="200" width="780"/></a></div>
          <div style="clear: both;"></div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
        <div class="clearfix">
          <table class="pager floatRight">
            <tr>
            </tr>
          </table>
        </div>
      </div>
      <script>
window.addEvent('domready', function(){
try{
/*关键字高亮*/
(function(replace_str){
    var replace=replace_str.split("+");
    if(replace.length){
      $ES('.entry-title').each(function(r){
        for(i=0;i<replace.length;i++){
          if(replace[i]){
            var reg=new RegExp("("+replace[i].escapeRegExp()+")","gi");
            r.setText(r.get('text').replace(reg,function(){            
              return "{0}"+arguments[1]+"{1}";
            }));
          }
        }
        r.set('html',r.get('text').format("<font color=red>","</font>"));
      });
    }
  })('');
}catch(e){}
if(window.ie6)return;
var gallerybar = $('gallerybar');
var gallerybarSize = gallerybar.getSize();
var gallerybarPos  = gallerybar.getPosition();
var fixedStart = gallerybarSize.y+gallerybarPos.y;

var fixGalleryBar = function(){
    if(fixedStart<this.getScrollTop()){
         gallerybar.addClass('fixed').setStyles({'width':gallerybarSize.x});
    }else{
         gallerybar.removeClass('fixed').setStyles({'width':'auto'});
    }
};

window.addEvents({
   'resize':fixGalleryBar,
   'scroll':fixGalleryBar
});
    

});



</script> 
    </div>
  </div>
  <div class="sideColumn">
    <style>
.toggle1 {
	background: url("./plugins/widgets/relatedgoodscat/toggle.gif")
		no-repeat scroll 0 0 transparent;
	cursor: pointer;
	display: block;
	height: 12px;
	overflow: hidden;
	width: 12px;
	margin-top: 5px;
}

.toggle2 {
	background-position: 0 -12px;
}
</style>
    <div class="border4">
      <div class="GoodsCategoryWrap">
        <div class="body clearfix">
          <ul>
            <div class="topp">
              <h3><?php echo ($da["name"]); ?></h3>
            </div>
            <li class="c-cat-depth-1 borderbody">
              <ul>
                <li class="c-cat-depth-1">
                  <?php if(is_array($er)): $i = 0; $__LIST__ = $er;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style="margin-top: 4px; width: 100%;"><a style="font-size: 12px" href="/Product_<?php echo ($vo["id"]); ?>.html"><?php echo ($vo["name"]); ?></a> </div>
                    <ul id="cat2_subs_24">
                      <li class="c-cat-depth-2">
                        <table>
                          <tbody>
                              <?php if(is_array($vo['th'])): $i = 0; $__LIST__ = $vo['th'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><td><a href="Product_<?php echo ($d["id"]); ?>.html"><?php echo ($d["name"]); ?></a></td>
                          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                      </li>
                    </ul><?php endforeach; endif; else: echo "" ;endif; ?>
                </li>
              </ul>
            </li>
            </li>
          </ul>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <script>

function toggle_subs(catid){

    var d1 = $('cat2_icon_'+catid);

    var d2 = $('cat2_subs_'+catid);

    if (d1.hasClass('toggle2')){

        d2.setStyle('display','');

        d1.removeClass('toggle2');

    }else{

        d1.addClass('toggle2');

        d2.setStyle('display','none');

    }    

}



</script>
    <div class="borderbb " id="widgets_100">
      <div class="border-top">
        <h3>热销商品推荐</h3>
      </div>
      <div class="border-body">
        <style>
.itemsWrap {
	*display: block;
	float: left;
	overflow: hidden;
}
</style>
        <input type="hidden" name="goods_num" id="goods_num" value="5">
        <div class="GoodsListWrap">
          <div class="GoodsList">
            <?php if(is_array($shopth)): $i = 0; $__LIST__ = array_slice($shopth,5,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="149" style="width: 99%;">
                <div class="item">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><div class="goodsImg"
														style="overflow: hidden; text-align: center; vertical-align: middle; width: 66px; height: 66px;"> <a href="#" target="_blank" title="<?php echo ($vo["title"]); ?>"><img
															width="66" height="66"
															src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" title="<?php echo ($vo["title"]); ?>"></a> </div></td>
                      <td class="goodsDesc"><h6> <a href="#" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a> </h6>
                        <ul>
                        </ul></td>
                    </tr>
                  </table>
                </div>
              </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="clear"></div>
          </div>
          <div class="more clearfix"> <a
									href="#">更多...</a> </div>
        </div>
      </div>
    </div>
    <div class="borderbb " id="widgets_101">
      <div class="border-top">
        <h3>浏览过的商品</h3>
      </div>
      <div class="border-body" id="ssp">
        <div class="GoodsBrowsed" id="box_widgets_101"></div>
        <div class="textright"></div>
      </div>
    </div>
  </div>
</div>

<div style="clear: both;"></div>
<div style="margin-top:40px" class="di">
<div class="di_1">
<div class="di_2">
<div class="di_3"><b>关于虎跃</b></div>
<div class="di_3"><a href="http://www.cdhyqz.com/about/">成都虎跃</a></div>
<div class="di_3"><a href="http://www.cdhyqz.com/kuaijietongdao/ryzz.html">荣誉资质</a></div>
<div class="di_3"><a href="http://www.cdhyqz.com/a/guanyuhuyue/zzsm.html">郑重声明</a></div></div>
<div class="di_2">
<div class="di_3"><b>交易方式</b></div>
<div class="di_3"><a href="http://www.cdhyqz.com/jiaoyifangshi/yxhk.html">银行汇款</a></div>
<div class="di_3"><a href="http://www.cdhyqz.com/jiaoyifangshi/bdjy.html">本地交易</a></div>
<div class="di_3"><a href="http://www.cdhyqz.com/jiaoyifangshi/psfs.html">配送方式</a></div></div>
<div class="di_2">
<div class="di_3"><b>售后服务</b> </div>
<div class="di_3"><a href="http://www.cdhyqz.com/shouhoufuwu/thzn.html">退换指南</a></div>
<div class="di_3"><a href="http://www.cdhyqz.com/shouhoufuwu/thyz.html">退换原则</a></div>
<div class="di_3"><a href="http://www.cdhyqz.com/shouhoufuwu/thlc.html">退换流程</a></div></div>
<div class="di_2">
<div class="di_3"><b>快捷通道</b> </div>
<div class="di_3"><a href="http://www.cdhyqz.com/kuaijietongdao/cjwt.html">常见问题</a></div>
<div class="di_3"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=470652675&amp;site=qq&amp;menu=yes">在线留言

</a></div>
<div class="di_3"><a href="http://www.cdhyqz.com/contact/">联系我们</a></div></div>

<div style="clear:both; margin-top:20px">

<p>版权归成都虎跃机电设备有限公司所有 备案序号：蜀ICP备12021182号</p>
<p>电话：028-83131290 18702890692  QQ：470652675 48525281 地址：四川省成都市洞子口路沙河源上金府 邮编:610030 </p>
<p>吊装带、环链电动葫芦、永磁起重器、钢板起重钳、链条/吊带索具、手拉葫芦、弹簧平衡器、五一/武林手拉葫芦、五一/飞鸽手拉葫芦

</p>

<p><a href="http://webscan.360.cn"><img border="0" 

src="http://webscan.360.cn/status/pai/hash/02521a828acb1a3c63d39ea530223046" alt="安全网站"></a>

<a title="加速乐统计" href="http://www.jiasule.com/analytics/login/?site=http://cdhyqz.com/" target="_blank"><img border="0" 

src="http://static.jiasule.com/static/images/stat/stat.png" alt="加速乐统计"></a>
<a title="安全联盟" id="scanv_verify_link" href="http://www.anquan.org/seccenter/search/http://cdhyqz.com/"><img border="0" 

src="http://static.anquan.org/static/images/scanv_sec_1_127x47.png" alt="安全联盟"></a>
</p>
<div style="flot: left; padding-top: 0px; height: 50px; clear: both;">
                                <img src="/images/temp1.gif" alt="举报">
                                <img src="/images/temp2.gif" alt="行业分类">
                                <img src="/images/temp3.gif" alt="运营许可">
                                <img src="/images/temp4.gif" alt="网站识别">
                                <img src="/images/temp5.gif" alt="备案信息">
                                </div>
</div>
<div>
 </div></div>
</div>
</body>
</html>