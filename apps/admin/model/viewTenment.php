<?php
namespace apps\admin\model;
use core\lib\model;
class viewTenment extends model{
    public $table='tenement_catalog';
    
    //查询记录
    public function sel($search='',$currPage,$subPages){
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
                uh.title like '%$search%'
        AND     uh.status = 1       
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