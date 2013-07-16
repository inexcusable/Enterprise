<?php
class ProductAction extends Action {
    public function index(){

		$this->display();
    }
    public function category()
    {
		$m=new Model("producttype");
		$all=$m->where("sid=0")->select();
		$this->assign("all",$all);
    	$this->display();
    }
    
    //这个是添加大类的方法
    public function adddalei()
    {
    	$m=new Model("producttype");
    	$data["name"]=$_POST["name"];
    	if ($m->add($data)>0)
    	{
    		$this->success("好的成功添加");
    	}
    }
    //这个是添加二类的方法
    public function adderlei()
    {
    	$m=new Model("producttype");
    	$data["name"]=$_POST["name"];
    	$data["sid"]=$_POST["sid"];
    	if($data["sid"]==null)
    	{
    		$this->error("你要选择大类啊");
    	}
    	if ($m->add($data)>0)
    	{
    		$this->success("好的成功添加");
    	}    	
    }
    //这个是添加小类的方法哈
    public function addslei()
    {
    	$m=new Model("producttype");
    	$data["name"]=$_POST["name"];
    	$data["sid"]=$_POST["sid"];
    	if ($data["sid"]==null)
    	$this->error("你要选择小类啊");    		
    	if ($m->add($data)>0)
    	{
    		$this->success("好的成功添加");
    	}
    }
    //这个是根据大类ID来返回二类的哈
    public function geterlei()
    {
    	$m=new Model("producttype");
    	$all=$m->where("sid=%d",$_GET["sid"])->select();
		for ($i=0;$i<count($all);$i++)
		{
			echo '<option value="'.$all[$i]["id"].'">'.$all[$i]["name"].'</option>';
		}
    }
    //这个是删除的方法
    public function del()
    {
    	$m=new Model("producttype");
    	if ($m->where("id=%d",$_GET["id"])->delete()>0) {
    		$this->success("好的成功删除!");
    	}
    }
    //这个是修改的方法
    public function up()
    {
    	$m=new Model("producttype");
    	$data["name"]=$_POST["name"];
    	if($m->where("id=%d",$_POST["id"])->save($data)>0)
    	{
    		$this->success("好的成功修改");
    	}
    }
}