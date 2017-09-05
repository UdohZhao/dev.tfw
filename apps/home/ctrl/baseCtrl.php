<?php
namespace apps\home\ctrl;
class baseCtrl extends \core\icunji{
  // 构造方法
  public function _initialize(){
    //控制器初始化
    if(method_exists($this,'_auto'))
        $this->_auto();
  }

}