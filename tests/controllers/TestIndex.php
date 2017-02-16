<?php 
class TestIndex extends \PHPUnit_Framework_TestCase {
    public function testIndex() {
        $request=new \Yaf\Request\Simple('CLI','','Index','test');
        $res=\Yaf\Application::app()->getDispatcher()->returnResponse(true)->dispatch($request);
        $valid='test string';
        $this->assertEquals ( $valid, $res->getBody());
    }
}
