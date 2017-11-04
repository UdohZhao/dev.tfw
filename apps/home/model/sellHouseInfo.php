<?php
namespace apps\home\model;
use core\lib\model;
class sellHouseInfo extends model{
  public $table = 'sell_house_info';
  /**
   *  读取总记录数
   */
  public function totalData(){
    return $this->count($this->table);
  }

  /**
   * 写入数据表
   */
  public function add($data){
    $this->insert($this->table,$data);
    return $this->id();
  }

}

