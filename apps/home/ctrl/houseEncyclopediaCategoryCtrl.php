<?php
namespace apps\home\ctrl;
use apps\home\model\houseEncyclopediaCategory;
  class houseEncyclopediaCategoryCtrl extends baseCtrl{
  	 public $db;
  	 public $id;
  // 构造方法
  public function _auto(){
    $this->db = new houseEncyclopediaCategory();
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
  }
  public function sel(){
 

  	$data = $this->db->sel($this->id);
  	
  	echo J(R(200,'成功',$data));
  }
 public function sel1(){
 	$data = $this->db->sel1($this->id);
 	echo J(R(200,'成功',$data));
  }


  }