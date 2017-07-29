<?php 
class TestIndex extends PHPUnit\Framework\TestCase {
    public function testTest() { //如果 名字是  testIndex 会 报错 ，测试不通过
        $request=new \Yaf\Request\Simple('CLI','','Index','test');
        $res=\Yaf\Application::app()->getDispatcher()->returnResponse(true)->dispatch($request);
        $valid='test string';
        $this->assertEquals ( $valid, $res->getBody());
    }
}
