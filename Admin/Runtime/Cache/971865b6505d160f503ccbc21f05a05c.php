<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($shop["webtitle"]); ?></title>
<meta name="keywords" content='<?php echo ($shop["keywords"]); ?>'>
<meta name="description" content='<?php echo ($shop["description"]); ?>'>
<meta name="generator" content="ShopEx 4.8.5" />
<link rel="stylesheet" href="__PUBLIC__/statics/style.css" type="text/css" />
<script type="text/javascript">
var Shop = {"set":{"path":"/","buytarget":"3","dragcart":null,"refer_timeout":365},"url":{"addcart":"http://www.qizejx.cn/?cart-ajaxadd.html","shipping":"http://www.qizejx.cn/?cart-shipping.html","payment":"http://www.qizejx.cn/?cart-payment.html","total":"http://www.qizejx.cn/?cart-total.html","viewcart":"http://www.qizejx.cn/?cart-view.html","ordertotal":"http://www.qizejx.cn/?cart-total.html","applycoupon":"http://www.qizejx.cn/?cart-applycoupon.html","diff":"http://www.qizejx.cn/?product-diff.html"}};
</script><script type="text/javascript" src="__PUBLIC__/statics/script/tools.js"></script><script type="text/javascript" src="__PUBLIC__/statics/script/goodscupcake.js"></script><script type="text/javascript">

window.addEvent('domready',function(){
			var ReferObj =new Object();
			$extend(ReferObj,{
				serverTime:1373873595,
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
<div class="AllWrapInside clearfix" style=" padding-top:0px;">
  <div class="Navigation">您当前的位置： <span><a href="http://www.qizejx.cn/" alt="" title="">首页</a></span> <span>&raquo;</span>
    </td>
    <span><a href="http://www.qizejx.cn/?gallery-8-grid.html" alt="" title="">起重葫芦系列</a></span> <span>&raquo;</span>
    </td>
    <span><a href="http://www.qizejx.cn/?gallery-9-grid.html" alt="" title="">手拉葫芦</a></span> <span>&raquo;</span>
    </td>
    <span><a href="http://www.qizejx.cn/?gallery-91-grid.html" alt="" title="">低净空手拉葫芦</a></span> <span>&raquo;</span>
    </td>
  </div>
  <div style="clear: both; height:1px; overflow:hidden;"> </div>
  <div class="mainColumn"> <script>
  /*商品详细通用函数*/

   var priceControl={
              base:0.00,
              _format:{"decimals":"2","dec_point":".","thousands_sep":"","fonttend_decimal_type":"0","fonttend_decimal_remain":"2","sign":"uffe5"},
              format:function(num){
                var part;
                if(!num)return;
                var num = num.toFloat();
                    num = num.round(this._format.decimals)+'';
                    var p =num.indexOf('.');
                    if(p<0){
                        p = num.length;
                        part = '';
                    }else{
                        part = num.substr(p+1);
                    }
                    while(part.length<this._format.decimals){
                            part+='0';
                        }
                    var c=[];
                    while(p>0){
                        if(p>2){
                            c.unshift(num.substr(p-=3,3));
                        }else{
                            c.unshift(num.substr(0,p));
                            break;
                        }
                    }
                    if(!part){
                        this._format.dec_point='';
                    }
                    return (this._format.sign||"")+c.join(this._format.thousands_sep)+this._format.dec_point+part;
            }
       };

    String.implement({
      toFormElements:function(){
            if(!this.contains('=')&&!this.contains('&'))return new Element('input',{type:'hidden'});
            var elements=[];
            var queryStringHash=this.split('&');
            $A(queryStringHash).each(function(item){
                if(item.contains('=')){
                    item=$A(item.split('='));
                    elements.push(new Element('input',{type:'hidden',name:item[0],value:item[1]}));
                }else{
                  elements.push(new Element('input',{type:'hidden',name:item}));
                }
            });
            return new Elements(elements);
            }
    });
    Number.implement({
           interzone:function(min,max){
                 var _v=this.toFloat();
                 if(!_v)_v=0;
                 return _v>=min&&_v<=max;
             }
          });
   var keyCodeFix=[48,49,50,51,52,53,54,55,56,57,96,97,98,99,100,101,102,103,104,105,8,9,46,37,39];


</script>
    <div class="GoodsInfoWrap">
      <div id="goods-viewer">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tbody>
                    <tr>
                      <td valign="middle"><div style="width:460px;border:1px solid #999;">
                          <table width="460" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                              <tr>
                                <td align="center"><img src="__PUBLIC__/Uploads/<?php echo ($shop["image"]); ?>" name="kuang" width="271" border="0" id="kuang" style="cursor:pointer;padding:2px;" onclick="window.open(this.src)" onload="javascript:DrawImage(this,380,285);" alt="<?php echo ($shop["title"]); ?>" height="285"></td>
                                <td width="60" align="center" valign="top" bgcolor="#DBDDDC" style="padding:5px;"><img src="__PUBLIC__/Uploads/<?php echo ($shop["image"]); ?>" width="52" height="49" border="0" onclick="view_bigimg(this)" style="cursor:pointer" class="border-w"> <img src="__PUBLIC__/Uploads/<?php echo ($shop["image1"]); ?>" width="52" height="49" border="0" onclick="view_bigimg(this)" style="cursor:pointer" class="border-w"> <img src="__PUBLIC__/Uploads/<?php echo ($shop["image2"]); ?>" width="52" height="49" border="0" onclick="view_bigimg(this)" style="cursor:pointer" class="border-w"> <img src="__PUBLIC__/Uploads/<?php echo ($shop["image3"]); ?>" width="52" height="49" border="0" onclick="view_bigimg(this)" style="cursor:pointer" class="border-w"> <img src="__PUBLIC__/Uploads/<?php echo ($shop["image4"]); ?>" width="52" height="49" border="0" onclick="view_bigimg(this)" style="cursor:pointer" class="border-w"></td>
                              </tr>
                            </tbody>
                          </table>
                        </div></td>
                    </tr>
                  </tbody>
                </table></td>
              <td width="270" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tbody>
                    <tr>
                      <td align="right"><img src="__PUBLIC__/images/1.jpg" alt="销售热线" width="250" height="50"></td>
                    </tr>
                    <tr>
                      <td align="right"><table width="230" border="0" cellspacing="0" cellpadding="0">
                          <tbody>
                            <tr>
                              <td height="50" align="left"><a href="single.php?/3-20.html" target="_blank"><img src="__PUBLIC__/images/icon1.jpg" alt="售后服务" width="110" height="38"></a></td>
                              <td align="right"><a href="single.php?/5-30.html" target="_blank"><img src="__PUBLIC__/images/icon2.jpg" alt="在线询价" width="110" height="38"></a></td>
                            </tr>
                            <tr>
                              <td height="50" align="left"><a href="single.php?/3-24.html" target="_blank"><img src="__PUBLIC__/images/icon3.jpg" alt="产品百科" width="110" height="38"></a></td>
                              <td align="right"><a href="single.php?/3-25.html" target="_blank"><img src="__PUBLIC__/images/icon4.jpg" alt="产品问答" width="110" height="38"></a></td>
                            </tr>
                            <tr>
                              <td height="50" align="left"><a href="case.php?/-65.html" target="_blank"><img src="__PUBLIC__/images/icon5.jpg" alt="工程案例" width="110" height="38"></a></td>
                              <td align="right"><a href="download.php" target="_blank"><img src="__PUBLIC__/images/icon6.jpg" alt="资料下载" width="110" height="38"></a></td>
                            </tr>
                            <tr>
                              <td height="50" colspan="2" align="left"><!-- Baidu Button BEGIN -->
                                
                                <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare"> <a class="bds_qzone"></a> <a class="bds_tsina"></a> <a class="bds_tqq"></a> <a class="bds_renren"></a> <a class="bds_t163"></a> <span class="bds_more">更多</span> <a class="shareCount"></a> </div>
                                <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=0" ></script> 
                                <script type="text/javascript" id="bdshell_js"></script> 
                                <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script> 
                                <!-- Baidu Button END --></td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
          </tbody>
        </table>
        <form id='fastbuy-form' action='http://www.qizejx.cn/?cart-checkout.html' extra='fastbuy' method='post' style='display:none;'>
        </form>
        <div style="clear:both"></div>
        <div class="goods-detail-tab clearfix"> </div>
        <div class="clear"></div>
        <div class="section pdtdetail" tab="商品详情">
          <?php echo ($shop["body"]); ?>
        </div>
        <script>
    var checkFormReqs =function(e){
           e    = new Event(e);
       var _form= $(e.target);

       var reqs = $$(_form.getElements('input[type=text]'),_form.getElements('textarea'));
        
        
       if(reqs.some(function(req){
            if(!req.get('required')&&!req.get('vtype').contains('required'))return;
            if(req.getValue().trim()==''){
                       req.focus();
                       MessageBox.error('请完善表单必填项<sup>*</sup>');
                       return true;
            }

              return false;


       })){

           e.stop();

       }

    };
</script>
        
        
      </div>
    </div>
    <script>
    
    $$('.addcomment .title input').addEvents({
         'focus':function(){this.removeClass('blur');},
         'blur':function(){this.addClass('blur');}
    });

</script> <script>




 var buycoutText=$E('#goods-viewer .buyinfo input[type=text]').addEvent('keydown',function(e){
             if($A(keyCodeFix).include(e.code).length>25){
               e.stop();
              }
         });
    var getStore=function(){

    return $E('#goods-viewer .buyinfo .store').get('text').toInt()

    };

         buycoutText.addEvent('keyup',function(e){

            if(getStore()<this.value)this.value=getStore();
            if(!this.value||this.value.toInt()<1)this.value=1;
         });
         /*购买数量调节*/
         $$('#goods-viewer .buyinfo .numadjust').addEvent('click',function(e){
              var countText=$E('#goods-viewer .buyinfo input[name^=goods[num]');
              if(this.hasClass('increase')){
                 countText.set('value',(countText.value.toInt()+1).limit(1,getStore()));
              }else{
                 countText.set('value',(countText.value.toInt()-1).limit(1,getStore()));
              }
              this.blur();
         });

         $$('#goods-viewer .buyinfo .numadjust').addEvents({
             'mousedown':function(){
                this.addClass('active');
             },
             'mouseup':function(){
               this.removeClass('active');
             }
         });










/*hightline*/
$$('#goods-viewer .hightline').addEvents({
   mouseenter:function(){

        this.addClass('hightline-enter');

   },
   mouseleave:function(){

        this.removeClass('hightline-enter');

   }

});


</script> <script>
     window.addEvent('domready',function(){
                        /*快速购买*/
              var fastbuyBtn = $E('#goods-viewer .btn-fastbuy');
              if(fastbuyBtn){
                      fastbuyBtn.addEvent('click',function(e){

                           e.stop();
                           this.blur();
                            var form = $('fastbuy-form');
                           form.empty().adopt($(this.form).toQueryString().toFormElements());
                           form.adopt(new Element('input', {name:'isfastbuy',value:1,type:'hidden'}));
                           if(!form.retrieve('events',{})['submit'])return form.submit();
                           form.fireEvent('submit',e);
                       });
                  }

      });
     </script> <script>
/*设置浏览过的商品*/
withBroswerStore(function(broswerStore){
  broswerStore.get('history',function(history){
  history=JSON.decode(history);
  if(!history||$type(history)!=='array')history=[];
   if(history.length==40){history.pop()};
   var newhis={'goodsId':1203,
               'goodsName':'低净空组合手拉葫芦',
               'goodsImg':'http://www.qizejx.cn/images/goods/20130326/4a2d12cda3e2f6d4.jpg',
               'viewTime':$time()
              };
   if(!history.some(function(i,index){


   if(i['goodsId']==newhis['goodsId']){
         history.erase(i);
         history.include(newhis)
         return true;
   }
      return false;

   })){
       history.include(newhis);
   }
   broswerStore.set('history',history);

  });
});


window.addEvent('domready', function(){


/*Tab的处理*/
try{
var viewTabsContainer=$E('#goods-viewer .goods-detail-tab');
var viewTabs=[];
var viewSections=$$('#goods-viewer .section');

viewSections.each(function(se){
  var t=new Element('div',{'class':'goodsDetailTab'}).set('html','<span>'+se.get('tab')+'</span>');
  viewTabs.push(t);

});

viewTabsContainer.adopt(viewTabs);

new ItemAgg(viewTabs,viewSections,{activeName:'active',
                                     onActive:function(tab,item){
                                                  var anotherItems=$$($A(this.items).remove(item));

                                                  if(tab.getElement('span').get('text')=='商品详情'){
                                                     anotherItems.show();
                                                  }else{
                                                     anotherItems.hide();
                                                  }
                                   }});
}catch(e){}

});



/*验证码刷新*/
function changeimg(id,type){
    $(id).set('src','http://www.qizejx.cn/?passport-'+type+'-verifyCode.html#'+$time());
};

</script> <script>
void function(){
/*橱窗放大镜
  author:litie[A]shopex.cn
  [c]  ShopEx
  last update : 2009年9月25日14:51:20
*/
    (new Image()).src = 'statics/loading.gif';
    var getAmongPos = function(size,to){
                 var elpSize = $(to).getSize();
                 return {
                    'top':Math.abs((elpSize.y/2).toInt()-(size.height/2).toInt()+to.getPosition().y+elpSize.scroll.y),
                    'left':Math.abs((elpSize.x/2).toInt()-(size.width/2).toInt()+to.getPosition().x+elpSize.scroll.x)
                 };
            };
   
   $$('#goods-rels .zoom a').addEvent('click',function(e){
            e.stop();
            if(this.retrieve('active'))return;
            var _this = this;
            _this.store('active',true);
            var tpic = this.getParent('.items-gallery').getElement('.goodpic img');
            var bpic_src = this.get('pic');
           
            var loading = new Element('div',{
                 styles:{'background':'#fff url(statics/loading.gif) no-repeat 50% 50%',
                         'width':40,
                         'height':40,
                         'border':'1px #e9e9e9 solid',
                         'opacity':.5}}).inject(document.body).amongTo(tpic);
            
            new Asset.image(bpic_src,{onload:function(img){
                  
                  loading.remove();
                  var winsize = window.getSize();
                  var imgSize = $(img).zoomImg(winsize.x,winsize.y,1);
                  var fxv = $extend(getAmongPos(imgSize,window),imgSize);
                  var imgFx = new Fx.Morph(img,{link:'cancel'});
                  img.setStyles($extend(tpic.getCis(),{opacity:0.5})).inject(document.body).addClass('img-zoom').addEvent('click',function(){
                      imgFx.start(tpic.getCis()).chain(function(){this.element.remove();_this.store('active',false);});
                  });
                  imgFx.start($extend(fxv,{opacity:1}));
                  document.addEvent('click',function(){
                       
                       img.fireEvent('click');
                       document.removeEvent('click',arguments.callee);
                  
                  });
            
            },onerror:function(){
                _this.store('active',false);
                loading.remove();
            }});
            
   
   });
   
   
   }();
</script> </div>
  <div class="sideColumn xx">
    <style> 
.toggle1 { background: url("./plugins/widgets/relatedgoodscat/toggle.gif") no-repeat scroll 0 0 transparent; cursor: pointer; display: block; height: 12px; overflow: hidden; width: 12px; margin-top:5px; } .toggle2 { background-position: 0 -12px; } 
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
                  <?php if(is_array($er)): $i = 0; $__LIST__ = $er;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style="margin-top:4px;width:100%;"> <a style="font-size:12px" href="__URL__/?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a> </div>
                    <ul id="cat2_subs_24">
                      <li class="c-cat-depth-2">
                        <table style="">
                          <tbody>
                              <?php if(is_array($vo['th'])): $i = 0; $__LIST__ = $vo['th'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><td><a href="__URL__/?id=<?php echo ($d["id"]); ?>"><?php echo ($d["name"]); ?></a></td>
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
    <div class="borderbb " id="widgets_156">
      <div class="border-top">
        <h3>热销商品推荐</h3>
      </div>
      <div class="border-body">
        <style> 
.itemsWrap{ *display:block; float:left; overflow:hidden; } 
</style>
        <input type="hidden" name="goods_num" id="goods_num" value="5">
        <div class="GoodsListWrap">
          <div class="GoodsList">
            <?php if(is_array($shophot)): $i = 0; $__LIST__ = $shophot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="itemsWrap " product="82" style="width:99%;">
              <div class="item">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><div class="goodsImg" style="overflow:hidden;text-align:center;vertical-align: middle;width:66px;height:66px;"><a href="Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><img width="66"height="66" src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" title="<?php echo ($vo["title"]); ?>"></a></div></td>
                    <td class="goodsDesc"><h6><a href="Article/<?php echo ($vo["id"]); ?>.html" target="_blank" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a></h6>
                      <ul>
                      </ul></td>
                  </tr>
                </table>
              </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
            
            <div class="clear"></div>
          </div>
          <div class="more clearfix"><a href="http://www.qizejx.cn/?gallery-_ANY_-b,_ANY__t,_ANY_-0-grid.html">更多...</a></div>
        </div>
      </div>
    </div>
    <div class="borderbb " id="widgets_157">
      <div class="border-top">
        <h3>浏览过的商品</h3>
      </div>
      <div class="border-body">
        <div class="GoodsBrowsed" id="box_widgets_157" > </div>
       
        <div class="textright"> <a class="lnk clearAll" onclick="if(broswerStore){broswerStore.remove('history');$('box_widgets_157').empty()}">清除列表</a> | <a class="lnk viewAll" href="http://www.qizejx.cn/?tools-history.html">查看所有</a><span>&nbsp;&nbsp;</span> </div>
      </div>
    </div>
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

                       var _src = "http://rpc.app.shopex.cn/jsapi?certi_id=1375746835&_dep="+sessionid+"&pt=product:index&app=shopex(4.8.5)&uid="+(encodeURIComponent(Cookie.get("S[MEMBER]") || "").split("-")[0])+"&ref="+encodeURIComponent(document.referrer)+"&sz="+JSON.encode(window.getSize())+"&hs="+encodeURIComponent(Cookie.get("S[SHOPEX_ADV_HS]") || new_hs)+"&rt=1373873595";

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