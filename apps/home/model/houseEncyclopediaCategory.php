<?php
namespace apps\home\model;
use core\lib\model;
class houseEncyclopediaCategory extends model{
	public $table = 'house_encyclopedia_category';
	public $table1 = 'house_encyclopedia_article';

	public function sel($id){
		$sql = "SELECT * FROM $this->table where status=0 and pid=$id";

	    return $this->query($sql)->fetchAll(2);
	}
	public function sel1($id){
		$sql = " SELECT a.cname,b.title,b.content FROM $this->table as a left join $this->table1 as b on a.id= b.hecid where  b.hecid=$id";
		return $this->query($sql)->fetchAll(2);
	}
	
}