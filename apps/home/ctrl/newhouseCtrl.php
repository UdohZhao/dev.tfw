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
        // 筛选条件
        $filtrate = '';
        if (IS_POST === true) {
          $districtType = $_POST['districtType'];
          $districtIndex = $_POST['districtIndex'];
          $cid = $_POST['cid'];
          $priceType = $_POST['priceType'];
          $priceIndex = $_POST['priceIndex'];
          $startPrice = $_POST['startPrice'];
          $endPrice = $_POST['endPrice'];
          $htypeType = $_POST['htypeType'];
          $htypeIndex = $_POST['htypeIndex'];
          $htypeVal = $_POST['htypeVal'];
          $prtypeType = $_POST['prtypeType'];
          $prtypeIndex = bcsub($_POST['prtypeIndex'], 1, 0);
          $prtypeVal = $_POST['prtypeVal'];
          $areaType = $_POST['areaType'];
          $areaIndex = $_POST['areaIndex'];
          $startArea = $_POST['startArea'];
          $endArea = $_POST['endArea'];
          // 0>区域，1>价格，2>户型，3>产权类型，4>面积
          if ($districtType != 'undefined' && $districtIndex != 0 && $priceType != 'undefined' && $priceIndex != 0 && $htypeType != 'undefined' && $htypeIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1' && $areaType != 'undefined' && $areaIndex != 0) {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    (price BETWEEN '$startPrice' AND '$endPrice')
                AND
                    htype LIKE '%$htypeVal%'
                AND
                    prtype = '$prtypeIndex'
                AND
                    (area BETWEEN '$startArea' AND '$endArea')
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $priceType != 'undefined' && $priceIndex != 0 && $htypeType != 'undefined' && $htypeIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1') {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    (price BETWEEN '$startPrice' AND '$endPrice')
                AND
                    htype LIKE '%$htypeVal%'
                AND
                    prtype = '$prtypeIndex'
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $priceType != 'undefined' && $priceIndex != 0 && $htypeType != 'undefined' && $htypeIndex != 0 && $areaType != 'undefined' && $areaIndex != 0) {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    (price BETWEEN '$startPrice' AND '$endPrice')
                AND
                    htype LIKE '%$htypeVal%'
                AND
                    (area BETWEEN '$startArea' AND '$endArea')
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $priceType != 'undefined' && $priceIndex != 0 && $htypeType != 'undefined' && $htypeIndex != 0) {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    (price BETWEEN '$startPrice' AND '$endPrice')
                AND
                    htype LIKE '%$htypeVal%'
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $priceType != 'undefined' && $priceIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1' && $areaType != 'undefined' && $areaIndex != 0) {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    (price BETWEEN '$startPrice' AND '$endPrice')
                AND
                    prtype = '$prtypeIndex'
                AND
                    (area BETWEEN '$startArea' AND '$endArea')
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $priceType != 'undefined' && $priceIndex != 0 && $areaType != 'undefined' && $areaIndex != 0) {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    (price BETWEEN '$startPrice' AND '$endPrice')
                AND
                    (area BETWEEN '$startArea' AND '$endArea')
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $priceType != 'undefined' && $priceIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1') {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    (price BETWEEN '$startPrice' AND '$endPrice')
                AND
                    prtype = '$prtypeIndex'
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $htypeType != 'undefined' && $htypeIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1' && $areaType != 'undefined' && $areaIndex != 0) {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    htype LIKE '%$htypeVal%'
                AND
                    prtype = '$prtypeIndex'
                AND
                    (area BETWEEN '$startArea' AND '$endArea')
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $htypeType != 'undefined' && $htypeIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1') {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    htype LIKE '%$htypeVal%'
                AND
                    prtype = '$prtypeIndex'
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1' && $areaType != 'undefined' && $areaIndex != 0) {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    prtype = '$prtypeIndex'
                AND
                    (area BETWEEN '$startArea' AND '$endArea')
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $priceType != 'undefined' && $priceIndex != 0) {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    (price BETWEEN '$startPrice' AND '$endPrice')
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $htypeType != 'undefined' && $htypeIndex != 0) {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    htype LIKE '%$htypeVal%'
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1') {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    prtype = '$prtypeIndex'
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $areaType != 'undefined' && $areaIndex != 0) {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    (area BETWEEN '$startArea' AND '$endArea')
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0) {
            $filtrate = "
                AND
                    cid = '$cid'
            ";
          } else if ($priceType != 'undefined' && $priceIndex != 0 && $htypeType != 'undefined' && $htypeIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1' && $areaType != 'undefined' && $areaIndex != 0) {
            $filtrate = "
                AND
                    (price BETWEEN '$startPrice' AND '$endPrice')
                AND
                    htype LIKE '%$htypeVal%'
                AND
                    prtype = '$prtypeIndex'
                AND
                    (area BETWEEN '$startArea' AND '$endArea')
            ";
          } else if ($priceType != 'undefined' && $priceIndex != 0 && $htypeType != 'undefined' && $htypeIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1') {
            $filtrate = "
                AND
                    (price BETWEEN '$startPrice' AND '$endPrice')
                AND
                    htype LIKE '%$htypeVal%'
                AND
                    prtype = '$prtypeIndex'
            ";
          } else if ($priceType != 'undefined' && $priceIndex != 0 && $htypeType != 'undefined' && $htypeIndex != 0) {
            $filtrate = "
                AND
                    (price BETWEEN '$startPrice' AND '$endPrice')
                AND
                    htype LIKE '%$htypeVal%'
            ";
          } else if ($priceType != 'undefined' && $priceIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1' && $areaType != 'undefined' && $areaIndex != 0) {
            $filtrate = "
                AND
                    (price BETWEEN '$startPrice' AND '$endPrice')
                AND
                    prtype = '$prtypeIndex'
                AND
                    (area BETWEEN '$startArea' AND '$endArea')
            ";
          } else if ($priceType != 'undefined' && $priceIndex != 0 && $areaType != 'undefined' && $areaIndex != 0) {
            $filtrate = "
                AND
                    (price BETWEEN '$startPrice' AND '$endPrice')
                AND
                    (area BETWEEN '$startArea' AND '$endArea')
            ";
          } else if ($priceType != 'undefined' && $priceIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1') {
            $filtrate = "
                AND
                    (price BETWEEN '$startPrice' AND '$endPrice')
                AND
                    prtype = '$prtypeIndex'
            ";
          } else if ($priceType != 'undefined' && $priceIndex != 0) {
            $filtrate = "
                AND
                    (price BETWEEN '$startPrice' AND '$endPrice')
            ";
          } else if ($htypeType != 'undefined' && $htypeIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1' && $areaType != 'undefined' && $areaIndex != 0) {
            $filtrate = "
                AND
                    htype LIKE '%$htypeVal%'
                AND
                    prtype = '$prtypeIndex'
                AND
                    (area BETWEEN '$startArea' AND '$endArea')
            ";
          } else if ($htypeType != 'undefined' && $htypeIndex != 0 && $areaType != 'undefined' && $areaIndex != 0) {
            $filtrate = "
                AND
                    htype LIKE '%$htypeVal%'
                AND
                    (area BETWEEN '$startArea' AND '$endArea')
            ";
          } else if ($htypeType != 'undefined' && $htypeIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1') {
            $filtrate = "
                AND
                    htype LIKE '%$htypeVal%'
                AND
                    prtype = '$prtypeIndex'
            ";
          } else if ($htypeType != 'undefined' && $htypeIndex != 0) {
            $filtrate = "
                AND
                    htype LIKE '%$htypeVal%'
            ";
          } else if ($prtypeType != 'undefined' && $prtypeIndex != '-1' && $areaType != 'undefined' && $areaIndex != 0) {
            $filtrate = "
                AND
                    prtype = '$prtypeIndex'
                AND
                    (area BETWEEN '$startArea' AND '$endArea')
            ";
          } else if ($prtypeType != 'undefined' && $prtypeIndex != '-1') {
            $filtrate = "
                AND
                    prtype = '$prtypeIndex'
            ";
          } else if ($areaType != 'undefined' && $areaIndex != 0) {
            $filtrate = "
                AND
                    (area BETWEEN '$startArea' AND '$endArea')
            ";
          }
        }

        $data['filtrate'] = $filtrate;

        // 读取新房类别房屋数据
        $data['hData'] = $this->nhcdb->getCorrelation($this->hcid,$filtrate);
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