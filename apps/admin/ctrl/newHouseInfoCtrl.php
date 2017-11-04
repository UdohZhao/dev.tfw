<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\propertyConsultant;
use apps\admin\model\newHouseCatalog;
use apps\admin\model\newHouseInfo;
// importjava.text.ParseException;
// importjava.text.SimpleDateFormat;
// importjava.util.Date;
class newHouseInfoCtrl extends baseCtrl{
  public $nhcid;
  public $pcdb;
  public $nhcdb;
  public $db;
  // 构造方法
  public function _auto(){
      if (isset($_SESSION['userinfo']) == null) {
          echo "<script>window.location.href='/admin/login/index'</script>";
          die;
      }elseif($_SESSION['userinfo']['type'] !=2  && $_SESSION['userinfo']['type'] !=0){
          echo "<script>alert('没有权限');window.location.href='/admin/index/index'</script>";
          die;
      }

    $this->nhcid = isset($_GET['nhcid']) ? intval($_GET['nhcid']) : 0;
    $this->assign('nhcid',$this->nhcid);
    $this->pcdb = new propertyConsultant();
    $this->nhcdb = new newHouseCatalog();
    $this->db = new newHouseInfo();
  }

  // 添加新房详细信息页面
  public function add(){
    // Get
    if (IS_GET === true) {
      // 读取置业顾问
      $pcData = $this->pcdb->selpc();

      // assign
      $this->assign('pcData',$pcData);
      // display
      $this->display('newHouseInfo','add.html');
      die;
    }
    // Ajax
    if (IS_AJAX === true) {
      // result
      $result = array();
      $result['error'] = 0;
      $result['msg'] = '';
      // k v
      if (empty($_POST['k'][0]) || empty($_POST['v'][0])) {
        $result['error'] = 201;
        $result['msg'] = '请至少填写一对键值 :(';
        echo json_encode($result);
        die;
      }
      // data
      $data = $this->getData();
      if ($this->db->add($data)) {
        $result['msg'] = $this->nhcid;
      } else {
        $result['error'] = 1;
        $result['msg'] = '请尝试刷新页面后重试 :(';
      }
      echo json_encode($result);
      die;
    }
  }

  // 初始化数据
  private function getData(){
    // data
    $data = array();
    $data['nhcid'] = $this->nhcid;
    $data['pcid'] = $_POST['pcid'];
    foreach ($_POST['k'] AS $k => $v) {
      if ($v) {
        $_POST['k'][$k] = htmlspecialchars($v);
        $_POST['v'][$k] = htmlspecialchars($v);
      }
    }
    $data['k'] = serialize($_POST['k']);
    $data['v'] = serialize($_POST['v']);
    return $data;
  }

  // 新房详细信息页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // 读取详细信息
      $data = $this->db->getInfo($this->nhcid);
      $rem = $this->db->catalog($this->nhcid);
        if(!$data){
            $this->assign('data','');
            $this->display('newHouseInfo','index.html');
            die;
        }else{
      $data['k'] = unserialize($data['k']);
      $data['v'] = unserialize($data['v']);
      // 读取新房条目名称
      $title = $this->nhcdb->getTitle($data['nhcid']);

      //DateUtils.getDateToString(时间戳);
      // 读取相关置业顾问信息
      $pcInfo = $this->pcdb->getInfo($data['pcid']);

}
      if(!$rem){
          $this->assign('rem','');
          $this->display('newHouseInfo','index.html');
            die;
        }
      //反序列化
      $rem['slideshow'] = unserialize($rem['slideshow']);

       $and = $rem['prtype'];
      if($and == 0){
        $prtype = "回迁房";
      }elseif($and == 1){
        $prtype = "军产房";
      }elseif($and == 2){
        $prtype = "法拍房";
      }elseif($and == 3){
        $prtype = "福利房";
      }elseif($and == 4){
        $prtype = "小产权房";
      }else{
        $prtype = "其他";
      }
      //读取新房条目表信息
      $qwe = $rem['house_type'];
      if($qwe == 0){
        $house_type = "期房";
      }elseif($qwe == 1){
        $house_type = "代售";
      }elseif($qwe == 2){
        $house_type = "现房";
      }elseif($qwe == 3){
        $house_type = "尾盘";
      }else{
        $house_type = "其他";
      }
      //将时间戳转换成时间
      $caInfo = $this->pcdb->catalog($rem['cid']);
      $t =  date("Y-m-d H:i",$caInfo['ctime']);

      // date("Y-m-d H:i:s",$caInfo['ctime']);
      // assign
      $this->assign('rem',$rem);
      $this->assign('caInfo',$caInfo);
      $this->assign('data',$data);
      $this->assign('prtype',$prtype);
      $this->assign('house_type',$house_type);
      $this->assign('ctime',$t);
      $this->assign('title',$title);
      $this->assign('pcInfo',$pcInfo);
      // display
      $this->display('newHouseInfo','index.html');
      die;
    }
  }



}

