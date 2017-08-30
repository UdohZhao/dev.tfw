<?php
namespace apps\home\ctrl;
use apps\home\model\newhouseCatalog;
use apps\home\model\demoModel;
class newhouseCtrl extends baseCtrl{
  // 构造方法
  public $db;
  public function _auto(){
  $this->db = new newhouseCatalog();
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
    
   $data = $this->db->sel1();
var_dump($data);
die;
      // 数据赋值给返回结果
      $res['data'] = $data;
      

      echo json_encode($res,true);
      // echo json_encode($_POST,true);

      die;
  }

}