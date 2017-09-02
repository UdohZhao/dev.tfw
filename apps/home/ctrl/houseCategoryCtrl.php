<?php
namespace apps\home\ctrl;
use apps\home\model\houseCategory;
class houseCategoryCtrl extends baseCtrl{
  public $db;
  public function _auto(){
  $this->db = new houseCategory();
  }
  	public function category(){
  	  $res = array();
      $res['code'] = 200;  // 200属于正常，400往上都属于异常
      $res['msg'] = ''; // 提示信息
      $res['data'] = array(); // 数据

      $data = $this->db->sel();
            // 数据赋值给返回结果
      $res['data'] = $data;
      echo json_encode($res,true);
      // echo json_encode($_POST,true);
      die;
  	}
  	
 
  	public function category3(){
  	  $res = array();
      $res['code'] = 200;  // 200属于正常，400往上都属于异常
      $res['msg'] = ''; // 提示信息
      $res['data'] = array(); // 数据

      $data = $this->db->sel3();
            // 数据赋值给返回结果
      $res['data'] = $data;
      echo json_encode($res,true);
      // echo json_encode($_POST,true);
      die;
  	}
}