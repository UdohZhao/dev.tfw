<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\sellHouseInfo;
use apps\admin\model\newHouseMain;
use vendor\page\Page;
class sellHouseInfoCtrl extends baseCtrl{
    public $db;
    public $cdb;
    public $id;
    public function _auto(){
        //资料审核员可以查看
        if($_SESSION['userinfo']['type'] !=0 && $_SESSION['userinfo']['type'] !=1){
            echo "<script>alert('没有权限');window.location.href='/admin/index/index'</script>";
            die;
        }
        $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $this->assign('id',$this->id);
        $this->db = new sellHouseInfo();
        $this->cdb = new newHouseMain();

    }

public function update(){
     if(IS_GET === true){
      $qwe = $this->cdb->getInfo($this->id);
      $this->assign('date',$qwe);
     }
     
     $this->display('sellHouseInfo','add.html');  
die;

}

public function updata(){

        // result
          $result = array();
          $result['error'] = 0;
          $result['msg'] = '';

        $data = array();
        $data['cover_path']['filepath'] = $_POST['cover_path'];
        $data['house_type_name'] = $_POST['house_type_name'];
        $data['cname'] = $_POST['cname'];
        $data['trait'] = $_POST['trait'];
        $data['price'] = $_POST['price'];
        $data['sell_type'] = $_POST['sell_type'];
        $data['covered_area'] = $_POST['covered_area'];
        $data['orientation'] = $_POST['orientation'];
        $data['down_payment'] = $_POST['down_payment'];
        $data['mip'] = $_POST['mip'];
         
    

        $res = $this->cdb->save($this->id,$data);
       if ($res) {
      echo "<script>alert('保存成功');
         window.location.href='http://'+window.location.host+'/admin/sellHouseInfo/update/';</script>";
      } else {
        echo "<script>alert('保存失败，尝试刷新后再试');
         window.location.href='http://'+window.location.host+'/admin/sellHouseInfo/update/';</script>";
      }
     
      die;
  

}
  
     public function index(){
   
       
         if(IS_GET === true){
        $status=isset($_GET['status'])?$_GET['status']:0;
        $res = $this->db->sel($status);
           // //获取数据条数
           //   $search=isset($_GET['search'])?$_GET['search']:'';

           //   if(trim($search)){
           //       $num  = $this->db->sel_num($status,$_GET['search']);
           //  }else{
           //      $num = $this->db->sel_num($status);             }
           //   // 数据分页
           //   $page = isset($_GET['page']) ? $_GET['page'] : 1;
           //   $p = new Page($num,conf::get('PAGES','admin'),$page,conf::get('LIMIT','admin'));
            
            //结果集
            // $res = $this->db->sel($status,$search,bcsub($p->page,1,0),$p->pagesize);
            // var_dump($res);
            // die;
             // $this->assign('page',$p->showpage());
             $this->assign('data',$res);
            $this->assign('status',$status);
            $this->display('sellHouseInfo','index.html');
             die;
         }
     }
     //已读
     public function statu(){


            $id = isset($_GET['id']) ? $_GET['id'] : 0;

            $res = $this->db->up_status($id);
          


            if ($res) {
                echo json_encode(true);
            } else {
                echo json_encode(false);
            }
    

     }
}
