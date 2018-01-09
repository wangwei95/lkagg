<div class="layui-form-item">
    <label class="layui-form-label">{{$title}}</label>
    <div class="layui-input-block">
        <button type="button" class="layui-btn" id="{{$name}}">
            <i class="layui-icon">&#xe67c;</i>上传图片
        </button>
    </div>
    <div class="layui-input-block" style="padding-top: 5px;">
        <img src="{{$value?:url("res/images/def.png")}}" id="url_{{$name}}" style="{{$style}}">
    </div>
    <input type="hidden" id="img_{{$name}}" value="{{$value}}" name="{{$name}}">
</div>