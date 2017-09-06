<?php
namespace apps\home\model;
use core\lib\model;
class newHouseMain extends model{
  public $table = 'new_house_main';
  /**
   * 读取相关数据
   */
  public function getCorrelation($nhcid){
    return $this->select($this->table,'*',['nhcid'=>$nhcid]);
  }

  /**
   * 读取详细信息
   */
  public function getInfo($id){
    return $this->get($this->table,'*',['id'=>$id]);
  }

}

