<?php
namespace apps\admin\model;
use core\lib\model;
class loan extends model{
	public $table = 'loan';

    //修改已读状态
    public function up_status($id){
        $res = $this->update($this->table,['status'=>1],['id'=>$id]);
        return $res->rowCount();
    }
   public function getInfo($id){
        return $this->get($this->table,'*',['id'=>$id]);
    }
  public function sel($status,$currPage,$subPages){
  	$sql = " 
    SELECT 
    *
    FROM 
    $this->table 
    where 
    status=$status 
    ";
  	$data = $this->query($sql)->fetchAll(2);
  	return $data; 
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
  public function add($data){
    $res = $this->insert($this->table,$data);
    return $this->id();
  }
  public function del_info($id){
    $res = $this->delete($this->table,['id'=>$id]);
  	return $res->rowCount();
  }
  public function save($id,$data){
        $res = $this->update($this->table,$data,['id'=>$id]);
        return $res->rowCount();
    }
}