<div class="layui-form-item layui-form-text">
    <label class="layui-form-label">{{$title}}</label>
    <div class="layui-input-block">
        <textarea id="edter_{{$name}}" name="{{$name}}" lay-verify="{{$verify}}"
                  style="{{$style}}" autocomplete="off">{{$value}}</textarea>
    </div>
</div>
<link href="{{url("res/um/themes/default/css/umeditor.css")}}" type="text/css" rel="stylesheet">
<script type="text/javascript" src="{{url("res/um/third-party/jquery.min.js")}}"></script>
<script type="text/javascript" charset="utf-8" src="{{url("res/um/umeditor.config.js")}}"></script>
<script type="text/javascript" charset="utf-8" src="{{url("/res/um/umeditor.min.js")}}"></script>
<script type=" text/javascript">
    //实例化编辑器
    var um = UM.getEditor('edter_{{$name}}');
</script>
