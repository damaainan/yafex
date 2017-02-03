<?php
use App\Models\Lottery;
use Yaf\Controller_Abstract;
use Illuminate\Database\Capsule\Manager as DB;

class LotteryController extends Controller_Abstract
{
    public function indexAction()
    {
        // 插入, 方式之一
        // User::create([
        //     'name'      => 'eloquent',
        //     'password'  => password_hash('password', PASSWORD_BCRYPT, ['cost' => 12]),
        //     'email'     => 'test@example.com'
        // ]);

        // 获取
        // $user = DB::table('lottery')->where('qihao', '2016142')->first();
        // var_dump($user);exit;
        $user = Lottery::find(1);
        var_dump($user);
        // dd($user->toArray()); // dd 放到
    }
}