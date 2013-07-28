<?php
class BrandAction extends Action {
	public function Index()
	{
		$mtype = new Model ( "producttype" );
		$this->assign ( "typeall", $mtype->select () );
		$mc=new Model("conn");
		$this->assign("connall",$mc->select());
		$this->display();
	}
	///这个是添加公司的
	public function addconn()
	{
		$m=new Model("conn");
		extract($_POST);
		$data["name"]=$conname;
		if($m->add($data)>0)
		{
			$this->success("好的添加成功");
		}	
	}
	//这个是修改公司的方法
	public function updataconn()
	{
		$m=new Model("conn");
		extract($_POST);
		$data["name"]=$conname;
		if ($m->where("id=%d",$_POST["connid"])->save($data)>0)
		{
			//$this->success("好的成功修改");
			$this->display("index");
		}
	}
	///这个是删除公司的方法
	public function delconn()
	{
		$m=new Model("conn");
		if ($m->where("id=%d",$_POST["connid"])->delete()>0)
		{
			$this->success("好的成功删除");
		}
	}
	///这个是添加品牌
	public function add()
	{
		$m=new Model("brands");
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
		if(!$upload->upload()) {// 上传错误提示错误信息
			$this->error($upload->getErrorMsg());
		}else{// 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
		}
		
		// 保存表单数据 包括附件数
		extract($_POST);
		$data["name"]=$name;
		$data["address"]=$address;
		$data["conn"]=$connid;
		$data["isimport"]=$isimport;
		$data["producttype"]=$producttype;
		$data["image"]=$info[0]['savename'];
		
		$m->add($data); // 写入用户数据到数据库
		$this->success('数据保存成功！');
	
	}
	//这里是品牌管理
	public function branmain()
	{
		$m=new Model("brands");
		$sql="SELECT cd_brands.id,cd_brands.image,cd_conn.`name` as connname,cd_brands.`name`,cd_brands.address,cd_brands.isimport FROM `cd_brands` join cd_conn on cd_brands.conn=cd_conn.id";
		//$this->assign("all",$m->query($sql));
		import('ORG.Util.Page');// 导入分页类
		$count      = $m->count();// 查询满足要求的总记录数
		$Page       = new Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->field("cd_brands.id,cd_brands.image,cd_conn.`name` as connname,cd_brands.`name`,cd_brands.address,cd_brands.isimport")->join("join cd_conn ON cd_brands.conn=cd_conn.id")->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('all',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		
		$this->display();
	}
	//这个是删除品牌的方法
	public function delbrands()
	{
		$m=new Model("brands");
		if ($m->where("id=%d",$_GET["id"])->delete()>0)
		{
			$this->success("好的成功删除");
		}
	}
	//这个加载修改品牌的方法
	public function upbrands()
	{
		$m=new  Model("brands");
		$mcon=new Model("conn");
		$this->assign("allconn",$mcon->select());
		$this->assign("all",$m->where("id=%d",$_GET["id"])->find());
		$this->display();
	}
	///这个是修改品牌的方法
	public function upb()
	{
		$m=new Model("brands");
		extract($_POST);
		$data["name"]=$name;
		import('ORG.Net.UploadFile');
	$upload = new UploadFile();// 实例化上传类
$upload->maxSize  = 3145728 ;// 设置附件上传大小
$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
if(!$upload->upload()) {// 上传错误提示错误信息
}else{// 上传成功 获取上传文件信息
$info =  $upload->getUploadFileInfo();	
	$data["image"]=$info[0]["savename"];
}
	$data["conn"]=$conn;
	$data["address"]=$address;
	$data["isimport"]=$isimport;
	if($m->where("id=%d",$_POST["id"])->save($data)>0)
	{
		$this->success("好的成功修改");
	}
	}
}

?>