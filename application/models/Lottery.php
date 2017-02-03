<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class LotteryModel extends EloquentModel
{
    // 软删除
    // use SoftDeletes;

    // 表名
    protected  $table = 'lottery';

    // 此字段自动转换成 Carbon 实例
    // protected $dates = ['deleted_at'];

    // 允许批量赋值的字段
    // protected $fillable = ['name', 'password', 'email'];
}