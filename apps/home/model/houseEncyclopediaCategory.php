<?php
namespace apps\home\model;
use core\lib\model;
class houseEncyclopediaCategory extends model{
	public $table = 'house_encyclopedia_category';# 购房百科类别表
	public $table1 = 'house_encyclopedia_article';# 购房百科文章表 

	public function sel($id){
		$sql = "SELECT * FROM $this->table where status=0 and pid=$id ";

	    return $this->query($sql)->fetchAll(2);
	}
	public function seles($id){
		$sql = " SELECT title,ctime,id FROM $this->table1 where hecid=$id";
		 return $this->query($sql)->fetchAll(2);
	}
	
	public function sel1($id){
		$sql = " SELECT title,content FROM  $this->table1  where id=$id";
		return $this->query($sql)->fetchAll(2);
	}
	
}