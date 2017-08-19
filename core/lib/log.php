<?php
namespace core\lib;
use core\lib\conf;
/**
* 日志类
*/
class log
{
  static public $class;
  // 初始化日志
  static public function init(){
    // 确定存储方式
    $drive = conf::get('DRIVE','log');
    $class = '\core\lib\drive\log\\'.$drive;
    self::$class = new $class;
  }
  // 调用日志
  static public function log($name,$file='log'){
    self::$class->log($name,$file);
  }

}

