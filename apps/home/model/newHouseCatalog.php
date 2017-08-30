<?php
namespace apps\home\model;
use core\lib\model;
class newHouseCatalog extends model{
	public $table = 'new_house_catalog';
	public $table1 = 'city';
	public function sel(){
		$sql = "SELECT slideshow,title,community,show_price,trait,address  FROM $this->table where status=3 ";
		
		return $this->query($sql)->fetchALL(2);
	}
	public function sel1($name){
		$sql = "SELECT cname,slideshow,title,community,show_price,trait,address FROM $this->table as a left join $this->table1 as b on a.cid = b.id where b.cname like %$name% and a.show_price like %35000% and a.htype like %$name% and a.prtype like %$name% and a.area like %$name% ";
		return $this->query($sql)->fetchAll();
	}
	
}	

