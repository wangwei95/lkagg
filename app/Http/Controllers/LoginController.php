<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
    }

//登录
    public function login(Request $request)
    {
        $where = ["username" => $request->username,
            "password" => $request->pass];
        $mod = new User();
        $vo = $mod->where($where)->first();
        if (!$vo)
            return C("msg.nouser");
        $request->session()->put('userinfo', $vo);
        return C("msg.ok");
    }

//注册
    public function reg(Request $request)
    {
        //todo后台表单验证
        $mod = new User();
        if ($mod->where('username', $request->username)->count()) {
            return C("msg.emailOnly");
        }
        $mod->username = $request->username;
        $mod->password = $request->pass;
        if ($mod->save()) {
            return C('msg.ok');
        } else {
            return C('msg.err');
        }
    }

    //退出
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
