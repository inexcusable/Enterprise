<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	//这里加载所有的分类
    	$m=new Model("producttype");
    	$this->assign("all",$m->select());
		$this->display();
    }
    ///这个是根据二类ID来返回所有的三类的技术文章哈
    public function getsome()
    {
    	$m=new Model("producttype");
    	$this->assign("all",$m->select());
    	$ms=new Model("shop");
    	$mn=new Model("new");
    	$temp=$m->where("sid=%d",$_GET["id"])->select(); 
    	for ($i=0;$i<count($temp);$i++)
    	{
    		$temp1=$m->where("cd_producttype.id=%d",$temp[$i]["id"])->join("join cd_shop on cd_shop.producttype=cd_producttype.id")->field("cd_shop.id")->select();
    		for ($j=0;$j<count($temp1);$j++)
    		{
    			$hhh=$mn->where("shopid=%d",$temp1[$j]["id"])->find();
    			$temp[$i]["bbb"][$j]=$hhh;
    		}
    	}
    	$this->assign("allp",$temp);
    	$this->display();
    }
}