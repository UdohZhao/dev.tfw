<?php
namespace apps\admin\model;
use core\lib\model;
class adminUser extends model{
  public $table = 'admin_user';
  public $tables = 'new_house_catalog';
 
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
  // upStatus
  public function Status($id,$status){
    $res = $this->update($this->table,['status'=>$status],['id'=>$id]);
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

