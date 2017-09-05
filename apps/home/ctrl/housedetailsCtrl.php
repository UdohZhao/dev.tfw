<?php
namespace apps\home\ctrl;
use core\lib\conf;
use apps\home\model\city;
use apps\home\model\newHouseCatalog;
use apps\home\model\newHouseInfo;
use apps\home\model\newHouseMain;
use apps\home\model\propertyConsultant;
class housedetailsCtrl extends baseCtrl{
  public $cdb;
  public $nhcdb;
  public $nhidb;
  public $nhmdb;
  public $pcdb;
  public $id;
  // 构造方法
  public function _auto(){
    $this->cdb = new city();
    $this->nhcdb = new newHouseCatalog();
    $this->nhidb = new newHouseInfo();
    $this->nhmdb = new newHouseMain();
    $this->pcdb = new propertyConsultant();
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
  }

  /**
   * 读取新房房屋详细
   */
  public function getNhdetail(){
    // Get
    if (IS_GET === true) {
      // 读取新房条目信息
      $data = $this->nhcdb->getInfo($this->id);
      if ($data) {
        $data['slideshow'] = unserialize($data['slideshow']);
        $data['trait'] = explode(',', commaEn($data['trait']));
        // 房屋类型
        $house_type = conf::get('HOUSE_TYPE','admin');
        $data['house_type'] = $house_type[$data['house_type']];
        // 读取新房详细信息
        $data['nhiData'] = $this->nhidb->getInfo($this->id);
        $data['nhiData']['k'] = unserialize($data['nhiData']['k']);
        $data['nhiData']['v'] = unserialize($data['nhiData']['v']);
        // 读取置业顾问信息
        $data['pcData'] = $this->pcdb->getInfo($data['nhiData']['pcid']);
        // 读取主力户型
        $data['nhmdb'] = $this->nhmdb->getCorrelation($this->id);
        ###
        echo J(R(200,'受影响的操作 :)',$data));
        die;
      } else {
        echo J(R(400,'加载数据异常 :(',false));
        die;
      }

    }

  }

}