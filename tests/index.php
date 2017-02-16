<?php

// define ( 'APP_PATH', dirname ( __DIR__ )  , true );
// (new \Yaf\Application ( APP_PATH . '/conf/application.ini' ))->bootstrap()->run();

define('APPLICATION_PATH', dirname(dirname(__FILE__)));
// define('PUBLIC_PATH', dirname(__FILE__)."/public");
// require APPLICATION_PATH.'/vendor/autoload.php';
require APPLICATION_PATH.'/vendor/autoload.php';
$application = new \Yaf\Application( APPLICATION_PATH . "/conf/application.ini");

$application->bootstrap()->run();
