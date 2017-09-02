<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\viewTenment;
use apps\admin\model\city;
use apps\admin\model\newHouseCatalog;
use apps\admin\model\propertyConsultant;
use vendor\page\Page;
class viewTenmentCtrl extends baseCtrl{

    public $db;
    public $cdb;
    public $pcdb;
    public function _auto(){
        if($_SESSION['userinfo']['type'] !=1 && $_SESSION['userinfo']['type'] !=0){
            echo "<script>alert('没有权限');window.location.href='/admin/index/index'</script>";
            die;
        }
        $this->db=new viewTenment();
        $this->cdb=new city();
        $this->pcdb = new propertyConsultant();
        $this->nhcdb = new newHouseCatalog();
    }
    public function index(){

        //获取数据条数
        $search=isset($_GET['search'])?$_GET['search']:'';

        if(trim($search)){
            $num  = $this->db->sel_num($_GET['search']);
        }else{
            $num = $this->db->sel_num();
        }

        // 数据分页
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $p = new Page($num,conf::get('PAGES','admin'),$page,conf::get('LIMIT','admin'));

        //结果集
        $res = $this->db->sel($search,bcsub($p->page,1,0),$p->pagesize);
        
        $this->assign('page',$p->showpage());
        $this->assign('data',$res);
        $this->display('viewTenment','index.html');
    }

    //查询单条房子记录
    public function houseInfo(){
        $id=isset($_GET['id']) ? intval($_GET['id']) : 0;

        // id
        if ($id) {
            // 读取单条数据
            $data = $this->db->getInfo($id);
            $data['cid'] = $this->cdb->getCname($data['cid']);
            // assign
            $this->assign('data',$data);
        }
        // display
        $this->display('viewTenment','houseInfo.html');
        die;
    }

    public function detail_info(){
        //获取单条租房详细信息
        $id=isset($_GET['id']) ? intval($_GET['id']) : 0;
        //读取职业顾问
        $pcData = $this->pcdb->selpc();
        // assign
        $this->assign('pcData',$pcData);
        $data = $this->db->sel_info($id);
        $this->assign('data',$data);
        $this->display('viewTenment','detail_info.html');
    }

    //审核房子
    public function check_info(){
        $status = isset($_POST['status'])?$_POST['status']:0;
        if($status == 2){
            $msg='审核未通过';
        }elseif($status == 3){
            $msg='审核通过';
        }
        $id = isset($_POST['id'])?$_POST['id']:0;
        if($this->db->check_house($status,$id)){
            echo json_encode(array('error'=>0,'msg'=>$msg));
        }else{
            echo json_encode(false);
        }
    }
}