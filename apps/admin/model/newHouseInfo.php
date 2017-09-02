<?php
namespace apps\admin\model;
use core\lib\model;
class newHouseInfo extends model{
  public $table = 'new_house_info';
  public $tables = 'new_house_catalog';
  
  // add
  public function add($data){
    $res = $this->insert($this->table,$data);
    return $this->id();
  }

  // sel
  public function sel($search,$limit){
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
                username like '%$search%'
        {$limit}
    ";
    $data = $this->query($sql)->fetchAll();
    return $data;
  }

  // getInfo
  public function getInfo($nhcid){
    return $this->get($this->table,'*',['nhcid'=>$nhcid]);
  }

  // catalog
  public function catalog($nhcid){
    return $this->get($this->tables,'*',['id'=>$nhcid]);
  }
  
  // ePass
  public function ePass($id,$password){
    $res = $this->update($this->table,['password'=>$password],['id'=>$id]);
    return $res->rowCount();
  }

  // upStatus
  public function upStatus($id,$status){
    $res = $this->update($this->table,['status'=>$status],['id'=>$id]);
    return $res->rowCount();
  }

  // del
  public function del($id){
    $res = $this->delete($this->table,['id'=>$id]);
    return $res->rowCount();
  }

  // cou
  public function cou(){
    return $this->count($this->table);
  }

  // 删除新房相关记录
  public function delnhcid($nhcid){
    $res = $this->delete($this->table,['nhcid'=>$nhcid]);
    return $res->rowCount();
  }

}

