<?php
class AboutAction extends Action {
	public function index()
	{
		$m=new Model("new");
		$this->assign("new",$m->where("id=1")->find());
		$this->display();
	}
	public function contact()
	{
		$m=new Model("new");
		$this->assign("con",$m->where("id=2")->find());
		$this->display();
	}
	public function updateall()
	{
		$m=new Model("new");
		$data["body"]=$_POST["body"];
		if($_POST["new"]!=null)
		{
			$m->where("id=1")->save($data);
			echo $data["body"];
			$this->success("成功");
		}
		else
		{
			$m->where("id=2")->save($data);
			$this->success("成功");
		}
	}
}
?>