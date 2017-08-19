<?php
namespace apps\admin\model;
use core\lib\model;
class newHouseCatalog extends model{
  public $table = 'new_house_catalog';
  // checkUser
  public function checkUser($data){
    return $this->get($this->table,'*',['username'=>$data['username'],'password'=>$data['password']]);
  }

  // getUsername
  public function getUsername($username){
    return $this->count($this->table,['username'=>$username]);
  }

  // add
  public function add($data){
    $res = $this->insert($this->table,$data);
    return $this->id();
  }

  // sel
  public function sel($hcid,$auid,$status){
    // sql
    $sql = "
        SELECT
                NHC.* , C.cname AS cityname
        FROM
                `$this->table` AS NHC
        LEFT JOIN
                `city` AS C
        ON
                NHC.cid = C.id
        WHERE
                1 = 1
        AND
                NHC.hcid = '$hcid'
        AND
                NHC.auid = '$auid'
        AND
                NHC.status = '$status'
        ORDER BY
                NHC.ctime DESC
    ";
    return $this->query($sql)->fetchAll();
  }

  // getInfo
  public function getInfo($id){
    return $this->get($this->table,'*',['id'=>$id]);
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

  // getTitle
  public function getTitle($id){
    return $this->get($this->table,'title',['id'=>$id]);
  }

  // save
  public function save($id,$data){
    $res = $this->update($this->table,$data,['id'=>$id]);
    return $res->rowCount();
  }

  // 获取id
  public function getId($title){
    return $this->get($this->table,'id',['title'=>$title]);
  }

}

