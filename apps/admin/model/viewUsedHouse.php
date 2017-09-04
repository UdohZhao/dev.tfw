<?php
namespace apps\admin\model;
use core\lib\model;
class viewUsedHouse extends model{
    public $table='used_house_catalog';

    public function sel($status=0,$search='',$currPage,$subPages){
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
                uh.title like '%$search%'
        ORDER BY
                uh.ctime DESC
        LIMIT
                $currPage , $subPages
    ";
        return $this->query($sql)->fetchAll();
    }

    //获取满足条件的记录数
    public function sel_num($status=0,$search=''){
        if($search){
            $where=['AND'=>['title[~]'=>$search,'status'=>$status]];
        }else{
            $where=['status'=>$status];
        }
        return $this->count($this->table,$where);
    }

    //查询房屋详细信息
    public function sel_info($uhcid){
        return $this->get('used_house_info','*',['uhcid'=>$uhcid]);
    }

    //查询单条二手房记录
    // getInfo
    public function getInfo($id){
        return $this->get($this->table,'*',['id'=>$id]);
    }


    //修改房子审核状态
    public function check_house($status,$id){
        $res =  $this->update($this->table,['status'=>$status],['id'=>$id]);
        return $res->rowCount();
    }
}