<?php	
class CookieAction extends Action {
	public function index()
	{

		$id=$_GET["id"];
		if (isset($_COOKIE["cookie[$id]"]))
		{
			
		}else
		{
			$this->setcookie($id);
		}
	}
	public function setcookie($id)
	{
		$m=new Model("shop");
		setcookie("cookie[$id]","$id");
		$temp=$m->where("id=%d",$id)->find();
		$data["check"]=$temp["check"]+1;
		$m->where("id=%d",$id)->save($data);
	}
	public function showcookie()
	{
		$m=new Model("shop");
		$i=0;
		foreach ($_COOKIE["cookie"] as $k=>$v)
		{
			if ($i<10){
				$all=$m->where("id=%d",$v)->find();
				echo '<div style="width:99%;" product="82" class="itemsWrap "> <div class="item">  <table width="100%" cellspacing="0" cellpadding="0" border="0"> <tbody><tr> <td><div style="overflow:hidden;text-align:center;vertical-align: middle;width:66px;height:66px;" class="goodsImg"><a title="'.$all["title"].'" target="_blank" href="/Article/'.$all["id"].'.html"><img width="66" height="66" title="'.$all["title"].'" src="/Public/Uploads/'.$all["image"].'"></a></div></td> <td class="goodsDesc">  <h6><a title="'.$all["title"].'" target="_blank" href="/Article/'.$all["id"].'html">'.$all["title"].'</a></h6>  <ul>  </ul>  </td> </tr> </tbody></table>  </div> </div>';
			}
			$i++;
		}

	}
	
	
}
?>