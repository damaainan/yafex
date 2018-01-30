<?php
use App\Models\Lottery;
use App\Models\Weibo;
use App\Models\Hjlist;
use Illuminate\Database\Capsule\Manager as DB;

class GameController extends \Yaf\Controller_Abstract
{
    // init方法相当于控制器的初始化函数，取消自动渲染视图 用不到
    public function init() {
        \Yaf\dispatcher::getInstance()->disableView();
    }

    // 输出需要的JSON信息
    private function __responseJson($data) {
        $response = json_encode(array('data'=>$data));
        $this->getResponse()->setBody($response);
    }
    public function listAction()
    {
        // echo "API test";
        // $request = new \Yaf\Request\Simple();
        // var_dump($request);
        $this->getResponse()->setBody('test game');
    }

    // index.php/Api/Game/getJsonLottery
    public function getJsonLotteryAction($uid){
        // if ( $uid < 1 ) 
        // $this->__responseJson(-1);
        $lottery= new Lottery();
        $ret = $lottery::find(1)->toArray();
        $this->__responseJson($ret);
        // print_r($ret);
    }

    public function getAllAction(){
        $lottery= new Hjlist();
        $ret = $lottery::get()->toArray();
        $this->__responseJson($ret);

    }
}