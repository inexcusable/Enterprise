<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__PUBLIC__/images/style.css" rel="stylesheet"
	type="text/css" />
<script type="text/javascript" src="__PUBLIC__/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/DatePicker/WdatePicker.js"></script>
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
		<div id="widget table-widget">
			<div class="pageTitle">技术文章</div>
			<div class="pageColumn">
				<div class="pageButton" style="color: red; font-size: 24px; font-weight: bold;">这里是直接跳到了这个商品的技术文章哈！不添加就在点下那个发布商品就行了</div>
				<form action="__URL__/addshopid" method="post">
				<input type="hidden" name="shopid" value="<?php echo ($shopid); ?>" />
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
									style="width: 900px; height: 400px;" id="body" name="body" ><?php echo ($all["body"]); ?></textarea></td>
						</tr>
						<tr>
							<td>发布时间</td>
							<td style="text-align: left"><input type="text" name="time"  onFocus="WdatePicker()" ></input></td>
						</tr>
						<tr>
							<td>新闻类别</td>
							<td style="text-align: left"><select name="newtype">
									<option value="2">技术资料</option>
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