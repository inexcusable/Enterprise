<?php
class ShopAction extends Action {
	public function index() {
		// 这里是返回所有产品分类
		$mtype = new Model ( "producttype" );
		$this->assign ( "typeall", $mtype->select () );
		// 这里是返回所有产品状态
		$mstatus = new Model ( "status" );
		$this->assign ( "status", $mstatus->select () );
		// /这里返回所有品牌
		$mbrands = new Model ( "brands" );
		$this->assign ( "brands", $mbrands->select () );
		if ($_GET ["id"] != null) {
			$m = new Model ( "shop" );
			$this->assign ( "all", $m->where ( "id=%d", $_GET ["id"] )->find () );
		}
		$this->display ();
	}
	// 添加或者修改的哈
	public function addupdate() {
		extract ( $_POST );
		$data ["webtitle"] = $webtitle;
		$data ["keyword"] = $keyword;
		$data ["description"] = $description;
		$data ["producttype"] = $producttype;
		$data ["brands"] = $brands;
		$data ["title"] = $title;
		$data ["time"] = $time;
		$data ["body"] = stripslashes ($_POST['body']);
		
		$data ["unit"] = $unit;
		$data ["status"] = $status;
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
		$m = new Model ( "shop" );
		if ($id != null) {
			if (is_uploaded_file ( $_FILES ["image1"] )) {				
				if (! $upload->upload ()) { // 上传错误提示错误信息
					$this->error ( $upload->getErrorMsg () );
				} else { // 上传成功 获取上传文件信息
					$info = $upload->getUploadFileInfo ();
					$data ["image"] = $info [0] ['savename'];
					$data ["image1"] = $info [1] ['savename'];
					$data ["image2"] = $info [2] ['savename'];
					$data ["image3"] = $info [3] ['savename'];
					$data ["image4"] = $info [4] ['savename'];
				}

				if ($m->where ( "id=%d", $id )->save ( $data ) > 0) {
					$this->success ( "好的成功修改" );
				}
				$this->display("index");
			}else {
				if ($m->where ( "id=%d", $id )->save ( $data ) > 0) {
					$this->success ( "好的成功修改" );
					
				}
				
			}
		} else {
			
			if (! $upload->upload ()) { // 上传错误提示错误信息
				$this->error ( $upload->getErrorMsg () );
			} else { // 上传成功 获取上传文件信息
				$info = $upload->getUploadFileInfo ();
			}
			$data ["image"] = $info [0] ['savename'];
			$data ["image1"] = $info [1] ['savename'];
			$data ["image2"] = $info [2] ['savename'];
			$data ["image3"] = $info [3] ['savename'];
			$data ["image4"] = $info [4] ['savename'];
			if ($m->add ( $data ) > 0) {
				
				$this->success ( "好的成功添加" );
			}
		}
	}
	// 这个是管理商品的
	public function manshop() {
		$m = new Model ( "shop" );
		import ( 'ORG.Util.Page' ); // 导入分页类
		$count = $m->count (); // 查询满足要求的总记录数
		$Page = new Page ( $count, 25 ); // 实例化分页类 传入总记录数和每页显示的记录数
		$show = $Page->show (); // 分页显示输出
		                             // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->order ( 'id desc' )->limit ( $Page->firstRow . ',' . $Page->listRows )->select ();
		$mt = new Model ( "producttype" );
		for($i = 0; $i < count ( $list ); $i ++) {
			$list [$i] ["producttype"] = $mt->where ( "id=%d", $list [$i] ["producttype"] )->find ();
		}
		$this->assign ( 'list', $list ); // 赋值数据集
		$this->assign ( 'page', $show ); // 赋值分页输出
		$this->display (); // 输出模板
	}
}
?>