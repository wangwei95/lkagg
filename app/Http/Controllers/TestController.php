<?php

namespace App\Http\Controllers;

use App\Buy;
use App\Deal;
use App\Jobs\BuyJob;
use App\Sell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    function index()
    {

        $vo = Buy::find(3);
        //是否匹配sell单 进行成交
        $selllist = Sell::where('price', '<=', $vo->price)->where('status',0)->orderBy('price')->orderBy('otime')->get();



        if (count($selllist) == 0) {
            //不能成交 该状态为可撤销

        } else {
            //成交逻辑
        }


    }

    public function sub(Request $request)
    {
        return response()->json([
            'status' => 0,
            'msg' => 'OK' . json_encode($request->all()),
            'code' => 200,
            'data' => $request->all()
        ]);

    }
}
