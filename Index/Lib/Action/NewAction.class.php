<?php
class NewAction extends Action {
	public function index()
	{
		//这里加载所有的分类
		$m=new Model("producttype");
		$this->assign("all",$m->select());	
		//这里是根据ID来返回新闻类型
		$mtype=new Model("newtype");
		$this->assign("newtype",$mtype->where("id=%d",$_GET["id"])->find());
		$User = M('new'); // 实例化User对象
		import('ORG.Util.Page');// 导入分页类
		$count      = $User->where("newtype=%d",$_GET["id"])->count();// 查询满足要求的总记录数
		$Page       = new Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $User->where("newtype=%d",$_GET["id"])->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
	}
	public function showbody()
	{
		$m = new Model ( "producttype" );
		$this->assign ( "all", $m->select () );
		$m=new Model("new");
		$this->assign("newall",$m->where("id=%d",$_GET[id])->find());
		$this->display();
	}
}