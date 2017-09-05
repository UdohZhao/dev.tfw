<?php
namespace apps\home\model;
use core\lib\model;
class newHouse extends model{
	public $table = 'new_house_catalog';# 新房条目表
	public $table1 = 'city';# 城市表
	public $table2 = 'house_category';# 房类别表
	public $table3 = 'used_house_catalog';# 二手房条目表
	public $table4 = 'tenement_catalog';# 租房条目表
	public $table5 = 'house_encyclopedia_category';# 购房百科类别表
	public $table6 = 'house_encyclopedia_article';# 购房百科文章表
	public function sel(){
		$sql = "SELECT slideshow,title,community,show_price,trait,address  FROM $this->table where status=3 order by id desc";
		
		return $this->query($sql)->fetchALL(2);
	}
	public function sel2(){
		$sql = " SELECT id,cname FROM $this->table1 where pid=1";
		return $this->query($sql)->fetchAll(2);
	}
	public function qwe($id){
		$sql = "SELECT b.id,b.slideshow,b.title,b.community,b.show_price,b.trait,b.address FROM $this->table2 as a left join $this->table as b on a.id=b.hcid left join $this->table3 as c on a.id=c.hcid left join $this->table4 as d on a.id=d.hcid where b.status=3 or a.id=$id order by id desc";
		return $this->query($sql)->fetchAll(2);
	}
	public function sel1($name,$cname){
		$sql = "SELECT a.id,a.slideshow,a.title,a.community,a.show_price,a.trait,a.address FROM $this->table as a left join $this->table1 as b on a.cid = b.id where a.status=3 or b.cname like '%$cname%' or a.show_price like '%$name%' or a.htype like '%$name%' or a.prtype like '%$name%' or a.area like '%$name%'  order by id desc";
		return $this->query($sql)->fetchAll(2);
	}
	public function recommend(){
		$sql = "SELECT slideshow,title,show_price,trait,address FROM $this->table  where status=3 order by id desc";
		return $this->query($sql)->fetchAll(2);

	}
	public function recommend1(){
		$sql = "SELECT slideshow,title,community,show_price,trait FROM $this->table3 where status=3 order by id desc";
		return $this->query($sql)->fetchAll(2);
	}
	public function recommend2(){
		$sql = "SELECT slideshow,title,community,show_rent,remark FROM $this->table4 where status=3 order by id desc";
		return $this->query($sql)->fetchAll(2);
	}
	public function category(){
		$sql = "SELECT id,icon_path,cname FROM $this->table5";
		return $this->query($sql)->fetchAll(2);
	}
	public function article($id){
		$sql = "SELECT a.title,a.content,a.ctime,a.id FROM $this->table6 a inner join $this->table5 b on a.hecid=b.id where b.id='$id' order by id desc";
		return $this->query($sql)->fetchAll(2);
	}

}	



