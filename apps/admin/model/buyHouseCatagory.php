<?php
namespace apps\admin\model;
use core\lib\model;
class buyHouseCatagory extends model{
    public $table='house_encyclopedia_category';
    public $tables="house_encyclopedia_article";

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
    public function sel($search,$limit,$pid){
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
               tb1.pid=$pid
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
    public function hecid($id){
        return $this->get($this->tables,'hecid',['hecid'=>$id]);
    }
    // del
    public function del($id){
        $res = $this->delete($this->table,['id'=>$id]);
        return $res->rowCount();
    }

    //del  pid
    public function del_next($pid){
        //查询当前id下面的所有id
        $info = $this->select($this->table,'id',['pid'=>$pid]);
        return $info;
    }
    // cou
    public function cou($pid){
        return $this->count($this->table,['pid'=>$pid]);
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

    //添加文章
    public function add_article($data){
        return $this->insert('house_encyclopedia_article',$data);
    }

    /**
     * 读取统计相关文章记录数
     */
    public function totalRows($id){
        return $this->count('house_encyclopedia_article',['hecid'=>$id]);
    }

    //获取文章内容
    public function show_article($id,$search,$limit){
        // sql
        $sql = "
            SELECT
                    *
            FROM
                    `house_encyclopedia_article`
            WHERE
                    1 = 1
            AND
                    hecid = '$id'
            AND
                    title like '%$search%'
            ORDER BY
                    ctime DESC
            {$limit}
        ";
        return $this->query($sql)->fetchAll(2);
        //return $this->select('house_encyclopedia_article','*',['hecid'=>$id]);
    }

    //获取单条文章内容
    public function article_detail($id){
        return $this->get('house_encyclopedia_article','*',['id'=>$id]);
    }

    //修改文章
    public function update_article($id,$data){
         return    $this->update('house_encyclopedia_article',$data,['id'=>$id]);
    }

    //删除文章
    public function del_article($id){
        $res = $this->delete('house_encyclopedia_article',['id'=>$id]);
        return $res->rowCount();
    }
}