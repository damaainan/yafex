<?php 
class WeiboModel extends medooModel{
    public $tableName = 'weibo';
    public function base($name){
        $medoo=new medooModel();
        $database=$medoo->database;
        if($name=="*"){
        	$rest=$database->select("weibo",["rContent"]);
        }else{
        	$rest=$database->select("weibo",["rContent"],['rAuthor[=]'=>$name]);
    	}
        // var_dump($rest);
        return $rest;
    }

}