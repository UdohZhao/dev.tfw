<?php
namespace apps\home\ctrl;
use apps\home\model\about;
use apps\home\model\demoModel;
class aboutCtrl extends baseCtrl{
  public $db;
  // 构造方法
  public function _auto(){
 $this->db = new about();
  }

  // demo 
  
  public function index(){
    // Get
      $res = array();
      $res['code'] = 200;  // 200属于正常，400往上都属于异常
      $res['msg'] = ''; // 提示信息
      $res['data'] = array(); // 数据
      // data
      $data = $this->db->sel();
      

    // 数据赋值给返回结果
    $res['data'] = $data;
      echo json_encode($res,true);
      die;
  }

  

}


