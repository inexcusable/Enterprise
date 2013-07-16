<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__PUBLIC__/images/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/javascript/jquery.min.js"></script>
<style type="text/css">
body {
	background: #FFF
}
input{border:1px solid;}
</style>
</head>

<body>
<div id="contentWrap"> 
  <!--表格控件 -->
  <div id="widget table-widget">
    <div class="pageTitle">品牌管理</div>
    <div class="pageColumn">
      <div class="pageButton"></div>
      <form action="__URL__/add" method="post" enctype="multipart/form-data">
      <table>
        <tr>
        <td>名称</td>
          <td>图片</td>
          <td>所属类别</td>
          <td>操作</td>
          
        </tr>
        <tr>
        <td><input type="text" name="name" /></td>
        <td><input type="file" name="image" /></td>
        <td>
        	<select name="producttype">
            	<?php if(is_array($typeall)): $i = 0; $__LIST__ = $typeall;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["sid"]) == "0"): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option>
						<?php if(is_array($typeall)): $i = 0; $__LIST__ = $typeall;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i; if(($vo1["sid"]) == $vo["id"]): ?><option value="<?php echo ($vo1["id"]); ?>">---<?php echo ($vo1["name"]); ?></option>
								<?php if(is_array($typeall)): $i = 0; $__LIST__ = $typeall;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i; if(($vo2["sid"]) == $vo1["id"]): ?><option value="<?php echo ($vo2["id"]); ?>">-------<?php echo ($vo2["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
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