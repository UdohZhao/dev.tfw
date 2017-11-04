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
      // 读取产权类型
      $data['prtype'] = conf::get('PRTYPE','admin');
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
    $data['prtype'] = isset($_POST['prtype']) ? htmlspecialchars($_POST['prtype']) : 0;
    // 读取物业类型
    $prtype = conf::get('PRTYPE','admin');
    $data['prtype'] = $prtype[$data['prtype']];
    $data['orientation'] = isset($_POST['orientation']) ? htmlspecialchars($_POST['orientation']) : 0;
    // 读取房屋朝向
    $orientation = conf::get('ORIENTATION','admin');
    $data['orientation'] = $orientation[$data['orientation']];
    // 房屋特点
    $data['characteristic'] = isset($_POST['characteristic']) ? htmlspecialchars($_POST['characteristic']) : '';
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