<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__PUBLIC__/images/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="__PUBLIC__/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/kindeditor/kindeditor.js"></script>
<script type="text/javascript" src="__PUBLIC__/kindeditor/lang/zh_CN.js"></script>
<script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#body');
        });		
	function chekc()
	{
		if($("#title").val().length>80){
			alert("标题超了");
		}
			if($("#keyword").val().length>100)
			{
				alert("关键字超了");
			}
				if($("#description").val().length>200)
				{
					alert("描述超了");
				}
	}	
</script>
</head>
<style type="text/css">
body {
	background: #FFF
}
input {
	border: 1px solid
}
</style>
<body>
<div id="contentWrap">
  <div id="widget table-widget">
    <div class="pageTitle">添加产品</div>
    <div class="pageColumn">
      <div class="pageButton"></div>
       <form action="__URL__/addupdate" method="post" enctype="multipart/form-data">
      <table>
       
          <input type="hidden" name="id" value="<?php echo ($all["id"]); ?>">
          <tr>
            <td>网站标题</td>
            <td style="text-align:left"><input onblur="chekc()" id="title" type="text" name="webtitle" value="<?php echo ($all["webtitle"]); ?>"></td>
          </tr>
          <tr>
            <td>网站关键字</td>
            <td style="text-align:left"><input onblur="chekc()" id="keyword" type="text" name="keyword" value="<?php echo ($all["keyword"]); ?>"></td>
          </tr>
          <tr>
            <td>网站描述</td>
            <td style="text-align:left"><input onblur="chekc()" id="description" type="text" name="description" value="<?php echo ($all["description"]); ?>"></td>
          </tr>
          <tr>
            <td>请输入商品名称</td>
            <td style="text-align:left"><input type="text" name="title" value="<?php echo ($all["title"]); ?>"></td>
          </tr>
          <tr>
            <td>请输入商品多少吨</td>
            <td style="text-align:left"><input type="text" name="unit" value="<?php echo ($all["unit"]); ?>"></td>
          </tr>
        <tr>
        	<td>请输入商品性能</td>
        	<td style="text-align: left;"><input type="text" name="property" value="<?php echo ($all["property"]); ?>"></input></td>
        </tr>
        <tr>
        	<td>请输入商品用途</td>
        	<td style="text-align: left"><input type="text" name="use" value="<?php echo ($all["use"]); ?>"></input></td>
        </tr>
          <tr>
            <td>请上传商品图片</td>
            <td style="text-align:left"><input type="file" name="image1"></td>
          </tr>
          <tr>
            <td>请上传商品图片</td>
            <td style="text-align:left"><input type="file" name="image2"></td>
          </tr>
          <tr>
            <td>请上传商品图片</td>
            <td style="text-align:left"><input type="file" name="image3"></td>
          </tr>
          <tr>
            <td>请上传商品图片</td>
            <td style="text-align:left"><input type="file" name="image4"></td>
          </tr>
          <tr>
            <td>请上传商品图片</td>
            <td style="text-align:left"><input type="file" name="image5"></td>
          </tr>
          <tr>
          	<td>请输入图片描述</td>
          	<td style="text-align: left"><input type="text" name="alt" value="<?php echo ($all["alt"]); ?>"></td>
          </tr>
          <tr>
            <td>请输入商品详情</td>
            <td style="text-align:left"><textarea id="body" name="body" style="width:900px; height:400px;"><?php echo ($all["body"]); ?></textarea></td>
          </tr>
          <tr>
          	<td>请输入商品简介</td>
          	<td style="text-align:left"><textarea name="intro" style="width:900px;; height:100px; border: 1px solid" ><?php echo ($all["intro"]); ?></textarea></td>
          </tr>
          <tr>
            <td>请选择所属类别</td>
            <td style="text-align:left"><select name="producttype">
                <?php if(is_array($typeall)): $i = 0; $__LIST__ = $typeall;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["sid"]) == "0"): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option>
                    <?php if(is_array($typeall)): $i = 0; $__LIST__ = $typeall;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i; if(($vo1["sid"]) == $vo["id"]): ?><option value="<?php echo ($vo1["id"]); ?>">---<?php echo ($vo1["name"]); ?></option>
                        <?php if(is_array($typeall)): $i = 0; $__LIST__ = $typeall;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i; if(($vo2["sid"]) == $vo1["id"]): ?><option value="<?php echo ($vo2["id"]); ?>">-------<?php echo ($vo2["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
              </select></td>
          </tr>
          <tr>
            <td>请选择商品状态</td>
            <td style="text-align:left"><select name="status">
                <?php if(is_array($status)): $i = 0; $__LIST__ = $status;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
              </select></td>
          </tr>
          <tr>
            <td>请选择发布时间</td>
            <td style="text-align:left"><input type="text" id="time" name="time" value="<?php echo ($all["time"]); ?>" onFocus="WdatePicker()" ></td>
          </tr>
          <tr>
            <td>请选择商品品牌</td>
            <td style="text-align:left"><select name="brands">
                <?php if(is_array($brands)): $i = 0; $__LIST__ = $brands;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
              </select></td>
          </tr>
             <tr>
            <td>请选择商品类型</td>
            <td style="text-align:left"><select name="shoptype">
                <?php if(is_array($shoptype)): $i = 0; $__LIST__ = $shoptype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
              </select></td>
          </tr>
          <tr>
          	<td>资料下载</td>
          	<td style="text-align:left"><input type="text" name="url" value="<?php echo ($all["data"]); ?>"></input></td>
          </tr>
          <tr>
            <td colspan="2"><input type="submit" value="提交"></td>
          </tr>   
      </table>
           </form>
    </div>
  </div>
  <!-- #widget --> 
</div>
<script>
       $(function()
       {
       	  var now= new Date();  
          var year=now.getFullYear();  
          var month=now.getMonth()+1;  
          var day=now.getDate();  
          var hour=now.getHours();  
          var minute=now.getMinutes();  
          var second=now.getSeconds();  
          var nowTime=year+"-"+month+"-"+day;
       	  $("#time").attr("value",nowTime);

       })
</script>
</body>
</html>