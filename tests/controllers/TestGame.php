<?php 
class TestGame extends PHPUnit\Framework\TestCase {

    // 创建一个简单请求，并利用调度器接受Repsonse信息，指定分发请求。
    /**
     * \Yaf\Application::app() 是一个单例模式的方法
     * @param  [type] $action 要测试的方法
     * @param  array  $params 参数
     * @return [type]         
     */
    private function __requestActionAndParseBody($action, $params=array()) {
        $request = new \Yaf\Request\Simple("CLI", "Api", "Game", $action, $params);
        $response = \Yaf\Application::app()->getDispatcher()->returnResponse(TRUE)->dispatch($request);
        // var_dump($response);
        return $response->getBody();
    }

    public function testList() { //如果 名字是  testIndex 会 报错 ，测试不通过
        // $request=new \Yaf\Request\Simple('CLI','Api','Game','list');
        // $res=\Yaf\Application::app()->getDispatcher()->returnResponse(true)->dispatch($request);
        $res = $this->__requestActionAndParseBody('list');
        $valid='test game';
        $this->assertEquals ( $valid, $res);
    }

    public function testGetJsonLottery() { //如果 名字是  testIndex 会 报错 ，测试不通过
        // $request=new \Yaf\Request\Simple('CLI','Api','Game','getJsonLottery');
        // $res=\Yaf\Application::app()->getDispatcher()->returnResponse(true)->run($request);
        // var_dump($request);
        // var_dump($res);
        // $valid='test game';
        // $this->assertEquals ( $valid, $res->getBody());
        // var_dump($res);
        

        // Error: Call to a member function getBody() on boolean 报错 未开服务器
        $response = $this->__requestActionAndParseBody('getJsonLottery', array('id'=>1));
        // var_dump($response);
        $data     = json_decode($response, TRUE);
        $this->assertInternalType('array', $data);
        // $this->assertEquals('0', $data['code']);
    }
}
