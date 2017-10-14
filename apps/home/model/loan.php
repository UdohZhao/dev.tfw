<?php
namespace apps\home\model;
use core\lib\model;
class loan extends model{
	public $table = 'loan';

  public function getInfo($id){
    return $this->get($this->table,'*',['id'=>$id]);
  }

  /**
   * 写入数据表
   */
  public function add($data){
    $this->insert($this->table,$data);
    return $this->id();
  }


}