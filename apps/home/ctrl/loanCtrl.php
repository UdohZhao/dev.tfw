<?php
namespace apps\home\ctrl;
use core\lib\conf;
use apps\home\model\loan;
use vendor\page\Page;
class loanCtrl extends baseCtrl{
	public $db;
	public $id;
  public $status;
	public function _auto(){
    
	  $this->db = new loan();
	  $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
      $this->status = isset($_GET['status']) ? intval($_GET['status']) : 0;
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


      // data
       $data = $this->getData();
      // insert

         $res = $this->db->add($data);
    
    
    

  }

}
