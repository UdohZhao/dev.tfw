<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
class indexCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // demo 
  public function demo(){
    // 返回结果
    $res = array();
    $res['code'] = 200;  // 200属于正常，400往上都属于异常
    $res['msg'] = ''; // 提示信息
    $res['data'] = array(); // 数据
    $res['total_page'] = 3; // 总页数
    // 模拟数据
    $data = array();
    $data['0'] = array(
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => '特点',
          'title' => '标题1'
      );
      $data['1'] = array(
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => '特点',
          'title' => '标题2'
      );
      $data['2'] = array(
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => '特点',
          'title' => '标题3'
      );
      $data['3'] = array(
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => '特点',
          'title' => '标题4'
      );
      $data['4'] = array(
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => '特点',
          'title' => '标题5'
      );
      $data['5'] = array(
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => '特点',
          'title' => '标题6'
      );
      $data['6'] = array(
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => '特点',
          'title' => '标题7'
      );
      $data['7'] = array(
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => '特点',
          'title' => '标题8'
      );
      $data['8'] = array(
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => '特点',
          'title' => '标题9'
      );
      $data['9'] = array(
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => '特点',
          'title' => '标题10'
      );
      $data['10'] = array(
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => '特点',
          'title' => '标题11'
      );
      $data['11'] = array(
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => '特点',
          'title' => '标题12'
      );
      $data['12'] = array(
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => '特点',
          'title' => '标题13'
      );
      $data['13'] = array(
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => '特点',
          'title' => '标题14'
      );
      $data['14'] = array(
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => '特点',
          'title' => '标题15'
      );
  
    

    // 数据赋值给返回结果
    $res['data'] = $data;

    echo json_encode($res,true);
    die;

  }
  public function demo2(){

  }

  // 默认首页
  public function index(){
    // Get
      $res = array();
      $res['code'] = 200;  // 200属于正常，400往上都属于异常
      $res['msg'] = ''; // 提示信息
      $res['data'] = array(); // 数据
      // data
      $data = array();
      


    // 数据赋值给返回结果
    $res['data'] = $data;
      echo json_encode($res,true);
      die;
  }

    public function test(){

        $this->display('index','test.html');
    }

    public function save(){
        var_dump($_FILES);
    }

}

