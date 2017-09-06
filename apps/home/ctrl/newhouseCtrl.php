<?php
namespace apps\home\ctrl;
use apps\home\model\city;
use apps\home\model\newHouseCatalog;
class newhouseCtrl extends baseCtrl{
  public $cdb;
  public $nhcdb;
  public $hcid;
  public $hctype;
  // 构造方法
  public function _auto(){
    $this->cdb = new city();
    $this->nhcdb = new newHouseCatalog();
    $this->hcid = isset($_GET['hcid']) ? intval($_GET['hcid']) : 0;
    $this->hctype = isset($_GET['hctype']) ? intval($_GET['hctype']) : 0;
  }

  /**
   * 房屋类别数据
   */
  public function index(){
    // Get
    if (IS_GET === true) {
      // 房屋类别id，房屋类型
      if ($this->hcid && $this->hctype) {
        if ($this->hctype == 1) {
          // 读取新房类别房屋数据
          $data = $this->nhcdb->getCorrelation($this->hcid);
          if ($data) {
            foreach ($data AS $k => $v) {
              $data[$k]['slideshow'] = unserialize($v['slideshow']);
              $data[$k]['slideshow'] = $data[$k]['slideshow'][0];
              $data[$k]['trait'] = explode(',', commaEn($v['trait']));
              // 获取城市名称
              $data[$k]['cid'] = $this->cdb->getCname($v['cid']);
            }
          }
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