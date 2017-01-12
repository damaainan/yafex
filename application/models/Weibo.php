<?php 
class WeiboModel extends \medooModel{
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


    public function allTags(){
        $medoo=new medooModel();
        $database=$medoo->database;
        $stmt=$database->pdo->prepare("select distinct(rAuthor) as author from weibo");
        $stmt->execute();
        $rest=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rest;
    }


}