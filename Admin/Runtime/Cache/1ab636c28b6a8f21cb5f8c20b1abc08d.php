<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__PUBLIC__/images/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/jquery.js"></script>
<script>
function dela()
{
	$("#conn").attr("action","__URL__/delconn");
	$("#conn").submit();
}
</script>
<style type="text/css">
body {
	background: #FFF
}
input{border:1px solid;}
</style>
</head>

<body>
<div id="contentWrap"> 
  <div id="widget table-widget">
    <div class="pageTitle">品牌管理</div>
    <div class="pageColumn">
      <div class="pageButton"></div>
      <h2>这里是公司的删除和修改</h2>
      <form action="__URL__/updataconn" method="post" id="conn">
      	<table>
      		<tr>
      			<td>请选择公司</td>
      			<td><select name="connid">
      				<?php if(is_array($connall)): $i = 0; $__LIST__ = $connall;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>     				
      			</select></td>
      			<td><input type="text" name="conname"></input></td>
      			<td><input type="submit" value="提交"></input></td>
      			<td><a href="javascript:dela()">删除</a></td>
      		</tr>
      	</table>      
      </form>
      <hr></hr>
      <h2>这里是添加公司</h2>
      <form action="__URL__/addconn" method="post">
      	<table>
      		<tr>
      			<td>请输入公司名称</td>
      			<td><input type="text" name="conname"></input></td>
      			<td><input type="submit" value="提交"></input></td>
      		</tr>
      	</table>
      </form>
      <hr></hr>
      
      <h2>这里是添加品牌的哈</h2>
      <form action="__URL__/add" method="post" enctype="multipart/form-data">
      <table>
        <tr>
        <td>名称</td>
          <td>图片</td>
          <td>所属公司</td>
          <td>公司所在地</td>
          <td>类别</td>
          <td>操作</td>
        </tr>
        <tr>
        <td><input type="text" name="name" /></td>
        <td><input type="file" name="image" /></td>
       	<td><select name="connid">
      				<?php if(is_array($connall)): $i = 0; $__LIST__ = $connall;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?> </td>
					<td><input type="text" name="address"></input></td>
       <td>
       	<select name="isimport">
       		<option value="0"  selected="selected">国产</option>
       		<option value="1">进口</option>
       	</select>
       </td>
        <td><input type="submit" value="添加" /></td>
        </tr>
      </table>
      </form>
    </div>
  </div>
  <!-- #widget --> 
</div>
</body>
</html>