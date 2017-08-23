<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\propertyConsultant;
use apps\admin\model\usedHouseInfo;
class usedHouseInfoCtrl extends baseCtrl{

    public $uhcid;
    public $pcdb;
    public $uhdb;
    public $id;

    // 构造方法
    public function _auto(){
        if($_SESSION['userinfo']['type'] !=3 && $_SESSION['userinfo']['type'] !=0){
            echo "<script>alert('没有权限');window.location.href='/admin/index/index'</script>";
            die;
        }
        $this->uhcid = isset($_GET['uhcid']) ? intval($_GET['uhcid']) : 0;
        $this->assign('uhcid',$this->uhcid);
        $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $this->pcdb = new propertyConsultant();
        $this->uhdb = new usedHouseInfo();
    }
    public function add(){
        // Get
        if (IS_GET === true) {
            // 读取置业顾问
            $pcData = $this->pcdb->selpc();
            // assign
            $this->assign('pcData',$pcData);
            // display
            $this->display('usedHouseInfo','add.html');
            die;
        }

        if(IS_AJAX === true){
            $data=$this->getData();
            $result=array();
          if($this->uhdb->add($data))  {
              $result['error'] = 0;
          }else{

          }
          echo json_encode($result);
        }
    }

    private function getData(){
        $data=array();
        $data['uhcid']=intval($_POST['uhcid']);
        $data['pcid']=intval($_POST['pcid']);
        $data['tage']=htmlspecialchars($_POST['tage']);
        $data['orientation']=htmlspecialchars($_POST['orientation']);
        $data['unit_price']=htmlspecialchars($_POST['unit_price']);
        $data['type']=htmlspecialchars($_POST['type']);
        $data['upfitter']=htmlspecialchars($_POST['upfitter']);
        $data['ctime']=intval(time());
        $data['rail_transit']=htmlspecialchars($_POST['rail_transit']);
        $data['community']=htmlspecialchars($_POST['community']);
        $data['selling_points']=$_POST['selling_points'];
        $data['era']=htmlspecialchars($_POST['era']);
        return $data;
    }


    public function index(){
        if(IS_GET === true){
            $pcData = $this->pcdb->selpc();
            // assign
            $this->assign('pcData',$pcData);
            if($this->id){
                //获取该条房的详细信息
                $this->assign('uhcid',$this->id);
                $data = $this->uhdb->sel_info($this->id);
                $this->assign('data',$data);
            }
            $this->display('usedHouseInfo','index.html');
            die;
        }

        if(IS_AJAX === true){
            $update_data=$this->getData();
            $re = $this->uhdb->update_info($this->id,$update_data);
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