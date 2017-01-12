<?php
/**
 * 原生PDO实现的数据库操作
 */



class baseModel{
    protected $link;
    //构造函数
    public function __construct($db_config = array())    {
        if(empty($db_config)){
            $db_config = \Yaf\Application::app()->getConfig()->database;
        }
        // var_dump($db_config['config']["host"]);
        $this->link = $this->connect($db_config['config']["host"], $db_config['config']["user"], $db_config['config']["pwd"], $db_config['config']["name"]);
    }
    //数据库连接
    public function connect($dbhost, $dbuser, $dbpw, $dbname, $charset = 'utf8')    {
        $pdo=new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpw);
        $pdo->exec('set names utf8');
        return $pdo;
    }
    //查询
    public function query($sql)   {
        $pdo=$this->link;
        $stmt=$pdo->prepare($sql);
        $stmt->execute();
        $query = $stmt->fetch(PDO::FETCH_ASSOC);
        return $query;
    }
    //获取全部记录
    public function get_all($sql) {
        $pdo=$this->link;
        // var_dump($sql);
        $stmt=$pdo->prepare($sql);
        // var_dump($sql);
        $stmt->execute();
        $query = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $query;
    }
    public function add($data = array()){
        return true;
    }

}

