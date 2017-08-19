<?php
namespace core;
// 开启session
session_start();
// 定义常用常量
define('IS_GET', isGet());
define('IS_POST', isPost());
define('IS_AJAX', isAjax());
/**
* 框架核心类
*/
class icunji{
  static public $classMap = array();
  public $assign = array();
  // 构造方法
  public function __construct() {
      //控制器初始化
      if(method_exists($this,'_initialize'))
          $this->_initialize();
  }

  // 跑起来
  static public function run(){
    // 初始化时间
    date_default_timezone_set("Asia/Chongqing");
    // 启动日志
    \core\lib\log::init();
    $route = new \core\lib\route();
    $ctrlClass = $route->ctrl;
    $action = $route->action;
    $ctrlfile = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
    $newctrlClass = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
    if (is_file($ctrlfile)) {
      include $ctrlfile;
      $ctrl = new $newctrlClass();
      $ctrl->$action();
      \core\lib\log::log('ctrl:'.$ctrlClass.'/'.'action:'.$action);
    }else{
      throw new \Exception("找不到控制器?".$ctrlClass);
    }
  }

  // load
  static public function load($class){
    // 自动加载类
    if (isset(self::$classMap[$class])) {
      return true;
    }else{
      $class = str_replace('\\', '/', $class);
      $file = ICUNJI . '/' . $class . '.php';
      if (is_file($file)) {
        include $file;
        self::$classMap[$class] = $class;
      }else{
        return false;
      }
    }
  }

  // assign
  public function assign($k,$v){
    $this->assign[$k] = $v;
  }

  // display
  public function display($folder,$file){
    $filepath = APP.'/views/'.$folder.'/'.$file;
    if (is_file($filepath)) {
      $loader = new \Twig_Loader_Filesystem(APP.'/views');
      $twig = new \Twig_Environment($loader, array(
          'cache' => ICUNJI.'/log',
          'debug' => DEBUG
      ));
      $template = $twig->load($folder.'/'.$file);
      $template->display($this->assign?$this->assign:array());
    }else{
      throw new \Exception("找不到模板文件?".$file);
    }
  }

}


