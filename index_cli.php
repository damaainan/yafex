<?php

// 命令行的入口文件

// php index_cli.php request_uri="/Api/Index/test"  命令行执行方式

define('APPLICATION_PATH', dirname(__FILE__));
define('PUBLIC_PATH', dirname(__FILE__)."/public");
require APPLICATION_PATH.'/vendor/autoload.php';

$application = new \Yaf\Application( APPLICATION_PATH . "/conf/application.ini");

// $application->bootstrap()->run();

$application->getDispatcher()->dispatch(new \Yaf\Request\Simple());
?>