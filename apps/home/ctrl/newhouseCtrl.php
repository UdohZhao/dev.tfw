<?php
namespace apps\home\ctrl;
use apps\home\model\demoModel;
class newhouseCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }
  public function demo(){
    $res=array();
    $res['data'] = array(); // 数据
    $data=array();
    $arr1['0']=array('id'=>'1','name'=>'东城');
    $arr1['1']=array('id'=>'2','name'=>'西城');
    $arr1['2']=array('id'=>'3','name'=>'朝阳');
    $arr1['3']=array('id'=>'4','name'=>'海淀');
    $arr1['4']=array('id'=>'5','name'=>'丰台');
    $arr1['5']=array('id'=>'6','name'=>'石景山');
    $arr1['6']=array('id'=>'7','name'=>'通州');
    $arr1['7']=array('id'=>'8','name'=>'大兴');
    $arr1['8']=array('id'=>'9','name'=>'怀柔');
    $arr1['9']=array('id'=>'10','name'=>'平谷');
    $arr1['10']=array('id'=>'11','name'=>'顺义');
    $arr1['11']=array('id'=>'12','name'=>'密云');
    $arr1['12']=array('id'=>'13','name'=>'延庆');
    $arr1['13']=array('id'=>'14','name'=>'房山');
    $arr1['14']=array('id'=>'15','name'=>'昌平');
    $arr1['15']=array('id'=>'16','name'=>'门头沟');
    $arr1['16']=array('id'=>'17','name'=>'固安');
    $arr1['17']=array('id'=>'18','name'=>'廊坊');
    $arr1['18']=array('id'=>'19','name'=>'香河');
    $arr1['19']=array('id'=>'20','name'=>'燕郊');
    $arr1['20']=array('id'=>'21','name'=>'涿州');
    $arr1['21']=array('id'=>'22','name'=>'雄安');
    $arr2['0']=array('id'=>'1','name'=>'6千以下');
    $arr2['1']=array('id'=>'2','name'=>'6千-1万');
    $arr2['2']=array('id'=>'3','name'=>'1-1.5万');
    $arr2['3']=array('id'=>'4','name'=>'1.5-2万');
    $arr2['4']=array('id'=>'5','name'=>'2-3万');
    $arr2['5']=array('id'=>'6','name'=>'3-4万');
    $arr2['6']=array('id'=>'7','name'=>'4-6万');
    $arr2['7']=array('id'=>'8','name'=>'6万以上');
    $arr3['0']=array('id'=>'1','name'=>'一室');
    $arr3['1']=array('id'=>'2','name'=>'二室');
    $arr3['2']=array('id'=>'3','name'=>'三室');
    $arr3['3']=array('id'=>'4','name'=>'四室');
    $arr3['4']=array('id'=>'5','name'=>'五室以上');
    $arr4['0']=array('id'=>'1','name'=>'回迁房');
    $arr4['1']=array('id'=>'2','name'=>'军产房');
    $arr4['2']=array('id'=>'3','name'=>'法拍房');
    $arr4['3']=array('id'=>'4','name'=>'福利房');
    $arr4['4']=array('id'=>'5','name'=>'小产权房');
    $arr4['5']=array('id'=>'6','name'=>'其他');
    $arr5['0']=array('id'=>'1','name'=>'60以下');
    $arr5['1']=array('id'=>'2','name'=>'60-80');
    $arr5['2']=array('id'=>'3','name'=>'80-100');
    $arr5['3']=array('id'=>'4','name'=>'100-120');
    $arr5['4']=array('id'=>'5','name'=>'120-150');
    $arr5['5']=array('id'=>'6','name'=>'150-200');
    $arr5['6']=array('id'=>'7','name'=>'200以上');
    $data=array($arr1,$arr2,$arr3,$arr4,$arr5);
      // 数据赋值给返回结果
      $res['data'] = $data;
      echo json_encode($res,true);
      die;
  }
  // 默认首页
  public function newhouse(){
    // Get
      $res = array();
      $res['code'] = 200;  // 200属于正常，400往上都属于异常
      $res['msg'] = ''; // 提示信息
      $res['totalpage'] = 3; // 数据长度
      $res['status'] = 1; // 数据长度
      $res['data'] = array(); // 数据
      // data
      $data = array();
      $data['0'] = array(
          'id' => '1',
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => array('特点35','特点36'),
          'title' => '标题1'
      );
      $data['1'] = array(
          'id' => '2',
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => array('特点33','特点34'),
          'title' => '标题2'
      );
      $data['2'] = array(
          'id' => '3',
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => array('特点31','特点32'),
          'title' => '标题3'
      );
      $data['3'] = array(
          'id' => '4',
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => array('特点29','特点30'),
          'title' => '标题4'
      );
      $data['4'] = array(
          'id' => '5',
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => array('特点27','特点28'),
          'title' => '标题5'
      );
      $data['5'] = array(
          'id' => '6',
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => array('特点25','特点26'),
          'title' => '标题6'
      );
      $data['6'] = array(
          'id' => '7',
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => array('特点23','特点24'),
          'title' => '标题7'
      );
      $data['7'] = array(
          'id' => '8',
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => array('特点21','特点22'),
          'title' => '标题8'
      );
      $data['8'] = array(
          'id' => '9',
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => array('特点19','特点20'),
          'title' => '标题9'
      );
      $data['9'] = array(
          'id' => '10',
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => array('特点17','特点18'),
          'title' => '标题10'
      );
      $data['10'] = array(
          'id' => '11',
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => array('特点15','特点16'),
          'title' => '标题11'
      );
      $data['11'] = array(
          'id' => '12',
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => array('特点13','特点14'),
          'title' => '标题12'
      );
      $data['12'] = array(
          'id' => '13',
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => array('特点11','特点12'),
          'title' => '标题13'
      );
      $data['13'] = array(
          'id' => '14',
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => array('特点9','特点10'),
          'title' => '标题14'
      );
      $data['14'] = array(
          'id' => '15',
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => array('特点7','特点8'),
          'title' => '标题15'
      );
      $data['15'] = array(
          'id' => '16',
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => array('特点5','特点6'),
          'title' => '标题16'
      );
      $data['16'] = array(
          'id' => '17',
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => array('特点3','特点4'),
          'title' => '标题17'
      );
      $data['17'] = array(
          'id' => '18',
          'slideshow' => '../../images/房子.png',
          'community' => '小区名称',
          'address' => '地址',
          'show_price' => '价格',
          'trait' => array('特点1','特点2'),
          'title' => '标题18'
      );

<<<<<<< HEAD
     $data = $this->db->sel1('$name','$cname');

     // foreach 
     foreach ($data AS $k => $v) {
       
        $data[$k]['slideshow'] =  unserialize($v['slideshow']);

        $data[$k]['slideshow'] = $data[$k]['slideshow'][0];

     }
     
      // 数据赋值给返回结果
      $res['data'] = $data;
      

      echo json_encode($res,true);
      // echo json_encode($_POST,true);

      die;
  }
  public function qwe(){
    // Get
      $res = array();
      $res['code'] = 200;  // 200属于正常，400往上都属于异常
      $res['msg'] = ''; // 提示信息
      $res['totalpage'] = 3; // 数据长度
      $res['status'] = 1; // 数据长度
      $res['data'] = array(); // 数据
      // data

     $data = $this->db->qwe('$id');
     var_dump($data);
     die;

   
=======
>>>>>>> 23dfe2aef2b63e257cd516b9c6c2c4faaf1541a8
      // 数据赋值给返回结果
      $res['data'] = $data;
      

      echo json_encode($res,true);
      // echo json_encode($_POST,true);

      die;
  }

}