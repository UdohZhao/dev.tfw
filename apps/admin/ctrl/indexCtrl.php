<?php
namespace apps\admin\ctrl;
use core\lib\conf;
class indexCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // 默认控制器的默认方法
  public function index(){
    // Get
    if (IS_GET === true) {
      $this->display('index','index.html');
      die;
    }
  }

  // 退出
  public function logout(){
    // Get
    if (IS_GET === true) {
      unset($_SESSION['userinfo']);
      header('Location:/admin/login/index');
      die;
    }
  }

}