@extends('layouts.base')
@section("content")
    <div class="layui-bg-gray">
        <!--居中-->
        <div class="layui-container">
            <div class="layui-row layui-col-space10" >
                <div class="layui-col-md9" >
                    <div   class="fly-panel"  style="margin-top:10px;"><h3  id ="main1" class="fly-panel-title">鸡蛋价格(小时)</h3>
                        <div  id="main"   style="height:322px;">
                        </div>
                        <div class="layui-col-md12" >
                            <li rel="nofollow"  style="background-color: #3c3c3c;color:#ffff00;"> <i class="layui-icon">&#xe756;</i> 风险提示：数字货币投资存在一定的风险，请适量控制您的资金，不要投资您所不了解的数字货币，拒绝传销组织，警惕虚假宣传。</li>
                            <li id="buydiv"  style="background-color: #3c3c3c;color:#ff00ff;"> <i class="layui-icon">&#xe756;</i>  链克网网站地址 liankw.cc</li>
                        </div>
                    </div>
                </div>
                <div class="layui-col-md3">
                    <div class="fly-panel " style="margin-top:10px"> <h3 class="fly-panel-title"><font color='#ff5722'><B>链克网 liankw.cc </B></font></h3>
                        <ul class="fly-panel-main fly-list-static">


                            <div class="fly-panel-main" style="padding: 0px 15px;">

                                <li rel="nofollow"  style="background-color: #e9e183;">  1.︴<a href="/download/liankw.cc.rar" target="_blank"><B>下载查询工具</B></a> </li>
                                <li rel="nofollow"  style="background-color: #e3d6bf;">  2.︴客服QQ:279910060 </li>
                                <li rel="nofollow"  style="background-color: #e9e183;">  3.︴工作时间:9:00 - 22:00 </li>
                                <li rel="nofollow"  style="background-color: #e3d6bf;">  4.︴QQ交流群:68766511</li>
                                <li rel="nofollow"  style="background-color: #e9e183;">  5.︴如有问题联系下方官方微信</li>
                                <img src="/wx.jpg"  style= "width:250px;height:250px;padding: 0px 0px;">
                            </div>
                        </ul>

                    </div>
                </div>
            </div>
            <!---分割--->
            <div class="layui-row layui-col-space1">
                <div class="layui-col-md4">
                    <table class="layui-table" lay-skin="line" lay-size="sm">
                        <colgroup>
                            <col width="60">
                            <col width="60">
                            <col>
                        </colgroup>
                        <thead>
                        <tr style="background-color: #3c3c3c;color:#ffffff">
                            <th>时间</th>
                            <th>单价</th>
                            <th>成交额</th>
                        </tr>
                        </thead>
                        <tbody  id = "chengjiao">
                        <tr style= 'background-color: #242933;color: #00ff00;height:33px;'>
                            <td>12:37:53</td>
                            <td>4.68</td>
                            <td>112.21</td>
                        </tr>
                        <tr style= 'background-color: #242933;color: #00ff00;height:33px;'>
                            <td>12:22:42</td>
                            <td>4.68</td>
                            <td>388.05</td>
                        </tr>
                        <tr style= 'background-color: #242933;color: #00ff00;height:33px;'>
                            <td>12:22:42</td>
                            <td>4.68</td>
                            <td>355.32</td>
                        </tr>
                        <tr style= 'background-color: #242933;color: #00ff00;height:33px;'>
                            <td>11:52:45</td>
                            <td>4.68</td>
                            <td>378.7</td>
                        </tr>
                        <tr style= 'background-color: #242933;color: #00ff00;height:33px;'>
                            <td>11:52:45</td>
                            <td>4.68</td>
                            <td>238.44</td>
                        </tr>
                        <tr style= 'background-color: #242933;color: #00ff00;height:33px;'>
                            <td>11:51:03</td>
                            <td>4.68</td>
                            <td>925.71</td>
                        </tr>
                        <tr style= 'background-color: #242933;color: #00ff00;height:33px;'>
                            <td>11:51:03</td>
                            <td>4.68</td>
                            <td>243.12</td>
                        </tr>
                        <tr style= 'background-color: #242933;color: #00ff00;height:33px;'>
                            <td>11:50:31</td>
                            <td>4.68</td>
                            <td>486.23</td>
                        </tr>
                        <tr style= 'background-color: #242933;color: #00ff00;height:33px;'>
                            <td>11:50:31</td>
                            <td>4.68</td>
                            <td>626.49</td>
                        </tr>
                        <tr style= 'background-color: #242933;color: #00ff00;height:33px;'>
                            <td>11:49:58</td>
                            <td>4.68</td>
                            <td>28.05</td>
                        </tr>
                        <tr style= 'background-color: #242933;color: #00ff00;height:33px;'>
                            <td>11:49:58</td>
                            <td>4.69</td>
                            <td>707.48</td>
                        </tr>
                        <tr style= 'background-color: #242933;color: #00ff00;height:33px;'>
                            <td>11:49:58</td>
                            <td>4.69</td>
                            <td>299.86</td>
                        </tr>
                        <tr style= 'background-color: #242933;color: #00ff00;height:33px;'>
                            <td>11:48:57</td>
                            <td>4.69</td>
                            <td>248.32</td>
                        </tr>
                        <tr style= 'background-color: #242933;color: #00ff00;height:33px;'>
                            <td>11:48:57</td>
                            <td>4.69</td>
                            <td>342.03</td>
                        </tr>
                        <tr style= 'background-color: #242933;color: #00ff00;height:33px;'>
                            <td>11:46:02</td>
                            <td>4.69</td>
                            <td>491.96</td>
                        </tr>
                        <tr style= 'background-color: #242933;color: #00ff00;height:33px;'>
                            <td>11:46:02</td>
                            <td>4.7</td>
                            <td>323.98</td>
                        </tr>
                        <tr style= 'background-color: #242933;color: #00ff00;height:33px;'>
                            <td>11:44:18</td>
                            <td>4.7</td>
                            <td>746.55</td>
                        </tr>
                        <tr style= 'background-color: #242933;color: #00ff00;height:33px;'>
                            <td>11:40:32</td>
                            <td>4.7</td>
                            <td>65.73</td>
                        </tr>
                        <tr style= 'background-color: #242933;color: #00ff00;height:33px;'>
                            <td>11:40:32</td>
                            <td>4.7</td>
                            <td>755.94</td>
                        </tr>
                        <tr style= 'background-color: #242933;color: #00ff00;height:33px;'>
                            <td>11:39:43</td>
                            <td>4.7</td>
                            <td>136.16</td>
                        </tr>
                        </tbody>
                    </table>

                </div>

                <div class="layui-col-md8">

                    <div class="layui-col-md12">

                        <table class="layui-table" lay-skin="line"  lay-size="sm">
                            <colgroup>
                                <col width="60">
                                <col width="100">
                                <col width="120">
                                <col width="60">
                                <col>
                            </colgroup>
                            <thead>
                            <tr style="background-color: #3c3c3c;color:#ffffff;">
                                <th>单价</th>
                                <th>数量</th>
                                <th>总价</th>
                                <th>买卖</th>
                                <th>方式</th>
                            </tr>
                            </thead>
                            <tbody  id = "myDiv">
                            <tr style='background-color: #242933;color: #00FF00;'>
                                <td>4.9</td>
                                <td>1</td>
                                <td>4.9</td>
                                <td> 卖 10</td>
                                <td><button class='layui-btn layui-btn-danger layui-btn-mini' id ='buy'  value = 4.9> 买入 </button></td>
                            </tr>
                            <tr style='background-color: #242933;color: #00FF00;'>
                                <td>4.77</td>
                                <td>157</td>
                                <td>748.89</td>
                                <td> 卖 9</td>
                                <td><button class='layui-btn layui-btn-danger layui-btn-mini' id ='buy'  value = 4.77> 买入 </button></td>
                            </tr>
                            <tr style='background-color: #242933;color: #00FF00;'>
                                <td>4.76</td>
                                <td>840</td>
                                <td>3998.4</td>
                                <td> 卖 8</td>
                                <td><button class='layui-btn layui-btn-danger layui-btn-mini' id ='buy'  value = 4.76> 买入 </button></td>
                            </tr>
                            <tr style='background-color: #242933;color: #00FF00;'>
                                <td>4.75</td>
                                <td>894</td>
                                <td>4246.5</td>
                                <td> 卖 7</td>
                                <td><button class='layui-btn layui-btn-danger layui-btn-mini' id ='buy'  value = 4.75> 买入 </button></td>
                            </tr>
                            <tr style='background-color: #242933;color: #00FF00;'>
                                <td>4.74</td>
                                <td>1034</td>
                                <td>4901.16</td>
                                <td> 卖 6</td>
                                <td><button class='layui-btn layui-btn-danger layui-btn-mini' id ='buy'  value = 4.74> 买入 </button></td>
                            </tr>
                            <tr style='background-color: #242933;color: #00FF00;'>
                                <td>4.73</td>
                                <td>669</td>
                                <td>3164.37</td>
                                <td> 卖 5</td>
                                <td><button class='layui-btn layui-btn-danger layui-btn-mini' id ='buy'  value = 4.73> 买入 </button></td>
                            </tr>
                            <tr style='background-color: #242933;color: #00FF00;'>
                                <td>4.72</td>
                                <td>944</td>
                                <td>4455.68</td>
                                <td> 卖 4</td>
                                <td><button class='layui-btn layui-btn-danger layui-btn-mini' id ='buy'  value = 4.72> 买入 </button></td>
                            </tr>
                            <tr style='background-color: #242933;color: #00FF00;'>
                                <td>4.71</td>
                                <td>246</td>
                                <td>1158.66</td>
                                <td> 卖 3</td>
                                <td><button class='layui-btn layui-btn-danger layui-btn-mini' id ='buy'  value = 4.71> 买入 </button></td>
                            </tr>
                            <tr style='background-color: #242933;color: #00FF00;'>
                                <td>4.7</td>
                                <td>510</td>
                                <td>2397</td>
                                <td> 卖 2</td>
                                <td><button class='layui-btn layui-btn-danger layui-btn-mini' id ='buy'  value = 4.7> 买入 </button></td>
                            </tr>
                            <tr style='background-color: #242933;color: #00FF00;'>
                                <td>4.69</td>
                                <td>862</td>
                                <td>4042.78</td>
                                <td> 卖 1</td>
                                <td><button class='layui-btn layui-btn-danger layui-btn-mini' id ='buy'  value = 4.69> 买入 </button></td>
                            </tr>
                            </tbody>
                            <tbody id = "myDiv1">

                            <tr style='background-color: #242933;color: #FF0000;'>
                                <td>4.68</td>
                                <td>326</td>
                                <td>1525.68</td>
                                <td> 买 1</td>
                                <td><button class='layui-btn layui-btn-normal layui-btn-mini' id ='sell'  value = 4.68> 卖出 </button></td>
                            </tr>
                            <tr style='background-color: #242933;color: #FF0000;'>
                                <td>4.67</td>
                                <td>1372</td>
                                <td>6407.24</td>
                                <td> 买 2</td>
                                <td><button class='layui-btn layui-btn-normal layui-btn-mini' id ='sell'  value = 4.67> 卖出 </button></td>
                            </tr>
                            <tr style='background-color: #242933;color: #FF0000;'>
                                <td>4.66</td>
                                <td>862</td>
                                <td>4016.92</td>
                                <td> 买 3</td>
                                <td><button class='layui-btn layui-btn-normal layui-btn-mini' id ='sell'  value = 4.66> 卖出 </button></td>
                            </tr>
                            <tr style='background-color: #242933;color: #FF0000;'>
                                <td>4.24</td>
                                <td>41</td>
                                <td>173.84</td>
                                <td> 买 4</td>
                                <td><button class='layui-btn layui-btn-normal layui-btn-mini' id ='sell'  value = 4.24> 卖出 </button></td>
                            </tr>
                            <tr style='background-color: #242933;color: #FF0000;'>
                                <td>4.23</td>
                                <td>929</td>
                                <td>3929.67</td>
                                <td> 买 5</td>
                                <td><button class='layui-btn layui-btn-normal layui-btn-mini' id ='sell'  value = 4.23> 卖出 </button></td>
                            </tr>
                            <tr style='background-color: #242933;color: #FF0000;'>
                                <td>4.22</td>
                                <td>636</td>
                                <td>2683.92</td>
                                <td> 买 6</td>
                                <td><button class='layui-btn layui-btn-normal layui-btn-mini' id ='sell'  value = 4.22> 卖出 </button></td>
                            </tr>
                            <tr style='background-color: #242933;color: #FF0000;'>
                                <td>4.21</td>
                                <td>944.93112</td>
                                <td>3978.1600152</td>
                                <td> 买 7</td>
                                <td><button class='layui-btn layui-btn-normal layui-btn-mini' id ='sell'  value = 4.21> 卖出 </button></td>
                            </tr>
                            <tr style='background-color: #242933;color: #FF0000;'>
                                <td>4.2</td>
                                <td>1006</td>
                                <td>4225.2</td>
                                <td> 买 8</td>
                                <td><button class='layui-btn layui-btn-normal layui-btn-mini' id ='sell'  value = 4.2> 卖出 </button></td>
                            </tr>
                            <tr style='background-color: #242933;color: #FF0000;'>
                                <td>4.19</td>
                                <td>890</td>
                                <td>3729.1</td>
                                <td> 买 9</td>
                                <td><button class='layui-btn layui-btn-normal layui-btn-mini' id ='sell'  value = 4.19> 卖出 </button></td>
                            </tr>
                            <tr style='background-color: #242933;color: #FF0000;'>
                                <td>4.18</td>
                                <td>171</td>
                                <td>714.78</td>
                                <td> 买 10</td>
                                <td><button class='layui-btn layui-btn-normal layui-btn-mini' id ='sell'  value = 4.18> 卖出 </button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
    <script src="/res/ec/echarts.min.js"></script>
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var div1 = document.getElementById('main1')
        var div= document.getElementById('main')

        var myChart = echarts.init(div);
        //用于使chart自适应高度和宽度,通过窗体高宽计算容器高宽
        var resizeWorldMapContainer = function (div1) {

            div.style.width = div1.style.width;
            //div.style.height = window.clientHeight+'px';
            //div.style.width = window.innerWidth+'px';
            //div.style.height = window.clientHeight+'px';
        };
        //设置容器高宽
        var div1 = document.getElementById('main1')
        resizeWorldMapContainer(div1);
        // 指定图表的配置项和数据
        // 指定图表的配置项和数据
        option = {
            tooltip : {
                trigger: 'axis',
                formatter: function (params) {
                    var res = params[0].seriesName + ' ' + params[0].name + '时';
                    res += '<br/>  开盘 : ' + params[0].value[1] + '  最高 : ' + params[0].value[4];
                    res += '<br/>  收盘 : ' + params[0].value[2] + '  最低 : ' + params[0].value[3];
                    return res;
                }
            },
            dataZoom : {
                show : true,
                realtime: true,
                start : 80,
                end : 100
            },
            xAxis : [
                {
                    type : 'category',
                    boundaryGap : true,
                    axisTick: {onGap:false},
                    splitLine: {show:false},
                    data : [ "2017/11/28/17", "2017/11/28/18", "2017/11/28/19" ]

                }
            ],
            yAxis : [
                {
                    type : 'value',
                    scale:true,
                    boundaryGap: [0.001,0.001]
                }
            ],
            series : [
                {
                    name:'鸡蛋',
                    type:'k',
                    data:[ // 开盘，收盘，最低，最高
                        [7.5,7.6,7.4,7.8],
                        [7.5,7.6,7.4,7.8],
                    ],

                }
            ]
        };


        //alert(option.series[0].data);
        var ss = [
            {
                "data":[
                    "2018/01/03/23",
                    "2018/01/04/00",
                    "2018/01/04/01",
                    "2018/01/04/08",
                    "2018/01/04/09",
                    "2018/01/04/10",
                    "2018/01/04/11",
                    "2018/01/04/12",
                    "2018/01/04/13",
                    "2018/01/04/14",
                    "2018/01/04/15",
                    "2018/01/04/16",
                    "2018/01/04/17",
                    "2018/01/04/18",
                    "2018/01/04/19",
                    "2018/01/04/20",
                    "2018/01/04/21",
                    "2018/01/04/22",
                    "2018/01/04/23",
                    "2018/01/05/00",
                    "2018/01/05/01",
                    "2018/01/05/02",
                    "2018/01/05/03",
                    "2018/01/05/07",
                    "2018/01/05/08",
                    "2018/01/05/09",
                    "2018/01/05/10",
                    "2018/01/05/11",
                    "2018/01/05/12",
                    "2018/01/05/13",
                    "2018/01/05/14",
                    "2018/01/05/21",
                    "2018/01/05/22",
                    "2018/01/05/23",
                    "2018/01/06/00",
                    "2018/01/06/01",
                    "2018/01/06/09",
                    "2018/01/06/10",
                    "2018/01/06/11",
                    "2018/01/06/12",
                    "2018/01/06/13",
                    "2018/01/06/14",
                    "2018/01/06/15",
                    "2018/01/06/16",
                    "2018/01/06/17",
                    "2018/01/06/18",
                    "2018/01/06/19",
                    "2018/01/06/20",
                    "2018/01/06/21",
                    "2018/01/06/22",
                    "2018/01/06/23",
                    "2018/01/07/00",
                    "2018/01/07/01",
                    "2018/01/07/09",
                    "2018/01/07/10",
                    "2018/01/07/11",
                    "2018/01/07/12",
                    "2018/01/07/13",
                    "2018/01/07/14",
                    "2018/01/07/15",
                    "2018/01/07/16",
                    "2018/01/07/17",
                    "2018/01/07/18",
                    "2018/01/07/19",
                    "2018/01/07/20",
                    "2018/01/07/21",
                    "2018/01/07/22",
                    "2018/01/07/23",
                    "2018/01/08/00",
                    "2018/01/08/05",
                    "2018/01/08/06",
                    "2018/01/08/07",
                    "2018/01/08/09",
                    "2018/01/08/10",
                    "2018/01/08/11",
                    "2018/01/08/12",
                    "2018/01/08/13",
                    "2018/01/08/14",
                    "2018/01/08/15",
                    "2018/01/08/16",
                    "2018/01/08/17",
                    "2018/01/08/18",
                    "2018/01/08/19",
                    "2018/01/08/20",
                    "2018/01/08/21",
                    "2018/01/08/22",
                    "2018/01/08/23",
                    "2018/01/09/00",
                    "2018/01/09/01",
                    "2018/01/09/02",
                    "2018/01/09/03",
                    "2018/01/09/04",
                    "2018/01/09/05",
                    "2018/01/09/06",
                    "2018/01/09/07",
                    "2018/01/09/08",
                    "2018/01/09/09",
                    "2018/01/09/10",
                    "2018/01/09/11",
                    "2018/01/09/12"
                ]
            },
            {
                "data":[
                    [
                        4.61,
                        4.61,
                        4.61,
                        4.61
                    ],
                    [
                        4.62,
                        4.6,
                        4.6,
                        4.62
                    ],
                    [
                        4.61,
                        4.6,
                        4.6,
                        4.61
                    ],
                    [
                        4.6,
                        4.68,
                        4.6,
                        4.68
                    ],
                    [
                        4.6,
                        4.81,
                        4.6,
                        4.81
                    ],
                    [
                        4.68,
                        4.84,
                        4.68,
                        4.88
                    ],
                    [
                        4.81,
                        4.75,
                        4.75,
                        4.88
                    ],
                    [
                        4.83,
                        4.78,
                        4.74,
                        4.83
                    ],
                    [
                        4.74,
                        4.75,
                        4.74,
                        4.81
                    ],
                    [
                        4.78,
                        4.72,
                        4.69,
                        4.78
                    ],
                    [
                        4.75,
                        4.69,
                        4.69,
                        4.76
                    ],
                    [
                        4.7,
                        4.67,
                        4.66,
                        4.72
                    ],
                    [
                        4.69,
                        4.67,
                        4.66,
                        4.69
                    ],
                    [
                        4.67,
                        4.69,
                        4.67,
                        4.69
                    ],
                    [
                        4.68,
                        4.7,
                        4.68,
                        4.7
                    ],
                    [
                        4.7,
                        4.71,
                        4.7,
                        4.71
                    ],
                    [
                        4.71,
                        4.7,
                        4.7,
                        4.71
                    ],
                    [
                        4.71,
                        4.74,
                        4.7,
                        4.74
                    ],
                    [
                        4.7,
                        4.7,
                        4.7,
                        4.74
                    ],
                    [
                        4.74,
                        4.7,
                        4.7,
                        4.74
                    ],
                    [
                        4.7,
                        4.71,
                        4.7,
                        4.71
                    ],
                    [
                        4.71,
                        4.71,
                        4.71,
                        4.71
                    ],
                    [
                        4.71,
                        4.71,
                        4.71,
                        4.71
                    ],
                    [
                        4.72,
                        4.74,
                        4.72,
                        4.74
                    ],
                    [
                        4.72,
                        4.74,
                        4.72,
                        4.74
                    ],
                    [
                        4.74,
                        4.75,
                        4.74,
                        4.75
                    ],
                    [
                        4.74,
                        4.74,
                        4.74,
                        4.75
                    ],
                    [
                        4.75,
                        4.74,
                        4.74,
                        4.75
                    ],
                    [
                        4.74,
                        4.74,
                        4.74,
                        4.74
                    ],
                    [
                        4.74,
                        4.73,
                        4.73,
                        4.74
                    ],
                    [
                        4.74,
                        4.73,
                        4.73,
                        4.74
                    ],
                    [
                        4.75,
                        4.68,
                        4.68,
                        4.75
                    ],
                    [
                        4.75,
                        4.69,
                        4.68,
                        4.75
                    ],
                    [
                        4.68,
                        4.68,
                        4.68,
                        4.69
                    ],
                    [
                        4.69,
                        4.66,
                        4.66,
                        4.69
                    ],
                    [
                        4.68,
                        4.66,
                        4.66,
                        4.68
                    ],
                    [
                        4.66,
                        4.66,
                        4.65,
                        4.66
                    ],
                    [
                        4.66,
                        4.69,
                        4.65,
                        4.69
                    ],
                    [
                        4.67,
                        4.67,
                        4.67,
                        4.69
                    ],
                    [
                        4.68,
                        4.67,
                        4.67,
                        4.68
                    ],
                    [
                        4.67,
                        4.66,
                        4.66,
                        4.67
                    ],
                    [
                        4.67,
                        4.66,
                        4.66,
                        4.67
                    ],
                    [
                        4.65,
                        4.66,
                        4.65,
                        4.66
                    ],
                    [
                        4.65,
                        4.65,
                        4.65,
                        4.66
                    ],
                    [
                        4.65,
                        4.65,
                        4.65,
                        4.65
                    ],
                    [
                        4.64,
                        4.64,
                        4.64,
                        4.64
                    ],
                    [
                        4.64,
                        4.63,
                        4.63,
                        4.64
                    ],
                    [
                        4.63,
                        4.62,
                        4.62,
                        4.63
                    ],
                    [
                        4.63,
                        4.63,
                        4.62,
                        4.63
                    ],
                    [
                        4.62,
                        4.63,
                        4.62,
                        4.63
                    ],
                    [
                        4.63,
                        4.62,
                        4.62,
                        4.63
                    ],
                    [
                        4.63,
                        4.63,
                        4.62,
                        4.63
                    ],
                    [
                        4.62,
                        4.63,
                        4.62,
                        4.63
                    ],
                    [
                        4.63,
                        4.63,
                        4.63,
                        4.63
                    ],
                    [
                        4.63,
                        4.61,
                        4.61,
                        4.63
                    ],
                    [
                        4.63,
                        4.54,
                        4.54,
                        4.63
                    ],
                    [
                        4.61,
                        4.48,
                        4.48,
                        4.61
                    ],
                    [
                        4.54,
                        4.47,
                        4.47,
                        4.54
                    ],
                    [
                        4.48,
                        4.42,
                        4.42,
                        4.48
                    ],
                    [
                        4.46,
                        4.4,
                        4.4,
                        4.46
                    ],
                    [
                        4.42,
                        4.44,
                        4.39,
                        4.44
                    ],
                    [
                        4.39,
                        4.49,
                        4.39,
                        4.49
                    ],
                    [
                        4.47,
                        4.48,
                        4.47,
                        4.49
                    ],
                    [
                        4.49,
                        4.48,
                        4.48,
                        4.49
                    ],
                    [
                        4.48,
                        4.45,
                        4.45,
                        4.48
                    ],
                    [
                        4.48,
                        4.42,
                        4.42,
                        4.48
                    ],
                    [
                        4.44,
                        4.41,
                        4.41,
                        4.44
                    ],
                    [
                        4.42,
                        4.41,
                        4.41,
                        4.42
                    ],
                    [
                        4.4,
                        4.4,
                        4.4,
                        4.4
                    ],
                    [
                        4.41,
                        4.41,
                        4.41,
                        4.41
                    ],
                    [
                        4.4,
                        4.38,
                        4.38,
                        4.4
                    ],
                    [
                        4.38,
                        4.38,
                        4.38,
                        4.38
                    ],
                    [
                        4.39,
                        4.4,
                        4.39,
                        4.42
                    ],
                    [
                        4.4,
                        4.41,
                        4.4,
                        4.42
                    ],
                    [
                        4.41,
                        4.37,
                        4.37,
                        4.42
                    ],
                    [
                        4.41,
                        4.26,
                        4.26,
                        4.41
                    ],
                    [
                        4.37,
                        4.25,
                        4.21,
                        4.37
                    ],
                    [
                        4.21,
                        4.21,
                        4.21,
                        4.25
                    ],
                    [
                        4.25,
                        4.21,
                        4.19,
                        4.25
                    ],
                    [
                        4.21,
                        4.25,
                        4.19,
                        4.25
                    ],
                    [
                        4.24,
                        4.22,
                        4.22,
                        4.25
                    ],
                    [
                        4.24,
                        4.22,
                        4.22,
                        4.24
                    ],
                    [
                        4.22,
                        4.25,
                        4.22,
                        4.25
                    ],
                    [
                        4.22,
                        4.36,
                        4.22,
                        4.36
                    ],
                    [
                        4.25,
                        4.46,
                        4.24,
                        4.46
                    ],
                    [
                        4.36,
                        4.62,
                        4.36,
                        4.62
                    ],
                    [
                        4.46,
                        4.68,
                        4.46,
                        4.68
                    ],
                    [
                        4.62,
                        4.7,
                        4.62,
                        4.7
                    ],
                    [
                        4.68,
                        4.7,
                        4.68,
                        4.71
                    ],
                    [
                        4.7,
                        4.7,
                        4.7,
                        4.71
                    ],
                    [
                        4.7,
                        4.7,
                        4.7,
                        4.7
                    ],
                    [
                        4.7,
                        4.7,
                        4.7,
                        4.7
                    ],
                    [
                        4.7,
                        4.71,
                        4.7,
                        4.71
                    ],
                    [
                        4.71,
                        4.7,
                        4.7,
                        4.71
                    ],
                    [
                        4.7,
                        4.7,
                        4.7,
                        4.7
                    ],
                    [
                        4.7,
                        4.69,
                        4.69,
                        4.7
                    ],
                    [
                        4.69,
                        4.7,
                        4.68,
                        4.7
                    ],
                    [
                        4.68,
                        4.74,
                        4.68,
                        4.74
                    ],
                    [
                        4.7,
                        4.68,
                        4.68,
                        4.74
                    ],
                    [
                        4.71,
                        4.68,
                        4.68,
                        4.71
                    ]
                ]
            }
        ];
        if (ss[0]){

            option.xAxis[0].data  = ss[0].data;
            option.series[0].data = ss[1].data;
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        //用于使chart自适应高度和宽度
        window.onresize = function () {
            //重置容器高宽
            var div1 = document.getElementById('main1')
            resizeWorldMapContainer(div1);
            myChart.resize();
        };
    </script>


@endsection

