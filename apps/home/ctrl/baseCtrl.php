<?php
namespace apps\home\ctrl;
class baseCtrl extends \core\icunji{
  // 构造方法
  public function _initialize(){
    //控制器初始化
    if(method_exists($this,'_auto'))
        $this->_auto();
  }

  /**
   * 图片上传
   */
  public function upload(){

    // 执行上传
    $res = upFiles('file');
    if ($res['code'] == 200) {
      echo J(R(200,'受影响的操作 :)',$res['data']));
      die;
    } else {
      echo J(R(400,'上传的文件不能超过1MB :(',false));
      die;
    }

  }

}