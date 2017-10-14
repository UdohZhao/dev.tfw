<?php
namespace apps\home\ctrl;
use core\lib\conf;
use apps\home\model\loan;
use apps\home\model\about;
use vendor\page\Page;
class loanCtrl extends baseCtrl{
	public $db;
  public $con;
	public $id;
  public $status;
	public function _auto(){

	  $this->db = new loan();
	  $this->con = new about();
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
      $this->status = isset($_GET['status']) ? intval($_GET['status']) : 0;
	}

  /**
   * 添加贷款记录
   */
	public function add(){
    // Post
    if (IS_POST == true) {
      // data
      $data = $this->getData();
      // 写入数据
      $res = $this->db->add($data);
      if ($res) {
        echo J(R(0,'受影响的操作 :)',true));
        die;
      } else {
        echo J(R(1,'请尝试刷新小程序后重试 :(',false));
        die;
      }
    }
  }

  /**
   * 初始化数据
   */
  private function getData(){
    $data['cname'] = isset($_POST['cname']) ? htmlspecialchars($_POST['cname']) : '';
    $data['phone'] = isset($_POST['phone']) ? $_POST['phone'] : '';
    $data['ctime'] = time();
    $data['type']  = isset($_POST['type']) ? $_POST['type'] : 0;
    $data['status'] = 0;
    return $data;
  }

  public function sel(){
    $data = $this->con->sel();
    if ($data) {
      echo J(R(200,'成功',$data));
    } else {
      echo J(R(400,'数据加载异常 :(',false));
    }
  }
}
