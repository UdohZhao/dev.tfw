<?php
namespace apps\admin\model;
use core\lib\model;
class houseCategory extends model{
  public $table = 'house_category';
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

  // save
  public function save($id,$data){
    $res = $this->update($this->table,$data,['id'=>$id]);
    return $res->rowCount();
  }

  // getId
  public function getId($cname){


     return $this->get($this->table,'id',['cname'=>$cname]);


  }

}

