<?php
namespace apps\admin\model;
use core\lib\model;
class sellHouseInfo extends model{
    public $table='sell_house_info';
    //查询卖列表

    public function sel($status,$search='',$currPage,$subPages){
        $sql = "
        SELECT
                *
        FROM
                `$this->table`
                   
        WHERE
                1 = 1
        AND 
                status = $status
        AND
                cname like '%$search%'
        ORDER BY
                ctime DESC
        LIMIT
                $currPage , $subPages
    ";
        return $this->query($sql)->fetchAll(2);
    }

    //获取满足条件的记录数
    public function sel_num($status,$search=''){
        if($search){
            $where=['AND'=>['community[~]'=>$search,'status'=>$status]];
        }else{
            $where=['status'=>$status];
        }
        return $this->count($this->table,$where);
    }

}