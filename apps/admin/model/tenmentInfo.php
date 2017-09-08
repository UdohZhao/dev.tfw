<?php
namespace apps\admin\model;
use core\lib\model;
class tenmentInfo extends model{
    public $table='tenement_info';
    public $tables= "tenement_catalog";
    public function add($data){
        $this->insert($this->table,$data);
        return $this->id();
    }

    public function deluhcid($tcid){
        $res = $this->delete($this->table,['tcid'=>$tcid]);
        return $res->rowCount();
    }

    public function sel_info($tcid){
        return $res = $this->get($this->table,'*',['tcid'=>$tcid]);
    }
    public function title($tcid){
        return $this->get($this->tables,'title',['id'=>$tcid]);
    }
    //修改详细信息
    public function update_info($tcid,$data){
        unset($data['tcid']);
        $res = $this->update($this->table,$data,['tcid'=>$tcid]);
        return $res->rowCount();
    }

}