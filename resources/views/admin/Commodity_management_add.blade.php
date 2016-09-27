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
    <link href="{{asset('public/umeditor/themes/default/css/umeditor.min.css')}}" type="text/css" rel="stylesheet">
    <script src="{{asset('resources/org/jquery.ajaxUpload.js')}}"></script>
    <script src="{{asset('resources/org/upload.js')}}"></script>
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
            margin-top: 30px;
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
            overflow: hidden;
            /*background-color: #000;*/
        }

        .uploader_img {
            margin-right: 10px;
            margin-bottom: 10px;
        }

        ul {
            height: 30px;
        }

        .spzt {
            line-height: 60px;
        }

        input[type="radio"] {
            vertical-align: text-bottom;
            margin-bottom: 2px;
            margin-bottom: -2px \9;
        }

        .textarea {
            resize: none;
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
            margin-bottom: 0px;
        }

        .zhiyin {
            color: #999999;
            font-size: 14px;
        }

        .uploadify-button {

            /*display: none;*/
        }

        .tp1 {
            position: absolute;
            max-width: 100px;
        }

        .lb {
            width: 350px;
        }
    </style>
</head>
<body>
<div class="main_div">
    <div class="main_top_div">
        <span class="main_top_text">商品管理-添加</span>
    </div>

    <div class="main_main_div">
        <input type="hidden" name="method" value="{{$tag or 'add'}}"/>
        <input type="hidden" id="coll_id" name="id" value="@if($data){{$data[0]->coll_id or ''}}@endif">
        <ul>
            <li>商品名称：</li>
            <li>
                <input type="text" name="s-name" value="@if($data){{$data[0]->name or '请输入商品名称'}}@endif"/>
            </li>
        </ul>

        <ul>
            <li>封面图片：</li>
            <li class="zhiyin">
                上传图片，作为商品封面图片。
            </li>
        </ul>
        <ul class="upload_img_ul">
            <li>
                <div class="uploader_img">
                    <div class="img_fileupload">
                        <img src="@if($data){{$data[0]->fm_img or ''}}@endif" class="tp1 fm_img" class="tp1" alt="">

                        <div class="img_del_div1 img_div">
                            <a onclick="del($(this))">
                                <img src="{{asset('resources/views/admin/img/delete.png')}}" class="img_del" alt="">
                            </a>
                        </div>
                    </div>
                    <input id="btn6" class="" type="file"/>
                </div>
            </li>
        </ul>
        <ul style="margin-top:70px;">
            <li>轮播图片：</li>
            <li class="zhiyin">
                上传图片，作为商品展示轮播图。最少一张，最多6张
            </li>
        </ul>
        <ul class="upload_img_ul lb">
            <li>
                <div class="uploader_img">
                    <div class="img_fileupload">
                        <img src="@if($data){{$data[0]->lb_img[0] or asset('resources/views/admin/img/upload.png')}}@endif"
                             class="tp1 lb_img" class="tp1" alt="">

                        <div class="img_del_div2 img_div">
                            <a onclick="del($(this))">
                                <img src="{{asset('resources/views/admin/img/delete.png')}}" class="img_del"
                                     alt="">
                            </a>
                        </div>
                    </div>
                    <input id="btn0" class="" type="file"/>
                </div>
            </li>
            <li>
                <div class="uploader_img">
                    <div class="img_fileupload">
                        <img src="@if($data){{$data[0]->lb_img[1] or asset('resources/views/admin/img/upload.png')}}@endif"
                             class="tp1 lb_img" class="tp1" alt="">

                        <div class="img_del_div2 img_div">
                            <a onclick="del($(this))">
                                <img src="{{asset('resources/views/admin/img/delete.png')}}" class="img_del"
                                     alt="">
                            </a>
                        </div>
                    </div>
                    <input id="btn1" class="" type="file"/>
                </div>
            </li>
            <li>
                <div class="uploader_img">
                    <div class="img_fileupload">

                        <img src="@if($data){{$data[0]->lb_img[2] or asset('resources/views/admin/img/upload.png')}}@endif" class="tp1 lb_img" class="tp1" alt="">

                        <div class="img_del_div2 img_div">
                            <a onclick="del($(this))">
                                <img src="{{asset('resources/views/admin/img/delete.png')}}" class="img_del"
                                     alt="">
                            </a>
                        </div>
                    </div>
                    <input id="btn2" class="" type="file"/>
                </div>
            </li>
            <li>
                <div class="uploader_img">
                    <div class="img_fileupload">
                        <img src="@if($data){{$data[0]->lb_img[3] or asset('resources/views/admin/img/upload.png')}}@endif" class="tp1 lb_img" class="tp1" alt="">

                        <div class="img_del_div2 img_div">
                            <a onclick="del($(this))">
                                <img src="{{asset('resources/views/admin/img/delete.png')}}" class="img_del"
                                     alt="">
                            </a>
                        </div>
                    </div>
                    <input id="btn3" class="" type="file"/>
                </div>
            </li>
            <li>
                <div class="uploader_img">
                    <div class="img_fileupload">
                        <img src="@if($data){{$data[0]->lb_img[4] or asset('resources/views/admin/img/upload.png')}}@endif" class="tp1 lb_img" class="tp1" alt="">

                        <div class="img_del_div2 img_div">
                            <a onclick="del($(this))">
                                <img src="{{asset('resources/views/admin/img/delete.png')}}" class="img_del"
                                     alt="">
                            </a>
                        </div>
                    </div>
                    <input id="btn4" class="" type="file"/>
                </div>
            </li>
            <li>
                <div class="uploader_img">
                    <div class="img_fileupload">
                        <img src="@if($data){{$data[0]->lb_img[5] or asset('resources/views/admin/img/upload.png')}}@endif" class="tp1 lb_img" class="tp1" alt="">

                        <div class="img_del_div2 img_div">
                            <a onclick="del($(this))">
                                <img src="{{asset('resources/views/admin/img/delete.png')}}" class="img_del"
                                     alt="">
                            </a>
                        </div>
                    </div>
                    <input id="btn5" class="" type="file"/>
                </div>
            </li>
        </ul>

        <ul>
            <li>商品详情：</li>
            <li>
                <script type="text/plain" id="myEditor"
                        style="width:98%;height:240px;">@if($data){!! $data[0]->content !!}@endif</script>
            </li>
        </ul>

        <ul class="spzt">
            <li>商品状态：</li>
            <li>
                <label for="radiobutton1">
                    <input type="radio" name="radiobutton" id="radiobutton1"
                           value="0" @if($data){{$data[0]->status == 0 ? 'checked' :''}}@else{{'checked'}}@endif/>上架
                </label>
                <label for="radiobutton2">
                    <input type="radio" name="radiobutton" id="radiobutton2"
                           value="1" @if($data){{$data[0]->status == 1 ? 'checked' :''}}@endif/>下架
                </label>

                <!--<input type="radio" name="spzt" class="input_radio" /><span class="radio_text">上架</span>
                <input type="radio" name="spzt" class="input_radio" /><span class="radio_text">下架</span>-->
            </li>
        </ul>
    </div>

    <div class="main_end_div">

        <a>
            <div class="main_main_end_no main_main_end_btn" onclick="gb()">
                返回
            </div>
        </a>

        <a>
            <div id="true_btn" class="main_main_end_ok main_main_end_btn">
                确定
            </div>
        </a>
    </div>
</div>
</body>
<script src="{{asset('resources/org/layer/layer.js')}}"></script>
<script>
    var um = UM.getEditor('myEditor');
    function getContent() {
        var cont = UM.getEditor('myEditor').getContent();
    }


    for (var i = 0; i <= 6; i++) {
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

    //提交保存
    $('#true_btn').on('click', function () {
        var name, fm_img, lb_img, content, status, lb_img, data = {};

        //此参数决定是否更新或添加
        data.method = $('input[name=method]').val();

        if (data.method === 'update') {
            data.id = $('#coll_id').val();
        }

        //获取商品名称,并判为空不可提交
        name = $('input[name=s-name]').val();
        if (!name) {
            layer.alert('商品名称不可为空!', {icon: 7});
            return;
        }
        data.name = name;

        //封面图片
        fm_img = $('.fm_img').attr('src');
        if (!fm_img) {
            layer.alert('封面图片不可为空!', {icon: 7});
            return;
        }
        data.sources = fm_img;

        //轮播图片
        for (var i = 0; i < $('.lb_img').length; i++) {
            if ($(".lb_img")[i].src) {
                if ($(".lb_img")[i].src !== 'http://jingpai.lyj/admin/add') {
                    data.sources += '#' + $(".lb_img")[i].src;
                }
            }
        }
        //商品详情
        if (!$('#myEditor').text()) {
            layer.alert('dddd', {'icon': 7});
            return;
        }
        data.content = $('#myEditor').html();

        //商品状态
        status = $('input[name=radiobutton]:checked').val();
        if (!status) {
            layer.alert('商品状态不可为空!', {'icon': 7});
            return;
        }
        data.status = status;

        data._token = '{{csrf_token()}}';


        //ajax提交
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            data: data,
            url: '{{url("admin/add")}}',
            beforeSend: function () {
                layer.load(1);
                return;
            },
            success: function (msg) {
                if (msg.status === 0) {
                    layer.alert(msg.msg, {
                        'icon': 6,
                        yes: function (index) {
                            layer.close(index);
                            history.go(-1);
                        }
                    });
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