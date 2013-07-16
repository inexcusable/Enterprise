<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
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
  <div class="qbspfl" style="top: 225px;"><a href="">全部商品分类</a></div>
  <div class="tangzdy"><font color="#660000" face="黑体"><font size="2" face="宋体">您好，欢迎来到起泽起重机械网上商城！</font><a href="" type="url"><font size="2">电动葫芦</font></a><font size="2">，</font><a href="" type="url"><font size="2">液压千斤顶</font></a><font size="2">，</font><a href="" type="url"><font size="2">手拉葫芦</font></a><font size="2">，</font><a href="" type="url"><font size="2">手扳葫芦</font></a><font size="2">，</font><a href="" type="url"><font size="2">吊装设备</font></a><font size="2">，</font><a href="" type="url"><font size="2">液压搬运车</font></a></font></div>
  <div class="qingzdy"></div>
  <div class="logo"><a href="./"><img src="__PUBLIC__/themes/buy2012/images/loge.png" border="0"/></a></div>
  <div class="searchbar">
      <form action="__URL__" method="post"
				class="SearchBar">
      <table cellpadding="0" cellspacing="0">
        <tr>
          <td class="search_label"><span>关键字：</span>
            <input
							name="name" size="10" class="inputstyle keywords" value="" /></td>
          <td><input type="submit" value="搜索" class="btn_search"
							 /></td>
          <td><a href="#"
							class="btn_advsearch">高级搜索</a></td>
        </tr>
      </table>
    </form>
  </div>
  <div class="searchbarr">热门搜索：<a href="http://www.qizejx.cn/?gallery-9-grid.html">手拉葫芦</a><a href="http://www.qizejx.cn/?gallery-40-grid.html">液压千斤顶</a><a href="http://www.qizejx.cn/?gallery-11-b,29-0--1--grid.html">电动葫芦</a><a href="http://www.qizejx.cn/?gallery-24-grid.html">龙门吊架</a></div>
  <div style="color: #EEEFF1; left: 680px; position: absolute; top: 80px;"><img src="__PUBLIC__/themes/buy2012/images/dianhua.png" /></div>
  <div style="color: #EEEFF1; left: 200px; position: absolute; top: 160px;"><img src="__PUBLIC__/themes/buy2012/images/kouhao.png" /></div>
  <div class="tangnav" id="Menu">
    <ul class="MenuList">
      <li><a  href="/" >首页</a></li>
      <li><a  href="/new/about.html">虎跃介绍</a></li>
      <li><a  href="#">品牌专区</a></li>
      <li><a  href="#">公司动态</a></li>
      <li><a  href="#">行业新闻</a></li>
      <li><a  href="#">技术资料</a></li>
      <li><a  href="#">客户留言</a></li>
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

</script> </div>
                    </div>
                  </li>
                </ul></td>
            </tr>
          </table>
          </ins></a> </li>
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
<div class="AllWrapInside clearfix" style="padding-top:0px;">
  <div class="Navigation">看看这里要不要放什么东西</div>
  <div class="mainColumn">
    <div id="h22" class="clearfix">
      <div id="h22left">
        <div id="h22right">
          <style> 
.itemsWrap{ *display:block; float:left; overflow:hidden; } 
.leibii{width:780px;word-break:break-all; text-align:left}
.leibii a{ margin:5px;}
</style>
          <input type="hidden" name="goods_num" id="goods_num" value="3">
          <div class="GoodsListWrap">
            <div class="GoodsList">
				<div class="leibii">
                	<?php if(is_array($er)): $i = 0; $__LIST__ = $er;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(is_array($vo['th'])): $i = 0; $__LIST__ = $vo['th'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><a href="#"><?php echo ($d["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                	
                </div>              
              <div class="clear"></div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="shtop">商品筛选 </div>
    <div id="qin">
      <div class="clear"></div>
      <div class="GoodsSearchWrap">
        <form method="post" action="http://www.qizejx.cn/?search-result.html" id='selector-form'>
          <input type="hidden" name="filter" value="" />
          <input type="hidden" name="cat_id" value="8">
          <div class="GoodsSelector division boxGray">
            <div class="division boxBrown">
              <table>
                <tr>
                  <td class="textright" style="padding-right:6px; width:72px; white-space:nowrap">商品类型：</td>
                  <td style="line-height:22px; white-space:normal; word-break:break-all"><?php if(is_array($er)): $i = 0; $__LIST__ = $er;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="#"><?php echo ($vo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?></td>
                </tr>
              </table>
            </div>
            <div class="division" id="selector_contents">
              <table width="100%">
                <tr>
                  <td class="textright" style="padding-right:6px; width:72px; white-space:nowrap">品牌：</td>
                  <td style=" border-bottom:1px solid #eee; line-height:22px;"><?php if(is_array($brand)): $i = 0; $__LIST__ = $brand;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="#"><?php echo ($vo["name"]); ?></a></td><?php endforeach; endif; else: echo "" ;endif; ?>
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
        <div class="search_total"><?php echo ($page); ?></div>
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
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class='grid'>
          <tbody>
          
            <tr valign="top">
             <?php if(is_array($list)): $i = 0; $__LIST__ = array_slice($list,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><td id="pdt-1203" product="1203" width="25%;"><div class="items-gallery ">
                  <div class="goodpic" style='height:160px; '> <a target="_blank" href='#' style=' width:160px;height:160px;'> <img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" alt="<?php echo ($vo["title"]); ?>"/></a> </div>
                  <a href="#"><?php echo ($vo["title"]); ?></a>
                </td><?php endforeach; endif; else: echo "" ;endif; ?>
            </tr>
             <tr valign="top">
             <?php if(is_array($list)): $i = 0; $__LIST__ = array_slice($list,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><td id="pdt-1203" product="1203" width="25%;"><div class="items-gallery ">
                  <div class="goodpic" style='height:160px; '> <a target="_blank" href='#' style=' width:160px;height:160px;'> <img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" alt="<?php echo ($vo["title"]); ?>"/></a> </div>
                  <a href="#"><?php echo ($vo["title"]); ?></a>
                </td><?php endforeach; endif; else: echo "" ;endif; ?>
            </tr>
             <tr valign="top">
             <?php if(is_array($list)): $i = 0; $__LIST__ = array_slice($list,8,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><td id="pdt-1203" product="1203" width="25%;"><div class="items-gallery ">
                  <div class="goodpic" style='height:160px; '> <a target="_blank" href='#' style=' width:160px;height:160px;'> <img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" alt="<?php echo ($vo["title"]); ?>"/></a> </div>
                  <a href="#"><?php echo ($vo["title"]); ?></a>
                </td><?php endforeach; endif; else: echo "" ;endif; ?>
            </tr>
             <tr valign="top">
             <?php if(is_array($list)): $i = 0; $__LIST__ = array_slice($list,12,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><td id="pdt-1203" product="1203" width="25%;"><div class="items-gallery ">
                  <div class="goodpic" style='height:160px; '> <a target="_blank" href='#' style=' width:160px;height:160px;'> <img src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" alt="<?php echo ($vo["title"]); ?>"/></a> </div>
                  <a href="#"><?php echo ($vo["title"]); ?></a>
                </td><?php endforeach; endif; else: echo "" ;endif; ?>
            </tr>
                        
          </tbody>
        </table>
        <div class="clearfix">
          <table class="pager floatRight">
            <tr>
              <td><?php echo ($page); ?></td>
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



</script> </div>
  </div>
  <div class="sideColumn">
    <style> 
.toggle1 { background: url("./plugins/widgets/relatedgoodscat/toggle.gif") no-repeat scroll 0 0 transparent; cursor: pointer; display: block; height: 12px; overflow: hidden; width: 12px; margin-top:5px; } .toggle2 { background-position: 0 -12px; } 
</style>
    <div class="border4">
      <div class="GoodsCategoryWrap">
        <div class="body clearfix">
          <ul>
            <div class="topp">
              <h3>广告产品</h3>
            </div>
            <li class="c-cat-depth-1 borderbody">
              <ul>
                <li class="c-cat-depth-1">
                  <?php if(is_array($er)): $i = 0; $__LIST__ = $er;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style="margin-top:4px;width:100%;"> <a style="font-size:12px" href="<?php echo ($vo["id"]); ?>.html"><?php echo ($vo["name"]); ?></a> </div>
                    <ul id="cat2_subs_24">
                      <li class="c-cat-depth-2">
                        <table style="">
                          <tbody>
                              <?php if(is_array($vo['th'])): $i = 0; $__LIST__ = $vo['th'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><td><a href="<?php echo ($d["id"]); ?>.html"><?php echo ($d["name"]); ?></a></td>
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
      <div class="clear"> </div>
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
    
    
  </div>
</div>
<div class="AllWrap footer">
  <div class="foota">
    <div class="bordercc " id="widgets_76">
      <div class="border-top">
        <h3>关于我们</h3>
      </div>
      <div class="border-body">
        <div class="TreeList">
          <div class="cat2"><a href="http://www.qizejx.cn/?page-notice.html" >起泽介绍</a></div>
          <div class="cat2"><a href="http://www.qizejx.cn/?page-memberrank.html" >资质证书</a></div>
          <div class="cat2"><a href="http://www.qizejx.cn/?page-orderstatus.html" >合作伙伴</a></div>
          <div class="cat2"><a href="http://www.qizejx.cn/?page-scoreplan.html" >行业新闻</a></div>
          <div class="cat2"><a href="http://www.qizejx.cn/?page-returngood.html" >联系我们</a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="foota" style="width:103px;">
    <div class="bordercc " id="widgets_77">
      <div class="border-top">
        <h3>配送方式</h3>
      </div>
      <div class="border-body">
        <div class="TreeList">
          <div class="cat2"><a href="http://www.qizejx.cn/?page-shipping.html" >上海地区配送</a></div>
          <div class="cat2"><a href="http://www.qizejx.cn/?page-orderinfo.html" >外埠、外地配送</a></div>
          <div class="cat2"><a href="http://www.qizejx.cn/?page-%E4%B8%8A%E6%B5%B7%E5%9C%B0%E5%8C%BA%E9%85%8D%E9%80%81.html" >邮政快递EMS</a></div>
          <div class="cat2"><a href="http://www.qizejx.cn/?page-shippinginfo.html" >关于送货和验货</a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="foota" style="width:102px;">
    <div class="bordercc " id="widgets_78">
      <div class="border-top">
        <h3>支付方式</h3>
      </div>
      <div class="border-body">
        <div class="TreeList">
          <div class="cat2"><a href="http://www.qizejx.cn/?page-%E8%B4%A7%E5%88%B0%E4%BB%98%E6%AC%BE.html" >货到付款</a></div>
          <div class="cat2"><a href="http://www.qizejx.cn/?page-%E4%B8%AA%E4%BA%BA%E8%B4%A6%E6%88%B7.html" >个人账户</a></div>
          <div class="cat2"><a href="http://www.qizejx.cn/?page-%E9%93%B6%E8%A1%8C%E7%94%B5%E6%B1%87.html" >银行电汇</a></div>
          <div class="cat2"><a href="http://www.qizejx.cn/?page-%E5%85%AC%E5%8F%B8%E8%BD%AC%E8%B4%A6.html" >公司转账</a></div>
          <div class="cat2"><a href="http://www.qizejx.cn/?page-%E6%94%AF%E4%BB%98%E5%AE%9D%E4%BB%98%E6%AC%BE.html" >支付宝付款</a></div>
          <div class="cat2"><a href="http://www.qizejx.cn/?page-onlinepayment.html" >网上支付小贴士</a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="foota" style="width:103px;">
    <div class="bordercc " id="widgets_79">
      <div class="border-top">
        <h3>购物指南</h3>
      </div>
      <div class="border-body">
        <div class="TreeList">
          <div class="cat2"><a href="http://www.qizejx.cn/?page-nonmember.html" >顾客必读</a></div>
          <div class="cat2"><a href="http://www.qizejx.cn/?page-terms.html" >购买流程</a></div>
          <div class="cat2"><a href="http://www.qizejx.cn/?page-process.html" >购买保障</a></div>
          <div class="cat2"><a href="http://www.qizejx.cn/?page-service.html" >体贴的售后服务</a></div>
          <div class="cat2"><a href="http://www.qizejx.cn/?page-disclaimer.html" >网站免责声明</a></div>
          <div class="cat2"><a href="http://www.qizejx.cn/?page-%E5%95%86%E5%93%81%E9%80%80%E6%8D%A2%E8%B4%A7%E4%BF%9D%E9%9A%9C.html" >商品退换货保障</a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="foota" style="width:103px;">
    <div class="bordercc " id="widgets_80">
      <div class="border-top">
        <h3>售后服务</h3>
      </div>
      <div class="border-body">
        <div class="TreeList">
          <div class="cat2"><a href="http://www.qizejx.cn/?page-license.html" >退换货政策</a></div>
          <div class="cat2"><a href="http://www.qizejx.cn/?page-privacy.html" >隐私保护政策</a></div>
          <div class="cat2"><a href="http://www.qizejx.cn/?page-%E5%AE%89%E5%85%A8%E6%80%A7%E8%AF%B4%E6%98%8E.html" >安全性说明</a></div>
          <div class="cat2"><a href="http://www.qizejx.cn/?page-%E4%BA%89%E8%AE%AE%E5%A4%84%E7%90%86.html" >争议处理</a></div>
          <div class="cat2"><a href="http://www.qizejx.cn/?page-%E9%83%91%E9%87%8D%E5%A3%B0%E6%98%8E.html" >郑重声明</a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="footar"></div>
  <div class="clear"> </div>
</div>
<style id="thridpartystyle"> 
.thridpartyicon { background:url(statics/icons/thridparty0.gif) no-repeat left center; height:30px; line-height:30px; text-indent:35px;} #accountlogin { width:180px; border:2px solid #badbf2; position:absolute; background:#fff; padding:5px;} #accountlogin h5 { border-bottom:1px solid #e2e2e2; margin:0px 5px 10px 5px;padding:0; height:22px; line-height:22px; color:#333333; font-weight:normal;} #accountlogin .logoimg { float:left; margin-left:5px;} #accountlogin .logoimg span img { margin:6px 3px 0 3px; } #accountlogin .more { text-align:right; float:right;} #accountlogin .more a { text-decoration:underline;} .trustlogos li{ display:inline; padding:2px;} .btn-trustlogin {background:url(statics/btn-trustlogin.gif); width:87px; height:30px; margin-bottom:35px;} .trustdialog .dialog-content { padding:0px; height:320px;} .RegisterWrap {} .RegisterWrap h4 { height:30px; line-height:30px;} .RegisterWrap .more { height:30px; line-height:30px; text-align:right; font-size:14px; color:#333333;} .RegisterWrap .more a { text-decoration:underline;} .RegisterWrap .form { } .RegisterWrap #formlogin,.RegisterWrap #formthridlogin { height:160px; border:1px solid #CCCCCC; margin:10px 0; padding:15px;} .RegisterWrap .customMessages { height:40px;} .dialog-title { margin:0 5px;} .dialog-title .title { padding:10px 0 2px 10px;} .dialog-title .dialog-close-btn {font-family:Arial Black;color:#fff;background:#FF9955;border:1px #FA6400 solid;font-size:14px;cursor:pointer; width:21px; margin-top:5px; text-align:center;} .dialog-title .dialog-close-btn:hover {background:#ff6655;border-color:#ff6655;} 
</style>
<script>
$('thridpartystyle').inject(document.head);
</script>
<div class="themefoot">
  <div class="themefootText textcenter"> <img src="http://www.qizejx.cn/images//20121014/ac5cd606dc3fc5b0.jpg"><br/>
    <table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="100%">
      <tbody>
        <tr>
          <td><div align="center"> <img src="http://www.qizejx.cn/images//20121015/db19ed0b0069b188.gif"> <img src="http://www.qizejx.cn/images//20121015/f0c8a8c3a0c4c32f.jpg"> <img src="http://www.qizejx.cn/images//20121015/fe5df7463bac8bb2.png"><strong>&nbsp;&nbsp; </strong><font color="#990000" size="3"> </font></div></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div style="font-family:Verdana;line-height:20px!important;height:auto!important;font-size:11px!important;text-align:center;overflow:none!important;text-indent:0!important;"><a href="http://www.miibeian.gov.cn/" target="blank" style="color:#666;text-decoration:none;cursor:pointer;display:block;" class="textcenter">沪ICP备09062953号-9 </a><span style="display:none"><script src='http://pw.cnzz.com/c.php?id=81244258&l=2' language='JavaScript' charset='gb2312'></script></span></div>
</div>
<script>
            withBroswerStore(function(store){
               function randomChar(l)  {
                    var  x="0123456789qwertyuioplkjhgfdsazxcvbnm";
                    var  tmp="";
                    for(var  i=0;i<  l;i++)  {
                        tmp  +=  x.charAt(Math.ceil(Math.random()*100000000)%x.length);
                    }
                    return  tmp;
               }
               var lf = decodeURI(window.location.href);

              var new_hs = "";
              var pos = lf.indexOf("#r-") ;
              var pos2 = lf.indexOf("%23r-") ;
              if(pos!=-1||pos2!=-1){
                if(pos2!=-1){
                    pos=pos2+2;
                }
                new_hs=lf.substr(pos+1);
            }
               var old_hs = Cookie.get("S[SHOPEX_ADV_HS]");
               if(new_hs && old_hs!=new_hs){
                    Cookie.set("S[SHOPEX_ADV_HS]",new_hs);
               }
               store.get("jsapi",function(data){
                       var script = document.createElement("script");
                       var sessionid = Cookie.get("JS_SESSIONID")
                        if(sessionid == null){
                            sessionid=randomChar(32)
                            Cookie.set("JS_SESSIONID",sessionid)
                        }

                       var _src = "http://rpc.app.shopex.cn/jsapi?certi_id=1375746835&_dep="+sessionid+"&pt=gallery:grid&app=shopex(4.8.5)&uid="+(encodeURIComponent(Cookie.get("S[MEMBER]") || "").split("-")[0])+"&ref="+encodeURIComponent(document.referrer)+"&sz="+JSON.encode(window.getSize())+"&hs="+encodeURIComponent(Cookie.get("S[SHOPEX_ADV_HS]") || new_hs)+"&rt=1373850280";

                       if(data){
                            try{
                               data = JSON.decode(data);
                            }catch(e){}
                              if($type(data)=="object"){
                                 _src +="&"+Hash.toQueryString(data);
                              }else if($type(data)=="string"){
                                 _src +="&"+data;
                              }
                          }

                      script.setAttribute("src",_src);
                      document.head.appendChild(script);

               });

            });
            </script>
</body>
</html>