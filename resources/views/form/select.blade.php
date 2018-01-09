<div class="layui-form-item">
    <label class="layui-form-label">{{$title}}</label>
    <div class="layui-input-block">
        <select name="{{$name}}" lay-filter="required" autocomplete="off" lay-verify="{{$verify}}">
            @foreach($selarr as $key=>$vo)
                @if($key===$value)
                    <option value="{{$key}}" selected>{{$vo}}</option>
                @else
                    <option value="{{$key}}">{{$vo}}</option>
                @endif
            @endforeach
        </select>
    </div>
</div>