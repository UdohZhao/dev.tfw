<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\propertyConsultant;
use apps\admin\model\tenmentInfo;
class tenmentInfoCtrl extends baseCtrl{

    public $tcid;
    public $pcdb;
    public $thdb;
    public $id;

    // 构造方法
    public function _auto(){
        if (isset($_SESSION['userinfo']) == null) {
          echo "<script>alert('请登录进入');window.location.href='/admin/login/index'</script>";
          die;
      }elseif($_SESSION['userinfo']['type'] ==1){
            echo "<script>alert('没有权限');window.location.href='/admin/index/index'</script>";
            die;
        }
        $this->tcid = isset($_GET['tcid']) ? intval($_GET['tcid']) : 0;
        $this->assign('tcid',$this->tcid);
        $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $this->pcdb = new propertyConsultant();
        $this->thdb = new tenmentInfo();
    }
    public function add(){
        // Get
        if (IS_GET === true) {
            // 读取置业顾问
            $pcData = $this->pcdb->selpc();
            // assign
            $this->assign('pcData',$pcData);
            // display
            $this->display('tenmentInfo','add.html');
            die;
        }

        if(IS_AJAX === true){

            $data=$this->getData();
            $result=array();
            if($this->thdb->add($data))  {
                $result['error'] = 0;
            }else{

            }
            echo json_encode($result);
        }
    }

    private function getData(){
        $data=array();
        $data['tcid']=intval($_POST['tcid']);
        $data['pcid']=intval($_POST['pcid']);
        $data['tage']=htmlspecialchars($_POST['tage']);
        $data['area']=intval($_POST['area']);
        $data['orientation']=htmlspecialchars($_POST['orientation']);
        $data['htype']=htmlspecialchars($_POST['htype']);
        $data['ctime']=intval(time());
        $data['general_situation']=$_POST['general_situation'];
        $data['hconfig']=htmlspecialchars($_POST['hconfig']);
        return $data;
    }


    public function index(){
       
        if(IS_GET === true){
            

             $data = $this->thdb->sel_info($this->tcid);
                   
            $t = date("Y-m-d H:i",$data['ctime']);
            // date ("Y-m-d H:i:s")
            // assign
            $pcInfo = $this->pcdb->getInfo($data['pcid']);
            $title = $this->thdb->title($this->tcid);
            $this->assign('title',$title);
            $this->assign('data',$data);
            $this->assign('ctime',$t);
            $this->assign('pcInfo',$pcInfo);
           //display
            $this->display('tenmentInfo','index.html');
            die;
        }
        
    }
    // public function index(){
    //     // 总记录数
    //     $cou = $this->db->cou();
    //     // 数据分页
    //     $page = isset($_GET['page']) ? $_GET['page'] : 1;
    //     $p = new Page($cou,conf::get('PAGES','admin'),$page,conf::get('LIMIT','admin'));
    //     // 结果集
    //     $data = $this->db->sel(bcsub($p->page,1,0),$p->pagesize);
    //   foreach($data as $k=>$v){
    //       //$str=preg_replace("/<(\html.*?)>/si","",$v['content']);
    //     $data[$k]['content']=mb_substr(trim(preg_replace("/<(\p.*?)>/si","",$v['content'])), 0,20).'...';
    //   }

    // $this->assign('data',$data);
    //     $this->assign('page',$p->showpage());
    //     $this->display('about','index.html');

        
    // }

}