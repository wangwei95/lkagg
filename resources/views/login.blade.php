@extends('layouts.base')
@section('title', '登录')
@section('content')
    <div class="layui-container fly-marginTop">
        <div class="fly-panel fly-panel-user" pad20>
            <div class="layui-tab layui-tab-brief" lay-filter="user">
                <ul class="layui-tab-title">
                    <li class="layui-this">登录</li>
                    <li><a href="{{ url('reg') }}">注册</a></li>
                </ul>
                <div class="layui-form layui-tab-content" id="LAY_ucm" style="padding: 20px 0;">
                    <div class="layui-tab-item layui-show">
                        <div class="layui-form layui-form-pane">
                            <form method="post" action="{{ url('login') }}">
                                <div class="layui-form-item">
                                    <label for="L_username" class="layui-form-label">用户名</label>
                                    <div class="layui-input-inline">
                                        <input type="text" id="L_username" name="username" required
                                               lay-verify="required|email" lay-verType="tips"
                                               autocomplete="off" class="layui-input" value="www@qq.com">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label for="L_pass" class="layui-form-label">密码</label>
                                    <div class="layui-input-inline">
                                        <input type="password" id="L_pass" name="pass" required
                                               lay-verify="required|pass"
                                               lay-verType="tips"
                                               autocomplete="off" class="layui-input" value="111111">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <button class="layui-btn" type="button" lay-filter="go"
                                            lay-jump="{{ url('/home') }}" lay-submit>
                                        立即登录
                                    </button>
                                    {{--<span style="padding-left:20px;">             <a href="forget.html">忘记密码？</a></span>--}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        layui.config({
            version: "3.0.0",
            base: '/res/mods/'
        }).use(['base', 'vali', 'user']);
    </script>
@endsection