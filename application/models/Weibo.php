<?php 
class WeiboModel extends medooModel{
    public $tableName = 'weibo';
    public function base(){
        $medoo=new medooModel();
        $database=$medoo->database;
        $rest=$database->select("weibo",["rContent"],['rAuthor[=]'=>"视觉机器人"]);
        // var_dump($rest);
        return $rest;
    }

}