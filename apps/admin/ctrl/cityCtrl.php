<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\city;
use vendor\page\Page;
class cityCtrl extends baseCtrl{
  public $db;
  public $id;
  // 构造方法
  public function _auto(){
    $this->db = new city();
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
  }

  // 添加城市页面
  public function add(){
    // Get
    if (IS_GET === true) {
      // id
      if ($this->id) {
        // 读取单条数据
        $data = $this->db->getInfo($this->id);
        // type为1时添加下级
        $type = isset($_GET['type']) ? intval($_GET['type']) : 0;
        // pid
        $pid = isset($_GET['pid']) ? intval($_GET['pid']) : 0;
        // assign
        $this->assign('data',$data);
        $this->assign('type',$type);
        $this->assign('pid',$pid);
      }
      // display
      $this->display('city','add.html');
      die;
    }
    // Ajax
    if (IS_AJAX === true) {
      // data
      $data = $this->getData();
      // 防止重复添加
      $id = $this->db->getId($data['cname']);
      if ($id) {
        // id
        if ($this->id) {
          if ($this->id != $id) {
            echo json_encode(1);
            die;
          }
        } else {
          echo json_encode(1);
          die;
        }
      }
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
    $data['pid'] = $_POST['pid'];
    $data['cname'] = htmlspecialchars($_POST['cname']);
    $data['sort'] = intval($_POST['sort']);
    $data['status'] = 0;
    return $data;
  }

  // 城市列表页面
  public function index(){
    // 获取上级城市名称
    $cname = $this->db->getCname($this->id);
    // search
    $search = isset($_POST['search']) ? htmlspecialchars($_POST['search']) : '';
    // 总记录数
    $cou = $this->db->cou($this->id);
    // 数据分页
    $page = new Page($cou,conf::get('LIMIT','admin'));
    // 结果集
    $data = $this->db->sel($this->id,$search,$page->limit);
    // assign
    $this->assign('data',$data);
    $this->assign('page',$page->showpage());
    $this->assign('cname',$cname);
    $this->assign('id',$this->id);
    // display
    $this->display('city','index.html');
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
      // 读取下级
      $res = $this->db->cou($this->id);
      if ($res) {
        echo json_encode(1);
        die;
      }
      // 删除
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

  // 获取城市
  public function getCity(){
    // Ajax
    if (IS_AJAX === true) {
      // pid , cid
      $pid = $_GET['pid'];
      $cname = $_POST['cid'];
      $res = $this->db->getCity($pid,$cname);
      if ($res) {
        echo 'true';
      } else {
        echo 'false';
      }
      die;

    }
  }

}