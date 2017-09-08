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
  public function sel($type,$auid,$status,$currPage,$subPages,$types,$phone){
  	if($types){
      if($types == "抵押贷款" || $types == "抵押"){
        $typ = 0;
      }elseif($types == "信用贷款" || $types == "信用"){
        $typ = 1;
      }elseif($types == "组合贷款" || $types == "组合"){
        $typ = 2;
      }else{
        $typ = 3;
      }
      $search = "type=$typ";
    }elseif($phone){
      $search = "phone=$phone";
    }else{
      $search = "status=$status";
    }
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
                status=$status
        AND
              $search
        ORDER BY
                id DESC
        LIMIT
                $currPage , $subPages  
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