<?php


/**
 * Eloquent ORM
 * medoo
 * 使用这两种 ORM 
 */

/*
 $pdo=new PDO('mysql:host=rds2ejubbjnfnqb.mysql.rds.aliyuncs.com;dbname=fenghui_video;charset=utf8','fhvideo','vista688',$options);
  $stmt=$pdo->prepare("SELECT * FROM wish_gift_pride_record WHERE type=1 ;");
  $stmt->execute();
 **/
class baseModel{
    protected $link;
    //构造函数
    public function __construct($db_config = array())    {
        if(empty($db_config)){
            $db_config = Yaf_Application::app()->getConfig()->database;
        }
        // var_dump($db_config);
        $this->link = $this->connect($db_config['config']["host"], $db_config['config']["user"], $db_config['config']["pwd"], $db_config['config']["name"]);
    }
    //数据库连接
    public function connect($dbhost, $dbuser, $dbpw, $dbname, $charset = 'utf8')    {
        $pdo=new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpw);
        $pdo->exec('set names utf8');
        $this->link = $pdo;
        return $this->link;
    }
    //查询
    public function query($sql)   {
        $stmt=$this->link->prepare($sql);
        $stmt->execute();
        $query = $stmt->fetch(PDO::FETCH_ASSOC);
        return $query;
    }
    //获取全部记录
    public function get_all($sql) {
        $stmt=$this->link->prepare($sql);
        var_dump($sql);
        $stmt->execute();
        $query = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $query;
    }
    public function add($data = array()){
        return true;
    }

}

