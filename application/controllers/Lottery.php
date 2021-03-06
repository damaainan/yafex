<?php
// namespace App\Controllers;//打开注释  数据库操作就会变无效
use App\Models\Lottery;
use Illuminate\Database\Capsule\Manager as DB;

class LotteryController extends \Yaf\Controller_Abstract{
    public function indexAction(){
        $lottery= new Lottery();
        // var_dump($lottery);

        // 获取
        // $user = DB::table('lottery')->where('qihao', '2016142')->first();
        // var_dump($user);exit;

        $user = $lottery::find(1)->toArray();//两种方式都可以
        // $user = Lottery::find(1)->toArray();
        // var_dump($user);
        $this->getView()->assign("rst", $user);
        $this->display('index');
    }
    public function testChartAction(){
        $this->display('testChart');
    }
    public function testChart1Action(){
        $this->display('testChart1');
    }
    public function testChart2Action(){
        $this->display('testChart2');
    }
    public function testChart3Action(){
        $this->display('testChart3');
    }
    public function testChart4Action(){
        $this->display('testChart4');
    }
    public function testChart5Action(){
        $this->display('testChart5');
    }
}