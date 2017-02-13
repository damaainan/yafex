<?php 

//  medoo  版本
// class WeiboModel extends \medooModel{
//     public $tableName = 'weibo';
//     public function base($name){
//         $medoo=new medooModel();
//         $database=$medoo->database;
//         if($name=="*"){
//         	$rest=$database->select("weibo",["rContent"]);
//         }else{
//         	$rest=$database->select("weibo",["rContent"],['rAuthor[=]'=>$name]);
//     	}
//         // var_dump($rest);
//         return $rest;
//     }


//     public function allTags(){
//         $medoo=new medooModel();
//         $database=$medoo->database;
//         $stmt=$database->pdo->prepare("select distinct(rAuthor) as author from weibo");
//         $stmt->execute();
//         $rest=$stmt->fetchAll(PDO::FETCH_ASSOC);
//         return $rest;
//     }


// }


namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Weibo extends EloquentModel{
    // 软删除
    // use SoftDeletes;

    // 表名
    protected  $table = 'weibo';

    // 此字段自动转换成 Carbon 实例
    // protected $dates = ['qihao'];

    // 允许批量赋值的字段
    // protected $fillable = ['qihao'];
}