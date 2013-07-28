<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__PUBLIC__/images/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background:#FFF
}
</style>
</head>

<body>
<div id="contentWrap">
  <div id="widget table-widget">
    <div class="pageTitle">品牌管理</div>
    <div class="pageColumn">
      <div class="pageButton"></div>
      <table>
       		<tr>
       			<td>名字</td>
       			<td>图片</td>
       			<td>所属公司</td>
       			<td>所在地</td>
       			<td>类别</td>
       			<td>操作</td>
       		</tr>
       	<?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($vo["name"]); ?></td>
				<td><?php echo ($vo["image"]); ?></td>
				<td><?php echo ($vo["connname"]); ?></td>
				<td><?php echo ($vo["address"]); ?></td>
				<td><?php if(($vo["isimport"]) == "0"): ?>国产<?php else: ?>进口<?php endif; ?>
				</td>
				<td><a href="__URL__/upbrands?id=<?php echo ($vo["id"]); ?>">修改</a>------<a href="__URL__/delbrands?id=<?php echo ($vo["id"]); ?>">删除</a></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
       			<tr>
				<td colspan="6"><?php echo ($page); ?></td>
			</tr>
      </table>
    </div>
  </div>
</div>


</body>
</html>