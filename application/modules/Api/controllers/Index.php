<?php

class IndexController extends \Yaf\Controller_Abstract
{

    public function testAction()
    {
        // echo "API test";
        $request = new \Yaf\Request\Simple();
        var_dump($request);
    }
}