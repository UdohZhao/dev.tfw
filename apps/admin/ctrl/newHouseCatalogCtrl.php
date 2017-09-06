<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\city;
use apps\admin\model\houseCategory;
use apps\admin\model\newHouseCatalog;
use apps\admin\model\newHouseInfo;
use apps\admin\model\newHouseMain;
use vendor\page\Page;
class newHouseCatalogCtrl extends baseCtrl{
  public $cdb;
  public $hcdb;
  public $db;
  public $nhidb;
  public $nhmdb;
  public $id;
  // 构造方法
  public function _auto(){
      if($_SESSION['userinfo']['type'] !=0 && $_SESSION['userinfo']['type'] !=2 ){
          echo "<script>alert('没有权限');window.location.href='/admin/index/index'</script>";
          die;
      }
    $this->cdb = new city();
    $this->hcdb = new houseCategory();
    $this->db = new newHouseCatalog();
    $this->nhidb = new newHouseInfo();
    $this->nhmdb = new newHouseMain();
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
  }

  // 添加新房条目页面
  public function add(){
    // Get
    if (IS_GET === true) {
      // 获取北京主键id
      $pid = $this->cdb->getId('北京');

      // 获取新房主键id
      $hcid = $this->hcdb->getId('新房');

      // 获取配置信息（户型，产权类型，房屋类型，物业类型）
      $htype = conf::get('HTYPE','admin');
      $prtype = conf::get('PRTYPE','admin');
      $house_type = conf::get('HOUSE_TYPE','admin');
      $ptype = conf::get('PTYPE','admin');
      // assign
      $this->assign('pid',$pid);
      $this->assign('hcid',$hcid);
      $this->assign('htype',$htype);
      $this->assign('prtype',$prtype);
      $this->assign('house_type',$house_type);
      $this->assign('ptype',$ptype);
      // id
      if ($this->id) {
        // 读取单条数据
        $data = $this->db->getInfo($this->id);
        $data['cid'] = $this->cdb->getCname($data['cid']);
        $data['ptype'] = explode(',', $data['ptype']);
        // assign
        $this->assign('data',$data);
      }
      // display
      $this->display('newHouseCatalog','add.html');
      die;
    }
    // Ajax
    if (IS_AJAX === true) {
      // result
      $result = array();
      $result['error'] = 2;
      $result['msg'] = '';
      // 轮播图
      $slideshow = isset($_SESSION['uploadPath']['slideshow']) ? $_SESSION['uploadPath']['slideshow'] : '';
      if ($slideshow == '' && $this->id == 2) {
        $result['error'] = 201;
        $result['msg'] = '请上传轮播图 :(';
        echo json_encode($result);
        die;
      }

      // data
      $data = $this->getData($slideshow);
        if ($slideshow == '' && $this->id != 0) {
            unset($data['slideshow']);
        }
      // 防止重复添加
      $id = $this->db->getId($data['title']);
      if ($id) {
        // id
        if ($this->id) {
          if ($this->id != $id) {
            $result['error'] = 202;
            $result['msg'] = '请勿重复添加 :(';
            echo json_encode($result);
            die;
          }
        } else {
          $result['error'] = 202;
          $result['msg'] = '请勿重复添加 :(';
          echo json_encode($result);
          die;
        }
      }
      // id
      if ($this->id) {
        // 更新数据表
        $res = $this->db->save($this->id,$data);
      } else {
        // 写入数据表
        $res = $this->db->add($data);
      }
      if ($res) {
        unset($_SESSION['uploadPath']);
        // id
        if ($this->id) {
          $result['error'] = 401;
        }
        $result['msg'] = $res;
      } else {
        $result['error'] = 1;
        $result['msg'] = '请尝试刷新页面后重试 :(';
      }
      echo json_encode($result);
      die;
    }
  }

public function update(){
     if(IS_GET === true){
      $qwe = $this->nhmdb->getInfo($this->id);

      $this->assign('date',$qwe);
     }

     $this->display('newHouseCatalog','and.html');
die;

}
  // 初始化数据
  private function getData($slideshow){
    // data
    $data = array();
    $data['hcid'] = $_POST['hcid'];
    $data['cid'] = $this->cdb->getId($_POST['cid']);
    $data['auid'] = $this->userinfo['id'];
    $data['slideshow'] = serialize($slideshow);
    $data['title'] = htmlspecialchars($_POST['title']);
    $data['community'] = htmlspecialchars($_POST['community']);
    $data['price'] = intval($_POST['price']);
    $data['show_price'] = htmlspecialchars($_POST['show_price']);
    $data['trait'] = htmlspecialchars($_POST['trait']);
    $data['htype'] = implode(',', $_POST['htype']);
    $data['prtype'] = intval($_POST['prtype']);
    $data['area'] = intval($_POST['area']);
    $data['house_type'] = intval($_POST['house_type']);
    $data['ptype'] = implode(',', $_POST['ptype']);
    $data['address'] = htmlspecialchars($_POST['address']);
    $data['ctime'] = time();
    $data['remark'] = '';
    $data['status'] = 0;
    $data['type'] = 0;
    return $data;
  }

  // 新房条目列表
  public function index(){

      // 获取状态
      $status = isset($_GET['status']) ? intval($_GET['status']) : 0;
      // search 搜索条件
      $show_price = isset($_POST['show_price']) ? htmlspecialchars($_POST['show_price']) : '';
      $htype = isset($_POST['htype']) ? htmlspecialchars($_POST['htype']) : '';
      $cid = isset($_POST['cid']) ? htmlspecialchars($_POST['cid']) : '';

      $area = isset($_POST['area']) ? htmlspecialchars($_POST['area']) : '';

      //获取数据条数
      $num = $this->db->cou($status);
      // 数据分页
      $page = isset($_GET['page']) ? $_GET['page'] : 1;
      $p = new Page($num,conf::get('PAGES','admin'),$page,conf::get('LIMIT','admin'));

    // 获取新房主键id
    $hcid = $this->hcdb->getId('新房');
    // 结果集
    //$data = $this->db->sel($hcid,$this->userinfo['id'],$status);
      $data = $this->db->sel($hcid,$this->userinfo['type'],$this->userinfo['id'],$status,bcsub($p->page,1,0),$p->pagesize,$show_price,$area,$htype,$cid);
      
    // assign
    $this->assign('data',$data);
    $this->assign('status',$status);
    $this->assign('page',$p->showpage());
    // display
    $this->display('newHouseCatalog','index.html');
    die;
  }

  public function select(){

      $status = isset($_GET['status']) ? intval($_GET['status']) : 0;
      //获取数据条数
   
      $search=isset($_POST['search'])?$_POST['search']:'';
      if(trim($search)){
          $num  = $this->db->cou($status,$_POST['search']);
      }else{
          $num = $this->db->cou($status);
      }
   
    $data = $this->db->selling($search,$status);
   var_dump($data);
   die;
    }

  // flag
  public function flag(){
    // Ajax
    if (IS_AJAX === true) {
      // status
      $status = intval($_POST['status']);
      // update
      $res = $this->db->upStatus($this->id,$status);
      if ($res) {
        echo json_encode(true);
        die;
      } else {
        echo json_encode(false);
        die;
      }
    }
  }

  // del
  public function del(){
    // Ajax
    if (IS_AJAX === true) {
      // delete
      $res = $this->db->del($this->id);
      if ($res) {
        $this->nhidb->delnhcid($this->id);
        $this->nhmdb->delnhcid($this->id);
        echo json_encode(true);
        die;
      } else {
        echo json_encode(false);
        die;
      }
    }
  }

  //提交审核
    public function commit_status()
    {
        $status = isset($_GET['status']) ? $_GET['status'] : 0;
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        if ($this->db->up_status($status, $id)) {
            echo json_encode(true);
        } else {
            echo json_encode(false);
        }
    }

}