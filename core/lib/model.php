<?php
namespace core\lib;
use core\lib\conf;
/**
* 模型类
*/
class model extends \Medoo\Medoo
{
  public function __construct()
  {
    // 读取数据库配置项
    $option = conf::all('database');
    parent::__construct($option);
  }

}