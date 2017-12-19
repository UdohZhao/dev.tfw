<?php
namespace apps\home\ctrl;
use core\lib\conf;
use apps\home\model\city;
use apps\home\model\newHouseCatalog;
use apps\home\model\usedHouseCatalog;
use apps\home\model\tenementCatalog;
class newhouseCtrl extends baseCtrl{
  public $cdb;
  public $nhcdb;
  public $uhcdb;
  public $tcdb;
  public $hcid;
  public $hctype;
  public $prtypeFlag = '';
  // 构造方法
  public function _auto(){
    $this->cdb = new city();
    $this->nhcdb = new newHouseCatalog();
    $this->uhcdb = new usedHouseCatalog();
    $this->tcdb = new tenementCatalog();
    $this->hcid = isset($_GET['hcid']) ? intval($_GET['hcid']) : 0;
    $this->hctype = isset($_GET['hctype']) ? intval($_GET['hctype']) : 0;
    // 4>法拍房，5>回迁房
    if ($this->hctype == 4)
    {
        // 转换为二手房
        $this->hcid = 2; // 二手房主键id
        $this->hctype = 1; // 二手房类型
        $this->prtypeFlag = "
            AND
                    prtype = '2'
        ";
    }
    if ($this->hctype == 5)
    {
        // 转换为二手房
        $this->hcid = 2; // 二手房主键id
        $this->hctype = 1; // 二手房类型
        $this->prtypeFlag = "
            AND
                    prtype = '0'
        ";
    }
  }

  /**
   * 房屋类别数据
   */
  public function index(){

    // 房屋类别id，房屋类型
    if ($this->hcid) {
      // 读取北京主键id
      $pid = $this->cdb->getId('北京');
      // 读取北京区域
      $data['cityData'] = $this->cdb->getCorrelation($pid);
      // 追加数组
      array_unshift($data['cityData'], array('cname'=>'不限'));
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
      // 搜索条件
      $search = isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '';
      if ($search != 'undefined' && $search != '') {
        $search = "
            AND
                  title like '%$search%'
        ";
      } else {
        $search = '';
      }
      // 筛选条件
      $filtrate = '';
      if (IS_POST === true) {
        // 法拍房，回迁房条件为空
        $this->prtypeFlag = '';
        // 搜索值
        $search = isset($_POST['search']) ? htmlspecialchars($_POST['search']) : '';
        if ($search != 'undefined' && $search != '') {
          $search = "
              AND
                    title like '%$search%'
          ";
        } else {
          // 筛选值
          $districtType = isset($_POST['districtType']) ? $_POST['districtType'] : '';
          $districtIndex = isset($_POST['districtIndex']) ? $_POST['districtIndex'] : '';
          $cid = isset($_POST['cid']) ? $_POST['cid'] : '';
          $priceType = isset($_POST['priceType']) ? $_POST['priceType'] : '';
          $priceIndex = isset($_POST['priceIndex']) ? $_POST['priceIndex'] : '';
          $startPrice = isset($_POST['startPrice']) ? $_POST['startPrice'] : '';
          $endPrice = isset($_POST['endPrice']) ? $_POST['endPrice'] : '';
          $htypeType = isset($_POST['htypeType']) ? $_POST['htypeType'] : '';
          $htypeIndex = isset($_POST['htypeIndex']) ? $_POST['htypeIndex'] : '';
          $htypeVal = isset($_POST['htypeVal']) ? $_POST['htypeVal'] : '';
          $htypeKval = isset($_POST['htypeKval']) ? $_POST['htypeKval'] : '';
          $prtypeType = isset($_POST['prtypeType']) ? $_POST['prtypeType'] : '';
          $prtypeIndex = isset($_POST['prtypeIndex']) ? bcsub($_POST['prtypeIndex'], 1, 0) : '';
          $prtypeVal = isset($_POST['prtypeVal']) ? $_POST['prtypeVal'] : '';
          $areaType = isset($_POST['areaType']) ? $_POST['areaType'] : '';
          $areaIndex = isset($_POST['areaIndex']) ? bcsub($_POST['areaIndex'], 1, 0) : '';
          $startArea = isset($_POST['startArea']) ? $_POST['startArea'] : '';
          $endArea = isset($_POST['endArea']) ? $_POST['endArea'] : '';

          // 条件不同？ 0>新房，1>二手房，2>租房
          if ($this->hctype == 0) {
            $sPrice = 'price';
            $sHtype = 'htype';
            $sPrtype = 'prtype';
            $sArea = "
              AND
                    (area BETWEEN '$startArea' AND '$endArea')
            ";
          } else if ($this->hctype == 1) {
            $sPrice = 'selling_price';
            $sHtype = 'htype';
            $sPrtype = 'prtype';
            $sArea = "
              AND
                    (area BETWEEN '$startArea' AND '$endArea')
            ";
          } else if ($this->hctype == 2) {
            $sPrice = 'rent';
            $sHtype = 'house_type';
            $sPrtype = 'htype';
            $sArea = "
              AND
                    dtype = '$areaIndex'
            ";
          }

          // 0>区域，1>价格，2>户型，3>产权类型，4>面积
          if ($districtType != 'undefined' && $districtIndex != 0 && $priceType != 'undefined' && $priceIndex != 0 && $htypeType != 'undefined' && $htypeIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1' && $areaType != 'undefined' && $areaIndex != '-1') {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    (".$sPrice." BETWEEN '$startPrice' AND '$endPrice')
                AND
                    (".$sHtype." LIKE '%$htypeVal%' OR ".$sHtype." LIKE '%$htypeKval%')
                AND
                     ".$sPrtype." = '$prtypeIndex'
                {$sArea}
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $priceType != 'undefined' && $priceIndex != 0 && $htypeType != 'undefined' && $htypeIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1') {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    (".$sPrice." BETWEEN '$startPrice' AND '$endPrice')
                AND
                    (".$sHtype." LIKE '%$htypeVal%' OR ".$sHtype." LIKE '%$htypeKval%')
                AND
                    ".$sPrtype." = '$prtypeIndex'
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $priceType != 'undefined' && $priceIndex != 0 && $htypeType != 'undefined' && $htypeIndex != 0 && $areaType != 'undefined' && $areaIndex != '-1') {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    (".$sPrice." BETWEEN '$startPrice' AND '$endPrice')
                AND
                    (".$sHtype." LIKE '%$htypeVal%' OR ".$sHtype." LIKE '%$htypeKval%')
                {$sArea}
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $priceType != 'undefined' && $priceIndex != 0 && $htypeType != 'undefined' && $htypeIndex != 0) {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    (".$sPrice." BETWEEN '$startPrice' AND '$endPrice')
                AND
                    (".$sHtype." LIKE '%$htypeVal%' OR ".$sHtype." LIKE '%$htypeKval%')
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $priceType != 'undefined' && $priceIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1' && $areaType != 'undefined' && $areaIndex != '-1') {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    (".$sPrice." BETWEEN '$startPrice' AND '$endPrice')
                AND
                    ".$sPrtype." = '$prtypeIndex'
                {$sArea}
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $priceType != 'undefined' && $priceIndex != 0 && $areaType != 'undefined' && $areaIndex != '-1') {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    (".$sPrice." BETWEEN '$startPrice' AND '$endPrice')
                {$sArea}
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $priceType != 'undefined' && $priceIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1') {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    (".$sPrice." BETWEEN '$startPrice' AND '$endPrice')
                AND
                    ".$sPrtype." = '$prtypeIndex'
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $htypeType != 'undefined' && $htypeIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1' && $areaType != 'undefined' && $areaIndex != '-1') {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    (".$sHtype." LIKE '%$htypeVal%' OR ".$sHtype." LIKE '%$htypeKval%')
                AND
                    ".$sPrtype." = '$prtypeIndex'
                {$sArea}
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $htypeType != 'undefined' && $htypeIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1') {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    (".$sHtype." LIKE '%$htypeVal%' OR ".$sHtype." LIKE '%$htypeKval%')
                AND
                    ".$sPrtype." = '$prtypeIndex'
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1' && $areaType != 'undefined' && $areaIndex != '-1') {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    ".$sPrtype." = '$prtypeIndex'
                {$sArea}
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $priceType != 'undefined' && $priceIndex != 0) {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    (".$sPrice." BETWEEN '$startPrice' AND '$endPrice')
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $htypeType != 'undefined' && $htypeIndex != 0) {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    (".$sHtype." LIKE '%$htypeVal%' OR ".$sHtype." LIKE '%$htypeKval%')
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1') {
            $filtrate = "
                AND
                    cid = '$cid'
                AND
                    ".$sPrtype." = '$prtypeIndex'
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0 && $areaType != 'undefined' && $areaIndex != '-1') {
            $filtrate = "
                AND
                    cid = '$cid'
                {$sArea}
            ";
          } else if ($districtType != 'undefined' && $districtIndex != 0) {
            $filtrate = "
                AND
                    cid = '$cid'
            ";
          } else if ($priceType != 'undefined' && $priceIndex != 0 && $htypeType != 'undefined' && $htypeIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1' && $areaType != 'undefined' && $areaIndex != '-1') {
            $filtrate = "
                AND
                    (".$sPrice." BETWEEN '$startPrice' AND '$endPrice')
                AND
                    (".$sHtype." LIKE '%$htypeVal%' OR ".$sHtype." LIKE '%$htypeKval%')
                AND
                    ".$sPrtype." = '$prtypeIndex'
                {$sArea}
            ";
          } else if ($priceType != 'undefined' && $priceIndex != 0 && $htypeType != 'undefined' && $htypeIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1') {
            $filtrate = "
                AND
                    (".$sPrice." BETWEEN '$startPrice' AND '$endPrice')
                AND
                    (".$sHtype." LIKE '%$htypeVal%' OR ".$sHtype." LIKE '%$htypeKval%')
                AND
                    ".$sPrtype." = '$prtypeIndex'
            ";
          } else if ($priceType != 'undefined' && $priceIndex != 0 && $htypeType != 'undefined' && $htypeIndex != 0 && $areaType != 'undefined' && $areaIndex != '-1') {
            $filtrate = "
                AND
                    (".$sPrice." BETWEEN '$startPrice' AND '$endPrice')
                AND
                    (".$sHtype." LIKE '%$htypeVal%' OR ".$sHtype." LIKE '%$htypeKval%')
                {$sArea}
            ";
          } else if ($priceType != 'undefined' && $priceIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1' && $areaType != 'undefined' && $areaIndex != '-1') {
            $filtrate = "
                AND
                    (".$sPrice." BETWEEN '$startPrice' AND '$endPrice')
                AND
                    ".$sPrtype." = '$prtypeIndex'
                {$sArea}
            ";
          } else if ($priceType != 'undefined' && $priceIndex != 0 && $htypeType != 'undefined' && $htypeIndex != 0) {
            $filtrate = "
                AND
                    (".$sPrice." BETWEEN '$startPrice' AND '$endPrice')
                AND
                    (".$sHtype." LIKE '%$htypeVal%' OR ".$sHtype." LIKE '%$htypeKval%')
            ";
          } else if ($priceType != 'undefined' && $priceIndex != 0 && $areaType != 'undefined' && $areaIndex != '-1') {
            $filtrate = "
                AND
                    (".$sPrice." BETWEEN '$startPrice' AND '$endPrice')
                {$sArea}
            ";
          } else if ($priceType != 'undefined' && $priceIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1') {
            $filtrate = "
                AND
                    (".$sPrice." BETWEEN '$startPrice' AND '$endPrice')
                AND
                    ".$sPrtype." = '$prtypeIndex'
            ";
          } else if ($priceType != 'undefined' && $priceIndex != 0) {
            $filtrate = "
                AND
                    (".$sPrice." BETWEEN '$startPrice' AND '$endPrice')
            ";
          } else if ($htypeType != 'undefined' && $htypeIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1' && $areaType != 'undefined' && $areaIndex != '-1') {
            $filtrate = "
                AND
                    (".$sHtype." LIKE '%$htypeVal%' OR ".$sHtype." LIKE '%$htypeKval%')
                AND
                    ".$sPrtype." = '$prtypeIndex'
                {$sArea}
            ";
          } else if ($htypeType != 'undefined' && $htypeIndex != 0 && $areaType != 'undefined' && $areaIndex != '-1') {
            $filtrate = "
                AND
                    (".$sHtype." LIKE '%$htypeVal%' OR ".$sHtype." LIKE '%$htypeKval%')
                {$sArea}
            ";
          } else if ($htypeType != 'undefined' && $htypeIndex != 0 && $prtypeType != 'undefined' && $prtypeIndex != '-1') {
            $filtrate = "
                AND
                    (".$sHtype." LIKE '%$htypeVal%' OR ".$sHtype." LIKE '%$htypeKval%')
                AND
                    ".$sPrtype." = '$prtypeIndex'
            ";
          } else if ($htypeType != 'undefined' && $htypeIndex != 0) {
            $filtrate = "
                AND
                    (".$sHtype." LIKE '%$htypeVal%' OR ".$sHtype." LIKE '%$htypeKval%')
            ";
          } else if ($prtypeType != 'undefined' && $prtypeIndex != '-1' && $areaType != 'undefined' && $areaIndex != '-1') {
            $filtrate = "
                AND
                    ".$sPrtype." = '$prtypeIndex'
                {$sArea}
            ";
          } else if ($prtypeType != 'undefined' && $prtypeIndex != '-1') {
            $filtrate = "
                AND
                    ".$sPrtype." = '$prtypeIndex'
            ";
          } else if ($areaType != 'undefined' && $areaIndex != '-1') {
            $filtrate = "
                {$sArea}
            ";
          }
        }
      }

      // 查看参数
      $data['hcid'] = $this->hcid;
      $data['hctype'] = $this->hctype;
      $data['search'] = $search;
      $data['filtrate'] = $filtrate;

      // 新房
      if ($this->hctype == 0) {
         // 读取新房筛选条目
        $data['nhfiltrateData']['filtrate'] = conf::get('NHFILTRATE','admin');
        $data['nhfiltrateData']['active'] = conf::get('NHFILTRATEACTIVE','admin');
        // 读取价格
        $data['priceData'] = conf::get('PRICE','admin');
        // 读取新房数据
        $data['hData'] = $this->nhcdb->getCorrelation($this->hcid,$search,$filtrate);
        if ($data['hData']) {
          foreach ($data['hData'] AS $k => $v) {
            $data['hData'][$k]['slideshow'] = unserialize($v['slideshow']);
            $data['hData'][$k]['slideshow'] = $data['hData'][$k]['slideshow'][0];
            $data['hData'][$k]['trait'] = explode(',', commaEn($v['trait']));
            // 获取城市名称
            $data['hData'][$k]['cid'] = $this->cdb->getCname($v['cid']);
          }
        } else {
          $data['hData'] = false;
        }
      }

      // 二手房
      if ($this->hctype == 1) {
         // 读取二手房筛选条目
        $data['nhfiltrateData']['filtrate'] = conf::get('UHFILTRATE','admin');
        $data['nhfiltrateData']['active'] = conf::get('UHFILTRATEACTIVE','admin');
        // 读取售价
        $data['priceData'] = conf::get('SELLINGPRICE','admin');
        // 读取二手房数据
        $data['hData'] = $this->uhcdb->getCorrelation($this->hcid,$search,$filtrate,$this->prtypeFlag);
        if ($data['hData']) {
          foreach ($data['hData'] AS $k => $v) {
            $data['hData'][$k]['slideshow'] = unserialize($v['slideshow']);
            $data['hData'][$k]['slideshow'] = $data['hData'][$k]['slideshow'][0];
            $data['hData'][$k]['trait'] = explode(',', commaEn($v['trait']));
            // 获取城市名称
            $data['hData'][$k]['cid'] = $this->cdb->getCname($v['cid']);
          }
        } else {
          $data['hData'] = false;
        }
      }

      // 租房
      if ($this->hctype == 2) {
         // 读取租房房筛选条目
        $data['nhfiltrateData']['filtrate'] = conf::get('RHFILTRATE','admin');
        $data['nhfiltrateData']['active'] = conf::get('RHFILTRATEACTIVE','admin');
        // 读取价格
        $data['priceData'] = conf::get('RHPRICE','admin');
        // 读取租房类型
        $data['prtypeData'] = conf::get('RHTYPE','admin');
        // 追加数组
        array_unshift($data['prtypeData'], '不限');
        // 读取租房装修类型
        $data['areaData'] = conf::get('RHFINISHINGTYPE','admin');
        // 追加数组
        array_unshift($data['areaData'], '不限');
        // 读取租房数据
        $data['hData'] = $this->tcdb->getCorrelation($this->hcid,$search,$filtrate);
        if ($data['hData']) {
          foreach ($data['hData'] AS $k => $v) {
            $data['hData'][$k]['slideshow'] = unserialize($v['slideshow']);
            $data['hData'][$k]['slideshow'] = $data['hData'][$k]['slideshow'][0];
            // 租房类型
            $data['hData'][$k]['htype'] = $data['prtypeData'][$data['hData'][$k]['htype'] + 1];
            // 获取城市名称
            $data['hData'][$k]['cid'] = $this->cdb->getCname($v['cid']);
          }
        } else {
          $data['hData'] = false;
        }

      }
      ###
      echo J(R(200,'受影响的操作 :)',$data));
      die;
    } else {
      echo J(R(400,'获取数据异常 :(',false));
      die;
    }


  }





}