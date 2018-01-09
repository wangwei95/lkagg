@extends('layouts.home')
@section("title","总览")
@section("content")
    <div class="layui-container fly-marginTop">
        <div class="fly-panel pad20" style="padding-top: 5px;">
            <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
                <legend>表单集合演示</legend>
            </fieldset>
            <form class="layui-form" action="/test" method="post">
                @include('form.text',totext(['验证手机','text','','请输入标题','test1','text']))
                @include('form.select',toselect(['选择框','select',[''=>'请选择',0=>'wo',1=>'lai',2=>'ye'],2,"required"]))
                @include('form.radio',toradio(['单选框','radio',[0=>'wo',1=>'lai',2=>'ye'],'',"checkreq"]))
                @include('form.checkbox',tocheckbox(['复选框','checkbox',[0=>'wo',1=>'lai',2=>'ye'],[0,2],"checkreq"]))
                @include('form.area',toarea(['普通sdfas域','area','','','请输入标题','required']))
                {{--@include('form.editer',toediter(['普通文本域','editer','width:60%;','','请输入标题','required']))--}}
                {{--@include('form.img',toimg(['LOGO','img1','','']))--}}
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn" type="button" lay-submit="" lay-filter="alert">立即提交</button>
                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
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
        }).use(['base','vali'],function(){
            base=layui.base,
            base.upimg("img1")//图片initid
            //todo扩展验证 方法等
//            laydate=layui.laydate
//            laydate.render({
//                elem: '#text' //指定元素
//            });
        })
    </script>
@endsection

