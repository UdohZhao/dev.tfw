<?php
namespace apps\home\ctrl;
use core\lib\conf;
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
        // 读取北京主键id
        $pid = $this->cdb->getId('北京');
        // 读取北京区域
        $data['cityData'] = $this->cdb->getCorrelation($pid);
        // 追加数组
        array_unshift($data['cityData'], array('cname'=>'不限'));
        // 读取价格
        $data['priceData'] = conf::get('PRICE','admin');
        // 读取户型
        $data['htypeData'] = conf::get('HTYPE','admin');
        // 追加数组
        array_unshift($data['htypeData'], '不限');
        // 读取产权类型
        $data['prtypeData'] = conf::get('PRTYPE','admin');
        // 追加数组
        array_unshift($data['prtypeData'], '不限');
        // 读取面积
        $data['areaData'] = conf::get('AREA','admin');
        if ($this->hctype == 1) {
           // 读取新房筛选条目
          $data['nhfiltrateData']['filtrate'] = conf::get('NHFILTRATE','admin');
          $data['nhfiltrateData']['active'] = conf::get('NHFILTRATEACTIVE','admin');
          // 读取新房类别房屋数据
          $data['hData'] = $this->nhcdb->getCorrelation($this->hcid);
          if ($data['hData']) {
            foreach ($data['hData'] AS $k => $v) {
              $data['hData'][$k]['slideshow'] = unserialize($v['slideshow']);
              $data['hData'][$k]['slideshow'] = $data['hData'][$k]['slideshow'][0];
              $data['hData'][$k]['trait'] = explode(',', commaEn($v['trait']));
              // 获取城市名称
              $data['hData'][$k]['cid'] = $this->cdb->getCname($v['cid']);
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