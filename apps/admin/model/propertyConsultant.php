<?php
namespace apps\admin\model;
use core\lib\model;
class propertyConsultant extends model{
  public $table = 'property_consultant';
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
  public function sel($cname,$belong_company,$limit){
    if($cname){
      $search = " cname like '%$cname%' ";
    }elseif($belong_company){
      $search = " belong_company like '%$belong_company%' ";
    }else{
      $search = " 1 = 1 ";
    }
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
              $search 
        ORDER BY
                ctime DESC
        {$limit}
    ";
    $data = $this->query($sql)->fetchAll();
    return $data;
  }

  // getInfo
  public function getInfo($id){
    return $this->get($this->table,'*',['id'=>$id]);
  }
  // catalog
  public function catalog($id){
    return $this->get($this->tables,'*',['cid'=>$id]);
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

  // 更新
  public function save($id,$data){
    $res = $this->update($this->table,$data,['id'=>$id]);
    return $res->rowCount();
  }

  // 读取启用的置业顾问
  public function selpc(){
    return $this->select($this->table,'*',['status'=>0]);
  }

}

