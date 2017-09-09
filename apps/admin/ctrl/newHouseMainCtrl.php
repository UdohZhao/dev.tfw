<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\newHouseCatalog;
use apps\admin\model\newHouseMain;
class newHouseMainCtrl extends baseCtrl{
  public $nhcid;
  public $nhcdb;
  public $db;
  public $id;
  // 构造方法
  public function _auto(){
    if (isset($_SESSION['userinfo']) == null) {
          echo "<script>alert('请登录进入');window.location.href='/admin/login/index'</script>";
          die;
      }
  
    $this->nhcid = isset($_GET['nhcid']) ? intval($_GET['nhcid']) : 0;
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $this->assign('nhcid',$this->nhcid);
    $this->nhcdb = new newHouseCatalog();
    $this->db = new newHouseMain();

  }
  

  // 新房添加主力户型页面
  public function add(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('newHouseMain','add.html');
      die;
    }
    // Ajax
    if (IS_AJAX === true) {
      // result
      $result = array();
      $result['error'] = 0;
      $result['msg'] = '';
      // 封面图片上传
      $res = upFiles('cover_path');
      if ($res['error'] == 1) {
        echo json_encode($res);
        die;
      }
      // data
      $data = $this->getData($res['filepath']);
      $cres = $this->db->save($this->id,$data);
      if ($cres) {
        $result['msg'] = '恭喜你修改成功 :)';
      } else {
        $result['error'] = false;
        $result['msg'] = '请尝试刷新页面后重试 :(';
      }
      
      // 写入数据表
      $res = $this->db->add($data);
      if ($res) {
        $result['msg'] = '您可以选择继续追加主力户型信息或跳转到新房列表提交审核 :)';
      } else {
        $result['error'] = false;
        $result['msg'] = '请尝试刷新页面后重试 :(';
      }
      echo json_encode($result);
      die;
    }
  }
    public function updata(){
// Ajax
    if (IS_AJAX === true) {
      // result
      $result = array();
      $result['error'] = 0;
      $result['msg'] = '';
      // 封面图片上传
      $res = upFiles('cover_path');
      if ($res['error'] == 1) {
        echo json_encode($res);
        die;
      }
      // data
      $data = $this->getDat($res['filepath']);
      $cres = $this->db->save($this->id,$data);
      if ($cres) {
        $result['msg'] = '恭喜你修改成功 :)';
      } else {
        $result['error'] = false;
        $result['msg'] = '请尝试刷新页面后重试 :(';
      }
      
      echo json_encode($result);
      die;
    }
  }
  // 初始化数据
  private function getDat($coverPath){
    // data
    $data = array();
    $data['cover_path'] = $coverPath;
    $data['house_type_name'] = htmlspecialchars($_POST['house_type_name']);
    $data['cname'] = htmlspecialchars($_POST['cname']);
    $data['trait'] = htmlspecialchars($_POST['trait']);
    $data['price'] = htmlspecialchars($_POST['price']);
    $data['sell_type'] = $_POST['sell_type'];
    $data['covered_area'] = htmlspecialchars($_POST['covered_area']);
    $data['orientation'] = htmlspecialchars($_POST['orientation']);
    $data['down_payment'] = htmlspecialchars($_POST['down_payment']);
    $data['mip'] = htmlspecialchars($_POST['mip']);
    $data['analysis'] = $_POST['analysis'];
    $data['ctime'] = time();
    return $data;
  }

  // 初始化数据
  private function getData($coverPath){
    // data
    $data = array();
    $data['nhcid'] = $this->nhcid;
    $data['cover_path'] = $coverPath;
    $data['house_type_name'] = htmlspecialchars($_POST['house_type_name']);
    $data['cname'] = htmlspecialchars($_POST['cname']);
    $data['trait'] = htmlspecialchars($_POST['trait']);
    $data['price'] = htmlspecialchars($_POST['price']);
    $data['sell_type'] = $_POST['sell_type'];
    $data['covered_area'] = htmlspecialchars($_POST['covered_area']);
    $data['orientation'] = htmlspecialchars($_POST['orientation']);
    $data['down_payment'] = htmlspecialchars($_POST['down_payment']);
    $data['mip'] = htmlspecialchars($_POST['mip']);
    $data['analysis'] = $_POST['analysis'];
    $data['ctime'] = time();
    return $data;
  }

  // 新房主力户型页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // 读取主力户型
      $data = $this->db->sel($this->nhcid);
      
      $status = $this->db->status($this->nhcid);
        $qqq = $status[0][0];
      // 读取新房条目名称
      $title = $this->nhcdb->getTitle($this->nhcid);
       
            // assign
      $this->assign('data',$data);
      $this->assign('status',$qqq);
      $this->assign('title',$title);
      $this->assign('tit',$title['title']);
      // display
      $this->display('newHouseMain','index.html');
      die;
    }
  }
     // del
  public function dle(){
    // Ajax
    if (IS_AJAX === true) {
      // delete
      $res = $this->db->dle($this->id);
      if ($res) {
        echo json_encode(true);
        die;
      } else {
        echo json_encode(false);
        die;
      }
    }
  }
  
}