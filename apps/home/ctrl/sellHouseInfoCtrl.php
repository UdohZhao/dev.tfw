<?php
namespace apps\home\ctrl;
use core\lib\conf;
use apps\home\model\sellHouseInfo;
class sellHouseInfoCtrl extends baseCtrl{
  public $db;
  // 构造方法
  public function _auto(){
    $this->db = new sellHouseInfo();
  }

  /**
   * 卖房数据
   */
  public function add(){
    // Get
    if (IS_GET === true) {
      // 读取总记录数
      $data['totalData'] = $this->db->totalData();
      // 读取物业类型
      $data['ptype'] = conf::get('PTYPE','admin');
      // 读取房屋朝向
      $data['orientation'] = conf::get('ORIENTATION','admin');
      echo J(R(200,'受影响的操作 :)',$data));
      die;
    }
    // Post
    if (IS_POST === true) {
      // data
      $data = $this->getData();
      if ($this->db->add($data)){
         echo J(R(200,'受影响的操作 :)',true));
         die;
      } else {
         echo J(R(400,'请尝试关闭小程序后重新进入 :(',false));
         die;
      }
    }


  }

  /**
   * 初始化数据
   */
  private function getData(){
    $data = array();
    $data['community'] = isset($_POST['community']) ? htmlspecialchars($_POST['community']) : '';
    $data['area'] = isset($_POST['area']) ? htmlspecialchars($_POST['area']) : '';
    $data['house_type'] = isset($_POST['house_type']) ? htmlspecialchars($_POST['house_type']) : '';
    $data['selling_price'] = isset($_POST['selling_price']) ? htmlspecialchars($_POST['selling_price']) : '';
    $data['htype'] = isset($_POST['htype']) ? htmlspecialchars($_POST['htype']) : 0;
    // 读取物业类型
    $ptype = conf::get('PTYPE','admin');
    $data['htype'] = $ptype[$data['htype']];
    $data['orientation'] = isset($_POST['orientation']) ? htmlspecialchars($_POST['orientation']) : 0;
    // 读取房屋朝向
    $orientation = conf::get('ORIENTATION','admin');
    $data['orientation'] = $orientation[$data['orientation']];
    // 0>无 1>学区房 2>特价房
    $sdhspr = isset($_POST['sdhspr']) ? htmlspecialchars($_POST['sdhspr']) : 0;
    if ($sdhspr == 0) {
      $data['sdh'] = 1;
      $data['spr'] = 1;
    } else if ($sdhspr == 1) {
      $data['sdh'] = 0;
      $data['spr'] = 1;
    } else if ($sdhspr == 2) {
      $data['sdh'] = 1;
      $data['spr'] = 0;
    }
    $data['house_img'] = isset($_POST['files']) ? htmlspecialchars($_POST['files']) : '';
    $data['himg'] = '';
    $data['introduce'] = isset($_POST['introduce']) ? htmlspecialchars($_POST['introduce']) : '';
    $data['cname'] = isset($_POST['cname']) ? htmlspecialchars($_POST['cname']) : '';
    $data['phone'] = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $data['ctime'] = time();
    $data['status'] = 0;
    return $data;
  }

}