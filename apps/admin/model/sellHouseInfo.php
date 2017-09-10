<?php
namespace apps\admin\model;
use core\lib\model;
class sellHouseInfo extends model{
    public $table='sell_house_info';
    //查询卖房列表

     // sel
  public function sel($type,$auid,$status,$currPage,$subPages,$community,$selling_price,$area){

       if($community){
        $title =  " community like '%$community%' ";
      }elseif($area){
        $title = " area = $area ";
      }elseif($selling_price){
        $title = " selling_price = '$selling_price' ";
      }else{
        $title = "status=$status";
      }
      $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
                status=$status
        AND
               $title
        ORDER BY
                id DESC
        LIMIT
                $currPage , $subPages
    ";
    return $this->query($sql)->fetchAll();
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

    /**
     * 读取详细信息
     */
    public function getHouseImg($id){
      return $this->get($this->table,'house_img',['id'=>$id]);
    }

}