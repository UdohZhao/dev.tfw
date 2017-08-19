<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\city;
use apps\admin\model\houseCategory;
use apps\admin\model\tenmentCatalog;
use vendor\page\Page;
class tenmentCatalogCtrl extends baseCtrl{
    public $cdb;
    public $id;
    public $hcdb;
    public $db;

    // 构造方法
    public function _auto(){
        $this->cdb = new city();
        $this->db=new tenmentCatalog();
        $this->hcdb = new houseCategory();

        $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    }
    public function add(){
        if (IS_GET === true) {
            $pid = $this->cdb->getId('北京');
            // 获取二手房主键id
            $hcid = $this->hcdb->getId('租房');

            // assign
            $this->assign('pid',$pid);
            $this->assign('hcid',$hcid);


            // display
            if ($this->id) {
                // 读取单条数据
                $data = $this->db->getInfo($this->id);
                $data['cid'] = $this->cdb->getCname($data['cid']);
                $data['htype'] = explode(',', $data['htype']);
                // assign
                $this->assign('data',$data);
            }
            $this->display('tenmentCatalog','add.html');
            die;
        }

        if (IS_AJAX === true) {
            // result
            $result = array();
            $result['error'] = 0;
            $result['msg'] = '';
            // 轮播图
            $slideshow = isset($_SESSION['uploadPath']['slideshow']) ? $_SESSION['uploadPath']['slideshow'] : '';
            if ($slideshow == '' && $this->id == 0) {
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
                if(isset($data['slideshow'])){
                    //若有照片更新
                    $info = $this->db->getInfo($this->id);
                    //先查询数据再更新
                    $path=unserialize($info['slideshow']);
                    foreach($path as $v){
                        unlink_file($v);
                    }
                }
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

    private function getData($slideshow){
        // data
        $data = array();
        $data['hcid'] = $_POST['hcid'];
        $data['cid'] = $this->cdb->getId($_POST['cid']);
        $data['auid'] = $this->userinfo['id'];
        $data['slideshow'] = serialize($slideshow);
        $data['title'] = htmlspecialchars($_POST['title']);
        $data['community'] = htmlspecialchars($_POST['community']);
        $data['rent'] = intval($_POST['rent']);
        $data['show_rent'] = htmlspecialchars($_POST['show_rent']);
        $data['house_type'] = htmlspecialchars($_POST['house_type']);
        $data['htype'] = intval($_POST['htype']);
        $data['dtype'] = htmlspecialchars($_POST['dtype']);
        $data['ctime'] = time();
        $data['remark'] = htmlspecialchars($_POST['remark']);
        $data['status'] = 0;
        $data['type'] = 0;
        return $data;
    }
}