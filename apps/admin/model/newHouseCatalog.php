<?php
namespace apps\admin\model;
use core\lib\model;
class newHouseCatalog extends model{
  public $table = 'new_house_catalog';
  public $table1 = 'city';# 城市表
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
  public function sel($hcid,$type,$auid,$status,$currPage,$subPages,$show_price,$area,$cid){
    // sql
      if($type==0){
          $where=" NHC.hcid = '$hcid' ";
      }else{
          $where=" NHC.auid =  $auid ";
      }

      if($show_price){
        $title =  " NHC.show_price like '%$show_price%' ";
      }elseif($area){
        $title = " NHC.area = $area ";
      }elseif($cid){
        $title = "C.cname = '$cid' ";
      }else{
        $title = " NHC.status = '$status'";
      }
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
               $where
        AND
                NHC.status = '$status'
        AND    
               $title       
        ORDER BY
                NHC.ctime DESC
        LIMIT
                $currPage , $subPages  
    ";
    return $this->query($sql)->fetchAll();
  }
 // public function selling($search,$status){
 //   // $sql = "SELECT a.community,a.cid,a.area,a.show_price FROM $this->table as a left join $this->table1 as b on a.cid = b.id WHERE a.status = '$status' or community like '%$search%'  or cid like '%$search%' or area like '%$search%' or show_price like '%$search%' " ;  
       
 //       $sql = "SELECT community,cid,area,show_price,status FROM $this->table WHERE status = $status and community like '%$search%'  or cid like '%$search%' or area like '%$search%' or show_price like '%$search%' " ;  
 //        return $this->query($status)->fetchAll();
 //            }
  //getInfo
  public function getInfo($id){
    return $this->get($this->table,'*',['id'=>$id]);
  }

  // ePass
  public function ePass($id,$password){
    $res = $this->update($this->table,['password'=>$password],['id'=>$id]);
    return $res->rowCount();
  }

  // upStatus
  public function upStatus($id,$type){
    $res = $this->update($this->table,['type'=>$type],['id'=>$id]);
    return $res->rowCount();
  }

  // del
  public function del($id){
    $res = $this->delete($this->table,['id'=>$id]);
    return $res->rowCount();
  }

  // cou
  public function cou($status,$search=''){
    return $this->count($this->table,['AND'=>['title[~]'=>$search,'status'=>$status]]);
  }

  // getTitle
  public function getTitle($id){
    return $this->get($this->table,'*',['id'=>$id]);
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


  //修改审核状态
    public function up_status($status,$id){
        $res = $this->update($this->table,['status'=>$status],['id'=>$id]);
        return $res->rowCount();
    }
}

