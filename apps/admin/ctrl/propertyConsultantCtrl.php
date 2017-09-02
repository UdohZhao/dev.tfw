<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\propertyConsultant;
use vendor\page\Page;
class propertyConsultantCtrl extends baseCtrl{
  public $db;
  public $id;
  // 构造方法
  public function _auto(){
      if($_SESSION['userinfo']['type'] !=0 ){
          echo "<script>alert('没有权限');window.location.href='/admin/index/index'</script>";
          die;
      }
    $this->db = new propertyConsultant();
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
  }

  // 添加用户页面
  public function add(){
    // Get
    if (IS_GET === true) {
      // id
      if ($this->id) {
        // 读取单条信息
        $data = $this->db->getInfo($this->id);
        if (!file_exists(ICUNJI.$data['head_portrait'])) {
          $data['head_portrait'] = '';
        }
        // assign
        $this->assign('data',$data);
      }
      // display
      $this->display('propertyConsultant','add.html');
      die;
    }
    // Ajax
    if (IS_AJAX === true) {
      // data
      $data = $this->getData();
      // id
      if ($this->id) {
        // 更新数据表
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
    // hpPath
    $hpPath = isset($_POST['hpPath']) ? $_POST['hpPath'] : '';
    if (!$hpPath) {
      $res = upFiles('head_portrait');
      if ($res['error'] == 1) {
        echo json_encode($res['msg']);
        die;
      } else {
        $data['head_portrait'] = $res['filepath'];
      }
    } else {
        $data['head_portrait'] = $hpPath;
    }
    $data['cname'] = htmlspecialchars($_POST['cname']);
    $data['phone'] = htmlspecialchars($_POST['phone']);
    $data['belong_company'] = htmlspecialchars($_POST['belong_company']);
    $data['ctime'] = time();
    $data['status'] = 0;
    return $data;
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
    $this->display('propertyConsultant','index.html');
    die;
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