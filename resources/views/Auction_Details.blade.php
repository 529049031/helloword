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
    <div class="swiper-container" id="head_swiper">
        <div class="swiper-wrapper">
            @if(!empty($xq->carousel1))
                <div class="swiper-slide img1" id="d1">
                    <img src="{{asset("$xq->carousel1")}}" id="lb1">
                </div>
            @endif
            @if(!empty($xq->carousel2))

                <div class="swiper-slide img2" id="d2">
                    <img src="{{asset("$xq->carousel2")}}" id="lb2">
                </div>
            @endif
            @if(!empty($xq->carousel3))

                <div class="swiper-slide img3" id="d3">
                    <img src="{{asset("$xq->carousel3")}}" id="lb3">
                </div>
            @endif
            @if(!empty($xq->carousel4))

                <div class="swiper-slide img4" id="d4">
                    <img src="{{asset("$xq->carousel4")}}" id="lb4">
                </div>
            @endif

            @if(!empty($xq->carousel5))

                <div class="swiper-slide img5" id="d5">
                    <img src="{{asset("$xq->carousel5")}}" id="lb5">
                </div>
            @endif

            @if(!empty($xq->carousel6))

                <div class="swiper-slide img6" id="d6">
                    <img src="{{asset("$xq->carousel6")}}" id="1b6">
                </div>
            @endif

        </div>
        <div class="swiper-pagination"></div>
        <div class="top_time_div">
            <img class="top_time_img" src="{{asset('resources/views/style/img/daojishi.png')}}"/>
            <span class="top_time_text zz f">正在进行</span>
            <span class="top_time_text f">今天</span>
            <span class="top_time_text_time f">22:00</span>
            <span class="top_time_text f">结束</span>
        </div>
    </div>
    <div class="main_title_div">
        <div class="main_title">
            {{$xq->name}}
        </div>
        <div class="main_sc" onclick="sc()">
            <img src="{{asset('resources/views/style/img/weishoucang.png')}}" class="main_sc_img"/>
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
        alert("参与报价");
    }

    function sc() {

        var src = $(".main_sc_img")[0].src;
        if (src.indexOf("wei") != -1) {
            $(".main_sc_img").attr('src', "{{asset('resources/views/style/img/yishoucang.png')}}");
        } else {
            $(".main_sc_img").attr('src', "{{asset('resources/views/style/img/weishoucang.png')}}");
        }

    }
</script>
</html>
