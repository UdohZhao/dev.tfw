<?php
namespace apps\admin\model;
use core\lib\model;
class tenmentCatalog extends model{
    public $table='tenement_catalog';# 租房条目表
    public $tables = 'tenement_info';# 租房详细信息表
    // getInfo
    public function getInfo($id){
        return $this->get($this->table,'*',['id'=>$id]);
    }

    // 获取id
    public function getId($title){
        return $this->get($this->table,'id',['title'=>$title]);
    }
    // 租房
  public function upztype($id,$type){
     $res = $this->update($this->table,['type'=>$type],['id'=>$id]);
    return $res->rowCount();
  }
    // save
    public function save($id,$data){
        $res = $this->update($this->table,$data,['id'=>$id]);
        return $res->rowCount();
    }

    // add
    public function add($data){
        $res = $this->insert($this->table,$data);
        return $this->id();
    }
    //qwe
    public function qwe($area){
        $sql = " SELECT tcid FROM $this->tables WHERE area=$area ";
        return $this->query($sql)->fetchAll(2);
    }
    // del
    public function del($id){
        $res = $this->delete($this->table,['id'=>$id]);
        return $res->rowCount();
    }
    //查询租房列表

    public function sel($type,$auid,$status,$currPage,$subPages,$show_rent,$area,$cid){
        if($type==0){
            $where='';
        }else{
            $where=" AND uh.auid = '$auid'";
        }
        if($show_rent){
        $title = " uh.show_rent like '%$show_rent%' ";
        }elseif($area){
        $title = " q.area=$area";
        }elseif($cid){
        $title = " C.cname = '$cid' ";
        }else{
        $title = " uh.status = $status";
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
        LEFT JOIN        
                `tenement_info` AS q
        ON           
                 uh.id=q.tcid      
       
        WHERE
                1 = 1
        AND 
                uh.status = $status
                
                $where
       and   $title
               
        ORDER BY
                uh.ctime DESC
        LIMIT
                $currPage , $subPages
    ";
        return $this->query($sql)->fetchAll();
    }

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