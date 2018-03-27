<?php
namespace App\Models\Lottery;
use App\Models\EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class LotteryLetLink extends EloquentModel{
    // 软删除
    // use SoftDeletes;

    // 表名
    protected  $table = 'lottery_let_link';

    // 此字段自动转换成 Carbon 实例
    // protected $dates = ['qihao'];

    // 允许批量赋值的字段
    // protected $fillable = ['qihao'];
}