<?php
class AdminController extends \Yaf\Controller_Abstract {
	/**
	 * 实现多模块时视图的正确跳转
	 * @doc
	 * @DateTime 2017-01-22T18:02:08+0800
	 */
    public function indexAction(){ 
    	echo "fdfd";
    	var_dump($this->getView()->getScriptPath());//获取当前模板路径

    	$this->getView()->setScriptPath(APPLICATION_PATH."/application/modules/Admin/views");
    	var_dump($this->getView()->getScriptPath());//获取当前模板路径
    	$this->getView()->assign("name", "后台首页");
    	$this->display('index');
    	// return TRUE;
    }

}