<?php
 class SmartyController extends Yaf_Controller_Abstract
 {
     public function smartyAction(){
         /*默认template_dir目录下two/two.tpl*/
         $this->getView()->assign("content", "Hello Hadoop! Welcome to Beijing!<br/>");
         /*指定template_dir目录下的模板*/
         // $this->getView()->display('smarty.tpl');
         /*false为禁止显示默认模板   return false表示显示display指定的模板*/
         // return false; 
     }
 }