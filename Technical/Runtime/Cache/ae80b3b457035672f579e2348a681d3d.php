<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>成都虎跃</title>
<meta name="keywords" content='"'/>
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
  <div class="tangzdy"><font color="#660000" face="黑体"><font size="2" face="宋体">您好，欢迎来到虎跃起重机械网上商城！</font><a href="" type="url"><font size="2">电动葫芦</font></a><font size="2">，</font><a href="" type="url"><font size="2">液压千斤顶</font></a><font size="2">，</font><a href="" type="url"><font size="2">手拉葫芦</font></a><font size="2">，</font><a href="" type="url"><font size="2">手扳葫芦</font></a><font size="2">，</font><a href="" type="url"><font size="2">吊装设备</font></a><font size="2">，</font><a href="" type="url"><font size="2">液压搬运车</font></a></font></div>
  <div class="qingzdy"></div>
  <div class="logo"><a href="./"><img src="__PUBLIC__/themes/buy2012/images/loge.png" border="0"/></a></div>
  <div class="searchbar">
    <form action="index.php/Search" method="post"	class="SearchBar">
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
  <div class="searchbarr">热门搜索：<a href="http://www.qizejx.cn/?gallery-9-grid.html">手拉葫芦</a><a href="http://www.qizejx.cn/?gallery-40-grid.html">液压千斤顶</a><a href="http://www.qizejx.cn/?gallery-11-b,29-0--1--grid.html">电动葫芦</a><a href="http://www.qizejx.cn/?gallery-24-grid.html">龙门吊架</a></div>
  <div style="color: #EEEFF1; left: 680px; position: absolute; top: 80px;"><img src="__PUBLIC__/themes/buy2012/images/dianhua.png" /></div>
  <div style="color: #EEEFF1; left: 200px; position: absolute; top: 160px;"><img src="__PUBLIC__/themes/buy2012/images/kouhao.png" /></div>
  <div class="tangnav" id="Menu">
    <ul class="MenuList">
      <li><a href="/">首页</a></li>
      <li><a
					href="/new/about.html">虎跃介绍</a></li>
      <li><a href="#">品牌专区</a></li>
      <li><a
					href="/index_1.html">公司动态</a></li>
      <li><a
					href="/index_2.html">行业新闻</a></li>
      <li><a
					href="/new/lianxi.html">联系我们</a></li>
      <li><a href="#">客户留言</a></li>
      <li style="position:relative;z-index:65535;" class="wgt-menu-more" id="widgets_89_menu_base" onClick="if($('widgets_89_showMore').style.display=='none'){$('widgets_89_showMore').style.display='';}else{ $('widgets_89_showMore').style.display='none';}"><a class="wgt-menu-view-more" href="JavaScript:void(0)">更多导航</a>
      </li>
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
                        <div class="DuceDropNavs">
                          <ul>
                            <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["sid"]) == "0"): ?><li class="m-cat-depth-1"><a class="depth-1" href="/Product_<?php echo ($vo["id"]); ?>.html"><em><?php echo ($vo["name"]); ?></em></a>
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

<div class="AllWrapInside clearfix" style="padding-top:0px;">
  <div class="Navigation"></div>
  <div class="mainColumn">
    <ul>
      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a style="float:left" href="#"><?php echo ($vo["title"]); ?></a><a href="" style="float:right"><?php echo ($vo["time"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      <li style="clear:both"><?php echo ($page); ?></li>
    </ul>
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
      <div class="clear"></div>
    </div>

	
  </div>
  <style>
  	#aa{background:url(__PUBLIC__/themes/buy2012/images/sptab.gif); color:#FF0; height:30px; line-height:30px; width:788px; font-size:16px; font-weight:bold}
	#bb{width:788px;}
  </style>
  <!--对的就是从这里开始---->
  
  <div style="float:left">  
  <?php if(is_array($allp)): $i = 0; $__LIST__ = $allp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style="border:1px solid #000; border-top:0px; height:300px; clear: both">
     	<div id="aa"><span><a href="" style="color: white"><?php echo ($vo["name"]); ?></a></span></div>
     	<div id="bb">
     		<div style="float: left; width:200px;margin-top:10px;">
     		<ul>
     				<?php if(is_array($vo['bbb'])): $i = 0; $__LIST__ = $vo['bbb'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><li><a href="/index.php/New/showbody?id=<?php echo ($vo1["id"]); ?>"><?php echo ($vo1["title"]); ?></a>
     				</li><?php endforeach; endif; else: echo "" ;endif; ?>
     		</ul>
     		</div>
     		<div style="float:left; margin-top:10px;"><a href="/index.php/New/showbody?id=<?php echo ($vo["id"]); ?>">
     			<img src="__PUBLIC__/Uploads/<?php echo ($vo["image2"]); ?>" alt="<?php echo ($vo["alt"]); ?>" title="<?php echo ($vo["alt"]); ?>" width="120"></img></a>
     			<p><?php echo ($vo["intro"]); ?></p>
     		</div>
			</div>
			
</div><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
</div>
<div style="clear: both;"></div>
<div style="margin-top:40px" class="di">
<div class="di_1">
<div class="di_2">
  <div class="di_3"><b>关于虎跃</b></div>
  <div class="di_3"><a href="http://www.cdhyqz.com/about/">成都虎跃</a></div>
  <div class="di_3"><a href="http://www.cdhyqz.com/kuaijietongdao/ryzz.html">荣誉资质</a></div>
  <div class="di_3"><a href="http://www.cdhyqz.com/a/guanyuhuyue/zzsm.html">郑重声明</a></div>
</div>
<div class="di_2">
  <div class="di_3"><b>交易方式</b></div>
  <div class="di_3"><a href="http://www.cdhyqz.com/jiaoyifangshi/yxhk.html">银行汇款</a></div>
  <div class="di_3"><a href="http://www.cdhyqz.com/jiaoyifangshi/bdjy.html">本地交易</a></div>
  <div class="di_3"><a href="http://www.cdhyqz.com/jiaoyifangshi/psfs.html">配送方式</a></div>
</div>
<div class="di_2">
  <div class="di_3"><b>售后服务</b> </div>
  <div class="di_3"><a href="http://www.cdhyqz.com/shouhoufuwu/thzn.html">退换指南</a></div>
  <div class="di_3"><a href="http://www.cdhyqz.com/shouhoufuwu/thyz.html">退换原则</a></div>
  <div class="di_3"><a href="http://www.cdhyqz.com/shouhoufuwu/thlc.html">退换流程</a></div>
</div>
<div class="di_2">
  <div class="di_3"><b>快捷通道</b> </div>
  <div class="di_3"><a href="http://www.cdhyqz.com/kuaijietongdao/cjwt.html">常见问题</a></div>
  <div class="di_3"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=470652675&amp;site=qq&amp;menu=yes">在线留言 </a></div>
  <div class="di_3"><a href="http://www.cdhyqz.com/contact/">联系我们</a></div>
</div>
<div style="clear:both; margin-top:20px">
  <p>版权归成都虎跃机电设备有限公司所有 备案序号：蜀ICP备12021182号</p>
  <p>电话：028-83131290 18702890692  QQ：470652675 48525281 地址：四川省成都市洞子口路沙河源上金府 邮编:610030 </p>
  <p>吊装带、环链电动葫芦、永磁起重器、钢板起重钳、链条/吊带索具、手拉葫芦、弹簧平衡器、五一/武林手拉葫芦、五一/飞鸽手拉葫芦 </p>
  <p><a href="http://webscan.360.cn"><img border="0" 

src="http://webscan.360.cn/status/pai/hash/02521a828acb1a3c63d39ea530223046" alt="安全网站"></a> <a title="加速乐统计" href="http://www.jiasule.com/analytics/login/?site=http://cdhyqz.com/" target="_blank"><img border="0" 

src="http://static.jiasule.com/static/images/stat/stat.png" alt="加速乐统计"></a> <a title="安全联盟" id="scanv_verify_link" href="http://www.anquan.org/seccenter/search/http://cdhyqz.com/"><img border="0" 

src="http://static.anquan.org/static/images/scanv_sec_1_127x47.png" alt="安全联盟"></a> </p>
  <div style="flot: left; padding-top: 0px; height: 50px; clear: both;"> <img src="/images/temp1.gif" alt="举报"> <img src="/images/temp2.gif" alt="行业分类"> <img src="/images/temp3.gif" alt="运营许可"> <img src="/images/temp4.gif" alt="网站识别"> <img src="/images/temp5.gif" alt="备案信息"> </div>
</div>
<div> </div>
</body>
</html>