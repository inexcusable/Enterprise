<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	public function index() {
		$m = new Model ( "producttype" );
		$this->assign ( "all", $m->select () );
		
		$id = $_GET ["id"];
		// echo $id;
		$sql="producttype=".$id." ";
		// 这里是根据id来返回一条消息的哈
		$da = $m->where ( "id=%d", $id )->find ();
		// 这里返回二类
		if ($da ["sid"] != 0) {
			if ($m->where ( "sid=%d", $da ["id"] )->find () != null) {
				$er = $m->where ( "id=%d", $da ["id"] )->select ();
				foreach ( $er as $t => $val ) {
					echo $val ["id"];
					$er [$t] ["th"] = $m->where ( "sid=%d", $val ["id"] )->select ();
					$sql=$sql." or "."producttype=".$val ["id"]." ";
				}
				$this->assign ( "er", $er );
			} else {
				$er = $m->where ( "id=%d", $da ["sid"] )->select ();
				foreach ( $er as $t => $val ) {
					$er [$t] ["th"] = $m->where ( "sid=%d", $val ["id"] )->select ();
					$sql=$sql." or "."producttype=".$val ["id"]." ";
				}
				$this->assign ( "er", $er );
			}
		} else {
			$er = $m->where ( "sid=%d", $da ["id"] )->select ();
			foreach ( $er as $t => $val ) {
				$er [$t] ["th"] = $m->where ( "sid=%d", $val ["id"] )->select ();
				$sql=$sql." or "."producttype=".$val ["id"]." ";
			}
			$this->assign ( "er", $er );
		}
		
		// 这你是返回一条大类信息哈
		if ($da ["sid"] != 0) {
			$temp = $m->where ( "id=%d", $da ["sid"] )->find ();
			if ($temp ["sid"] != 0) {
				$temp = $m->where ( "id=%d", $temp ["sid"] )->find ();
				$da = $temp;
			} else {
				$da = $temp;
			}
		}
		$this->assign ( "da", $da );
		
		///这类返回品牌
			
		$mbrand=new Model("brands");
		$this->assign("brand",$mbrand->where("producttype=%d",$id)->select());
		
		//这里返回商品
		
		$shop = M('shop'); // 实例化User对象
		import('ORG.Util.Page');// 导入分页类
		
		
		
		
		
		$count      = $shop->where($sql)->count();// 查询满足要求的总记录数
		$Page       = new Page($count,16);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $shop->where($sql)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		
		
		//这里返回3条随机商品
		$this->assign("shopth",$shop->query("select  *  from  cd_shop order by rand() limit 10"));
		
		$this->display ();
	}
}