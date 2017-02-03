<?php
/**
 * @name Bootstrap
 * @author jia
 * @desc 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * @see http://www.php.net/manual/en/class.yaf-bootstrap-abstract.php
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
// use Illuminate\Events\Dispatcher as LDispatcher;
// use Illuminate\Container\Container as LContainer;
// use Illuminate\Database\Capsule\Manager as Capsule;
class Bootstrap extends \Yaf\Bootstrap_Abstract {

    public function _initConfig() {
		//把配置保存起来
		$arrConfig = \Yaf\Application::app()->getConfig();
		\Yaf\Registry::set('config', $arrConfig);

		// 关闭自动加载模板
		\Yaf\Dispatcher::getInstance()->autoRender(FALSE);
	}

	public function _initPlugin(\Yaf\Dispatcher $dispatcher) {
		//注册一个插件
		$objSamplePlugin = new SamplePlugin();
		$dispatcher->registerPlugin($objSamplePlugin);
	}

	public function _initRoute(\Yaf\Dispatcher $dispatcher) {
		//在这里注册自己的路由协议,默认使用简单路由
	}
	
	public function _initView(\Yaf\Dispatcher $dispatcher){
		//在这里注册自己的view控制器，例如smarty,firekylin
		// \Yaf\Dispatcher::getInstance()->disableView();//关闭其自动渲染
	}

	public function _initSmarty(\Yaf\Dispatcher $dispatcher){  
        $smarty = new Smarty_Adapter(null , \Yaf\Application::app()->getConfig()->smarty);  
        \Yaf\Dispatcher::getInstance()->setView($smarty);  
    } 
    // 初始化 Eloquent ORM
    // public function _initDefaultDbAdapter(\Yaf\Dispatcher $dispatcher)
    // {
    //     $capsule = new Capsule();
    //    $capsule->addConnection(\Yaf\Application::app()->getConfig()->database->toArray());
    //     $capsule->setEventDispatcher(new LDispatcher(new LContainer));
    //     $capsule->setAsGlobal();
    //     $capsule->bootEloquent();
    // }
}
