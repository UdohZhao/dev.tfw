<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\viewUsedHouse;
use apps\admin\model\city;
use apps\admin\model\propertyConsultant;
use vendor\page\Page;
class viewUsedHouseCtrl extends baseCtrl{
    public $db;
    public $cdb;
    public $pcdb;
    public function _auto(){
        if($_SESSION['userinfo']['type'] !=1 && $_SESSION['userinfo']['type'] !=0){
            echo "<script>alert('没有权限');window.location.href='/admin/index/index'</script>";
            die;
        }
        $this->db = new viewUsedHouse();
        $this->pcdb = new propertyConsultant();
        $this->cdb = new city();
    }
    //查询表
    public function index(){

        //获取数据条数
        $search=isset($_GET['search'])?$_GET['search']:'';
    
           //获取数据条数
        $show_price = isset($_POST['show_price']) ? htmlspecialchars($_POST['show_price']) : '';
      $cid = isset($_POST['cid']) ? htmlspecialchars($_POST['cid']) : '';
      $area = isset($_POST['area']) ? htmlspecialchars($_POST['area']) : '';
            $num = $this->db->sel_num();

        // 数据分页
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $p = new Page($num,conf::get('PAGES','admin'),$page,conf::get('LIMIT','admin'));

        //结果集
        $res = $this->db->sel(0,$search,bcsub($p->page,1,0),$p->pagesize,$show_price,$area,$cid);
        $this->assign('page',$p->showpage());
        $this->assign('data',$res);
        $this->display('viewUsedHouse','index.html');
    }
// 审核
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
               
                $data['slideshow'] = unserialize($data['slideshow']);
                // assign
                $this->assign('data',$data);
            }
            // display
            $this->display('viewUsedHouse','checkhouse.html');
            die;
        }
    }

    //新房详细信息
    public function houseDetail(){

        $id= isset($_GET['uhcid']) ? $_GET['uhcid'] : 0;
        $data = $this->db->sel_info($id);
        $tab = $data['selling_points'];
        $str = preg_replace("/<([a-z]+)[^>]*>/i","",$tab);
        $pcInfo = $this->pcdb->getInfo($data['pcid']);
        
        $this->assign('pcInfo',$pcInfo);
        $this->assign('data',$data);
        $this->assign('selling_points',$str);
        $this->display('viewUsedHouse','houseDetail.html');
    }


    //新房主力户型
    public function checkHouse(){

        // 获取配置信息（户型，产权类型，房屋类型，物业类型）

        $htype = conf::get('HTYPE','admin');
        $prtype = conf::get('PRTYPE','admin');
        $this->assign('htype',$htype);
        $this->assign('prtype',$prtype);

        $id=isset($_GET['uhcid']) ? $_GET['uhcid'] : 0;

        $data = $this->db->getInfo($id);

        $data['cid'] = $this->cdb->getCname($data['cid']);
        $data['htype'] = explode(',', $data['htype']);
        $data['slideshow']=unserialize($data['slideshow']);
        // assign
        $this->assign('data',$data);
        $this->display('viewUsedHouse','checkHouse.html');
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