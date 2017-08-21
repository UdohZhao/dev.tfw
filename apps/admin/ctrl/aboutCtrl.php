<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\about;
use vendor\page\Page;
class aboutCtrl extends baseCtrl{
	 public $db;
   public $id;
  // 构造方法
  public function _auto(){
    $this->db = new about();
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;

  }
	public function index(){
		 $data = $this->db->sel();
   
      foreach($data as $k=>$v){
        $data[$k]['content']=mb_substr($v['content'], 0,30).'...';
      }

    $this->assign('data',$data);
		$this->display('about','index.html');
		
	}

	 public function add(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('about','add.html');
      die;
    }
    // Ajax
    if (IS_POST === true) {
      // data
       $data = $this->getData();
      // insert
      $res = $this->db->add($data);
      if ($res) {
        echo "<script>alert('添加成功');
         window.location.href='http://'+window.location.host+'/admin/about/index';</script>";
      
        die;
      } else {
        echo json_encode(false);
        die;
      }

    }
  }
  private function getData(){
    // data
    $data = array();
    $data['content'] = $_POST['content'];
    $data['ctime'] = time();
    return $data;
  }
  public function del(){
    $id = $_GET['id']; 
    if (IS_AJAX === true){

    $res = $this->db->del($id);

    if ($res) {

        echo json_encode(true);
    }else{
       echo json_encode(false);
    }
    }
  }
  // 修改密码
  public function ePass(){
    // Ajax
    if (IS_AJAX === true) {
      // password
      $content = enContent(htmlspecialchars($_POST['content']));
      // content
      $res = $this->db->ePass($this->id,$content);
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
