<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\houseCategory;
use vendor\page\Page;
class houseCategoryCtrl extends baseCtrl{
  public $db;
  public $id;
  // 构造方法
  public function _auto(){
      if($_SESSION['userinfo']['type'] !=0 ){
          echo "<script>alert('没有权限');window.location.href='/admin/index/index'</script>";
          die;
      }
    $this->db = new houseCategory();
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
  }

  // 添加房类别页面
  public function add(){
    // Get
    if (IS_GET === true) {
      // id
      if ($this->id) {
        // 获取单条数据
        $data = $this->db->getInfo($this->id);
        if (!file_exists(ICUNJI.$data['icon_path'])) {
          $data['icon_path'] = '';
        }
        // assign
        $this->assign('data',$data);
      }
      // display
      $this->display('houseCategory','add.html');
      die;
    }
    // Ajax
    if (IS_AJAX === true) {
      // data
      $data = $this->getData();
      // id
      if ($this->id) {
        $res = $this->db->save($this->id,$data);
      } else {
        // 写入数据表
        $res = $this->db->add($data);
      }
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
    // ipPath
    $ipPath = isset($_POST['ipPath']) ? $_POST['ipPath'] : '';
    if (!$ipPath) {
      $res = upFiles('icon_path');
      if ($res['error'] == 1) {
        echo json_encode($res['msg']);
        die;
      } else {
        $data['icon_path'] = $res['filepath'];
      }
    } else {
        $data['icon_path'] = $ipPath;
    }
    $data['cname'] = htmlspecialchars($_POST['cname']);
    $data['sort'] = intval($_POST['sort']);
    $data['status'] = 0;
    return $data;
  }

  // 房类别列表页面
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
    $this->display('houseCategory','index.html');
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

  // flag
  public function flag(){
    // Ajax
    if (IS_AJAX === true) {
      // status
      $status = intval($_POST['status']);
      // update
      $res = $this->db->upStatus($this->id,$status);
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