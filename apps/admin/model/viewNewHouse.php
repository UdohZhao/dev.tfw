<?php
namespace apps\admin\model;
use core\lib\model;
class viewNewHouse extends model{
    public $table='new_house_catalog';
    //查询满足条件的记录数
    public function sel_num($search=''){
        return $this->count($this->table,['AND'=>['status'=>1,'title[~]'=>$search]]);
    }
    //查询记录
    public function sel($search='',$currPage,$subPages,$show_price,$area,$cid){
          if($show_price){
          $title =  " uh.show_price like '%$show_price%' ";
          }elseif($area){
            $title = " uh.area = $area ";
          }elseif($cid){

            $title = "C.cname = '$cid' ";
          }else{
            $title = " uh.status = 1 ";
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
        WHERE
                1 = 1
       
        AND     
                uh.status = 1   
         AND
               $title    
        ORDER BY
                uh.ctime DESC
        LIMIT
                $currPage , $subPages
    ";
        return $this->query($sql)->fetchAll();
    }


    // getInfo
    public function getInfo($nhcid){
        return $this->get($this->table,'*',['id'=>$nhcid]);
    }

    //获取新房信息

    public function getHouseInfo($nhcid){
        return $this->get('new_house_info','*',['nhcid'=>$nhcid]);
    }

    //获取主力户型

    // getInfo
    public function getMainInfo($id){
        return $this->get('new_house_main','*',['id'=>$id]);
    }
    //查找主力用户
    public function sel_main($nhcid){
        // sql
        $sql = "
        SELECT
                *
        FROM
                new_house_main
        WHERE
                1 = 1
        AND
                nhcid = '$nhcid'
        ORDER BY
                ctime DESC
    ";
        return $this->query($sql)->fetchAll();
    }


    //修改房子审核状态
    public function check_house($status,$id){
        $res =  $this->update('new_house_catalog',['status'=>$status],['id'=>$id]);
        return $res->rowCount();
    }
}