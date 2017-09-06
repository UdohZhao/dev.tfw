<?php
namespace apps\home\ctrl;
use core\lib\conf;
use apps\home\model\newHouseMain;
class hxdetailsCtrl extends baseCtrl{
  public $nhmdb;
  public $id;
  // 构造方法
  public function _auto(){
    $this->nhmdb = new newHouseMain();
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
  }

  /**
   * 详细信息
   */
  public function index(){
    // Get
    if (IS_GET === true) {
      // 读取主力户型详细信息
      $data = $this->nhmdb->getInfo($this->id);
      if ($data) {
        $data['trait'] = explode(',', commaEn($data['trait']));
        // 销售类型？0>主推，1>在售，2>售完
        if ($data['sell_type'] == 0) {
          $data['sell_type'] = '主推';
        }
        if ($data['sell_type'] == 1) {
          $data['sell_type'] = '在售';
        }
        if ($data['sell_type'] == 2) {
          $data['sell_type'] = '售完';
        }
        echo J(R(200,'受影响的操作 :)',$data));
        die;
      } else {
        echo J(R(400,'获取数据异常 :(',false));
        die;
      }
    }

  }

}