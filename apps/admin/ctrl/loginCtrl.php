<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use Gregwar\Captcha\CaptchaBuilder;
use apps\admin\model\adminUser;
class loginCtrl extends \core\icunji{
  public $db;
  // 构造方法
  public function _initialize(){
    $this->db = new adminUser();
    $this->assign('username',isset($_COOKIE['username']) ? $_COOKIE['username'] : '');
    // session
    if (isset($_SESSION['userinfo'])) {
      header('Location:/admin/index/index');
      die;
    }
    // 后台名称模版输出
    $this->assign('websiteName',conf::get('WEBSITE_NAME','admin'));
  }

  // 登录页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('login','index.html');
      die;
    }
    // Ajax
    if (IS_AJAX === true) {
      // data
      $data = $this->getData();
      if (isset($_POST['remember']) && $_POST['remember'] == 1) {
         setcookie('username',$data['username'],time()+3600);
      } else {
        setcookie('username',$data['username'],time()-3600);
      }
      // 核对用户名和密码
      $res = $this->db->checkUser($data);
      if ($res === false) {
        echo json_encode(false);
        die;
      } else {
        if ($res['status'] == 1) {
          echo json_encode(1);
          die;
        }
        // 用户信息存入session
        $_SESSION['userinfo'] = $res;
        echo json_encode(true);
        die;
      }
    }
  }

  // 初始化数据
  private function getData(){
    $data = array();
    $data['username'] = htmlspecialchars($_POST['username']);
    $data['password'] = enPassword(htmlspecialchars($_POST['password']));
    return $data;
  }

  // 验证码图片
  public function verifyImg(){
    // Get
    if (IS_GET === true) {
     $captcha = new CaptchaBuilder();
     $captcha->build()->output();
     $_SESSION['verifyCode'] = $captcha->getPhrase();
    }
  }

  // 核对验证码
  public function checkCode(){
    // Ajax
    if (IS_AJAX === true) {
      // 获取用户输入的验证码
      $code = $_POST['code'];
      if ($code == $_SESSION['verifyCode']) {
        unset($_SESSION['verifyCode']);
        echo 'true';
        die;
      } else {
        echo 'false';
      }
    }
  }

}