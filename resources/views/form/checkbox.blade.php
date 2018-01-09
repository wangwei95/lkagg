<div class="layui-form-item" pane="">
    <label class="layui-form-label">{{$title}}</label>
    <div class="layui-input-block"  lay-verify="{{$verify}}">
        @foreach($checkarr as $key=>$vo)
            @if(in_array($key,$value))
                <input name="{{$name}}[]" lay-skin="primary" value="{{$key}}" title="{{$vo}}" checked=""
                       type="checkbox">
            @else
                <input name="{{$name}}[]" lay-skin="primary" value="{{$key}}" title="{{$vo}}" type="checkbox">
            @endif
        @endforeach
    </div>
</div>
