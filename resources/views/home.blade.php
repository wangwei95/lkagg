@extends('layouts.home')
@section("title","总览")
@section("content")
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
        <legend>我的信息</legend>
    </fieldset>

    <table class="layui-table" lay-size="lg">
        <colgroup>
            <col width="150">
            <col width="200">
            <col>
        </colgroup>
        <tbody>
        <tr>
            <td>用户名</td>
            <td>{{$username}}</td>
            <td></td>
        </tr>
        <tr>
            <td>用户id</td>
            <td>{{$uid}}</td>
            <td><span  class="layui-badge">充值ID,本站唯一标识</span></td>
        </tr>
        <tr>
            <td>我的{{C("my.dd")}}</td>
            <td>{{$dd}}</td>
            <td>
                <button class="layui-btn layui-btn-warm layui-btn-sm">马上冲{{C("my.dd")}}>></button>
            </td>
        </tr>
        <tr>
            <td>我的{{C("my.ll")}}</td>
            <td>{{$lk}}</td>
            <td>
                <button class="layui-btn layui-btn-normal layui-btn-sm">马上冲{{C("my.ll")}}>></button>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
@section('script')

@endsection

