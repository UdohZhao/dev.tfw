<?php
namespace apps\admin\model;
use core\lib\model;
class buyHouseCatagory extends model{
    public $table='house_encyclopedia_category';

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
               tb1.*,tb2.cname as pcname
        FROM
                `$this->table` AS tb1
        LEFT JOIN `$this->table` AS tb2
        ON tb1.pid=tb2.id
        WHERE
                1 = 1
        AND
                tb1.cname like '%$search%'
        ORDER BY
                tb1.sort ASC
        {$limit}
    ";
        $data = $this->query($sql)->fetchAll(2);
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


    //查询
    public function sel_pcname_info($pcname){
        $this->get($this->table,["[><]$this->table(tb2)"=>['id'=>'tb2.pid'],'*']);
    }

    //查询父级名称
    /*@param $pid  当前pid
     * */
    public function sel_pcname($pid){
        return $this->get($this->table,['cname'],['id'=>$pid]);
    }

    //根据名称查询父级id
    /*
     * @param $pcname 父级名称
     * */
    public function sel_pid($pcname){
        if($pcname == '顶级'){
            return 0;
        }else{
            return $this->get($this->table,['id'],['cname'=>$pcname])['id'];
        }
    }
}