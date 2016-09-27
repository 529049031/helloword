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
            background-image: url('{{asset('resources/views/admin/img/upload.png')}}');
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
            display: none;
        }
    </style>
</head>
<body>
<div class="main_div">
    <div class="main_top_div">
        <span class="main_top_text">商品管理-修改</span>
    </div>

    <div class="main_main_div">
        <ul>
            <li>商品名称：</li>
            <li>
                <input type="text" value="{{$data->name}}"/>
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
                        <div class="img_del_div1 img_div">
                            <img src="" id="tp1" class="tp1" alt="">

                            <a onclick="ycdel1()"><img src="{{asset('resources/views/admin/img/delete.png')}}"
                                                       class="img_del" alt=""></a>
                        </div>
                    </div>
                    <input id="sc1" class="" type="file"/>
                </div>
            </li>
        </ul>
        <ul>
            <li>轮播图片：</li>
            <li class="zhiyin">
                上传图片，作为商品展示轮播图。最少一张，最多6张
            </li>
        </ul>
        <ul class="upload_img_ul">
            <li>
                <div class="uploader_img">
                    <div class="img_fileupload">
                        <div class="img_del_div2 img_div">
                            <a onclick="ycdel2()"><img src="{{asset('resources/views/admin/img/delete.png')}}"
                                                       class="img_del" alt=""></a>
                        </div>
                    </div>
                    <input id="" class="" type="file"/>
                    {{--<img src="" id="tp2" class="tp2" alt="">--}}
                </div>

                <div class="uploader_img">
                    <div class="img_fileupload">
                        <div class="img_del_div3 img_div">
                            <a onclick="ycdel3()"><img src="{{asset('resources/views/admin/img/delete.png')}}"
                                                       class="img_del" alt=""></a>
                        </div>
                    </div>
                    <input class="" type="file"/>
                </div>


            </li>
            <li>
                <div class="uploader_img">
                    <div class="img_fileupload">
                        <div class="img_del_div4 img_div">
                            <a onclick="ycdel4()"><img src="{{asset('resources/views/admin/img/delete.png')}}"
                                                       class="img_del" alt=""></a>
                        </div>
                    </div>
                    <input class="" type="file"/>
                </div>

                <div class="uploader_img">
                    <div class="img_fileupload">
                        <div class="img_del_div5 img_div">
                            <a onclick="ycdel5()"><img src="{{asset('resources/views/admin/img/delete.png')}}"
                                                       class="img_del" alt=""></a>
                        </div>
                    </div>
                    <input class="" type="file"/>
                </div>
            </li>
            <li>
                <div class="uploader_img">
                    <div class="img_fileupload">
                        <div class="img_del_div6 img_div">
                            <a onclick="ycdel6()"><img src="{{asset('resources/views/admin/img/delete.png')}}"
                                                       class="img_del" alt=""></a>
                        </div>
                    </div>
                    <input class="" type="file"/>
                </div>

                <div class="uploader_img">
                    <div class="img_fileupload">
                        <div class="img_del_div7 img_div">
                            <a onclick="ycdel7()"><img src="{{asset('resources/views/admin/img/delete.png')}}"
                                                       class="img_del" alt=""></a>
                        </div>
                    </div>
                    <input class="" type="file"/>
                </div>

            </li>
            <!--<li>
                上传图片，作为商品展示轮播图。最少一张，最多6张
            </li>-->
        </ul>

        <ul>
            <li>商品详情：</li>
            <li>
                <script type="text/plain" id="myEditor" style="width:98%;height:240px;"></script>
            </li>
        </ul>

        <ul class="spzt">
            <li>商品状态：</li>
            <li>
                <label for="radiobutton1">
                    <input type="radio" name="radiobutton" id="radiobutton1" value="radiobutton"/>上架
                </label>
                <label for="radiobutton2">
                    <input type="radio" name="radiobutton" id="radiobutton2" value="radiobutton"/>下架
                </label>
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
            <div class="main_main_end_ok main_main_end_btn" onclick="tj()">
                确定
            </div>
        </a>
    </div>
</div>
</body>
<script src="{{asset('resources/views/admin/js/jquery.uploadify.min.js')}}"></script>
<script>

    //初始化编译器
    var um = UM.getEditor('myEditor');
      function getContent(){
      	var cont = UM.getEditor('myEditor').getContent();
      }
    function tj() {

    }

    function gb() {
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
    function ycdel6() {
        $(".img_del_div6").hide();
    }
    function ycdel7() {
        $(".img_del_div7").hide();
    }
</script>
</html>