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
	<!--表格控件 -->
  <div id="widget table-widget">
    <div class="pageTitle">表格控件-简单</div>
    <div class="pageColumn">
      <div class="pageButton"></div>
      <table>
      <tr>
      	<td>标题</td>
      	<td>时间</td>
      	<td>所属类别</td>
      	<td>操作</td>
      </tr>
      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
		 <td><?php echo ($vo["title"]); ?></td>
		 <td><?php echo ($vo["time"]); ?></td>
		 <td><?php echo ($vo["name"]); ?></td>
		 <td><a href="__URL__/index?id=<?php echo ($vo["id"]); ?>">修改</a>---<a href="__URL__/del?id=<?php echo ($vo["id"]); ?>">删除</a></td>
		 </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      	<tr>
      		<td colspan="4" align="center"><?php echo ($page); ?></td>
      	</tr>
      </table>
    </div>
  </div><!-- #widget -->
</div>


</body>
</html>