<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__PUBLIC__/images/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/kindeditor/kindeditor.js"></script>
<script type="text/javascript" src="__PUBLIC__/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="__PUBLIC__/jquery.js"></script>
<script>
KindEditor.ready(function(K) {
	window.editor = K.create('#body');
});

function show()
{
	var temp=$("#tt").val();
	var ur="__URL__/showcan?id="+temp;
	$("#cansu").load(ur);
}
</script>
<style type="text/css">
body {
	background:#FFF
}
input {
	border: 1px solid
}
</style>
</head>

<body>
<div id="contentWrap">
	<!--表格控件 -->
  <div id="widget table-widget">
    <div class="pageTitle">商品高级发布</div>
    <div class="pageColumn">
      <div class="pageButton"></div>
      <form action="__URL__/addshoppar" method="post">
      <table>
		<tr>
			<td>请选择发布的商品</td>
			<td style="text-align: left"><select name="id" id="tt" onchange="show()">			
				<?php if(is_array($shopall)): $i = 0; $__LIST__ = $shopall;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select></td>
		</tr>
		<tr>
			<td>参数设置</td>
			<td style="text-align: left"><input type="text" name="name"></input></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="提交"></input></td>
		</tr>
      </table>
      </form>
<p>------------------------------华丽的分割符------------------------------</p>
      <form action="__URL__/addto" method="post">
      	<table>
      		<tr>
      			<td>请选择参数</td>
      			<td>
      			<select id="cansu" name="shopparid">
				
      			</select>
      			</td>
      		</tr>
      		<tr>
      			<td>请输入内容</td>
      			<td><textarea id="body" name="body" style="width: 900px; height: 400px;"></textarea></td>
      		</tr>
      		<tr>
      			<td colspan="2"><input type="submit" value="提交"></input></td>
      		</tr>
      	</table>      
      </form>
    </div>
  </div><!-- #widget -->
</div>


</body>
</html>