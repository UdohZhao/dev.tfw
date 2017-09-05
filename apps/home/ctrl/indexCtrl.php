<?php
namespace apps\home\ctrl;
use apps\home\model\newHouseCatalog;
class indexCtrl extends baseCtrl{
  public $db;
  // 构造方法
  public function _auto(){
    $this->db = new newHouseCatalog();
  }

  public function index(){

    // 数据库操作


    echo J(R(200,'提示信息',$data));
    die;


  }


}

