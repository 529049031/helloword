<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('resources/views/admin/style/css/ch-ui.admin.css')}}">
    <link rel="stylesheet" href="{{asset('resources/views/admin/style/font/css/font-awesome.min.css')}}">
    <script type="text/javascript" src="{{asset('resources/views/admin/style/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('resources/views/admin/style/js/ch-ui.admin.js')}}"></script>
    <link href="{{asset('resources/views/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/admin/css/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/admin/css/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/admin/css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/admin/css/uploadify.css')}}" rel="stylesheet">
    <script src="{{asset('resources/views/admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('resources/views/admin/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('resources/views/admin/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('resources/views/admin/js/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript" charset="utf-8" src="{{asset('public/umeditor/umeditor.config.js')}}"></script>
    <script type="text/javascript" charset="utf-8" src="{{asset('public/umeditor/umeditor.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/umeditor/umeditor.config.js')}}"></script>
    <script src="{{asset('resources/org/My97DatePicker/WdatePicker.js')}}"></script>
    <link href="{{asset('public/umeditor/themes/default/css/umeditor.min.css')}}" type="text/css" rel="stylesheet">
    <style>
        .main_div {
            display: block;
            padding-left: 30px;
        }

        .main_top_div {
            height: 40px;
            line-height: 40px;
            border-bottom: 1px solid #e7e7eb;
            font-size: 16px;
            color: #333;
        }

        .fa-plus-circle {
            font-size: 20px;
        }

        .main_main_div {
            padding-top: 30px;
            padding-left: 30px;
        }

        input[type="radio"] {

        }

        .input_radio {
            margin-left: 20px !important;
        }

        ul {
            clear: both;
        }

        li {
            float: left;
            display: block;
        }

        .main_end_div {
            /*position: absolute;*/

            /*bottom: 0px;*/
            margin-top: 200px;
            width: 100%;
            border-top: 1px solid #e7e7eb;
        }

        .main_main_end_btn {
            text-align: center;
            float: right;
            width: 80px;
            height: 30px;
            line-height: 30px;
            border-radius: 3px;
            margin-right: 20px;
            margin-top: 30px;
        }

        .main_main_end_ok {
            /*margin-left: 30%;*/
            color: #fff;
            background-color: #44B549;
        }

        .main_main_end_ok:hover {
            background-color: #3f9833;
        }

        .main_main_end_no {
            margin-right: 100px;
            border: 1px solid #e7e7eb;
            background-color: #FFF;
        }

        .main_main_end_no:hover {
            background-color: #f0f0f0;
        }

        input[type="file"] {
            width: 100px;
            height: 90px;
            opacity: 0;
        }

        .uploader_img1 {
            width: 100px;
            height: 140px;
            /*background: #000;*/
            /*margin-top: 10px;
            margin-right: 20px;
            margin-bottom: 10px;*/
            float: left;
            text-align: center;
        }

        .img_fileupload {
            position: absolute;
            width: 100px;
            height: 90px;
            background-image: url({{asset('resources/views/admin/img/upload.png')}});
            /*background-color: #000;*/
        }

        .uploader_img {
            margin-right: 10px;
            margin-bottom: 10px;
        }

        ul {
            height: 30px;
        }

        .img_del {
            float: right;
            margin-right: 5px;
            margin-top: 5px;
            width: 10px !important;
            height: 10px !important;
        }

        .img_div {
            position: relative;
            left: 0px;
            top: 70px;
            width: 100%;
            height: 20px;
            background-color: #000;
            z-index: 999;
        }

        .upload_img_ul {
            margin-left: 70px;
        }

        ul {
            margin-bottom: 10px;
        }

        .zhiyin {
            color: #999999;
            font-size: 14px;
        }

        .uploadify-button {

            /*display: none;*/
        }

        .my_money {
            width: 40px;
        }

        .tp1 {
            position: absolute;
            max-width: 100px;
        }
    </style>
</head>
<body>
<div class="main_div">
    <div class="main_top_div">
        <span class="main_top_text">系统设置</span>
    </div>

    <div class="main_main_div">
        <ul>
            <li>活动开始时间：</li>
            <li>
                <input class="Wdate" type="text" readonly onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})"
                       name="starttime" id="starttime" value="{{$data->start_time or ''}}"/>
            </li>
            <li style="margin-left: 10px">活动结束时间：</li>
            <li>
                <input class="Wdate" type="text" readonly onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})"
                       name="endtime" id="endtime" value="{{$data->end_time or ''}}"/>
            </li>
        </ul>
        <ul>
            <li>高于我竞价&nbsp;<input type="text" name="price" class="NumText my_money"
                                  value="{{$data->overtop_price or 00}}">&nbsp;元的人数
            </li>
        </ul>
        <ul>
            <li>轮播图片：</li>
            <li class="zhiyin">
                上传图片，作为首页展示轮播图。最少一张，最多4张
            </li>
        </ul>
        <ul class="upload_img_ul">
            @if($data)
                @foreach($data->img as $k=>$v)
                    <li>
                        <div class="uploader_img">
                            <div class="img_fileupload">
                                <img class="tp1 lb_img" src="@if($v){{$v}}@else{{asset('resources/views/admin/img/upload.png')}}@endif" alt="">

                                <div class="img_del_div2 img_div">
                                    <a onclick="del($(this))">
                                        <img src="{{asset('resources/views/admin/img/delete.png')}}" class="img_del"
                                             alt="">
                                    </a>
                                </div>
                            </div>
                            <input id="btn{{$k}}" class="" type="file"/>
                        </div>
                    </li>
                @endforeach
            @else
                <li>
                    <div class="uploader_img">
                        <div class="img_fileupload">
                            <img class="tp1 lb_img" src="{{asset('resources/views/admin/img/upload.png')}}" alt="">

                            <div class="img_del_div3 img_div">
                                <a onclick="del($(this))"><img src="{{asset('resources/views/admin/img/delete.png')}}"
                                                               class="img_del" alt=""></a>
                            </div>
                        </div>
                        <input id="btn0" class="" type="file"/>
                    </div>
                </li>
                <li>
                    <div class="uploader_img">
                        <div class="img_fileupload">
                            <img class="tp1 lb_img" src="{{asset('resources/views/admin/img/upload.png')}}" alt="">

                            <div class="img_del_div3 img_div">
                                <a onclick="del($(this))"><img src="{{asset('resources/views/admin/img/delete.png')}}"
                                                               class="img_del" alt=""></a>
                            </div>
                        </div>
                        <input id="btn1" class="" type="file"/>
                    </div>
                </li>
                <li>
                    <div class="uploader_img">
                        <div class="img_fileupload">
                            <img class="tp1 lb_img" src="{{asset('resources/views/admin/img/upload.png')}}" alt="">

                            <div class="img_del_div4 img_div">
                                <a onclick="del($(this))"><img src="{{asset('resources/views/admin/img/delete.png')}}"
                                                               class="img_del" alt=""></a>
                            </div>
                        </div>
                        <input id="btn2" class="" type="file"/>
                    </div>
                </li>
                <li>
                    <div class="uploader_img">
                        <div class="img_fileupload">
                            <img class="tp1 lb_img" src="{{asset('resources/views/admin/img/upload.png')}}" alt="">

                            <div class="img_del_div5 img_div">
                                <a onclick="del($(this))"><img src="{{asset('resources/views/admin/img/delete.png')}}"
                                                               class="img_del" alt=""></a>
                            </div>
                        </div>
                        <input id="btn3" class="" type="file"/>
                    </div>
                </li>
            @endif
        </ul>

    </div>

    <div class="main_end_div">

        <a>
            <div class="main_main_end_no main_main_end_btn" onclick="gb()">
                返回
            </div>
        </a>

        <a>
            <div class="true_btn main_main_end_ok main_main_end_btn" onclick="tj()">
                确定
            </div>
        </a>
    </div>
</div>
</body>
<script src="{{asset('resources/org/jquery.ajaxUpload.js')}}"></script>
<script src="{{asset('resources/org/upload.js')}}"></script>
<script src="{{asset('resources/org/layer/layer.js')}}"></script>
<script>
    var um = UM.getEditor('myEditor');
    function getContent() {
        var cont = UM.getEditor('myEditor').getContent();
    }
    function tj() {

    }

    function gb() {
        history.go(-1);
    }
    function ycdel1() {
        $(".img_del_div1").hide();
    }


    function ycdel2() {
        $(".img_del_div2").hide();
    }
    function ycdel3() {
        $(".img_del_div3").hide();
    }
    function ycdel4() {
        $(".img_del_div4").hide();
    }
    function ycdel5() {
        $(".img_del_div5").hide();
    }

    for (var i = 0; i <= 3; i++) {
        uploadFile('btn' + i, '{{csrf_token()}}')
    }

    //删除图片
    function del(obj) {
        var img = obj.parent().prev().attr('src');
        $.ajax({
            url: "{{url('admin/del')}}",
            type: 'post',
            dataType: 'JSON',
            data: {file: img, _token: '{{csrf_token()}}'},
            success: function (msg) {
                obj.parent().prev().attr('src', '');
            }
        });
    }
    $('.true_btn').on('click', function () {
        var start_time, end_time, overtop_price, data = {};

        //时间处理begin
        start_time = $('input[name=starttime]').val();
        end_time = $('input[name=endtime]').val();
        if (start_time) {
            var d = new Date().getTime() / 1000;
            if (transdate(start_time + ':00') <= d) {
                layer.alert('活动开始时间不能小于当前时间!', {'icon': 7});
                return;
            }
            data.start_time = start_time;
        } else {
            layer.alert('活动开始时间不可为空!', {'icon': 7});
            return;
        }
        if (end_time) {
            var d = new Date().getTime() / 1000;
            if (transdate(end_time + ':00') <= d) {
                layer.alert('活动结束时间不能小于当前时间!', {'icon': 7});
                return;
            }
            data.end_time = end_time;
        } else {
            layer.alert('活动结束时间不可为空!', {'icon': 7});
            return;
        }

        //高于我竞价begin
        overtop_price = $('input[name=price]').val();
        if (!overtop_price) {
            layer.alert('高于我竞价不可为空!', {'icon': 7});
            return;
        }
        data.overtop_price = overtop_price;

        //首页轮播图片begin
        data.img = '';
        for (var i = 0; i < $('.lb_img').length; i++) {
            if ($(".lb_img")[i].src) {
                if ($(".lb_img")[i].src !== 'http://jingpai.lyj/resources/views/admin/img/upload.png') {
                    data.img += $(".lb_img")[i].src + '#';
                }else{
                    data.img += ''+'#';
                }
            }
        }

        //csrf验证
        data._token = '{{csrf_token()}}';

        //ajax提交
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            data: data,
            url: '{{url("admin/list")}}',
            beforeSend: function () {
                layer.load(1);
                return;
            },
            success: function (msg) {
                switch (msg.status) {
                    case 0:
                        layer.alert(msg.msg, {
                            'icon': 6,
                            yes: function (index) {
                                layer.close(index);
                                location.reload();
                            }
                        });
                        break;
                    case 1:
                        layer.alert(msg.msg, {
                            'icon': 5,
                            yes: function (index) {
                                layer.close(index);
                                location.reload();
                            }
                        });
                        break;
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                layer.alert('网络故障!', {'icon': 5});
                return;
            }
        });
    });
</script>
</html>