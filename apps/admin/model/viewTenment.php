<?php
namespace apps\admin\model;
use core\lib\model;
class viewTenment extends model{
    public $table='tenement_catalog';
    
    //查询记录
    public function sel($search='',$currPage,$subPages,$show_rent,$area,$cid){
        if($show_rent){
        $title = " uh.show_rent like '%$show_rent%' ";
        }elseif($area){
        $title = " q.area = $area";
        }elseif($cid){
        $title = " C.cname = '$cid' ";
        }else{
        $title = " uh.status = 1";
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
        LEFT JOIN
                `tenement_info` AS q
        ON
                uh.id=q.tcid                       
        WHERE
                1 = 1
        
        AND     uh.status = 1      
        AND
                $title
        ORDER BY
                uh.ctime DESC
        LIMIT
                $currPage , $subPages
    ";
        return $this->query($sql)->fetchAll();
    }

    //查询满足条件的记录数
    public function sel_num($search=''){
        return $this->count($this->table,['AND'=>['status'=>0,'title[~]'=>$search]]);
    }

    // getInfo
    public function sel_info($id){
        return $this->get('tenement_info','*',['tcid'=>$id]);
    }

    public function getHouseInfo($tcid){
        return $this->get('tenement_info','*',['tcid'=>$tcid]);
    }

    public function getInfo($id){
        return $this->get($this->table,'*',['id'=>$id]);
    }

    //修改房子审核状态
    public function check_house($status,$id){
        $res =  $this->update($this->table,['status'=>$status],['id'=>$id]);
        return $res->rowCount();
    }
}