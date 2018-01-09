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
<div class="fly-header layui-bg-black">
    <div class="layui-container">
        <a class="fly-logo" href="{{ url('/') }}">
            <img src="{{ asset('res/images/logo.png') }}" alt="layui">
        </a>
    </div>
</div>
@yield('content')
<div class="fly-footer">
    <p>©2017-2020 Neusoft. Powered by</p>
</div>
<script src="{{ asset('res/layui/layui.js') }}"></script>
@yield('script')
</body>
</html>
