<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__PUBIIC__/images/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/kindeditor/kindeditor.js"></script>
<script type="text/javascript" src="__PUBLIC__/kindeditor/lang/zh_CN.js"></script>
<script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#body');
        });
</script>
<style type="text/css">
body {
	background:#FFF
}
input{
	border: 1px solid;
}
</style>
</head>

<body>
<div id="contentWrap">
	<!--表格控件 -->
  <div id="widget table-widget">
    <div class="pageTitle"></div>
    <div class="pageColumn">
      <div class="pageButton" style="color: red; font-size: 32">这个是联系我们的介绍</div>
       <form action="__URL__/updateall" method="post">
      <table>
     
        <tr><td><textarea id="body" name="body" style="width:900px; height:400px;"><?php echo ($con["body"]); ?></textarea></td></tr>
        <tr><td><input type="submit" value="提交"></input></td></tr>
       
      </table>
      </form>
    </div>
  </div><!-- #widget -->
</div>


</body>
</html>