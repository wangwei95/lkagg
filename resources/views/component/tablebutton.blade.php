<div class="" style="margin:20px 0 0 20px ">
    @foreach($show as $vo)
        @switch($vo)
            @case('add')
            <button class="layui-btn layui-btn-normal ">增加</button>
            @break
            @case('del')
            <button class="layui-btn layui-btn-danger">删除</button>
            @break
        @endswitch
    @endforeach
</div>