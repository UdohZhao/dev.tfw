<?php
namespace apps\home\model;
use core\lib\model;
class newHouse extends model{
	public $table = 'new_house_catalog';
	public $table1 = 'city';
	public $table2 = 'property_consultant';
	public $table3 = 'used_house_catalog';
	public $table4 = 'tenement_catalog';
	public function sel(){
		$sql = "SELECT slideshow,title,community,show_price,trait,address  FROM $this->table where status=3 order by id desc";
		
		return $this->query($sql)->fetchALL(2);
	}
	public function sel2(){
		$sql = " SELECT id,cname FROM $this->table1 where pid=1";
		return $this->query($sql)->fetchAll(2);
	}
	public function sel1($name,$cname){
		$sql = "SELECT a.id,slideshow,title,community,show_price,trait,address FROM $this->table as a left join $this->table1 as b on a.cid = b.id where  a.status=3 or  b.cname like '%$cname%' or a.show_price like '%$name%' or a.htype like '%$name%' or a.prtype like '%$name%' or a.area like '%$name%' ";
		return $this->query($sql)->fetchAll(2);
	}
	
}	



