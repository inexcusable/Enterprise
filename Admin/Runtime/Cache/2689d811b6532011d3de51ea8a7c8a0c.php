<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__PUBLIC__/images/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/javascript/jquery.min.js"></script>
<script type="text/javascript">
	function deldale(par)
	{
		var temp="__URL__/del?id="+$(par).val();
		window.location.href=temp;
	}
	function geter()
	{
		var temp="__URL__/geterlei?sid="+$("#one").val();
		var temp1="__URL__/getinfo?id="+$("#one1").val();
		$("#two").load(temp);
		$("#erinfo").load(temp1);
	}
	function geter2()
	{
		var temp="__URL__/geterlei?sid="+$("#one1").val();
		var temp1="__URL__/getinfo?id="+$("#one1").val();
		$("#two1").load(temp);
		$("#dainfo").load(temp1);
		
	}
	function geter3()
	{
		//alert ("1111122222");
		var temp="__URL__/geterlei?sid="+$("#two1").val();
		$("#th1").load(temp);
	}
	function teeee()
	{
		var temp="__URL__/getinfo?id="+$("#th1").val();
		$("xiaoinfo").load(temp);
	}
</script>
<style type="text/css">
body {
	background: #FFF
}
input {
	border: 1px solid;
}
textarea {
	border: 1px solid;
}
</style>
</head>

<body>
<div id="contentWrap">
<!--表格控件 -->
<div id="widget table-widget">
  <div class="pageTitle">产品分类管理</div>
  <div class="pageColumn">
    <div class="pageButton" style="color:red">分类管理</div>
    <div style="float:left; border:1px solid #000">
      <form action="__URL__/adddalei" method="post"  enctype="multipart/form-data">
        <div>
          <h1>添加大类</h1>
          <ul>
            <li>请输入大类名称:
              <input type="text" name="name"/>
            </li>
            <li>请选择大图
              <input type="file" name="image[]">
              </input>
            </li>
            <li>请选择小图
              <input type="file" name="image[]">
              </input>
            </li>
            <li>请输入描述信息
              <textarea name="intro" style="width:200px; height:200px;"></textarea>
            </li>
            <li>请输入图片描述<input type="text" name="alt"></input></li>
            <li>
              <input type="submit" value="提交" />
            </li>
          </ul>
        </div>
      </form>
      <form action="__URL__/adderlei" method="post"  enctype="multipart/form-data">
        <div>
          <h1>添加二类</h1>
          <ul>
            <li>请选择大类
              <select size="10" name="sid">
                <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
              </select>
            </li>
            <li>请输入二类名称:
              <input type="text" name="name"/>
            </li>
            <li>请选择大图
              <input type="file" name="image[]">
              </input>
            </li>
            <li>请选择小图
              <input type="file" name="image[]">
              </input>
            </li>
            <li>请输入描述信息
              <textarea name="intro" style="width:200px; height:200px;"></textarea>
            </li>
             <li>请输入图片描述<input type="text" name="alt"></input></li>
            <li>
              <input type="submit" value="提交" />
            </li>
          </ul>
        </div>
      </form>
      <form action="__URL__/addslei" method="post"  enctype="multipart/form-data">
      	 <div>
          <h1>添加小类</h1>
          <ul>
            <li>请选择大类二类
              <td align="left" style="text-align:left;"><select size="10" style="width:120px" id="one" onchange="geter()" onclick="aa()">
                <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
              </select>
              <select size="10" name="sid" style="width:120px" id="two">
			</select>
            </li>
            <li>请输入小类名称:
              <input type="text" name="name"/>
            </li>
            <li>请选择大图
              <input type="file" name="image[]">
              </input>
            </li>
            <li>请选择小图
              <input type="file" name="image[]">
              </input>
            </li>
            <li>请输入描述信息
              <textarea name="intro" id="erinfo" style="width:200px; height:200px;"></textarea>
            </li>
             <li>请输入图片描述<input type="text" name="alt"></input></li>
            <li>
              <input type="submit" value="提交" />
            </li>
          </ul>
        </div>
      </form>
    </div>
    
    <div style="float:left; margin-left:50px; border:1px solid #000">
    	<form action="__URL__/up" method="post" enctype="multipart/form-data">
        <div>
        <h1>修改大类</h1>
        	<ul>
            	<li><select style="width:120px" name="id" id="one1" onchange="geter2()">
					<?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select> 请输入你要修改的名称：<input type="text" name="name" /></li>
            <li>请选择大图 <input type="file" name="image[]"/></li>
            <li>请选择小图 <input type="file" name="image[]"/></li>
            <li>请输请输入描述信息入<textarea name="intro" id="dainfo" style="width:200px; height:200px;"></textarea></li>
             <li>请输入图片描述<input type="text" name="alt"></input></li>
            <li><a href="javascript:deldale('#one1');">删除</a></li>
            <li><input type="submit" value="提交" /></li>
            </ul> 
        </div>
    	</form>
    	<form action="__URL__/up" method="post" enctype="multipart/form-data">
         <div>
        <h1>修改二类</h1>
        	<ul>
            	<li><select id="two1" style="width:120px" name="id" onchange="geter3()">
					</select>
					 请输入你要修改的名称：<input type="text" name="name"/></li>
            <li>请选择大图 <input type="file" name="image[]"/></li>
            <li>请选择小图 <input type="file" name="image[]"/></li>
            <li>请输请输入描述信息入<textarea name="intro" style="width:200px; height:200px;"></textarea></li>
             <li>请输入图片描述<input type="text" name="alt"></input></li>
            <li><a href="javascript:deldale('#two1');">删除</a></li>
            <li><input type="submit" value="提交" /></li>
            </ul>
        </div>
        
        
        </form>
        	<form action="__URL__/up" method="post" enctype="multipart/form-data">
         <div>
        <h1>修改小类</h1>
        	<ul>
            	<li><select id="th1" style="width:120px" name="id" onchange="teeee()">
					</select>
				 请输入你要修改的名称：<input type="text" name="name"/></li>
            <li>请选择大图 <input type="file" name="image[]"/></li>
            <li>请选择小图 <input type="file" name="image[]"/></li>
            <li>请输请输入描述信息入<textarea id="xiaoinfo" name="intro" style="width:200px; height:200px;"></textarea></li>
             <li>请输入图片描述<input type="text" name="alt"></input></li>
            <li><a href="javascript:deldale('#th1');">删除</a></li>
            <li><input type="submit" value="提交" /></li>
            </ul> 
        </div>
        
        
        </form>
    </div>
  </div>
  <!-- #widget --> 
</div>
</body>
</html>