/**
 @Name: 主Base
 */
layui.define(['layer', 'form', 'element', 'upload','laydate','table'], function (exports) {
    var $ = layui.jquery
        , form = layui.form
        , layer = layui.layer
        , device = layui.device()
        , upload = layui.upload,
        element = layui.element

    //阻止IE7以下访问
    if (device.ie && device.ie < 8) {
        layer.alert('如果您非得使用 IE 浏览器访问Fly社区，那么请使用 IE8+');
    }
    var base = {
        //Ajax
        json: function (url, data, success, options) {
            var that = this, type = typeof data === 'function';
            if (type) {
                options = success
                success = data;
                data = {};
            }
            options = options || {};
            return $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: options.type || 'post',
                dataType: options.dataType || 'json',
                data: data,
                url: url,
                async: false,
                success: function (res) {
                    if (res.status === 0) {
                        success && success(res);
                    } else {
                        layer.msg(res.msg || res.code, {shift: 6});
                        options.error && options.error();
                    }
                }, error: function (e) {
                    layer.msg('请求异常，请重试', {shift: 6});
                    options.error && options.error(e);
                }
            });
        },
        upimg: function (id, type) {
            upload.render({
                elem: '#' + id //绑定元素
                , url: '/stripe/upimg' //上传接口
                , accept: type || "images"
                , done: function (res) {
                    if(res.state==200){
                        $("#img_"+id).val(res.url);
                        $("#url_"+id).attr("src",res.url);
                    }else{
                        layer.msg(res.msg, {shift: 6});
                    }
                }
                , error: function (e) {
                    layer.msg('请求异常，请重试', {shift: 6});
                    options.error && options.error(e);
                }
            });
        }
    };
    //ajax提交后跳转
    form.on('submit(go)', function (data) {
        url = data.form.action;
        jump = $('[lay-filter="go"]').attr("lay-jump");
        // console.log(jump);
        base.json(url, data.field, function (res) {
            //  layer.alert('111', function(){
            window.location.href = jump
            //  });
        })
    });
    //ajax提交后提示
    form.on('submit(alert)', function (data) {
        url = data.form.action;
        base.json(url, data.field, function (res) {
            layer.msg(res.msg || res.code);
        })
        return false;
    });
    exports('base', base);
});

