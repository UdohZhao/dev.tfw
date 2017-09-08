<?php
namespace apps\admin\model;
use core\lib\model;
class newHouseMain extends model{
  public $table = 'new_house_main';
  public $tables = 'new_house_catalog';
  // checkUser
  public function checkUser($data){
    return $this->get($this->table,'*',['username'=>$data['username'],'password'=>$data['password']]);
  }

  // getUsername
  public function getUsername($username){
    return $this->count($this->table,['username'=>$username]);
  }
  //修改主力户型
    public function save($id,$data){
        $res = $this->update($this->table,$data,['id'=>$id]);
        return $res->rowCount();
    }
     //dle
  public function dle($id){
    $res = $this->delete($this->table,['id'=>$id]);
    return $res->rowCount();
  }
  // add
  public function add($data){
    $res = $this->insert($this->table,$data);
    return $this->id();
  }
  //获取status
    public function status($nhcid){
      $sql = " SELECT status FROM $this->tables where id = $nhcid ";
       
    return $this->query($sql)->fetchAll();     
  }
  // sel
  public function sel($nhcid){
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
                nhcid = '$nhcid'
        ORDER BY
                ctime DESC
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

  // 删除新房相关记录
  public function delnhcid($nhcid){
    $res = $this->delete($this->table,['nhcid'=>$nhcid]);
    return $res->rowCount();
  }

}

