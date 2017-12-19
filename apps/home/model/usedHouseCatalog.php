<?php
namespace apps\home\model;
use core\lib\model;
class usedHouseCatalog extends model{
  public $table = 'used_house_catalog';
  /**
   * 读取相关数据
   */
  public function getCorrelation($hcid,$search,$filtrate){
    // sql
    $sql = "
        SELECT
                id, cid, slideshow, title, community, show_price, trait, area, prtype
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
                status = '3'
        AND
                type = '0'
        AND
                hcid = '$hcid'

        {$search}

        {$filtrate}

        ORDER BY
                ctime DESC
        LIMIT
                0 , 15
    ";
    return $this->query($sql)->fetchAll(2);
  }

  /**
   * 读取详细信息
   */
  public function getInfo($id){
    return $this->get($this->table,'*',['id'=>$id]);
  }

}

