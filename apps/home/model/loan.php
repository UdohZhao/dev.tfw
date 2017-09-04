<?php
namespace apps\admin\model;
use core\lib\model;
class loan extends model{
	public $table = 'loan';

   public function getInfo($id){
        return $this->get($this->table,'*',['id'=>$id]);
    }
  public function add($data){
    $res = $this->insert($this->table,$data);
    return $this->id();
  }
}