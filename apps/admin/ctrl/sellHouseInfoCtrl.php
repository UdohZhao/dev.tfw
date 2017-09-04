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
  
     public function index(){
   
       
         if(IS_GET === true){
        $status=isset($_GET['status'])?$_GET['status']:0;
        $res = $this->db->sel($status);
          

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
