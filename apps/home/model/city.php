<?php
namespace apps\home\model;
use core\lib\model;
class city extends model{
  public $table = 'city';
  /**
   * 读取顶级城市
   */
  public function getTop(){
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
                pid = '0'
        AND
                status = '0'
        ORDER BY
                sort ASC
    ";
    return $this->query($sql)->fetchAll();
  }

  /**
   * 读取城市名称
   */
  public function getCname($id){
    return $this->get($this->table,'cname',['id'=>$id]);
  }

}

