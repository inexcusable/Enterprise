<?php
class CreateAction extends Action {
	public function index()
	{
		$m=new Model("producttype");
		$this->assign("all",$m->select());
		$mshop=new Model("shop");
		$allshop=$mshop->select();
		for ($i=0;$i<count($allshop);$i++)
		{
			$id = $allshop[$i]["producttype"];
			//echo $id;
			// 这里是根据id来返回一条消息的哈
			$da = $m->where ( "id=%d", $id )->find ();
			// 这里返回二类
			if ($da ["sid"] != 0) {
				if ($m->where ( "sid=%d", $da ["id"] )->find () != null) {
					$er = $m->where ( "id=%d", $da ["id"] )->select ();
					foreach ( $er as $t => $val ) {
						
						$er [$t] ["th"] = $m->where ( "sid=%d", $val ["id"] )->select ();
						
					}
					$this->assign ( "er", $er );
				} else {
					$er = $m->where ( "id=%d", $da ["sid"] )->select ();
					foreach ( $er as $t => $val ) {
						$er [$t] ["th"] = $m->where ( "sid=%d", $val ["id"] )->select ();
						
					}
					$this->assign ( "er", $er );
				}
			} else {
				$er = $m->where ( "sid=%d", $da ["id"] )->select ();
				foreach ( $er as $t => $val ) {
					$er [$t] ["th"] = $m->where ( "sid=%d", $val ["id"] )->select ();
					
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
			$this->assign("shop",$mshop->where("id=%d",$allshop[$i]["id"])->find());
			//这里返回热销产品
			$this->assign("shophot",$mshop->query("select * from cd_shop order by rand() limit 5"));
			$this->buildHtml($allshop[$i]["id"],"./Article/","index");
		}		
		//这里是生成关于我们
		$new=new Model("new");
		$this->assign("about",$new->where("id=1")->find());
		$this->assign("con",$new->where("id=2")->find());
		$this->buildHtml("about","./new/","about");
		$this->buildHtml("con","./new/","about");
	}	
}