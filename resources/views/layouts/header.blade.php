<div class="layui-header">
    <div ><a href="{{url("/home")}}" class="layui-logo"> <img src="{{ asset('res/images/logo.png') }}" alt="layui" width="150px" height="62px"></a></div>
    <ul class="layui-nav layui-layout-right">
        <li class="layui-nav-item">
            <a href="{{url("/")}}">
              首页行情
            </a>
        </li>
        <li class="layui-nav-item">
            <a href="javascript:;">
                <img src="http://www.layui.com/favicon.ico" class="layui-nav-img">
                {{session("userinfo.username")}}
            </a>
        </li>
        <li class="layui-nav-item"><a href="{{url("logout")}}">退出</a></li>
    </ul>
</div>
