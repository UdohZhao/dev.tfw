<?php
namespace apps\home\model;
use core\lib\model;
class houseCategory extends model{
  public $table = 'house_category';
  /**
   * 读取房屋类别
   */
  public function getAll(){
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
                status = '0'
        ORDER BY
                sort ASC
    ";
    return $this->query($sql)->fetchAll();
  }

}

