<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="email=no">
    <meta name="format-detection" content="address=no;">
    <title>竞拍详情-宽世祥文化</title>
    <link rel="stylesheet" href="{{asset('resources/views/style/css/swiper.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('resources/views/style/css/init.css')}}"/>
    <style>
        .swiper-slide {
            width: 100%;
            overflow: hidden;
        }

        .swiper-slide img {
            height: 10.0rem;
        }

        .top_text {
            text-shadow: rgba(0, 0, 0, 0.4) 0px 0px 3px;
        }

        .myslhz {
            text-shadow: rgba(0, 0, 0, 0.4) 0px 0px 3px;
            box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);
        }

        .header {
            position: relative;
        }

        #head_swiper .swiper-slide {
            height: 10.0rem;
            overflow: hidden;
            position: relative;
        }

        #head_swiper .swiper-slide img {
            position: absolute;
        }

        /*重写swiper*/

        .swiper-container-horizontal > .swiper-pagination {
            bottom: 0.85333rem !important;
        }

        .swiper-pagination-bullet-active {
            background: #fff;
        }

        .top_time_div {
            height: 0.875rem;
            line-height: 0.875rem;
            font-size: 0.34375rem;
            background-color: rgba(139, 0, 26, 0.75);
            margin-top: -0.875rem;
            z-index: 999;
            position: relative;
        }

        .top_time_img {
            width: 0.3rem;
            padding-top: 0.25rem;
            margin-left: 0.3rem;
        }

        .f {
            color: #FFF;
        }

        .swiper-container {
            z-index: 1;
        }

        .zz {
            margin-right: 0.5rem;
        }

        .main_end_div {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 1.40625rem;
            background-color: #FFF;
            border-top: 1px solid #eee;
        }

        .main_end_div_left {
            font-size: 0.28125rem;
            padding-left: 0.34375rem;
            float: left;
            width: 35%;
        }

        .main_end_div_left_gjtext {
            float: left;
            width: 40%;
            margin-top: 0.3rem;
            color: #999;
            line-height: 0.4rem;
        }

        .main_end_div_left_text_rs {
            float: left;
            /*margin-left: 0.2rem;*/
            color: #8b001a;
            font-size: 0.59375rem;
            line-height: 1.40625rem;
        }

        .main_end_div_left_text {
            /*clear: both;*/
            float: right;
            margin-right: 0.2rem;
            line-height: 1.40625rem;
            color: #999;
        }

        .main_end_div_right {
            float: right;
            width: 65%;
        }

        .fx {
            width: 1.40625rem;
            background: url('{{asset('resources/views/style/img/zhuanfa.png')}}') center 0.3rem no-repeat;
            background-size: 40%;
            font-size: 0.28125rem;
            text-align: center;
            padding-top: 0.9rem;
            border-left: 1px solid #eee;
        }

        .cy {
            clear: both;
            float: right;
            width: 5.0rem;
            text-align: center;
            font-size: 0.46875rem;
            color: #FFF;
            background-color: #8b001a;
            height: 1.40625rem;
            line-height: 1.40625rem;
            margin-top: -1.34rem;
        }

        .main_title_div {
            padding-left: 0.34375rem;
            padding-right: 0.34375rem;
            height: 2.1875rem;
            border-bottom: 1px dashed #eee;
        }

        .main_title {
            float: left;
            line-height: 0.6rem;
            font-size: 0.46875rem;
            display: block; /*内联对象需加*/
            width: 80%;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            margin-top: 0.4rem;
            padding-right: 0.6rem;
            border-right: 1px solid #eee;
        }

        .main_sc {
            float: right;
            height: 2.1875rem;
            width: 20%;
            /*background: url(style/img/weishoucang.png) center 0.5rem no-repeat;
            background-size: 40%;*/
            font-size: 0.28125rem;
            text-align: center;
            padding-top: 0.4rem;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        .main_sc_img {
            width: 30%;
            margin-left: auto;
        }

        .main_xx_div {
            height: 0.9375rem;
            margin-top: 0.46875rem;
            font-size: 0.34375rem;
            color: #999;
            text-align: center;
            border-bottom: 1px dashed #eee;
        }

        .main_xx_div_wg {
            float: left;
            width: 33%;
            border-right: 1px solid #999;
        }

        .main_xx_div_jj {
            float: left;
            width: 33%;
            border-right: 1px solid #999;
        }

        .main_xx_div_sc {
            float: left;
            width: 33%;
            /*border-right:1px solid #eee ;*/
        }

        .main_xx_div_wg_text {
            margin-left: 0.1rem;
            margin-right: 0.1rem;
            color: #000;
        }

        .main_xx_div_jj_text {
            margin-left: 0.1rem;
            margin-right: 0.1rem;
            color: #000;
        }

        .main_xx_div_sc_text {
            margin-left: 0.1rem;
            margin-right: 0.1rem;
            color: #000;
        }

        .hr_div {
            margin-top: 0.6rem;
            position: relative;
            background-color: #FFF;
            font-size: 0.34375rem;
            color: #999;
            height: 0.9375rem;
        }

        .hr_text {
            position: absolute;
            top: -0.2rem;
            left: 50%;
            width: 4.6875rem;
            margin-left: -2.34375rem;
            background-color: #FFF;
            text-align: center;
        }

        hr {
            border: 1px solid #eee;
        }
    </style>
</head>
<body>
<div class="main_div">
    <input type="hidden" name="coll_id" value="{{$data->coll_id}}">

    <div class="swiper-container" id="head_swiper">
        <div class="swiper-wrapper">
            @foreach($data->sources as $v)
                <div class="swiper-slide img1" id="d1">
                    <img src="{{$v}}" id="lb1">
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <div class="top_time_div">
            <img class="top_time_img" src="{{asset('resources/views/style/img/daojishi.png')}}"/>
            <span class="top_time_text zz f">@if($tag===true){{'正在进行'}}@else{{'活动已结束'}}@endif</span>
            <span class="top_time_text_time f">{{$endTime->end_time}}</span>
            <span class="top_time_text f">结束</span>
        </div>
    </div>
    <div class="main_title_div">
        <div class="main_title">
            {{$data->name}}
        </div>
        <div class="main_sc" onclick="sc()">
            <img src="@if($focus === 0){{asset('resources/views/style/img/yishoucang.png')}}@else{{asset('resources/views/style/img/weishoucang.png')}}@endif" class="main_sc_img"/>
            <br/>
            收藏
        </div>
    </div>
    <div class="main_xx_div">
        <div class="main_xx_div_wg">
            围观<span class="main_xx_div_wg_text">777</span>次
        </div>
        <div class="main_xx_div_jj">
            竞价<span class="main_xx_div_jj_text">555</span>人
        </div>
        <div class="main_xx_div_sc">
            收藏<span class="main_xx_div_sc_text">333</span>人
        </div>
    </div>

    <div class="hr_div">

        <div class="hr_text">继续拖动查看商品详情</div>
        <hr/>
        <div>
            <p>{!! unserialize($data->content) !!}</p>
        </div>
    </div>


    <div class="main_end_div">
        <div class="main_end_div_left">
            <div class="main_end_div_left_gjtext">
                当前高于我的竞价
            </div>
            <div class="main_end_div_left_text_rs">
                9999
            </div>
            <div class="main_end_div_left_text">
                人
            </div>
        </div>
        <div class="main_end_div_right">

            <div class="fx" onclick="fx()">
                分享
            </div>
            <div class="cy" onclick="cy()">
                参与竞价
            </div>
        </div>

    </div>
</div>
</body>
<script type="text/javascript" src="{{asset('resources/views/style/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/style/js/calrem.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/style/js/swiper.min.js')}}"></script>
<script src="{{asset('resources/org/layer/layer.js')}}"></script>

<script>
    var xrc1 = $("#lb1").attr("src");
    var xrc2 = $("#lb2").attr("src");
    var xrc3 = $("#lb3").attr("src");
    var xrc4 = $("#lb4").attr("src");
    var xrc5 = $("#lb5").attr("src");
    var xrc6 = $("#lb6").attr("src");

    if (xrc1 == '') {
        $('#d1').css('display', 'none');
    }
    if (xrc2 == '') {
        $('#d2').css('display', 'none');
    }
    if (xrc3 == '') {
        $('#d3').css('display', 'none');
    }
    if (xrc4 == '') {
        $('#d4').css('display', 'none');
    }
    if (xrc5 == '') {
        $('#d5').css('display', 'none');
    }
    if (xrc6 == '') {
        $('#d6').css('display', 'none');
    }

    $(document).ready(function () {
        //实例化头图轮播
        var mySwiper = new Swiper('#head_swiper', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            autoplay: 3000,
            autoplayDisableOnInteraction: false,
        })

    });
    $(window).load(function () {
//	    initStyle($("#head_swiper img"));
    });

    function fx() {
        alert("分享");
    }
    function cy() {
        @if($tag === false)
        alert('活动已结束d');
        return;
        @else
        alert("参与报价");
        @endif


    }

    //收藏
    function sc() {
        var src = $(".main_sc_img")[0].src, tag,data={},coll_id;
        if (src.indexOf("wei") != -1) {
            tag = 0;

        } else {
            tag = 1;
        }
        data.coll_id = $('input[name=coll_id]').val();
        data._token = '{{csrf_token()}}';
        data.focus = tag;

        //ajax提交
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            data: data,
            url: '{{url("collect")}}',
            beforeSend: function () {
                layer.load(1);
                return;
            },
            success: function (msg) {
                switch(msg.status){
                    case 0:
                        $(".main_sc_img").attr('src', "{{asset('resources/views/style/img/yishoucang.png')}}");
                                           location.reload();
                        break;
                    case 1:
                        $(".main_sc_img").attr('src', "{{asset('resources/views/style/img/weishoucang.png')}}");
                        break;
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                layer.alert('网络故障!', {'icon': 5});
                return;
            }
        });
    }
    //返回角度
    function GetSlideAngle(dx, dy) {
        return Math.atan2(dy, dx) * 180 / Math.PI;
    }

    //根据起点和终点返回方向 1：向上，2：向下，3：向左，4：向右,0：未滑动
    function GetSlideDirection(startX, startY, endX, endY) {
        var dy = startY - endY;
        var dx = endX - startX;
        var result = 0;

        //如果滑动距离太短
        if (Math.abs(dx) < 2 && Math.abs(dy) < 2) {
            return result;
        }

        var angle = GetSlideAngle(dx, dy);
        if (angle >= -45 && angle < 45) {
            result = 4;
        } else if (angle >= 45 && angle < 135) {
            result = 1;
        } else if (angle >= -135 && angle < -45) {
            result = 2;
        }
        else if ((angle >= 135 && angle <= 180) || (angle >= -180 && angle < -135)) {
            result = 3;
        }

        return result;
    }


    var a = 0;

    //滑动处理
    var startX, startY;
    document.addEventListener('touchstart', function (ev) {
        startX = ev.touches[0].pageX;
        startY = ev.touches[0].pageY;
    }, false);
    document.addEventListener('touchend', function (ev) {
        var endX, endY;
        endX = ev.changedTouches[0].pageX;
        endY = ev.changedTouches[0].pageY;
        var direction = GetSlideDirection(startX, startY, endX, endY);
        switch (direction) {
            case 1:
                alert(1);
                break;
            default:
        }
    }, false);
</script>
</html>
