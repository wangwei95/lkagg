<div class="layui-form-item">
    <label class="layui-form-label">{{$title}}</label>
    <div class="layui-input-block"  lay-verify="{{$verify}}">
        @foreach($radioarr as $key=>$vo)
            @if($key===$value)
                <input name="{{$name}}" value="{{$key}}" title="{{$vo}}" checked="" type="radio">
            @else
                <input name="{{$name}}" value="{{$key}}" title="{{$vo}}" type="radio">
            @endif
        @endforeach
    </div>
</div>