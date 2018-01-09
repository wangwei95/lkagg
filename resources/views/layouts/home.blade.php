<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <title>{{ config('app.name', 'neusoft') }}--@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('res/layui/css/layui.css') }}">
    <link rel="stylesheet" href="{{ asset('res/layui/css/global.css') }}">
    @yield('css')
</head>
<body>
<div class="layui-layout-admin">
    @include('layouts.header')
    @include('layouts.menu')
    <div class="layui-body">

        <!-- 内容主体区域 --> @yield('content')
    </div>
    @include('layouts.footer')
</div>
<script src="{{ asset('res/layui/layui.js') }}"></script>
@yield('script')
</body>
</html>