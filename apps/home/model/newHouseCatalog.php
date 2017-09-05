<?php
namespace apps\home\model;
use core\lib\model;
class newHouseCatalog extends model{
  public $table = 'new_house_catalog';
  /**
   * 读取最新房源
   */
  public function getNewest(){
    // sql
    $sql = "
        SELECT
                id, cid, slideshow, title, community, show_price, trait, area
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
                status = '3'
        AND
                type = '0'
        ORDER BY
                ctime DESC
        LIMIT
                0 , 15
    ";
    return $this->query($sql)->fetchAll();
  }

  /**
   * 读取详细信息
   */
  public function getInfo($id){
    return $this->get($this->table,'*',['id'=>$id]);
  }

}

