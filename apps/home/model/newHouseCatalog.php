<?php
namespace apps\home\model;
use core\lib\model;
class newHouseCatalog extends model{
	public $table = 'new_house_catalog';


	public function sel(){
		$sql = "SELECT slideshow,title,community,show_price,trait,address  FROM $this->table where status=3 ";
		
		return $this->query($sql)->fetchAll(2);
	}
}	

