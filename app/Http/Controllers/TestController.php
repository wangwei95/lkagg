<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index()
    {
      return [1,3,4,56,6,];
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
