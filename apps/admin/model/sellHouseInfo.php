<?php
namespace apps\admin\model;
use core\lib\model;
class sellHouseInfo extends model{
    public $table='sell_house_info';
    //查询卖列表

    public function sel($status,$community,$selling_price,$area){
        if($community){
        $title =  " community like '%$community%' ";
      }elseif($area){
        $title = " area = $area ";
      }elseif($selling_price){
        $title = " selling_price = '$selling_price' ";
      }else{
        $title = "status=$status";
      }
        $sql = "SELECT * FROM $this->table WHERE status=$status AND $title  ";
        return $this->query($sql)->fetchAll(2);
// ORDER BY     ctime DESC   LIMIT      $currPage , $subPages
    }
 // cou
  public function cou($status,$search=''){
        $where = ['status'=>$status];
    return $this->count($this->table,$where); 
  }
     //修改已读状态
    public function up_status($id){
        $res = $this->update($this->table,['status'=>1],['id'=>$id]);
        return $res->rowCount();
    }
    
    //获取满足条件的记录数
    public function sel_num($status,$search=''){
        if($search){
            $where=['AND'=>['community[~]'=>$search,'status'=>$status]];
        }else{
            $where=['status'=>$status];
        }
        return $this->count($this->table,$where);
    }

}