<?php
class Db{
    //定义私有的属性
    private static $ins;
    protected  $pdo;
    //构造方法
    private  function __construct($dsn,$name,$price){
        $this->pdo=new PDO($dsn,$name,$price);
    }
    //禁止复制该代码
    private function __clone(){

    }
    public static function getPdo($dsn,$name,$price){
        if(self::$ins==null){
            self::$ins=new self($dsn,$name,$price);
        }
      return   self::$ins;
    }
    //添加方法
    public function add($table){
        $res=$this->pdo->exec($table);
        return $res;
    }
    //查询方法
    public function select($table){
        $sql="select * from $table";
        $res=$this->pdo->query($sql);
        $list=$res->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }
    //删除方法
    public function delete($table,$where){
        $sql="delete from $table where $where";
        $res=$this->pdo->exec($sql);
        return $res;
    }
    //查询单条方法
    public function find($table){
        $sql="select  * from $table";
        $res=$this->pdo->query($sql);
        return $res;
    }
    //修改方法
    public function update($table){
        $res=$this->pdo->exec($table);
        return $res;
    }
}