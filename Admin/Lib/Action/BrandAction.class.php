<?php
class BrandAction extends Action {
	public function Index()
	{
		$mtype = new Model ( "producttype" );
		$this->assign ( "typeall", $mtype->select () );
		$this->display();
	}
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
		$data["producttype"]=$producttype;
		$data["image"]=$info[0]['savename'];
		
		$m->add($data); // 写入用户数据到数据库
		$this->success('数据保存成功！');
		
	}
}
?>