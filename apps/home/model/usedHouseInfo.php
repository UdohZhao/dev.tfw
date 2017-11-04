<?php
namespace apps\home\model;
use core\lib\model;
class usedHouseInfo extends model{
  public $table = 'used_house_info';
  /**
   *  读取详细信息
   */
  public function getInfo($uhcid){
    return $this->get($this->table,'*',['uhcid'=>$uhcid]);
  }

}

