<?php
namespace apps\home\model;
use core\lib\model;
class newHouseInfo extends model{
  public $table = 'new_house_info';
  /**
   *  读取详细信息
   */
  public function getInfo($nhcid){
    return $this->get($this->table,'*',['nhcid'=>$nhcid]);
  }

}

