<?php
// namespace App\Controllers;//打开注释  数据库操作就会变无效
use App\Models\Lottery\LotteryLetLink;
use Illuminate\Database\Capsule\Manager as DB;

class LetController extends \Yaf\Controller_Abstract{
    public function indexAction(){
        $lottery= new LotteryLetLink();
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
    // 页面表格展示 bootstrap-table
    public function showpageAction(){

    }

}