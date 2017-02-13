<?php 


/*class  HjlistModel extends \baseModel{
   public $tableName = 'hjlist';
   public function getInfosByBook($book){
   // var_dump($book);
   	$mod=new baseModel();
   	$sql="select * from hjlist where book='".$book."';";
   	return $mod->get_all($sql);
   		// return $this->get('*',["book"=>$book]);
   }
}
*/


namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Hjlist extends EloquentModel{
    // 软删除
    // use SoftDeletes;
    // 表名
    protected  $table = 'hjlist';
}