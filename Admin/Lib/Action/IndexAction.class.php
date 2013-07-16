<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		$this->display();
    }
    public function check()
    {
    		$m=new Model("user");
    		if ($m->where("username='%s' and userpwd='%s'",$_POST["username"],$_POST["userpwd"])->count()>0)
    		{
    			session_start();
    			$_SESSION["name"]=$_POST["username"];
    			redirect("../Main");
    		}else
    		{
    			header("Content-type: text/html; charset=utf-8");
    			echo"<script language=\"JavaScript\">alert(\"错误\");</script>";
    		}
    }
}