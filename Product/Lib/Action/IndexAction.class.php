<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	public function index() {
		$m = new Model ( "producttype" );
		$this->assign ( "all", $m->select () );
		
		$id = $_GET ["id"];
		$sql = "producttype=" . $id . " ";
		// 这里是根据id来返回一条消息的哈
		$da = $m->where ( "id=%d", $id )->find ();
		
		$sss = $m->where ( "id=%d", $id )->find ();
		$this->assign ( "sss", $sss );
		// /这类返回品牌
		$mbrand = new Model ( "brands" );
		$this->assign ( "brand", $mbrand->where ( "producttype=%d", $id )->select () );
		// 这里返回二类
		if ($da ["sid"] != 0) {
			if ($m->where ( "sid=%d", $da ["id"] )->find () != null) { // 这里表示的是返回二类的东西
				$er = $m->where ( "id=%d", $da ["id"] )->select ();
				foreach ( $er as $t => $val ) {
					$er [$t] ["th"] = $m->where ( "sid=%d", $val ["id"] )->select ();
					$sql = $sql . " or " . "producttype=" . $val ["id"] . " ";
				}
				$aller = $m->where ( "sid=%d", $da ["id"] )->select ();
				$mshop = new Model ( "shop" );
				$allshop = null;
				$allproperty = null;
				$use1 = null;
				$allunit=null;
				$tempno2 = 1;
				$tempno3 = 1;
				$tempno = 1;
				$tempno4=1;
				
				for($i = 0; $i < count ( $aller ); $i ++) {
					// 这是调用的品牌
					$sql2 = "select *, count(distinct brands) from cd_shop WHERE producttype=" . $aller [$i] ["id"] . " group by brands";
					$someshop = $mshop->query ( $sql2 );
					for($j = 0; $j < count ( $someshop ); $j ++) {
						$allshop [$tempno] = $mbrand->where ( "id=%d", $someshop [$j] ["brands"] )->find ();
						$tempno ++;
					}
					// /这里是调用的性能
					$sql3 = "select *, count(distinct property) from cd_shop WHERE producttype=" . $aller [$i] ["id"] . " group by property";
					$someshop = $mshop->query ( $sql2 );
					for($j = 0; $j < count ( $someshop ); $j ++) {
						$allproperty [$tempno2] = $mshop->where ( "id=%d", $someshop [$j] ["id"] )->find ();
						$tempno2 ++;
					}
					// /这里是调用的用途
					$sql3 = "select *, count(distinct use1) from cd_shop WHERE producttype=" . $aller [$i] ["id"] . " group by use1";
					$someshop = $mshop->query ( $sql3 );
					for($j = 0; $j < count ( $someshop ); $j ++) {
						$use1 [$tempno3] = $mshop->where ( "id=%d", $someshop [$j] ["id"] )->find ();
						$tempno3 ++;
					}
					//这里是掉用吨位
					$sql4 = "select *, count(distinct unit) from cd_shop WHERE producttype=" . $aller [$i] ["id"] . " group by unit";
					$someshop = $mshop->query ( $sql3 );
					for($j = 0; $j < count ( $someshop ); $j ++) {
						$allunit [$tempno4] = $mshop->where ( "id=%d", $someshop [$j] ["id"] )->find ();
						$tempno4 ++;
					}
				}
				$this->assign ( "er", $er );
				if ($da ["sid"] != 0) {
					$temp = $m->where ( "id=%d", $da ["sid"] )->find ();
					if ($temp ["sid"] != 0) {
						$temp = $m->where ( "id=%d", $temp ["sid"] )->find ();
						$da = $temp;
					} else {
						$da = $temp;
					}
				}
				$this->assign("allunit",$allunit);
				$this->assign ( "use1", $use1);
				$this->assign ( "allproperty", $allproperty );
				$this->assign ( "allshop", $allshop );
				$this->assign ( "da", $da );
				$this->aa ( "xiao", $sql );
			} else { // 这里表示返回的是三类的所有东西
				$er = $m->where ( "id=%d", $da ["sid"] )->select ();
				foreach ( $er as $t => $val ) {
					$er [$t] ["th"] = $m->where ( "sid=%d", $val ["id"] )->select ();
					$sql = $sql . " or " . "producttype=" . $val ["id"] . " ";
				}
				$mshop = new Model ( "shop" );
				$sql2 = "select *, count(distinct brands) from cd_shop WHERE producttype=" . $da ["id"] . " group by brands";
				$someshop = $mshop->query ( $sql2 );
				$allshop = null;
				$tempno = 1;
				for($j = 0; $j < count ( $someshop ); $j ++) {
					$allshop [$tempno] = $mbrand->where ( "id=%d", $someshop [$j] ["brands"] )->find ();
					$tempno ++;
				}
				$this->assign ( "er", $er );
				if ($da ["sid"] != 0) {
					$temp = $m->where ( "id=%d", $da ["sid"] )->find ();
					if ($temp ["sid"] != 0) {
						$temp = $m->where ( "id=%d", $temp ["sid"] )->find ();
						$da = $temp;
					} else {
						$da = $temp;
					}
				}
				$this->assign ( "allshop", $allshop );
				$this->assign ( "da", $da );
				$this->aa ( "index", $sql );
			}
		} else { // 这里表示的返回大类的所有东西
			$er = $m->where ( "sid=%d", $da ["id"] )->select ();
			foreach ( $er as $t => $val ) {
				$er [$t] ["th"] = $m->where ( "sid=%d", $val ["id"] )->select ();
				$sql = $sql . " or " . "producttype=" . $val ["id"] . " ";
			}
			$this->assign ( "er", $er );
			if ($da ["sid"] != 0) {
				$temp = $m->where ( "id=%d", $da ["sid"] )->find ();
				if ($temp ["sid"] != 0) {
					$temp = $m->where ( "id=%d", $temp ["sid"] )->find ();
					$da = $temp;
				} else {
					$da = $temp;
				}
			}
			$aller = $m->where ( "sid=%d", $da ["id"] )->select ();
			$mshop = new Model ( "shop" );
			$allshop = null;
			$allproperty = null;
			$use1 = null;
			$allunit=null;
			$tempno2 = 1;
			$tempno3 = 1;
			$tempno4=1;
			$tempno = 1;
			for($i = 0; $i < count ( $aller ); $i ++) {
				$some = $m->where ( "sid=%d", $aller [$i] ["id"] )->select ();
				for($d = 0; $d < count ( $some ); $d ++) {
					$sql2 = "select *, count(distinct brands) from cd_shop WHERE producttype=" . $some [$d] ["id"] . " group by brands";
					$someshop = $mshop->query ( $sql2 );
					for($j = 0; $j < count ( $someshop ); $j ++) {
						$allshop [$tempno] = $mbrand->where ( "id=%d", $someshop [$j] ["brands"] )->find ();
						
						$tempno ++;
					}
					// /这里是调用的性能
					$sql3 = "select *, count(distinct property) from cd_shop WHERE producttype=" . $some [$d] ["id"] . " group by property";
					$someshop = $mshop->query ( $sql3 );
					for($j = 0; $j < count ( $someshop ); $j ++) {
						$allproperty [$tempno2] = $mshop->where ( "id=%d", $someshop [$j] ["id"] )->find ();
						$tempno2 ++;
					}
					// /这里是调用的用途
					$sql4 = "select *, count(distinct use1) from cd_shop WHERE producttype=" . $some [$d] ["id"] . " group by use1";
					$someshop = $mshop->query ($sql4);
					for($j = 0; $j < count ( $someshop ); $j ++) {
						$use1 [$tempno3] = $mshop->where ( "id=%d", $someshop [$j] ["id"] )->find ();
						$tempno3 ++;
					}
					$sql5 = "select *, count(distinct unit) from cd_shop WHERE producttype=" . $some [$d] ["id"] . " group by unit";
					$someshop = $mshop->query ($sql5);
					for($j = 0; $j < count ( $someshop ); $j ++) {
						$allunit [$tempno4] = $mshop->where ( "id=%d", $someshop [$j] ["id"] )->find ();
						$tempno4 ++;
					}
				}
			}
			$this->assign("allunit",$allunit);	
			$this->assign ( "use1", $use1 );
			$this->assign ( "allproperty", $allproperty );
			$this->assign ( "allshop", $allshop );
			$this->assign ( "da", $da );
			$this->aa ( "da", $sql );
		}
	}
	public function aa($aa, $sql) {
		// 这里返回商品
		$shop = M ( 'shop' ); // 实例化User对象
		import ( 'ORG.Util.Page' ); // 导入分页类
		$count = $shop->where ( $sql )->count (); // 查询满足要求的总记录数
		$Page = new Page ( $count, 16 ); // 实例化分页类 传入总记录数和每页显示的记录数
		$show = $Page->show (); // 分页显示输出
		                             // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $shop->where ( $sql )->order ( 'id' )->limit ( $Page->firstRow . ',' . $Page->listRows )->select ();
		$mshoppar = new Model ( "shoppar" );
		for($i = 0; $i < count ( $list ); $i ++) {
			$list [$i] ["shoppar"] = $mshoppar->where ( "shopid=%d", $list [$i] ["id"] )->select ();
		}
		$this->assign ( 'list', $list ); // 赋值数据集
		$this->assign ( 'page', $show ); // 赋值分页输出
		                             // 这你是返回一条大类信息哈
		$this->assign ( "shopth", $shop->query ( "select  *  from  cd_shop order by rand() limit 10" ) );
		$this->display ( $aa );
	}
}