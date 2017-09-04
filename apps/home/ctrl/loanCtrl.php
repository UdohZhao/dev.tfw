<?php
namespace apps\home\ctrl;
use apps\home\model\about;
use apps\home\model\demoModel;
class loanCtrl extends baseCtrl{
  public $db;
  // 构造方法
  public function _auto(){
 $this->db = new about();
  }


	private function getData(){
    // data
    $data = array();
    $data['cname'] = $_POST['cname'];
    $data['phone'] = $_POST['phone'];
    $data['ctime'] = time();
    $data['type']  = $_POST['type'];
    return $data;
   
  }

	public function add(){
  
    $res = $this->db->getData()->add('$data');  
    die;
    // Get

  }
}
