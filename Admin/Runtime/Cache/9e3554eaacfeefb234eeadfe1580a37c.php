<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__PUBLIC__/images/style.css" rel="stylesheet"
	type="text/css" />
<script type="text/javascript" src="__PUBLIC__/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/kindeditor/kindeditor.js"></script>
<script type="text/javascript" src="__PUBLIC__/kindeditor/lang/zh_CN.js"></script>

<script>
	$(function()
		{
		var aa="<?php echo ($all["newtype"]); ?>";
		$("#newtype").val(aa);
		}
	)
	KindEditor.ready(function(K) {
		window.editor = K.create('#body');
	});
	function chekc() {

		if ($("#webtitle").val().length > 80) {
			alert("标题超了");
		}
		if ($("#keyword").val().length > 100) {
			alert("关键字超了");
		}
		if ($("#description").val().length > 200) {
			alert("描述超了");
		}
	}		
</script>
<style type="text/css">
body {
	background: #FFF
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
			<div class="pageTitle">新闻操作</div>
			<div class="pageColumn">
				<div class="pageButton"></div>
				<form action="__URL__/addorupdate" method="post">
					<table>
						<tr>
							<td>请输入网页标题</td>
							<td style="text-align: left"><input type="text"
								name="webtitle" id="webtitle" value="<?php echo ($all["webtitle"]); ?>"
								onblur="chekc()"></input></td>
						</tr>
						<tr>
							<td>请输入网页关键字</td>
							<td style="text-align: left"><input type="text"
								name="keyword" id="keyword" value="<?php echo ($all["keyword"]); ?>"
								onblur="chekc()"></input></td>
						</tr>
						<tr>
							<td>请输入网页描述</td>
							<td style="text-align: left"><input type="text"
								name="description" id="description" value="<?php echo ($all["description"]); ?>"
								onblur="chekc()"></input></td>
						</tr>
						<tr>
							<td>请输入新闻标题</td>
							<td style="text-align: left"><input type="text" name="title"
								value="<?php echo ($all["title"]); ?>"></input></td>
						</tr>
						<tr>
							<td>请输入新闻内容</td>
							<td style="text-align: left"><textarea
									style="width: 900px; height: 400px;" body" id="body"><?php echo ($all["body"]); ?></textarea></td>
						</tr>
						<tr>
							<td>发布时间</td>
							<td style="text-align: left"><input type="text" name="time"></input></td>
						</tr>
						<tr>
							<td>请选择新闻类别</td>
							<td><select name="newtype">
									<?php if(is_array($newytpy)): $i = 0; $__LIST__ = $newytpy;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
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