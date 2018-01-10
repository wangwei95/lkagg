<?php
//交易模型
namespace App;

use Illuminate\Support\Facades\DB;

class Deal
{
    //买单操作
    static function djdd($vo)
    {
        try {
            return DB::transaction(function () use ($vo) {
                $num = $vo['num'] * $vo["price"];
                User::increment('djdd', $num);
                User::decrement('dd', $num);
                $vo["otime"] = time();
                $vo["uid"] = session("userinfo.uid");
                return Buy::insertGetId($vo);
            }, 3);
        } catch (\Exception $exception) {
            return false;
        }
    }
}
