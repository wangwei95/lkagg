<div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
        <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
        @php
            $nowurl = Route::getCurrentRoute()->uri
        @endphp
        <ul class="layui-nav layui-nav-tree" lay-filter="test">
            @foreach(C("menu") as $menu1)
                <li class="layui-nav-item layui-nav-itemed">
                    <dl class="layui-nav-child">
                        @if($nowurl==$menu1[1])
                            <dd class="layui-this"><a href="{{url($menu1[1])}}">{{$menu1[0]}}</a></dd>
                        @else
                            <dd><a href="{{url($menu1[1])}}">{{$menu1[0]}}</a></dd>
                        @endif
                    </dl>
                </li>
            @endforeach
        </ul>
    </div>
</div>