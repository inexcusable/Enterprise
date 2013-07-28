<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="__PUBLIC__/jquery.js"></script>
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
    

$(function(){
	var temp=<?php echo ($shop["id"]); ?>;
	$.get("/product.php/Cookie",{id:temp}); 
	$("#ssp").load("/product.php/Cookie/showcookie");
})
</script>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/themes/buy2012/images/css.css" />
</head>
<body>
<div class="AllWrap headerInfo">
  <div class="tangdd"></div>
  <div class="qbspfl" style="top: 225px;"><a href="/">全部商品分类</a></div>
  <div class="tangzdy"><font color="#660000" face="黑体"><font size="2" face="宋体">您好，欢迎来到成都虎跃起重机械网上商城！</font><a href="" type="url"><font size="2">电动葫芦</font></a><font size="2">，</font><a href="#" type="url"><font size="2">液压千斤顶</font></a><font size="2">，</font><a href="h#" type="url"><font size="2">手拉葫芦</font></a><font size="2">，</font><a href="#" type="url"><font size="2">手扳葫芦</font></a><font size="2">，</font><a href="#" type="url"><font size="2">吊装设备</font></a><font size="2">，</font><a href="#" type="url"><font size="2">液压搬运车</font></a></font></div>
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
      <li><a  href="/index_1.html">公司动态</a></li>
      <li><a  href="/technical.html">技术资料</a></li>
      <li><a  href="#">网站地图</a></li>
    </ul>
    <script>
if($('widgets_89_showMore')){
	$('widgets_89_showMore').setOpacity(.8);
}
</script> </div>
  <div class="loginbar">
    <div class="fr topmenu"></div>
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
.DuceDropNavs { _float:left; padding:0px; } .DuceDropNavs .h3 { height:32px; line-height:31px; background:url("") no-repeat center 0; text-indent:-9999px; text-align:center; font-weight:700; } .m-cat-depth-1 { *float:left; *width:100%; height:32px; border-bottom:1px solid #fde6d2; } .m-cat-depth-1 a { text-align:left; } .m-cat-depth-1 .depth-1 { display:block; position: relative; font-size:14px; height:30px; padding:0px 0px 0px 0px;background:url("") no-repeat 188px center; z-index:8; } .m-cat-depth-1 .depth-1 em { display:block; background:url("") no-repeat 10px center; padding-left:19px; height:30px; line-height:29px; line-height:33px\9; overflow:hidden; font-size:14px; color:#333; } .m-cat-depth-1 a.gay em { background-position:right -132px; } .m-cat-depth-1 a:hover { text-decoration:none; } .m-cat-depth-1 .depth-1:hover em { font-weight:700; } .DuceDropNavs .current .depth-1 { overflow:hidden;z-index:999999;position:absolute; width:185px; _width:178px;border:1px solid #c00; border-right:0px;background:#FFF8F0; border-left:0px; } .DuceDropNavs .current .depth-1 em {font-weight:700; color:#c00; } .m-cat-popup { position:absolute; padding:5px 8px 8px 1px; z-index:99; display:none; /* top:30px;*/ width:467px;background:#fff url("") left top repeat-y; border:1px solid #c00; border-left:0px; } .m-cat-popup .bai { width:2px; height:30px; background:#FFF8F0; top:0px; left:0px; position:absolute;} .DuceDropNavs .current a:hover { color:#f00;} .m-cat-popup a, .m-cat-popup span {/*display:block;*/ height:22px; line-height:22px; _line-height:22px; } .m-cat-drop-2 { width:465px; *padding-bottom:5px; float:left; } .m-cat-drop-2 .m-cat-depth-0 { width:465px; display:block; clear:both; font-weight:700; padding:6px 0px 6px 0px; border-bottom:1px solid #ffefd7; } .m-depth-2 { text-align:right; display: inline;} .m-cat-drop-2 .m-cat-depth-2 { float:left; margin-top:2px; height:20px; overflow:hidden; } .m-cat-drop-2 .m-cat-depth-0 a {} .m-cat-drop-2 .m-cat-depth-2 a { padding:0px 10px 0px 10px; float:left;border-left:1px solid #ccc;} .m-cat-drop-3 a:hover, .m-cat-drop-2 .m-cat-depth-2 a:hover { text-decoration:underline; } .m-cat-drop-2 .bold a { color:#C00; font-weight:700; } .m-depth-2 {font-weight:bold;} .m-cat-drop-3 { width:100%; } .m-cat-drop-3 a { padding:0px 10px 0px 10px; float:left;background:url("") left no-repeat; white-space:nowrap;} .m-cat-drop-3 a:hover {background:url("") left no-repeat ;} .m-depth-2 { padding-right:6px;} .m-cat-drop-4 { width:168px; *padding-bottom:5px; float:left; overflow:hidden; } .m-cat-drop-4 .m-cat-depth-0 { display:block; clear:both; font-weight:700; padding:3px 0 2px 2px; } .m-cat-drop-4 .m-cat-depth-0 a { padding-left:5px; } .m-cat-drop-4 .m-cat-depth-2 { float:left; margin-top:2px; width:49%; height:20px; overflow:hidden; } .m-cat-drop-4 .m-cat-depth-2 a { padding-left:5px; font-weight:400; } .m-cat-drop-4 .m-cat-depth-2 a:hover { text-decoration:underline; } .m-cat-drop-4 .bold a { color:#C00; font-weight:700; } .DuceDropNavs li a { color:#444; } .DuceDropNavs span, .DuceDropNavs li a:hover { color:#C00; } .m-cat-depth-0 a.m-depth-2 { padding-left:2px; background:none; } .DuceDropNavs li a.m-depth-2 { color:#c00; text-decoration:underline;} 
</style>
                        <div class="DuceDropNavs">
                          <ul>
                            <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["sid"]) == "0"): ?><li class="m-cat-depth-1"><a class="depth-1" href="/Product_<?php echo ($vo["id"]); ?>.html"><em><strong><?php echo ($vo["name"]); ?></strong></em></a>
                                  <ul class="m-cat-popup">
                                    <div class="hei">
                                      <ul class="m-cat-drop-2">
                                        <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i; if(($vo[id]) == $vo2["sid"]): ?><li class="m-cat-depth-0">
                                              <table width="460" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                  <td width="75" align="right"><a class="m-depth-2" href="/Product_<?php echo ($vo2["id"]); ?>.html"><?php echo ($vo2["name"]); ?></a></td>
                                                  <td><ul class="m-cat-drop-3">
                                                      <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i; if(($vo2["id"]) == $vo3["sid"]): ?><a href="/Product_<?php echo ($vo3["id"]); ?>.html"><?php echo ($vo3["name"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
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
  <div class="Navigation"><!-- 这里就是位置 -->
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
                                <td align="center"><img src="__PUBLIC__/Uploads/<?php echo ($shop["image"]); ?>" alt="<?php echo ($shop["alt"]); ?>" title="<?php echo ($shop["atl"]); ?>" name="kuang" width="271" border="0" id="kuang" style="cursor:pointer;padding:2px;" onclick="window.open(this.src)" onload="javascript:DrawImage(this,380,285);" alt="<?php echo ($shop["title"]); ?>" height="285"/></td>
                                <td width="60" align="center" valign="top" bgcolor="#DBDDDC" style="padding:5px;"><img src="__PUBLIC__/Uploads/<?php echo ($shop["image"]); ?>" width="52" height="49" border="0" onclick="view_bigimg(this)" style="cursor:pointer" class="border-w" alt="<?php echo ($shop["alt"]); ?>" title="<?php echo ($shop["atl"]); ?>"/> <img src="__PUBLIC__/Uploads/<?php echo ($shop["image1"]); ?>" width="52" height="49" border="0" onclick="view_bigimg(this)" style="cursor:pointer" class="border-w" alt="<?php echo ($shop["alt"]); ?>" title="<?php echo ($shop["atl"]); ?>"/> <img src="__PUBLIC__/Uploads/<?php echo ($shop["image2"]); ?>" width="52" height="49" border="0" onclick="view_bigimg(this)" style="cursor:pointer" class="border-w" alt="<?php echo ($shop["alt"]); ?>" title="<?php echo ($shop["atl"]); ?>"/> <img src="__PUBLIC__/Uploads/<?php echo ($shop["image3"]); ?>" width="52" height="49" border="0" onclick="view_bigimg(this)" style="cursor:pointer" class="border-w" alt="<?php echo ($shop["alt"]); ?>" title="<?php echo ($shop["atl"]); ?>"/> <img src="__PUBLIC__/Uploads/<?php echo ($shop["image4"]); ?>" width="52" height="49" border="0" onclick="view_bigimg(this)" style="cursor:pointer" class="border-w" alt="<?php echo ($shop["alt"]); ?>" title="<?php echo ($shop["atl"]); ?>"/></td>
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
                      <td align="right"><img src="__PUBLIC__/images/1.jpg" alt="销售热线" width="250" height="50"/></td>
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
                                </td>
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
    </div>
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
          <div class="more clearfix"><a href="#">更多...</a></div>
        </div>
      </div>
    </div>
    <div class="borderbb " id="widgets_157">
      <div class="border-top" >
        <h3>浏览过的商品</h3>
      </div>
      <div class="border-body" id="ssp">
      
      
        <div class="GoodsBrowsed" id="box_widgets_157" > </div>
       
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


<script language="javascript">
function view_bigimg(o){
	if(o.src=='')return false;
	document.getElementById("kuang").src=o.src;
	
}
</script>
<script language="JavaScript" type="text/javascript">
<!--
<!--//--><![CDATA[//><!--
function Show_Sub(id_num,num){ 
	for(var i = 0;i <= 4;i++){
		if(GetObj("S_Menu_" + id_num + i)){GetObj("S_Menu_" + id_num + i).className = 'pnoselectd';}
		if(GetObj("S_Cont_" + id_num + i)){GetObj("S_Cont_" + id_num + i).style.display = 'none';}
	}
	if(GetObj("S_Menu_" + id_num + num)){GetObj("S_Menu_" + id_num + num).className = 'pselectd';}
	if(GetObj("S_Cont_" + id_num + num)){GetObj("S_Cont_" + id_num + num).style.display = 'block';}
}
function GetObj(objName){
	if(document.getElementById){
		return eval('document.getElementById("' + objName + '")');
	}else{
		return eval('document.all.' + objName);
	}
}
//--><!]]>

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>



</body>
</html>