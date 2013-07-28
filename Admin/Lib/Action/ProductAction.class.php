<?php
class ProductAction extends Action {
	public function index() {
		$this->display ();
	}
	public function category() {
		$m = new Model ( "producttype" );
		$all = $m->where ( "sid=0" )->select ();
		$this->assign ( "all", $all );
		$this->display ();
	}
	
	// 这个是添加大类的方法
	public function adddalei() {
		$m = new Model ( "producttype" );
		$data ["name"] = $_POST ["name"];
		$data ["intro"] = $_POST ["intro"];
		$data["alt"]=$_POST["alt"];
		import ( 'ORG.Net.UploadFile' );
		$upload = new UploadFile (); // 实例化上传类
		$upload->maxSize = 3145728; // 设置附件上传大小
		$upload->allowExts = array (
				'jpg',
				'gif',
				'png',
				'jpeg' 
		); // 设置附件上传类型
		$upload->savePath = './Public/Uploads/'; // 设置附件上传目录
		if (! $upload->upload ()) { // 上传错误提示错误信息
			$this->error ( $upload->getErrorMsg () );
		} else { // 上传成功 获取上传文件信息
			$info = $upload->getUploadFileInfo ();
		}
		$data ["image"] = $info [0] ['savename'];
		$data ["image2"] = $info [1] ['savename'];
		if ($m->add ( $data ) > 0) {
			$this->success ( "好的成功添加" );
		}
	}
	// 这个是添加二类的方法
	public function adderlei() {
		$m = new Model ( "producttype" );
		$data ["name"] = $_POST ["name"];
		$data ["sid"] = $_POST ["sid"];
		$data ["intro"] = $_POST ["intro"];
		$data["alt"]=$_POST["alt"];
		import ( 'ORG.Net.UploadFile' );
		$upload = new UploadFile (); // 实例化上传类
		$upload->maxSize = 3145728; // 设置附件上传大小
		$upload->allowExts = array (
				'jpg',
				'gif',
				'png',
				'jpeg' 
		); // 设置附件上传类型
		$upload->savePath = './Public/Uploads/'; // 设置附件上传目录
		if (! $upload->upload ()) { // 上传错误提示错误信息
			$this->error ( $upload->getErrorMsg () );
		} else { // 上传成功 获取上传文件信息
			$info = $upload->getUploadFileInfo ();
		}
		$data ["image"] = $info [0] ['savename'];
		$data ["image2"] = $info [1] ['savename'];
		if ($data ["sid"] == null) {
			$this->error ( "你要选择大类啊" );
		}
		if ($m->add ( $data ) > 0) {
			$this->success ( "好的成功添加" );
		}
	}
	// 这个是添加小类的方法哈
	public function addslei() {
		
		$m = new Model ( "producttype" );
		$data ["name"] = $_POST ["name"];
		$data ["sid"] = $_POST ["sid"];
		$data ["intro"] = $_POST ["intro"];
		$data["alt"]=$_POST["alt"];
		import ( 'ORG.Net.UploadFile' );
		$upload = new UploadFile (); // 实例化上传类
		$upload->maxSize = 3145728; // 设置附件上传大小
		$upload->allowExts = array (
				'jpg',
				'gif',
				'png',
				'jpeg' 
		); // 设置附件上传类型
		$upload->savePath = './Public/Uploads/'; // 设置附件上传目录
		if (! $upload->upload ()) { // 上传错误提示错误信息
			$this->error ( $upload->getErrorMsg () );
		} else { // 上传成功 获取上传文件信息
			$info = $upload->getUploadFileInfo ();
		}
		$data ["image"] = $info [0] ['savename'];
		$data ["image2"] = $info [1] ['savename'];
		if ($data ["sid"] == null)
			$this->error ( "你要选择小类啊" );
		if ($m->add ( $data ) > 0) {
			$this->success ( "好的成功添加" );
		}
	}
	// 这个是根据大类ID来返回二类的哈
	public function geterlei() {
		$m = new Model ( "producttype" );
		$all = $m->where ( "sid=%d", $_GET ["sid"] )->select ();
		for($i = 0; $i < count ( $all ); $i ++) {
			echo '<option value="' . $all [$i] ["id"] . '">' . $all [$i] ["name"] . '</option>';
		}
	}
	// 这个是删除的方法
	public function del() {
		$m = new Model ( "producttype" );
		if ($m->where ( "id=%d", $_GET ["id"] )->delete () > 0) {
			$this->success ( "好的成功删除!" );
		}
	}
	// 这个是修改的方法
	public function up() {
		$data=null;
		import ( 'ORG.Net.UploadFile' );
		$upload = new UploadFile (); // 实例化上传类
		$upload->maxSize = 3145728; // 设置附件上传大小
		$upload->allowExts = array (
				'jpg',
				'gif',
				'png',
				'jpeg' 
		); // 设置附件上传类型
		$upload->savePath = './Public/Uploads/'; // 设置附件上传目录
		if (! $upload->upload ()) { // 上传错误提示错误信息
			                            // $this->error ( $upload->getErrorMsg () );
		} else { // 上传成功 获取上传文件信息
			$info = $upload->getUploadFileInfo ();
			$data ["image"] = $info [0] ['savename'];
			$data ["image2"] = $info [1] ['savename'];
		}
		
		if ($_POST ["intro"] != null && $_POST ["intro"] != "") {
			$data ["intro"] = $_POST ["intro"];
		}
		if ($_POST ["name"] != null && $_POST ["name"] != "") {
			$data ["name"] = $_POST ["name"];
		}
		if($_POST["alt"]!=null && $_POST["alt"]!="")
		{
			$data["alt"]=$_POST["alt"];
		}
		$m = new Model ( "producttype" );
		//var_dump($data);
		if ($m->where ( "id=%d", $_POST ["id"] )->save ( $data ) > 0) {
			
			$this->success ( "好的成功修改" );
		}
	}
	public function getinfo()
	{
		$m=new Model("producttype");
		$temp=$m->where("id=%d",$_GET["id"])->find();
		echo $temp["intro"];
	}
}