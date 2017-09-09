<?php
namespace apps\home\model;
use core\lib\model;
class tenementInfo extends model{
  public $table = 'tenement_info';
  /**
   * 读取详细信息
   */
  public function getInfo($tcid){
    return $this->get($this->table,'*',['tcid'=>$tcid]);
  }

}

