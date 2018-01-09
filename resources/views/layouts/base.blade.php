<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'neusoft') }}--@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{ asset('res/layui/css/layui.css') }}">
    <link rel="stylesheet" href="{{ asset('res/css/global.css') }}">
    @yield('css')
</head>
<body>
<div class="fly-header layui-bg-green">
    <ul class="layui-nav layui-container">
        <li class="layui-nav-item"><a class="" href="{{ url('/') }}">
                <img src="{{ asset('res/images/logo.png') }}" alt="layui" width="150px" height="62px">
            </a></li>
        <li class="layui-nav-item"><a href="{{url("login")}}">登录</a></li>
        <li class="layui-nav-item"><a href="{{url("reg")}}">注册</a></li>
        <li class="layui-nav-item"><a href="{{url("home")}}">我的中心</a></li>
    </ul>

</div>
@yield('content')
<div class="fly-footer">
    <p>©2017-2020 Powered by {{C('my.url')}} </p>
</div>
<script src="{{ asset('res/layui/layui.js') }}"></script>
@yield('script')
</body>
</html>
