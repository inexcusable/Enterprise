<?php
class ExpertAction extends Action {
	public function index()
	{
		//先返回所有发布的商品
		$mshop=new Model("shop");
		$this->assign("shopall",$mshop->order('id DESC')->select());
		$this->display();
	}
	public function addshoppar()
	{
		$m=new Model("shoppar");
		extract($_POST);
		$data["name"]=$name;
		$data["shopid"]=$id;
		if($m->add($data)>0)
		{
			$this->success("好的成功添加");
		}
	}
	//这个方法是根据Id来返回参数的哈
	public function  showcan()
	{
		$m=new Model("shoppar");
		$temp=$m->where("shopid=%d",$_GET["id"])->select();
		for ($i=0;$i<count($temp);$i++)
		{
			echo '<option value='.$temp[$i]["id"].'>'.$temp[$i]["name"].'</option>';
		}
	}
	//这里就是追加的哈
	public function addto()
	{
		$shopparid=$_POST["shopparid"];
		$body=$_POST["body"];
		$mshoppar=new Model("shoppar");
		$temp=$mshoppar->where("id=%d",$shopparid)->find();		
		$ms=new Model("shop");
		$tempbody=$ms->where("id=%d",$temp["shopid"])->find();
		$data["body"]=$tempbody["body"].'<p id="shop'.$temp["id"].'"></p>'.$body;
		if ($ms->where("id=%d",$tempbody["id"])->save($data)>0)
		{
			$this->success("好的成功添加");
		}
		$this->display("index");
	}
}