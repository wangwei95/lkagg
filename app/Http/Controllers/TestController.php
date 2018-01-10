<?php

namespace App\Http\Controllers;
use App\Deal;
use Illuminate\Http\Request;

class TestController extends Controller
{
    function index()
    {

      //  dd(session("userinfo"));
        $vo=["num"=>1.11,'price'=>2.66];
        Deal::djdd($vo);



   }

    public function sub(Request $request)
    {
        return response()->json([
            'status' => 0,
            'msg' => 'OK'.json_encode($request->all()),
            'code' => 200,
            'data' => $request->all()
        ]);

    }
}
