<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    //这里加载所有的分类
    $m=new Model("producttype");
    $this->assign("all",$m->select());
    //这里是加载SID为1的分类哈
    $this->assign("all1",$m->where("sid=1")->select());
    //这里是加载SID为2的分类哈
    $this->assign("all2",$m->where("sid=2")->select());
    //这里是加载SID为3的分类哈
    $this->assign("all3",$m->where("sid=3")->select());
    //这里是加载SID为4的分类哈
    $this->assign("all4",$m->where("sid=4")->select());
    //这列返回sid为5的分类哈
    $this->assign("all5",$m->where("sid=5")->select());
    
    
    //这里返回推荐产品
    $mshop=new Model("shop");
    $this->assign("re",$mshop->where("status=1")->order('id desc')->limit(4)->select());
    //这里返回最新上架的产品
    $this->assign("Added",$mshop->where("status=2")->order('id desc')->limit(4)->select());
    //这列返回热卖产品
    $this->assign("Hot",$mshop->where("status=3")->order('id desc')->limit(4)->select());
    //这里返回促销产品
    $this->assign("Pro",$mshop->where("status=4")->order('id desc')->limit(4)->select());    
    //这里是返回猜您喜欢的
    $this->assign("like",$mshop->query("select  *  from  cd_shop order by rand() limit 4"));
    //这里是返回点击量最高的来排序的哈
    $this->assign("click",$mshop->order("click desc")->limit(6)->select());
    
    
    
    //这里返回的是手拉葫芦
    $this->assign("shola",$mshop->where("producttype=6")->limit(8)->select());
    //这里是手板葫芦
    $this->assign("shoban",$mshop->where("producttype=7")->limit(8)->select());
    //这里既是电动葫芦了哈
    $this->assign("diand",$mshop->where("producttype=8")->limit(8)->select());
    //这里是返回手摇绞盘
    $this->assign("shouya",$mshop->where("producttype=9")->limit(8)->select());
    //这里是返回悬臂吊
    $this->assign("xuanbi",$mshop->where("producttype=11")->limit(8)->select());
    //这里返回搬运工具
    $this->assign("banyun",$mshop->where("producttype=12")->limit(8)->select());
    //这里返回吊装索具 
    $this->assign("dzsj",$mshop->where("producttype=13")->limit(8)->select());
    //这里返回的是钢板吊钳 
    $this->assign("gbdq",$mshop->where("producttype=14")->limit(8)->select());
    //永磁吸盘 
    $this->assign("ycxp",$mshop->where("producttype=15")->limit(8)->select());
    //弹簧平衡器 
    $this->assign("thphq",$mshop->where("producttype=16")->limit(8)->select());
    //千斤顶 
    $this->assign("qjd",$mshop->where("producttype=17")->limit(8)->select());
    //液压油缸 
    $this->assign("yyyg",$mshop->where("producttype=18")->limit(8)->select());
    //液压泵浦 
    $this->assign("yybp",$mshop->where("producttype=19")->limit(8)->select());
    //液压拉马 
    $this->assign("yylm",$mshop->where("producttype=20")->limit(8)->select());
    //液压顶升配件 
    $this->assign("yadsp",$mshop->where("producttype=21")->limit(8)->select());
    
    
    //单轨小车 
    $this->assign("dzxc",$mshop->where("producttype=22")->limit(8)->select());
   //工业遥控器 
    $this->assign("gyykq",$mshop->where("producttype=23")->limit(8)->select());
    //起重滑轮 
    $this->assign("hzhl",$mshop->where("producttype=24")->limit(8)->select());
    //起重吊索具 
    $this->assign("qzdsj",$mshop->where("producttype=25")->limit(8)->select());
    //起重辅助设备 
    $this->assign("qzfzsb",$mshop->where("producttype=26")->limit(8)->select());
    
    //起重吊钩 
    $this->assign("qzdq",$mshop->where("producttype=27")->limit(8)->select());
    //起重吊环/吊点 
    $this->assign("qzdh",$mshop->where("producttype=28")->limit(8)->select());
    //链条调节器 
    $this->assign("lttjq",$mshop->where("producttype=29")->limit(8)->select());
    //起重卸扣 
    $this->assign("qzxk",$mshop->where("producttype=30")->limit(8)->select());
    //吊索具连接件 
    $this->assign("dsjlj",$mshop->where("producttype=31")->limit(8)->select());
    $this->display("index");	
    }
}