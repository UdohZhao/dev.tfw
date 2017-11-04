<?php
namespace apps\admin\model;
use core\lib\model;
class usedHouseCatalog extends model{
    public $table='used_house_catalog';
    // getInfo
    public function getInfo($id){
        return $this->get($this->table,'*',['id'=>$id]);
    }

    // 获取id
    public function getId($title){
        return $this->get($this->table,'id',['title'=>$title]);
    }

    // save
    public function save($id,$data){
        $res = $this->update($this->table,$data,['id'=>$id]);
        return $res->rowCount();
    }
// 二手房
  public function upstype($id,$type){
    $res = $this->update($this->table,['type'=>$type],['id'=>$id]);
    return $res->rowCount();
  }
    // add
    public function add($data){
        $res = $this->insert($this->table,$data);
        return $this->id();
    }

    // del
    public function del($id){
        $res = $this->delete($this->table,['id'=>$id]);
        return $res->rowCount();
    }
    //查询二手房列表

    public function sel($type,$auid,$status,$currPage,$subPages,$show_price,$area,$cid){
        if($type==0){
            $where=' ';
        }else{
            $where=" AND uh.auid = '$auid'";
        }

      if($show_price){
        $title = " uh.show_price like '%$show_price%' ";
      }elseif($area){
        $title = " uh.area = $area ";
      }elseif($cid){
        $title = "  C.cname = '$cid' ";
      
      }else{
        $title = "uh.status = $status";
      }
        $sql = "
        SELECT
                uh.*,C.cname AS cityname
        FROM
                `$this->table` AS uh
        LEFT JOIN
                `city` AS C
        ON
                uh.cid = C.id               
        WHERE
                1 = 1
        AND 
                uh.status = $status
                $where       
        AND
                $title
        ORDER BY
                uh.ctime DESC
        LIMIT
                $currPage , $subPages
    ";
        return $this->query($sql)->fetchAll();
    }
  // public function selling($search){
  //       $sql = "SELECT community,cid,area,show_price FROM $this->table WHERE community like '%$search%'  or cid like '%$search%' or area like '%$search%' or show_price like '%$search%' " ;  
  //       return $this->query($sql)->fetchAll();
  //           }
    //获取满足条件的记录数
    public function sel_num($status,$search=''){
        if($search){
            $where=['AND'=>['title[~]'=>$search,'status'=>$status]];
        }else{
            $where=['status'=>$status];
        }
        return $this->count($this->table,$where);
    }
 //修改审核状态
    public function up_status($status,$id){
        $res = $this->update($this->table,['status'=>$status],['id'=>$id]);
        return $res->rowCount();
    }
}