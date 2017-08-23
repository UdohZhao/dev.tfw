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
        if($_SESSION['userinfo']['type'] !=2 && $_SESSION['userinfo']['type'] !=0 ){
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
            $pcData = $this->pcdb->selpc();
            // assign
            $this->assign('pcData',$pcData);
            if($this->id){
                //获取该条房的详细信息
                $this->assign('tcid',$this->id);
                $data = $this->thdb->sel_info($this->id);
                $this->assign('data',$data);
            }
            $this->display('tenmentInfo','index.html');
            die;
        }

        if(IS_AJAX === true){
            $update_data=$this->getData();
            if($this->thdb->sel_info($this->id)){
                $re = $this->thdb->update_info($this->id,$update_data);
            }else{
                $re = $this->thdb->add($update_data);
            }

            $result=array();
            if($re){
                $result['error'] = 401;
            }else{
                $result['error'] = false;
            }
            echo json_encode($result);
        }
    }
}