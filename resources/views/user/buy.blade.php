@extends('layouts.home')
@section("title","买入")
@section("content")
    <div class="layui-container fly-marginTop">
        <div class="fly-panel pad20" style="padding-top: 5px;">
            <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
                <legend>买入{{C("my.ll")}}</legend>
            </fieldset>
            <form class="layui-form" action="{{url("buy")}}" method="post">
                @include('form.text',totext(['买入数量','num','','买入'.C("my.ll")."数量",'number','','','数量（'.C("my.ll").'）']))
                @include('form.text',totext(['买入价格','price','','输入价格','number','','','单价（'.C("my.dd").'）']))
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn" type="button" lay-submit="" lay-filter="alert">委托买入</button>
                        {{--<button type="reset" class="layui-btn layui-btn-primary">重置</button>--}}
                        <span class="layui-badge" style="margin-left:3%">提示：系统会自动四舍五入小数点后2位后委托买入</span>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('script')
    <script>
        layui.config({
            version: "3.0.0",
            base: '/res/mods/'
        }).use(['base', 'vali'], function () {
            base = layui.base
        })
    </script>
@endsection


