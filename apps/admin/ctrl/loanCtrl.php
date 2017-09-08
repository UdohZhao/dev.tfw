<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\loan;
use vendor\page\Page;
class loanCtrl extends baseCtrl{
	public $db;
	public $id;
  public $status;
	public function _auto(){
        if (isset($_SESSION['userinfo']) == null) {
          echo "<script>alert('请登录进入');window.location.href='/admin/login/index'</script>";
          die;
      }elseif($_SESSION['userinfo']['type'] !=0 ){
            echo "<script>alert('没有权限');window.location.href='/admin/index/index'</script>";
            die;
        }
		  $this->db = new loan();
		  $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
      $this->status = isset($_GET['status']) ? intval($_GET['status']) : 0;
	}

	public function index(){
		 
      $num = $this->db->sel_num($this->status);
      //搜索条件
      $types = isset($_POST['types']) ? htmlspecialchars($_POST['types']) : '';
      $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
  // 数据分页
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $p = new Page($num,conf::get('PAGES','admin'),$page,conf::get('LIMIT','admin'));
        // 必传$this->userinfo['？'];
      $data = $this->db->sel($this->userinfo['type'],$this->userinfo['id'],$this->status,bcsub($p->page,1,0),$p->pagesize,$types,$phone);
      
     $this->assign('status',$this->status);
     $this->assign('page',$p->showpage());
		$this->assign('data',$data);
		$this->display('loan','index.html');
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
    // Get
    if (IS_GET === true) {
      // display
     if ($this->id) {
     	$data = $this->db->getInfo($this->id);
     	$this->assign('data',$data);
     }
      $this->display('loan','add.html');
      die;
    }
    // post
    if (IS_POST === true) {
      // data
       $data = $this->getData();
      // insert
      if($this->id){
        $res = $this->db->save($this->id,$data);
      }else{
         $res = $this->db->add($data);
      }
    
      if ($res) {
        echo "<script>alert('保存成功');
         window.location.href='http://'+window.location.host+'/admin/loan/index';</script>";
      
        die;
      } else {
          echo "<script>alert('保存失败，尝试刷新后再试');
         location.reload()";
      
        die;
      }

    }
  }
  public function statu(){
      $id = isset($_GET['id']) ? $_GET['id'] : 0;
      $res = $this->db->up_status($id);
      
            if ($res) {
                echo json_encode(true);
            } else {
                echo json_encode(false);
            }
  }
  public function del_info(){
  	$id = $_GET['id'];
  	if (IS_AJAX === true){
  		$res = $this->db->del_info($id);
  	if ($res) {
  		echo json_encode(true);
  	}else{
  		echo json_encode(false);
  	}	
  	}
  }
}
