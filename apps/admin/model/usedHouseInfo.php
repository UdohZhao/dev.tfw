<?php
namespace apps\admin\model;
use core\lib\model;
class usedHouseInfo extends model{
    public $table='used_house_info';
    public function add($data){
        $this->insert($this->table,$data);
        return $this->id();
    }

    public function deluhcid($uhcid){
            $res = $this->delete($this->table,['uhcid'=>$uhcid]);
            return $res->rowCount();
    }

    public function sel_info($uhcid){
        return $this->get($this->table,'*',['uhcid'=>$uhcid]);
    }

    //修改详细信息
    public function update_info($uhcid,$data){
        unset($data['uhcid']);
        $res = $this->update($this->table,$data,['uhcid'=>$uhcid]);
        return $res->rowCount();
    }


}