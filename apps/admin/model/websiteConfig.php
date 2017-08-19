<?php
namespace apps\admin\model;
use core\lib\model;
class websiteConfig extends model{
  public $table = 'website_config';
  // getInfo
  public function getInfo(){
    return $this->get($this->table, '*', ['id'=>1]);
  }

  // save
  public function save($data){
    $res = $this->update($this->table,$data,array('id'=>1));
    return $res->rowCount();
  }

}

