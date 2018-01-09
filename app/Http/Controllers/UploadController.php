<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    //上传控件上传
    public function img(Request $request)
    {
        $path = $request->file('file')->store('img/' . date("ymw"));
        $url = Storage::url($path);
        $msg="OK";
        return ["state" => '200', "url" => $url,'msg'=>$msg];
    }

//编辑器上传图片
    public function editerimg(Request $request)
    {
        $file = $request->file('upfile');
        $path = Storage::url($file->store('img/' . date("ymw")));
        $title = $file->getClientOriginalName();
        $re = ["state" => "SUCCESS", "url" => $path, "title" => $title, "original" => $title];
        return json_encode($re);
//        {"state":"SUCCESS","url":"\/storage\/img\/17124\/JBgmzjlqeneLEsYUv7TyJFcCMoycCz35xbsUaD0s.jpeg","title":"weixin.jpg","original":"weixin.jpg"}
    }
}
