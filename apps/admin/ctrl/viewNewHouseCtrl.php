<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\viewNewHouse;
use apps\admin\model\city;
use apps\admin\model\propertyConsultant;
use apps\admin\model\newHouseCatalog;
use vendor\page\Page;
class viewNewHouseCtrl extends baseCtrl{
    public $db;
    public $cdb;
    public $pcdb;
    public $nhcdb;
    public function _auto(){
        if($_SESSION['userinfo']['type'] !=1 && $_SESSION['userinfo']['type'] !=0){
            echo "<script>alert('没有权限');window.location.href='/admin/index/index'</script>";
            die;
        }
        $this->db=new viewNewHouse();
        $this->cdb=new city();
        $this->pcdb = new propertyConsultant();
        $this->nhcdb = new newHouseCatalog();
    }
    //查询列表
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
        $this->display('viewNewHouse','index.html');
    }

    public function view_house(){


        if (IS_GET === true) {
            $id=isset($_GET['id']) ? intval($_GET['id']) : 0;


            // 获取配置信息（户型，产权类型，房屋类型，物业类型）
            $htype = conf::get('HTYPE','admin');
            $prtype = conf::get('PRTYPE','admin');
            $house_type = conf::get('HOUSE_TYPE','admin');
            $ptype = conf::get('PTYPE','admin');

            $this->assign('htype',$htype);
            $this->assign('prtype',$prtype);
            $this->assign('house_type',$house_type);
            $this->assign('ptype',$ptype);
            // id
            if ($id) {
                // 读取单条数据
                $data = $this->db->getInfo($id);
                $data['cid'] = $this->cdb->getCname($data['cid']);
                $data['htype'] = explode(',', $data['htype']);
                $data['ptype'] = explode(',', $data['ptype']);
                $data['slideshow'] = unserialize($data['slideshow']);
                // assign...
                $this->assign('data',$data);
            }
            // display
            $this->display('viewNewHouse','houseDetail.html');
            die;
        }
    }

    //查看详情
    public function houseInfo(){
        if (IS_GET === true) {
            // 读取详细信息
            $nhcid=isset($_GET['nhcid']) ? intval($_GET['nhcid']) : 0;
            $data = $this->db->getHouseInfo($nhcid);
            if(!$data){
                $this->assign('data','');
                $this->display('viewNewHouse','house_info.html');
                die;
            }
            $data['k'] = unserialize($data['k']);
            $data['v'] = unserialize($data['v']);
            // 读取新房条目名称
            $title = $this->nhcdb->getTitle($data['nhcid']);
            // 读取相关置业顾问信息
            $pcInfo = $this->pcdb->getInfo($data['pcid']);
            // assign
            $this->assign('data',$data);
            $this->assign('title',$title);
            $this->assign('pcInfo',$pcInfo);
            // display
            $this->display('viewNewHouse','house_info.html');
            die;
        }
    }

    //查看主力户型
    public function mainUser(){
        // 读取主力户型

        $nhcid=isset($_GET['nhcid']) ? intval($_GET['nhcid']) : 0;

        $data = $this->db->sel_main($nhcid);

        // 读取新房条目名称
        $title = $this->nhcdb->getTitle($nhcid);
        // assign
        $this->assign('data',$data);

        $this->assign('title',$title);
        // display
        $this->display('viewNewHouse','main_user.html');
        die;
    }

    //审核房子
    public function checkHouse(){
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