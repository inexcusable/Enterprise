<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>环链电动葫芦|手拉葫芦|手扳葫芦|小吊机|卷扬机|电动绞盘|手动绞车|龙门吊架|微型电动葫芦</title>
<meta name="keywords" content=''>
<link rel="stylesheet" href="__PUBLIC__/statics/style.css" type="text/css" />
<script type="text/javascript">
var Shop = {"set":{"path":"/","buytarget":"3","dragcart":null,"refer_timeout":365},"url":{"addcart":"http://www.qizejx.cn/?cart-ajaxadd.html","shipping":"http://www.qizejx.cn/?cart-shipping.html","payment":"http://www.qizejx.cn/?cart-payment.html","total":"http://www.qizejx.cn/?cart-total.html","viewcart":"http://www.qizejx.cn/?cart-view.html","ordertotal":"http://www.qizejx.cn/?cart-total.html","applycoupon":"http://www.qizejx.cn/?cart-applycoupon.html","diff":"http://www.qizejx.cn/?product-diff.html"}};
</script>
<script type="text/javascript" src="__PUBLIC__/statics/script/tools.js">
</script><script type="text/javascript" src="__PUBLIC__/statics/script/goodscupcake.js"></script>
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
    

  
</script>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/themes/buy2012/images/css.css" />
</head>
<body>
<div class="AllWrap headerInfo">
<div class="tangdd"></div>
<div class="qbspfl" style="top: 225px;"><a href="./?page-fl.html">全部商品分类</a></div>
<div class="tangzdy"><font color="#660000" face="黑体"><font size="2" face="宋体">您好，欢迎来到起泽起重机械网上商城！</font><a href="http://www.qizejx.cn/?gallery-11-b,29-0--1--grid.html" type="url"><font size="2">电动葫芦</font></a><font size="2">，</font><a href="http://www.qizejx.cn/?gallery-12-grid.html" type="url"><font size="2">液压千斤顶</font></a><font size="2">，</font><a href="http://www.qizejx.cn/?gallery-9-grid.html" type="url"><font size="2">手拉葫芦</font></a><font size="2">，</font><a href="http://www.qizejx.cn/?gallery-10-grid.html" type="url"><font size="2">手扳葫芦</font></a><font size="2">，</font><a href="http://www.qizejx.cn/?gallery-5-grid.html" type="url"><font size="2">吊装设备</font></a><font size="2">，</font><a href="http://www.qizejx.cn/?gallery-13-grid.html" type="url"><font size="2">液压搬运车</font></a></font></div>
<div class="qingzdy"></div>
<div class="logo"><a href="./"><img src="__PUBLIC__/themes/buy2012/images/loge.png" border="0"/></a></div>
<div class="searchbar">
  <form action="http://www.qizejx.cn/?search-result.html" method="post" class="SearchBar">
    <table cellpadding="0" cellspacing="0">
      <tr>
        <td class="search_label"><span>关键字：</span>
          <input name="name[]" size="10" class="inputstyle keywords" value="" /></td>
        <td><input type="submit" value="搜索" class="btn_search" onfocus='this.blur();'/></td>
        <td><a href="http://www.qizejx.cn/?search.html" class="btn_advsearch">高级搜索</a></td>
      </tr>
    </table>
  </form>
</div>
<div class="searchbarr">热门搜索：<a href="http://www.qizejx.cn/?gallery-9-grid.html">手拉葫芦</a><a href="http://www.qizejx.cn/?gallery-40-grid.html">液压千斤顶</a><a href="http://www.qizejx.cn/?gallery-11-b,29-0--1--grid.html">电动葫芦</a><a href="http://www.qizejx.cn/?gallery-24-grid.html">龙门吊架</a></div>
<div style="color: #EEEFF1; left: 680px; position: absolute; top: 80px;"><img src="__PUBLIC__/themes/buy2012/images/dianhua.png" /></div>
<div style="color: #EEEFF1; left: 200px; position: absolute; top: 160px;"><img src="__PUBLIC__/themes/buy2012/images/kouhao.png" /></div>
<div class="tangnav" id="Menu">
  <ul class="MenuList">
    <li><a  href="http://www.qizejx.cn/?" >首页</a></li>
    <li><a  href="http://www.qizejx.cn/?page-%E8%B5%B7%E6%B3%BD%E4%BB%8B%E7%BB%8D.html">起泽介绍</a></li>
    <li><a  href="http://www.qizejx.cn/?brand-showList.html">品牌专区</a></li>
    <li><a  href="http://www.qizejx.cn/?page-%E7%BB%84%E5%90%88%E8%AE%BE%E5%A4%87.html">组合设备</a></li>
    <li><a  href="http://www.qizejx.cn/?page-%E5%B1%95%E4%BC%9A%E7%8E%B0%E5%9C%BA.html">展会现场</a></li>
    <li><a  href="http://www.qizejx.cn/?page-%E8%81%94%E7%B3%BB%E6%88%91%E4%BB%AC.html">联系我们</a></li>
    <li><a  href="http://www.qizejx.cn/?message.html">客户留言</a></li>
    <li style="position:relative;z-index:65535;" class="wgt-menu-more" id="widgets_89_menu_base" onClick="if($('widgets_89_showMore').style.display=='none'){$('widgets_89_showMore').style.display='';}else{ $('widgets_89_showMore').style.display='none';}"><a class="wgt-menu-view-more" href="JavaScript:void(0)">更多导航</a>
      <div class="v-m-page" style="display:none;position:absolute; top:25px; left:0" id="widgets_89_showMore">
        <div><a href="http://www.qizejx.cn/?page-%E8%B5%84%E8%B4%A8%E8%AF%81%E4%B9%A6.html">资质证书</a></div>
        <div><a href="http://www.qizejx.cn/?page-%E7%BD%91%E7%BB%9C%E8%90%A5%E9%94%80.html">网络营销</a></div>
        <div><a href="http://www.qizejx.cn/?artlist-119.html">动态新闻</a></div>
        <div><a href="http://www.qizejx.cn/?page-%E5%B8%AE%E5%8A%A9%E4%B8%AD%E5%BF%83.html">帮助中心</a></div>
        <div><a href="http://www.qizejx.cn/?link-showList.html">友情链接</a></div>
      </div>
    </li>
  </ul>
  <script>
if($('widgets_89_showMore')){
	$('widgets_89_showMore').setOpacity(.8);
}
</script> </div>
<div class="loginbar">
  <div class="fr topmenu"><a href="http://www.qizejx.cn//?page-about.html">关于我们</a> <a href="http://www.qizejx.cn/?page-%E8%B4%A7%E5%88%B0%E4%BB%98%E6%AC%BE.html">支付方式</a> <a href="http://www.qizejx.cn//?/page-helpcenter.html">帮助中心</a></div>
</div>
<div id="menum">
<div id="outer">
<ul class="menum ulul">
<li class="sub lili" style="background:url(000.jpg) left no-repeat;"><a class="aa" href="./">
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
.DuceDropNavs { _float:left; padding:0px; } .DuceDropNavs .h3 { height:32px; line-height:31px; background:url("http://www.qizejx.cn/plugins/widgets/ducegoodscat/images/m_cat_icon.gif") no-repeat center 0; text-indent:-9999px; text-align:center; font-weight:700; } .m-cat-depth-1 { *float:left; *width:100%; height:32px; border-bottom:1px solid #fde6d2; } .m-cat-depth-1 a { text-align:left; } .m-cat-depth-1 .depth-1 { display:block; position: relative; font-size:14px; height:30px; padding:0px 0px 0px 0px;background:url("http://www.qizejx.cn/plugins/widgets/ducegoodscat/images/16.gif") no-repeat 188px center; z-index:8; } .m-cat-depth-1 .depth-1 em { display:block; background:url("http://www.qizejx.cn/plugins/widgets/ducegoodscat/images/15.jpg") no-repeat 10px center; padding-left:19px; height:30px; line-height:29px; line-height:33px\9; overflow:hidden; font-size:14px; color:#333; } .m-cat-depth-1 a.gay em { background-position:right -132px; } .m-cat-depth-1 a:hover { text-decoration:none; } .m-cat-depth-1 .depth-1:hover em { font-weight:700; } .DuceDropNavs .current .depth-1 { overflow:hidden;z-index:999999;position:absolute; width:185px; _width:178px;border:1px solid #c00; border-right:0px;background:#FFF8F0; border-left:0px; } .DuceDropNavs .current .depth-1 em {font-weight:700; color:#c00; } .m-cat-popup { position:absolute; padding:5px 8px 8px 1px; z-index:99; display:none; /* top:30px;*/ width:467px;background:#fff url("http://www.qizejx.cn/plugins/widgets/ducegoodscat/images/17.gif") left top repeat-y; border:1px solid #c00; border-left:0px; } .m-cat-popup .bai { width:2px; height:30px; background:#FFF8F0; top:0px; left:0px; position:absolute;} .DuceDropNavs .current a:hover { color:#f00;} .m-cat-popup a, .m-cat-popup span {/*display:block;*/ height:22px; line-height:22px; _line-height:22px; } .m-cat-drop-2 { width:465px; *padding-bottom:5px; float:left; } .m-cat-drop-2 .m-cat-depth-0 { width:465px; display:block; clear:both; font-weight:700; padding:6px 0px 6px 0px; border-bottom:1px solid #ffefd7; } .m-depth-2 { text-align:right; display: inline;} .m-cat-drop-2 .m-cat-depth-2 { float:left; margin-top:2px; height:20px; overflow:hidden; } .m-cat-drop-2 .m-cat-depth-0 a {} .m-cat-drop-2 .m-cat-depth-2 a { padding:0px 10px 0px 10px; float:left;border-left:1px solid #ccc;} .m-cat-drop-3 a:hover, .m-cat-drop-2 .m-cat-depth-2 a:hover { text-decoration:underline; } .m-cat-drop-2 .bold a { color:#C00; font-weight:700; } .m-depth-2 {font-weight:bold;} .m-cat-drop-3 { width:100%; } .m-cat-drop-3 a { padding:0px 10px 0px 10px; float:left;background:url("http://www.qizejx.cn/plugins/widgets/ducegoodscat/images/18.jpg") left no-repeat; white-space:nowrap;} .m-cat-drop-3 a:hover {background:url("http://www.qizejx.cn/plugins/widgets/ducegoodscat/images/18.jpg") left no-repeat ;} .m-depth-2 { padding-right:6px;} .m-cat-drop-4 { width:168px; *padding-bottom:5px; float:left; overflow:hidden; } .m-cat-drop-4 .m-cat-depth-0 { display:block; clear:both; font-weight:700; padding:3px 0 2px 2px; } .m-cat-drop-4 .m-cat-depth-0 a { padding-left:5px; } .m-cat-drop-4 .m-cat-depth-2 { float:left; margin-top:2px; width:49%; height:20px; overflow:hidden; } .m-cat-drop-4 .m-cat-depth-2 a { padding-left:5px; font-weight:400; } .m-cat-drop-4 .m-cat-depth-2 a:hover { text-decoration:underline; } .m-cat-drop-4 .bold a { color:#C00; font-weight:700; } .DuceDropNavs li a { color:#444; } .DuceDropNavs span, .DuceDropNavs li a:hover { color:#C00; } .m-cat-depth-0 a.m-depth-2 { padding-left:2px; background:none; } .DuceDropNavs li a.m-depth-2 { color:#c00; text-decoration:underline;} 
</style>
        <div class="DuceDropNavs">
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
        <div class="quanbu">
          <div class="pageWrap">
            <h2><font color="#000000" size="3">关于我们</font></h2>
            <div class="font11px">
             	<?php echo ($about["body"]); ?>
            </div>
          </div>
        </div>
</body>
</html>