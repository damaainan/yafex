<?php 
require APPLICATION_PATH."/application/library/medoo.php";

/**
 * medoo ORM 实现的数据库操作
 */

class medooModel{//取名 model 是为了区别原类
     public $database;
     public function __construct(){


         $db_config = Yaf_Application::app()->getConfig()->database;
         $dbhost=$db_config['config']["host"];
         $dbuser=$db_config['config']["user"];
         $dbpwd=$db_config['config']["pwd"];
         $dbname=$db_config['config']["name"];
         $dbtype=$db_config['config']["type"];
         $this->database = new medoo([
            'database_type' => $dbtype,
            'database_name' => $dbname,
            'server' => $dbhost,
            'username' => $dbuser,
            'password' => $dbpwd,
            'charset' => 'utf8'
        ]);

    }

}