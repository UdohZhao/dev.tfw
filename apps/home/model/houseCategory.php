<?php
namespace apps\home\model;
use core\lib\model;
class houseCategory extends model{
	public $table = 'house_category';

public function sel(){
	$sql = "SELECT cname,id FROM $this->table where id<4";
	return $this->query($sql)->fetchALL(2);
}


public function sel3(){
	$sql = "SELECT cname,id FROM $this->table where id=4";
	return $this->query($sql)->fetchALL(2);
}
}