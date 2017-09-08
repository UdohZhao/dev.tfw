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
        if (isset($_SESSION['userinfo']) == null) {
          echo "<script>alert('请登录进入');window.location.href='/admin/login/index'</script>";
          die;
      }elseif($_SESSION['userinfo']['type'] !=0 && $_SESSION['userinfo']['type'] !=1){
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
      //小区
      $community = isset($_POST['community']) ? htmlspecialchars($_POST['community']) : '';
      //售价
      $selling_price = isset($_POST['selling_price']) ? htmlspecialchars($_POST['selling_price']) : '';
      $status = isset($_GET['status']) ? intval($_GET['status']) : 0;
      
          //面积
        $area = isset($_POST['area']) ? htmlspecialchars($_POST['area']) : '';
        $status=isset($_GET['status'])?$_GET['status']:0;

        // 数据分页
        $num = $this->db->cou($status);
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $p = new Page($num,conf::get('PAGES','admin'),$page,conf::get('LIMIT','admin'));
       
          $res = $this->db->sel($this->userinfo['type'],$this->userinfo['id'],$status,bcsub($p->page,1,0),$p->pagesize,$community,$selling_price,$area);
          
                // ,bcsub($p->page,1,0),$p->pagesize
        foreach ($res as $k=>$v){
            $res[$k]['house_img'] = unserialize($v['house_img']);

            $res[$k]['house_img'] = $res[$k]['house_img'][0];
        }
        // var_dump($res[0]['house_img']);
        // die;
             $this->assign('data',$res);
             $this->assign('page',$p->showpage());
            $this->assign('status',$status);
            $this->display('sellHouseInfo','index.html');
             die;
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
