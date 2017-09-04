<?php
namespace apps\home\ctrl;
use apps\home\model\newhouse;
use apps\home\model\demoModel;
class newhouseCtrl extends baseCtrl{
  // 构造方法
  public $db;
  public function _auto(){
  $this->db = new newhouse();
  }
  public function demo(){
    $res=array();
    $res['data'] = array(); // 数据
    $data=array();

  $data1 = $this->db->sel2();
  $config =  require 'core/config/admin.php';
  // 户型
  $htype = $config['HTYPE'];
  // 产权类型
  $prtype = $config['PRTYPE'];
    //价格
  $price = $config['PRICE'];
  //面积
  $area = $config['AREA'];
  


  
  $data=array($data1,$price,$htype,$prtype,$area);
  
  
      // 数据赋值给返回结果
      $res['data'] = $data;
      
      echo json_encode($res,true);
      die;
  }
  // 默认首页
  public function newhouse(){
    // Get
      $res = array();
      $res['code'] = 200;  // 200属于正常，400往上都属于异常
      $res['msg'] = ''; // 提示信息
      $res['totalpage'] = 3; // 数据长度
      $res['status'] = 1; // 数据长度
      $res['data'] = array(); // 数据
      // data

     $data = $this->db->sel1('$name','$cname');

   
      // 数据赋值给返回结果
      $res['data'] = $data;
      

      echo json_encode($res,true);
      // echo json_encode($_POST,true);

      die;
  }
  public function qwe(){
    // Get
      $res = array();
      $res['code'] = 200;  // 200属于正常，400往上都属于异常
      $res['msg'] = ''; // 提示信息
      $res['totalpage'] = 3; // 数据长度
      $res['status'] = 1; // 数据长度
      $res['data'] = array(); // 数据
      // data

     $data = $this->db->qwe('$name','$cname');
     var_dump($data);
     die;

   
      // 数据赋值给返回结果
      $res['data'] = $data;
      

      echo json_encode($res,true);
      // echo json_encode($_POST,true);

      die;
  }


}