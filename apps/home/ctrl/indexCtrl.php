<?php
namespace apps\home\ctrl;
use apps\home\model\city;
use apps\home\model\houseCategory;
use apps\home\model\newHouseCatalog;
class indexCtrl extends baseCtrl{
  public $cdb;
  public $hcdb;
  public $nhcdb;
  // 构造方法
  public function _auto(){
    $this->cdb = new city();
    $this->hcdb = new houseCategory();
    $this->nhcdb = new newHouseCatalog();
  }

  /**
   * 小程序首页数据
   */
  public function index(){
    // Get
    if (IS_GET === true) {
      // 读取顶级城市
      $data['cityData'] = $this->cdb->getTop();
      // 读取房屋类别
      $data['hcData'] = $this->hcdb->getAll();
      // 最新新房房源
      $data['nhcData'] = $this->nhcdb->getNewest();
      if ($data['nhcData']) {
        foreach ($data['nhcData'] AS $k => $v) {
          $data['nhcData'][$k]['slideshow'] = unserialize($v['slideshow']);
          if (is_array($data['nhcData'][$k]['slideshow']))
          {
            $data['nhcData'][$k]['slideshow'] = $data['nhcData'][$k]['slideshow'][0];
          }
          $data['nhcData'][$k]['trait'] = explode(',', commaEn($v['trait']));
          // 获取城市名称
          $data['nhcData'][$k]['cid'] = $this->cdb->getCname($v['cid']);
        }
      }
      ###
      echo J(R(200,'受影响的操作 :)',$data));
      die;

    }

  }


}

