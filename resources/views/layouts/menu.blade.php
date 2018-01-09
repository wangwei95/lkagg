<div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
        <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
        <ul class="layui-nav layui-nav-tree" lay-filter="test">
            @foreach(session("userinfo.auth.menu1") as $menu1)
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">{{$menu1[2]}}</a>
                    @if(session("userinfo.auth.menu2")[$menu1[0]])
                        <dl class="layui-nav-child">
                            @foreach(session("userinfo.auth.menu2")[$menu1[0]] as $menu2)
                                <dd><a href="{{url($menu2[3])}}">{{$menu2[2]}}</a></dd>
                            @endforeach
                        </dl>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>