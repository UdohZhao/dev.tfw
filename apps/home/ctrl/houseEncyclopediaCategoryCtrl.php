<?php
namespace apps\home\ctrl;
use apps\home\model\houseEncyclopediaCategory;
  class houseEncyclopediaCategoryCtrl extends baseCtrl{
  	 public $db;
  	 public $pid;
     public $id;
  // 构造方法
  public function _auto(){
    $this->db = new houseEncyclopediaCategory();
    $this->pid = isset($_GET['pid']) ? intval($_GET['pid']) : 0;
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;

  }
  public function sel(){
 
  	$data = $this->db->sel($this->pid);
    if ($data) {
      echo J(R(200,'成功',$data));
    } else {
      echo J(R(400,'数据加载异常 :(',false));
    }

  }
public function seles(){

  $data = $this->db->seles($this->id);
    if ($data) {
      echo J(R(200,'成功',$data));
    } else {
      echo J(R(400,'数据加载异常 :(',false));
    }

}
 
 public function sel1(){
 	$data = $this->db->sel1($this->id);
 
     if ($data) {
      echo J(R(200,'成功',$data));
    } else {
      echo J(R(400,'数据加载异常 :(',false));
    }

  }


  }