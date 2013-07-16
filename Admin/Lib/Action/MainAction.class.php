<?php
// 本类由系统自动生成，仅供测试用途
class MainAction extends Action {
    public function index(){
    	if($_SESSION["name"]!=null)
    	{
    		$this->display();
    	}else {
    		redirect("Index");
    	}
		
    }
}