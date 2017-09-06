<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\adminUser;
use vendor\page\Page;
class adminUserCtrl extends baseCtrl{
  public $db;
  public $id;
  // 构造方法
  public function _auto(){
      if($_SESSION['userinfo']['type'] !=0 ){
          echo "<script>alert('没有权限');window.location.href='/admin/index/index'</script>";
          die;
      }
    $this->db = new adminUser();
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
  }

  // 添加用户页面
  public function add(){
    
    // Get
    if (IS_GET === true) {
      // display
      $this->display('adminUser','add.html');
      die;
    }
    // Ajax
    if (IS_AJAX === true) {
      // data
      $data = $this->getData();
      // insert
      $res = $this->db->add($data);
      if ($res) {
        echo json_encode(true);
        die;
      } else {
        echo json_encode(false);
        die;
      }
    }
  }

  // 初始化数据
  private function getData(){
    // data
    $data = array();
    $data['username'] = htmlspecialchars($_POST['username']);
    $data['password'] = enPassword(htmlspecialchars($_POST['password']));
    $data['type'] = $_POST['type'];
    $data['status'] = 0;
    return $data;
  }

  // 防止重复添加
  public function getUsername(){
    // Ajax
    if (IS_AJAX === true) {
      // 用户名
      $username = isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '';
      // get
      $res = $this->db->getUsername($username);
      if ($res) {
        echo 'false';
        die;
      } else {
        echo 'true';
        die;
      }
    }
  }

  // 后台用户列表页面
  public function index(){
    // search
    $search = isset($_POST['search']) ? htmlspecialchars($_POST['search']) : '';
    // 总记录数
    $cou = $this->db->cou();
    // 数据分页
    $page = new Page($cou,conf::get('LIMIT','admin'));
    // 结果集
    $data = $this->db->sel($search,$page->limit);
    // assign
    $this->assign('data',$data);
    $this->assign('page',$page->showpage());
    // display
    $this->display('adminUser','index.html');
    die;
  }

  // 修改密码
  public function ePass(){
    // Ajax
    if (IS_AJAX === true) {
      // password
      $password = enPassword(htmlspecialchars($_POST['password']));
      // update
      $res = $this->db->ePass($this->id,$password);
      if ($res) {
        echo json_encode(true);
        die;
      } else {
        echo json_encode(false);
        die;
      }
    }
  }
//新房
  // flag
  public function flag(){
    // Ajax
    if (IS_AJAX === true) {
      // status
      $status = intval($_POST['status']);
      // update
      $res = $this->db->Status($this->id,$status);
      if ($res) {
        echo json_encode(true);
        die;
      } else {
        echo json_encode(false);
        die;
      }
    }
  }
//二手房
   public function flage(){
    // Ajax
    if (IS_AJAX === true) {
      // status
      $type = intval($_POST['type']);
      // update
      $res = $this->db->upstype($this->id,$type);
      if ($res) {
        echo json_encode(true);
        die;
      } else {
        echo json_encode(false);
        die;
      }
    }
  }
  //租房flae
  public function flae(){
    // Ajax
    if (IS_AJAX === true) {
      // status
      $type = intval($_POST['type']);
      // update
      $res = $this->db->upztype($this->id,$type);
      if ($res) {
        echo json_encode(true);
        die;
      } else {
        echo json_encode(false);
        die;
      }
    }
  }
  // del
  public function del(){
    // Ajax
    if (IS_AJAX === true) {
      // delete
      $res = $this->db->del($this->id);
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