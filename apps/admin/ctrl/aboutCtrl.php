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
      if (isset($_SESSION['userinfo']) == null) {
          echo "<script>alert('请登录进入');window.location.href='/admin/login/index'</script>";
        die;
      }elseif($_SESSION['userinfo']['type'] !=0 ){
          echo "<script>alert('没有权限');window.location.href='/admin/index/index'</script>";
          die;
      }
    $this->db = new about();
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;

  }
	// public function index(){
 //        // 总记录数
 //        $cou = $this->db->cou();
 //        // 数据分页
 //        $page = isset($_GET['page']) ? $_GET['page'] : 1;
 //        $p = new Page($cou,conf::get('PAGES','admin'),$page,conf::get('LIMIT','admin'));
 //        // 结果集
 //        $data = $this->db->sel(bcsub($p->page,1,0),$p->pagesize);
 //      foreach($data as $k=>$v){
 //          //$str=preg_replace("/<(\/?html.*?)>/si","",$v['content']);
 //        $data[$k]['content']=mb_substr(trim(preg_replace("/<(\/?p.*?)>/si","",$v['content'])), 0,20).'...';
 //      }

 //    $this->assign('data',$data);
 //        $this->assign('page',$p->showpage());
	// 	$this->display('about','add.html');


	// }

	 public function add(){
    // Get
    if (IS_GET === true) {
      $this->assign('data',$this->db->sel_one(1));

      $this->display('about','add.html');
      die;
    }
    // Ajax
    if (IS_POST === true) {
      // data
       $data = $this->getData();

      // insert
        if($this->id){
            if($this->db->ePass($this->id,$data)){
                echo "<script>alert('保存成功');
                window.location.href='/admin/about/add';</script>";

                die;
            }else{
                echo "<script>alert('保存失败，尝试刷新后再试');
                window.location.href='/admin/about/add';</script>";

                die;
            }

        }
      $res = $this->db->add($data);
      if ($res) {
        echo "<script>alert('保存成功');
         window.location.href='/admin/about/add';</script>";

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
}
