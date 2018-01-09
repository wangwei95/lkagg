<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
    }

//登录
    public function login(Request $request)
    {
//        存储用户信息   基本信息及权限
        $menuList = config("menu");
        foreach ($menuList as $menuvo) {
            if (empty($menuvo[1])) {
                $for1[] = $menuvo;
            } else {
                $for2[$menuvo[1]][] = $menuvo;
            }
        }
        $userinfo = [
            'base' => [
                'uid' => time(),
                'username' => date("Y-m-d H:i:s"),
            ],
            'auth' => ["menu1" => $for1, "menu2" => $for2]
        ];
//        dump($userinfo);
        $request->session()->put('userinfo', $userinfo);
        return response()->json([
            'status' => 0,
            'msg' => 'OK',
            'code' => 200,
            'data' => $request->all()
        ]);
    }

//注册
    public function reg(Request $request)
    {
        return response()->json([
            'status' => 0,
            'msg' => 'OK',
            'code' => 200,
            'data' => $request->all()
        ]);
    }

    //退出
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
