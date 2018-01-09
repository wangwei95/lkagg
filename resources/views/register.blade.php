@extends('layouts.base')
@section('title', '注册')
@section('content')
    <div class="layui-container fly-marginTop">
        <div class="fly-panel fly-panel-user" pad20>
            <div class="layui-tab layui-tab-brief" lay-filter="user">
                <ul class="layui-tab-title">
                    <li><a href="{{url('login')}}">登录</a></li>
                    <li class="layui-this">注册</li>
                </ul>
                <div class="layui-form layui-tab-content" id="LAY_ucm" style="padding: 20px 0;">
                    <div class="layui-tab-item layui-show">
                        <div class="layui-form layui-form-pane">
                            <form method="post" action="{{url("login")}}">
                                <div class="layui-form-item">
                                    <label for="L_username" class="layui-form-label">用户名</label>
                                    <div class="layui-input-inline">
                                        <input type="text" id="L_username" name="username" required
                                               lay-verify="required|username" lay-verType="tips"
                                               autocomplete="off" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label for="L_pass" class="layui-form-label">密码</label>
                                    <div class="layui-input-inline">
                                        <input type="password" id="L_pass" name="pass" required
                                               lay-verify="required|pass"
                                               lay-verType="tips"
                                               autocomplete="off" class="layui-input">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">6到16个字符</div>
                                </div>
                                <div class="layui-form-item">
                                    <label for="L_repass" class="layui-form-label">确认密码</label>
                                    <div class="layui-input-inline">
                                        <input type="password" id="L_repass" name="repass" required
                                               lay-verify="required|pass|repass"
                                               lay-verType="tips"
                                               autocomplete="off" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <button class="layui-btn" lay-filter="go" lay-jump="{{url('login')}}" type="button"
                                            lay-submit>立即注册
                                    </button>
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
        }).use(['base', 'vali', 'user'], function () {
            var form = layui.form;
            var $ = layui.jquery;
            form.verify({
                repass: function (value, item) {
                    if (value != $("#L_pass").val()) {
                        return "二次密码不同";
                    }
                }
            });
        });
    </script>
@endsection