<?php
namespace apps\admin\model;
use core\lib\model;
class loan extends model{
	public $table = 'loan';

   public function getInfo($id){
        return $this->get($this->table,'*',['id'=>$id]);
    }
  public function sel(){
  	$sql = " SELECT * FROM $this->table " ;
  	$data = $this->query($sql)->fetchAll(2);
  	return $data; 
  }

  public function add($data){
    $res = $this->insert($this->table,$data);
    return $this->id();
  }
  public function del_info($id){
    $res = $this->delete($this->table,['id'=>$id]);
  	return $res->rowCount();
  }
  public function save($id,$data){
        $res = $this->update($this->table,$data,['id'=>$id]);
        return $res->rowCount();
    }
}