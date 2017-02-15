<?php
/**
 * @name IndexController
 * @author jia
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
use App\Models\Hjlist;
class IndexController extends \Yaf\Controller_Abstract {

	/** 
     * 默认动作
     * Yaf支持直接把Yaf_Request_Abstract::getParam()得到的同名参数作为Action的形参
     * 对于如下的例子, 当访问http://yourhost/yafns/index/index/index/name/jia 的时候, 你就会发现不同
     */
	public function indexAction($name = "Stranger") {
		//1. fetch query
		$get = $this->getRequest()->getQuery("get", "default value");

		//2. fetch model
		// $model = new SampleModel();

		//3. assign
		// $this->getView()->assign("content", $model->selectSample());
		$this->getView()->assign("name", $name);
		$this->display("index");

		//4. render by Yaf, 如果这里返回FALSE, Yaf将不会调用自动视图引擎Render模板
        return TRUE;
	}

	public function getinfosbybookAction(){
		//index.php/Index/getinfosbybook?book=""
		$book=$this->getRequest()->get("book");

		/*
		$model=new HjlistModel();
		$rst=$model->getInfosByBook($book);
*/
		$rst=Hjlist::where("book","=",$book)->get()->toArray();

		// var_dump($rst);
		// var_dump(APPLICATION_PATH);
		$this->getView()->assign("book", $book);
		$this->getView()->assign("rst", $rst);
		$this->display("getinfosbybook");
		// echo $book;
		// return TRUE;
	}
}
