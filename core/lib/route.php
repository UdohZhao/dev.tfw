<?php
namespace core\lib;
use core\lib\conf;
/**
* 路由类
*/
/**
*
*/
class route
{
  public $ctrl;
  public $action;
  public function __construct()
  {
    if (isset($_SERVER['REDIRECT_URL']) && $_SERVER['REDIRECT_URL'] != '/') {
      $path = $_SERVER['REDIRECT_URL'];
      $patharr = explode('/', trim($path,'/'));
      if( $patharr[0] != 'home' && $patharr[0] != 'admin' && $patharr[0] != 'wap' && $patharr[0] != 'wechat' && $patharr[0] != 'weapp' ){
        array_unshift($patharr, 'home');
      }
      if (isset($patharr[1])) {
        $this->ctrl = $patharr[1];
      }
      unset($patharr[1]);
      if (isset($patharr[2])) {
        $this->action = $patharr[2];
        unset($patharr[2]);
      }else{
        $this->action = conf::get('ACTION','route');
      }
      unset($patharr[0]);
      // 参数
      $count = bcadd(count($patharr), 2, 0);
      $i = 3;
      while ($i < $count) {
        if (isset($patharr[bcadd($i, 1, 0)])) {
          $_GET[$patharr[$i]] = $patharr[bcadd($i, 1, 0)];
        }
        $i = bcadd($i, 2, 0);
      }
    }else{
      $this->ctrl = conf::get('CTRL','route');
      $this->action = conf::get('ACTION','route');
    }
  }

}