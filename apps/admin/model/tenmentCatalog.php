<?php
namespace apps\admin\model;
use core\lib\model;
class tenmentCatalog extends model{
    public $table='tenement_catalog';

    // getInfo
    public function getInfo($id){
        return $this->get($this->table,'*',['id'=>$id]);
    }

    // 获取id
    public function getId($title){
        return $this->get($this->table,'id',['title'=>$title]);
    }

    // save
    public function save($id,$data){
        $res = $this->update($this->table,$data,['id'=>$id]);
        return $res->rowCount();
    }

    // add
    public function add($data){
        $res = $this->insert($this->table,$data);
        return $this->id();
    }

    // del
    public function del($id){
        $res = $this->delete($this->table,['id'=>$id]);
        return $res->rowCount();
    }
    //查询租房列表

    public function sel($type,$auid,$status,$search='',$currPage,$subPages){
        if($type==0){
            $where=' ';
        }else{
            $where=" AND uh.auid = '$auid'";
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
                uh.status = $status
                
                $where
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
    public function sel_num($status,$search=''){
        if($search){
            $where=['AND'=>['title[~]'=>$search,'status'=>$status]];
        }else{
            $where=['status'=>$status];
        }
        return $this->count($this->table,$where);
    }

}