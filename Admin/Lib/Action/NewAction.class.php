<?php
class NewAction extends Action {
	public function index()
	{
		if ($_GET["id"]!=null)
		{
			$m=new Model("new");
			$this->assign("all", $m->where("id=%d",$_GET["id"])->find());
		
		}
		$m1=new Model("newtype");
		$this->assign("newytpy",$m1->select());
		$this->display();
	}
	//添加或者删除
	public function addorupdate()
	{
		extract($_POST);
		$data["title"]=$title;
		$data["body"]=$title;
		$data["time"]=$title;
		$data["webtitle"]=$title;
		$data["keyword"]=$title;
		$data["description"]=$title;
		$data["title"]=$title;
		$data["newtype"]=$newtype;
		$m=new Model("new");
		if($_POST["id"]!=null)
		{
			$m->where("id=%d",$_POST["id"])->save($data);
			$this->success("好的修改成功");
		}else
		{
			$m->add($data);
			$this->success("好的成功添加");
		}		
	}
	public function mannew()
	{
		$m=new Model("new");
		$sql="select * from cd_new JOIN cd_newtype ON cd_new.newtype=cd_newtype.id";
		import('ORG.Util.Page');// 导入分页类
		$count      = $m->count();// 查询满足要求的总记录数
		$Page       = new Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->field("cd_new.id,cd_new.time,cd_new.title,cd_newtype.`name`")->join("Left join  cd_newtype ON cd_new.newtype=cd_newtype.id")->order('time')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出		
		$this->display();
	}
	public function del()
	{
		$id=$_GET["id"];
		$m=new Model("new");	
		
		if($m->where("id=%d",$id)->delete())
		{
			$this->success("好的成功删除");
				}
		
	}
}