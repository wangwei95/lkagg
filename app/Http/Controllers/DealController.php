<?php
//交易处理
namespace App\Http\Controllers;

use App\Deal;
use App\User;
use Illuminate\Http\Request;

class DealController extends Controller
{
    public function __construct()
    {
        $this->middleware('myauth');
    }

    public function buy(Request $request)
    {
        if ($request->num > 0) {
            $vo['num'] = round($request->num, 2);
        } else {
            return C('msg.num');
        }
        if ($request->price > 0) {
            $vo['price'] = round($request->price, 2);
        } else {
            return C('msg.price');
        }
        $dd = $vo['num'] * $vo['price']; //需要总dd
        //判断数量
        $user = User::getUser();
        if ($user['dd'] < $dd) {
            return C('msg.ddno');
        }
        //下订单
         Deal::djdd($vo);
        return C("msg.ok");
        //提送交易队列
    }
}
