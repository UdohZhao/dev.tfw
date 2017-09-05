<?php
namespace apps\home\model;
use core\lib\model;
class propertyConsultant extends model{
  public $table = 'property_consultant';
  /**
   * 读取详细信息
   */
  public function getInfo($id){
    return $this->get($this->table,'*',['id'=>$id]);
  }

}

