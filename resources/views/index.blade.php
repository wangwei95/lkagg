@extends('layouts.home')
@section("title","总览")
@section("content")
    <div style="padding: 20px 20px 20px 20px">
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
            <legend>会员管理</legend>
        </fieldset>
        <button class="layui-btn layui-btn-primary layui-btn-lg">会员列表</button>
        <button class="layui-btn layui-btn-primary layui-btn-lg">会员添加</button>
        <button class="layui-btn layui-btn-primary layui-btn-lg">会员积分</button>
        <button class="layui-btn layui-btn-primary layui-btn-lg">店铺管理</button>
        <button class="layui-btn layui-btn-primary layui-btn-lg">会员卡管理</button>
        <button class="layui-btn layui-btn-primary layui-btn-lg">会员数据分析</button>

        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
            <legend>店铺管理</legend>
        </fieldset>
        <button class="layui-btn layui-btn-primary layui-btn-lg">会员管理</button>
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
            <legend>字段集区块</legend>
        </fieldset>
        <button class="layui-btn layui-btn-primary layui-btn-lg">大型按钮</button>
        <button class="layui-btn layui-btn-primary layui-btn-lg">大型按钮</button>
        <button class="layui-btn layui-btn-primary layui-btn-lg">大型按钮</button>
    </div>
@endsection


