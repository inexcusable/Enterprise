<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>成都虎跃</title>
<meta name="keywords" content='"'/>
<link rel="stylesheet" href="__PUBLIC__/statics/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/themes/buy2012/images/css.css" />
	<link rel="stylesheet" type="text/css" media="screen,projection" charset="utf-8" href="__PUBLIC__/css/style.css" />
	<link rel="stylesheet" type="text/css" media="screen,projection" charset="utf-8" href="__PUBLIC__/css/jquery.tmailsider.css" />
	  <style>
  	#aa{background:url(__PUBLIC__/themes/buy2012/images/sptab.gif); color:#FF0; height:30px; line-height:30px; width:788px; font-size:16px; font-weight:bold}
	#bb{width:788px;}
#bb ul li{float:left; margin:10px; width:100px; text-align: center;}
</style>
</head>
<body>
<div class="AllWrap headerInfo" style="background:url(/Public/themes/buy2012/images/menu.gif) bottom no-repeat;">
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
    </ul> </div>
  <div class="loginbar">
    <div class="fr topmenu"></div>
  </div>
</div>


</div>

<div class="yourweb_main" id="options-examples">
		
		
		<!-- CENTER START -->
		<div style="overflow: hidden; width:1000px; margin:0px auto; margin-top:0px;">
			<div class="yourweb_container">
				<div id="Z_RightSide" style="width: 762px; float: right; height: 1800px; background: repeat-y url('__PUBLIC__/images/bg_line_t.jpg') #ffffff; margin-top: 0px; padding: 0px;">
					  <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["sid"]) == "0"): ?><div style="border:1px solid #000; border-top:0px; height:200px">
     	<div id="aa"><span><?php echo ($vo["name"]); ?></span></div>
     	<div id="bb">
        	<ul>
            <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i; if(($vo[id]) == $vo2["sid"]): ?><li><a href="__URL__/getsome?id=<?php echo ($vo2["id"]); ?>"><?php echo ($vo2["name"]); ?></a>
            	<br></br>
            	<a href="__URL__/getsome?id=<?php echo ($vo2["id"]); ?>"><img src="__PUBLIC__/Uploads/<?php echo ($vo2["image2"]); ?>" height="100" alt="<?php echo ($vo2["alt"]); ?>" title="<?php echo ($vo2["alt"]); ?>" /></a>
            	
            	</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
     </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div>
		
		<div style="height: 20px; clear: both;"></div>
	</div>
	<div id="Z_TypeList" class="Z_TypeList">
		<h1 class="title">
			<a>所有商品分类</a>
		</h1>
		<div class="Z_MenuList">
			<ul>
			  <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["sid"]) == "0"): ?><li class="list-item2">
					<h3><?php echo ($vo["name"]); ?></h3>
					  <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i; if(($vo[id]) == $vo2["sid"]): ?><p>
						<a href="__URL__/getsome?id=<?php echo ($vo2["id"]); ?>"><?php echo ($vo2["name"]); ?></a>
					</p><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>				
				</div>	
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script> 
	<script type="text/javascript" src="__PUBLIC__/js/jquery.tmailsider.js"></script>
	<script type="text/javascript">
		$('#Z_TypeList').Z_TMAIL_SIDER();
	</script>
	<!--[if IE 6]>
	<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
	<script type="text/javascript">
		DD_belatedPNG.fix('.Z_TypeList .Z_MenuList h3,.Z_TypeList .menuIcon');
	</script>
	<![endif]-->
<div style="clear: both;"></div>
<div style="margin-top:40px" class="di2" id="footer">
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
</div>
</div>
</body>
</html>