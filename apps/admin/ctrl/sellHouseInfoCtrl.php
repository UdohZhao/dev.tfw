<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\sellHouseInfo;
use vendor\page\Page;
class sellHouseInfoCtrl extends baseCtrl{
    public $db;
    public function _auto(){

        $this->db = new sellHouseInfo();
    }
    public function index(){
        if(IS_GET === true){
            $status=isset($_GET['status'])?$_GET['status']:0;

            //获取数据条数
            $search=isset($_GET['search'])?$_GET['search']:'';
            if(trim($search)){
                $num  = $this->db->sel_num($status,$_GET['search']);
            }else{
                $num = $this->db->sel_num($status);
            }

            // 数据分页
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $p = new Page($num,conf::get('PAGES','admin'),$page,conf::get('LIMIT','admin'));

            //结果集
            $res = $this->db->sel($status,$search,bcsub($p->page,1,0),$p->pagesize);
            $this->assign('page',$p->showpage());
            $this->assign('data',$res);
            $this->assign('status',$status);
            $this->display('sellHouseInfo','index.html');
            die;
        }
    }
}
