<?php

define('APPLICATION_PATH', dirname(__FILE__));
define('PUBLIC_PATH', dirname(__FILE__)."/public");
require APPLICATION_PATH.'/vendor/autoload.php';

$application = new \Yaf\Application( APPLICATION_PATH . "/conf/application.ini");

$application->bootstrap()->run();
?>
