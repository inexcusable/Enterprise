<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__PUBLIC__/images/style.css" rel="stylesheet" type="text/css" />
<script src="__PUBLIC__/jquery.js"></script>
<script type="">
$(function(){
	alert("asdf");
})
</script>
<style type="text/css">
body {
	background:#FFF
}
</style>
</head>

<body>
<div id="contentWrap">
  <div id="widget table-widget">
    <div class="pageTitle">修改品牌</div>
    <div class="pageColumn">
      <div class="pageButton"></div>
      <form action="__URL__/upb" method="post">
      <input type="hidden" name="id" value="<?php echo ($all["id"]); ?>"></input>
      <table>
       		<tr>
       			<td>产品名称:</td>
       			<td><input type="text" name="name" value="<?php echo ($all["name"]); ?>"></input></td>
       		</tr>
       		<tr>
       			<td>图片</td>
       			<td><input type="file" name="image"></input></td>
       		</tr>
       		<tr>
       			<td>所属公司</td>
       			<td><select name="conn">
       				<?php if(is_array($allconn)): $i = 0; $__LIST__ = $allconn;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
       				
       			</select></td>
       		</tr>
       		<tr>
       			<td>所在地</td>
       			<td><input type="text" name="address" value="<?php echo ($all["address"]); ?>"></input></td>
       		</tr>
       		<tr>
       			<td>品牌类型</td>
       			<td><select name="isimport">
       				<option value="0">国产</option>	
       				<option value="1">进口</option>
       			</select></td>
       		</tr>
       		<tr>
       			<td colspan="2"><input type="submit" value="提交"></input></td>
       		</tr>
      </table>
      </form>
    </div>
  </div>
</div>


</body>
</html>