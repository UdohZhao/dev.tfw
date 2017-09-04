<?php
namespace apps\home\model;
use core\lib\model;
class about extends model{
	public $table = 'about';
	public $table1 = 'loan';

	public function sel(){
		$sql = "SELECT content  FROM $this->table ";
		
		return $this->query($sql)->fetchAll(2);
	}
	public function getInfo($id){
        return $this->get($this->table,'*',['id'=>$id]);
    }
  public function add($data){
    $res = $this->insert($this->table,$data);
    return $this->id();
  }
}	

