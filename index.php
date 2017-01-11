<?php

define('APPLICATION_PATH', dirname(__FILE__));
// define('PUBLIC_ROOT',dirname(__FILE__) . "/public");//此定义不通？

$application = new Yaf_Application( APPLICATION_PATH . "/conf/application.ini");

$application->bootstrap()->run();
?>
