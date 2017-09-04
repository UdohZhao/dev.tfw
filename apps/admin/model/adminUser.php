<?php
namespace apps\admin\model;
use core\lib\model;
class adminUser extends model{
  public $table = 'admin_user';
  public $tables = 'new_house_catalog';
  public $tablea = 'used_house_catalog';
  public $tabl = 'tenement_catalog';
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
  public function getInfo($id){
    return $this->get($this->table,'*',['id'=>$id]);
  }

  // ePass
  public function ePass($id,$password){
    $res = $this->update($this->table,['password'=>$password],['id'=>$id]);
    return $res->rowCount();
  }

  // upStatus 新房
  public function upStatus($id,$type){
    $res = $this->update($this->tables,['type'=>$type],['id'=>$id]);
    return $res->rowCount();
  }
  // 二手房
  public function upstype($id,$type){
    $res = $this->update($this->tablea,['type'=>$type],['id'=>$id]);
    return $res->rowCount();
  }
  // 租房
  public function upztype($id,$type){
     $res = $this->update($this->tabl,['type'=>$type],['id'=>$id]);
    return $res->rowCount();
  }
  public function del($id){
    $res = $this->delete($this->table,['id'=>$id]);
    return $res->rowCount();
  }

  // cou
  public function cou(){
    return $this->count($this->table);
  }

}

