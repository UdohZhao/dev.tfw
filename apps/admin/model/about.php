<?php
namespace apps\admin\model;
use core\lib\model;
class about extends model{
	public $table = 'about';
	//sel
	 public function sel($currPage,$subPages){
    // sql
    $sql = " SELECT * FROM $this->table LIMIT $currPage , $subPages";
    $data = $this->query($sql)->fetchAll(2);
    return $data;   
  }

  public function add($data){
    $res = $this->insert($this->table,$data);
    return $this->id();
  }
  public function del($id){
  	$res = $this->delete($this->table,['id'=>$id]);
  	return $res->rowCount();
  }
  public function ePass($id,$data){
    $res = $this->update($this->table,$data,['id'=>$id]);
    return $res->rowCount();
  }

  //获取单条数据
    public function sel_one($id){
        return $this->get($this->table,'*',['id'=>$id]);
    }

    //查询满足条件的记录数
    public function cou(){
        return $this->count($this->table);
    }
}