<?php

define ( 'APP_PATH', dirname ( __DIR__ ) . '/application', true );
(new \Yaf\Application ( APP_PATH . '/conf/application.ini' ))->bootstrap()->run();
