<?php 
class  HjlistModel extends baseModel{
   public $tableName = 'hjlist';
   public function getInfosByBook($book){
   	$mod=new baseModel();
   	$sql="select * from hjlist where book=".$book.";";
   	return $mod->get_all($sql);
   		// return $this->get('*',["book"=>$book]);
   }
}