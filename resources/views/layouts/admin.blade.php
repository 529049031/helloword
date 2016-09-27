<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('resources/views/admin/style/css/ch-ui.admin.css')}}">
    <link rel="stylesheet" href="{{asset('resources/views/admin/style/font/css/font-awesome.min.css')}}">
    <script type="text/javascript" src="{{asset('resources/views/admin/style/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('resources/views/admin/style/js/ch-ui.admin.js')}}"></script>

    <link rel="shortcut icon" href="img/logo.ico" type="images/x-icon"/>

    <title>宽世祥后台管理页面</title>
    <style>
        .top_box {
            background-image: url({{asset('resources/views/admin/style/img/logo.png')}});
            background-repeat: no-repeat;
            background-position-x: 2%;
            background-position-y: center;
        }

        a:hover {
            cursor: pointer;
            text-decoration: none;
        }

        a:link {
            text-decoration: none;
        }

        a:visited {
            text-decoration: none;
        }

        a:active {
            text-decoration: none;
        }
    </style>
</head>
<body>
<!--头部 开始-->
<div class="top_box">
    <div class="top_left">
    </div>
    <div class="top_right">
        <ul>
            <li>管理员：admin</li>

            <li class="aaa"><a href="#">退出</a></li>
            <li class="aaa"><a href="{{url('admin/pass')}}" target="main">修改密码</a></li>

        </ul>
    </div>
</div>
<!--头部 结束-->

<!--左侧导航 开始-->
<div class="menu_box">
    <ul>
        <li class="user_name_top">
            <h3>宽世祥文化传播有限公司</h3>
        </li>
        <a href="{{url('admin/Report')}}" target="main">
            <li id="cxcld">
                <h3><i class="fa fa-fw fa-clipboard"></i>藏品管理</h3>
            </li>
        </a>
        <a href="{{url('admin/order')}}" target="main">
            <li>
                <h3><i class="fa fa-fw fa-table"></i>中标订单管理</h3>
            </li>
        </a>
        <li>
            <h3><i class="fa fa-fw fa-table"></i>报表管理</h3>
            <ul class="sub_menu">
                <li><a href="{{url('admin/bidding')}}" target="main">竞价报表</a></li>
            </ul>
        </li>
        <a href="{{url('admin/list')}}" target="main">
            <li>
                <h3><i class="fa fa-fw fa-cog"></i>系统设置</h3>
            </li>
        </a>
    </ul>
</div>
<!--左侧导航 结束-->

@yield('content')

        <!--底部 开始-->
<div class="bottom_box">
    CopyRight ? 2016. Powered By <a href="http://www.weimob.com/">http://www.weimob.com/</a>.
</div>
<!--底部 结束-->
</body>

<script>
    $("li").on("click", function () {
        $("#cxcld").removeAttr("id");
        $(this).attr('id', 'cxcld');
        //	alert("123");
    })
</script>
</html>