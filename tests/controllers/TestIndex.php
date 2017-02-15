<?php 
class TestIndex extends PHPUnit_Framework_TestCase {
    public function testIndex() {
        $request=new \Yaf\Request_Simple('CLI','','Index','index');
        $res=\Yaf\Application::app()->getDispatcher()->returnResponse(true)->dispatch($request);
        $valid='test string';
        $this->assertEquals ( $valid, $res->getBody());
    }
}
