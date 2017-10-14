<?php
namespace apps\home\model;
use core\lib\model;
class houseEncyclopediaCategory extends model{
	public $table = 'house_encyclopedia_category';# 购房百科类别表
	public $table1 = 'house_encyclopedia_article';# 购房百科文章表

	public function sel($pid){
		$sql = "SELECT * FROM $this->table where pid = '$pid' and status='0' ORDER BY sort ASC";

	    return $this->query($sql)->fetchAll(2);
	}
	public function seles($id){
		$sql = " SELECT title,ctime,id FROM $this->table1 where hecid=$id ORDER BY ctime DESC";
		 return $this->query($sql)->fetchAll(2);
	}

	public function sel1($id){
		$sql = " SELECT title,content FROM  $this->table1  where id=$id";
		return $this->query($sql)->fetchAll(2);
	}

}