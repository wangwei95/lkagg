@extends('layouts.table')
@section("title","总览")
@section("select")
    <div class="layui-form layui-row">
        <div class="layui-col-xs4">
            <label class="layui-form-label">搜索ID：</label>
            <div class="layui-inline">
                <input class="layui-input" name="id" id="demoReload" autocomplete="off">
            </div>
        </div>
        <div class="layui-col-xs4">
            <label class="layui-form-label">单行输入框:</label>
            <div class="layui-inline">
                <select name="quiz1">
                    <option value="">请选择省</option>
                    <option value="浙江" selected="">浙江省</option>
                    <option value="你的工号">江西省</option>
                    <option value="你最喜欢的老师">福建省</option>
                </select>
            </div>
        </div>
        <div class="layui-col-xs4">
            <button class="layui-btn " id="select">搜索</button>
            {{--<button class="layui-btn" style="float: right;margin-right: 150px;">添加</button>--}}
        </div>
    </div>
@endsection
@section("content")
    @component('component/tablebutton',['show'=>['add','del']])@endcomponent
    <table class="layui-hide" id="LAY_table_user" lay-filter="test"></table>
@endsection
@section('script')
    <script>
        layui.use('table', function () {
            var table = layui.table;
            $ = layui.jquery;
            //方法级渲染
            table.render({
                elem: '#LAY_table_user'
                , url: '/member/lists'
                , limits: [10, 50, 100, 200]
                , cols: [[
                    {checkbox: true, fixed: true}
                    , {field: 'id', title: 'ID', sort: true}
                    , {field: 'username', title: '用户名'}
                    , {field: 'sex', title: '性别', sort: true}
                    , {field: 'city', title: '城市'}
                    , {field: 'sign', title: '签名'}
                    , {field: 'experience', title: '积分', sort: true}
                    , {field: 'score', title: '评分', sort: true}
                    , {field: 'classify', title: '职业'}
                    , {field: 'wealth', title: '财富', sort: true}
                    , {title: '财富11', templet: '{{tablebun(['show','edit','del'])}}}', width: '14%'}
                ]]
                , id: 'testReload'
                , page: true
                , even: true
            });

            $('#select').on('click', function () {
                var demoReload = $('#demoReload');
                //执行重载
                table.reload('testReload', {
                    page: {
                        curr: 1 //重新从第 1 页开始
                    }
                    , where: {
                        id: demoReload.val()
                    }
                });
            });
            table.on('checkbox(test)', function (obj) {
                console.log(obj.checked); //当前是否选中状态
                console.log(obj.data.id); //选中行的相关数据
                console.log(obj.type); //如果触发的是全选，则为：all，如果触发的是单选，则为：one
            });
            //监听工具条
            table.on('tool(demo)', function (obj) {
                var data = obj.data;
                if (obj.event === 'detail') {
                    layer.msg('ID：' + data.id + ' 的查看操作');
                } else if (obj.event === 'del') {
                    layer.confirm('真的删除行么', function (index) {
                        obj.del();
                        layer.close(index);
                    });
                } else if (obj.event === 'edit') {
                    layer.alert('编辑行：<br>' + JSON.stringify(data))
                }
            });
        });
    </script>
@endsection


