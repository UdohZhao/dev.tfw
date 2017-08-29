<?php
namespace apps\home\model;
use core\lib\model;
class about extends model{
	public $table = 'about';


	public function sel(){
		$sql = "SELECT content  FROM $this->table  ";
		
		return $this->query($sql)->fetchAll(2);
	}
}	

