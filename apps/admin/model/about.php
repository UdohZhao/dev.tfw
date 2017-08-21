<?php
namespace apps\admin\model;
use core\lib\model;
class about extends model{
	public $table = 'about';
	//sel
	 public function sel(){
    // sql
    $sql = " SELECT * FROM $this->table ";
    $data = $this->query($sql)->fetchAll(2);
    return $data;   
  }

  public function add($data){
    $res = $this->insert($this->table,$data);
    return $this->id();
  }
  public function del($id){
  	$res = $this->delete($this->table,['id'=>$id]);
  	return $res->rowCount();
  }
  public function ePass($id,$password){
    $res = $this->update($this->table,['content'=>$content],['id'=>$id]);
    return $res->rowCount();
  }
}