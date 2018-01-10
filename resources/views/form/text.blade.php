<div class="layui-form-item">
    <label class="layui-form-label">{{$title}}</label>
    <div class="layui-input-inline">
        <input type="text" name="{{$name}}" value="{{$value}}" lay-verify="{{$verify}}" placeholder="{{$pla}}"
               id="{{$id}}" autocomplete="off" class="layui-input  {{$class}}">
    </div>
    <div class="layui-form-mid layui-word-aux"><span style="color: red">{{$text}}</span></div>
</div>