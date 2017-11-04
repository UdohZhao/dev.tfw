<?php
namespace apps\admin\model;
use core\lib\model;
class city extends model{
  public $table = 'city';
  // add
  public function add($data){
    $res = $this->insert($this->table,$data);
    return $this->id();
  }

  // save
  public function save($id,$data){
    $res = $this->update($this->table,$data,['id'=>$id]);
    return $res->rowCount();
  }

  // sel
  public function sel($pid,$search,$limit){
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
                pid = '$pid'
        AND
                cname like '%$search%'
        ORDER BY
                sort ASC
        {$limit}
    ";
    $data = $this->query($sql)->fetchAll();
    return $data;
  }

  // getInfo
  public function getInfo($id){
    return $this->get($this->table,'*',['id'=>$id]);
  }

  // del
  public function del($id){
    $res = $this->delete($this->table,['id'=>$id]);
    return $res->rowCount();
  }

  // cou
  public function cou($id){
    return $this->count($this->table,['pid'=>$id]);
  }

  // getId
  public function getId($cname){
    return $this->get($this->table,'id',['cname'=>$cname]);
  }

  // upStatus
  public function upStatus($id,$status){
    $res = $this->update($this->table,['status'=>$status],['id'=>$id]);
    return $res->rowCount();
  }

  // getCname
  public function getCname($id){
    return $this->get($this->table,'cname',['id'=>$id]);
  }

  // 查询城市id
  public function getCity($pid,$cname){
    return $this->get($this->table,'id',['pid'=>$pid,'cname'=>$cname,'status'=>'0']);
  }


}

