<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>中标订单管理</title>

    <link href="{{asset('resources/views/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/admin/style/css/ch-ui.admin.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/admin/css/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/admin/css/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/admin/css/sb-admin-2.css')}}" rel="stylesheet">
    <script src="{{asset('resources/views/admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('resources/views/admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('resources/views/admin/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('resources/views/admin/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('resources/views/admin/js/dataTables.bootstrap.min.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('resources/views/admin/css/Order_management.css')}}"/>
    <style>
        .main_div {
            display: block;
            padding-left: 30px;
        }


            /*height: 40px;*/
            /*line-height: 40px;*/
            /*border-bottom: 1px solid #e7e7eb;*/
            /*font-size: 16px;*/
            /*color: #333;*/
        /*}*/

        .main_text_div {
            height: 40px;
            line-height: 40px;
            /*background-color: red;*/
        }

        .main_top_text {

        }

        .ss_btn {
            height: 30px;
            text-align: center;
            line-height: 0px;
            background-color: #44B549 !important;
            border: 0 !important;
            border-radius: 5px !important;
        }

        .ss_btn:hover {
            background-color: #2f9833 !important;
        }

        .daochu {
            float: right;
            margin-right: 20px;
            background-color: #FFF;
            height: 30px;
            line-height: 30px;
            margin-top: 10px;
            padding-left: 10px;
            padding-right: 10px;
            color: #000;
            border-radius: 5px;
            border: 1px solid #e7e7eb;
        }

        .daochu:hover {
            background-color: #f0f0f0;
        }

        #dataTables-example {
            margin-left: 12px;
            margin-right: 30px;
        }

        .shareBg {
            width: 100%;
            height: 150%;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 999;
            top: 0;
            left: 0;
            display: none;
            font-size: 0.3125rem;
        }

        .show {
            display: block !important;
        }

        .ddxq {
            width: 600px;
            /*min-height: 500px;*/
            /*height: 3.3125rem;*/
            background-color: #FFF;
            /*text-align: center;*/
            margin: auto;
            margin-top: 10%;
        }

        .ddxq_top {
            width: 100%;
            height: 50px;
            line-height: 50px;
            background-color: #eee;

            padding-left: 30px;
        }

        .ddxq_text {
            font-size: 16px;
        }

        .ddxq_img {
            float: right;
            margin-top: 15px;
            margin-right: 14px;
            width: 20px;
            height: 20px;
        }

        .ddxq_main_div {
            margin-top: 30px;
            padding-left: 60px;
            padding-right: 60px;
            /*padding-bottom: 30px;*/
        }

        .ddxq_main_top {
            height: 40px;
            border-bottom: 1px solid #e7e7eb;
        }

        .ddxq_main_text {
            float: left;
        }

        .ddxq_btn {
            float: left;
            height: 30px;
            line-height: 30px;
            text-align: center;
            width: 60px;
            padding-left: 5px;
            padding-right: 5px;
            border-radius: 3px;
            margin-top: -8px;
            margin-left: 5px;
            margin-right: 5px;
        }

        .xgje {
            border: 1px solid #e7e7eb;
            background-color: #FFF;
        }

        .xgje:hover {
            background-color: #f0f0f0;
        }

        .qfh {
            color: #fff;
            background-color: #368ee0;
        }

        .qfh:hover {
            background-color: #2277c7;
        }

        .xgbz {
            border: 1px solid #e7e7eb;
            background-color: #FFF;
        }

        .xgbz:hover {
            background-color: #f0f0f0;
        }

        .ddxq_main_end {
            padding-left: 30px;
        }

        .ddxq_main_end table {
            margin-bottom: 30px;
        }

        .ddxq_main_end table td {
            border: 0;
        }

        .td_left {
            min-width: 80px;
            text-align: right;
            padding-right: 20px;
        }

        .td_right {
            text-align: left;
            padding-left: 20px;
        }

        .zf {
            font-weight: bold;
        }

        .td_zfzt {
            font-weight: bold;
            color: #2f9833;
        }

        .ddxq_end_div {
            width: 100%;
            height: 50px;
            line-height: 50px;
            background-color: #eee;
            padding-left: 30px;
            text-align: center;
        }

        .ddxq_end_btn {
            float: left;
            width: 80px;
            height: 30px;
            line-height: 30px;
            border-radius: 3px;
            margin-right: 20px;
            margin-top: 10px;
        }

        .ddxq_end_ok {
            margin-left: 30%;
            color: #fff;
            background-color: #44B549;
        }

        .ddxq_end_ok:hover {
            background-color: #3f9833;
        }

        .ddxq_end_no {
            border: 1px solid #e7e7eb;
            background-color: #FFF;
        }

        .ddxq_end_no:hover {
            background-color: #f0f0f0;
        }

        .kd {
            /*display: none;*/
        }

        .ellipsis {
            max-width: 80px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
    </style>
</head>
<body>
<div class="main_div">
    <div class="main_top_div">
        <span class="main_top_text">中标订单管理</span>
    </div>

    <div class="main_text_div">
        <span class="ss">订单编号：</span>
        <input class="ss_text" type="text" placeholder=""/>
        <input class="ss_btn" type="button" value="搜索"/>
        <a onclick="method5('dataTables-example')">
            <div class="daochu">
                导出excel
            </div>
        </a>
    </div>

    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
        <tr>
            <td class="span1">订单编号</td>
            <td class="span2">藏品名称</td>
            <td class="span1">中标价格</td>
            <td class="span1">收货人</td>
            <td class="span1">电话号码</td>
            <td class="span2">收货人地址</td>
            <td class="span1">订单状态</td>
            <td class="span2">备注</td>
            <td class="span1">操作</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="span1">001</td>
            <td class="span2">玉</td>
            <td class="span1">1200</td>
            <td class="span1">郑小傻</td>
            <td class="span1">15210329866</td>
            <td class="span2 ellipsis">北京市朝阳区南十里居41号院北京市朝阳区南十里居41号院北京市朝阳区南十里居41号院</td>
            <td class="span1">已支付</td>
            <td class="span2 ellipsis">用户已支付，尽快发货</td>
            <td class="span1"><a class="share">订单详情</a></td>
        </tr>
        </tbody>
    </table>

</div>


<div class="shareBg clearfix">
    <div class="ddxq">
        <div class="ddxq_top">
            <span class="ddxq_text">订单详情</span>
            <a><img class="ddxq_img" src="{{url('resources/views/admin/img/cross.png')}}" onclick="gb()"/></a>
        </div>
        <div class="ddxq_main_div">
            <div class="ddxq_main_top">
                <span class="ddxq_main_text">该订单已支付，等待发货</span>
                <a>
                    <div class="xgje ddxq_btn">
                        修改金额
                    </div>
                </a>
                <a>
                    <div class="qfh ddxq_btn">
                        去发货
                    </div>
                </a>
                <a>
                    <div class="xgbz ddxq_btn">
                        修改备注
                    </div>
                </a>
            </div>
            <div class="ddxq_main_end">
                <table border="0">
                    <tr>
                        <td class="td_left">订单编号:</td>
                        <td class="td_right" colspan="3">2016-09-06</td>
                    </tr>

                    <tr>
                        <td class="td_left">收货信息:</td>
                        <td class="td_right">郑小傻</td>
                        <td>15210329866</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td class="td_right" colspan="3">北京市朝阳区安定路39号长新大厦401室北京为盟</td>
                    </tr>

                    <tr>
                        <td class="td_left">所拍产品:</td>
                        <td class="td_right">12312312312312312312</td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td class="td_left">支付信息:</td>
                        <td class="td_right zf">￥400</td>
                        <td class="td_zfzt">已支付</td>
                        <td>2016-09-06 13:42:01</td>
                    </tr>

                    <tr class="kd">
                        <td class="td_left">快递公司:</td>
                        <td class="td_right" colspan="3">
                            <input type="text"/>
                        </td>
                    </tr>
                    <tr class="kd">
                        <td class="td_left">快递编号:</td>
                        <td class="td_right" colspan="3">
                            <input type="text"/>
                        </td>
                    </tr>

                    <tr>
                        <td class="td_left">备注信息:</td>
                        <td class="td_right" colspan="3">快点发货。</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="ddxq_end_div">
            <a>
                <div class="ddxq_end_ok ddxq_end_btn">
                    确定
                </div>
            </a>
            <a>
                <div class="ddxq_end_no ddxq_end_btn" onclick="gb()">
                    取消
                </div>
            </a>
        </div>
    </div>
</div>
<div class="swiperBg lockTouchmove">
    <div class="swiper-container" id="big_swiper">

    </div>
</div>

<script src="{{url('resources/views/admin/js/jquery.min.js')}}"></script>
<script src="{{url('resources/views/admin/js/bootstrap.min.js')}}"></script>
<script src="{{url('resources/views/admin/js/metisMenu.min.js')}}"></script>
<script src="{{url('resources/views/admin/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('resources/views/admin/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{url('resources/views/admin/js/sb-admin-2.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    function shuaxin() {
        window.location.reload();
    }

    //打开订单详情弹出层
    $(".share").on("click", function () {
        $(".shareBg").addClass("show");
    })
    //
    $(".xgje").on("click", function () {
        $(".shareBg").addClass("show");
    })


    //	    $(".shareBg").on("click",function(){
    //	        $(".shareBg").removeClass("show");
    //	    });
    function gb() {
        $(".shareBg").removeClass("show");
    }
    //点击关闭大图蒙层
    $(".swiperBg").on("click", function () {
        $(this).removeClass("show");
        $("#big_swiper.swiper-container").html("");
    });
    //弹出之后锁定屏幕
    $('.lockTouchmove').each(function () {
        $(this)[0].addEventListener('touchmove', function (e) {
            e.preventDefault();
        }, false);
    });


    var idTmr;
    function getExplorer() {
        var explorer = window.navigator.userAgent;
        //ie
        if (explorer.indexOf("MSIE") >= 0) {
            return 'ie';
        }
        //firefox
        else if (explorer.indexOf("Firefox") >= 0) {
            return 'Firefox';
        }
        //Chrome
        else if (explorer.indexOf("Chrome") >= 0) {
            return 'Chrome';
        }
        //Opera
        else if (explorer.indexOf("Opera") >= 0) {
            return 'Opera';
        }
        //Safari
        else if (explorer.indexOf("Safari") >= 0) {
            return 'Safari';
        }
    }
    function method5(tableid) {
        if (getExplorer() == 'ie') {
            var curTbl = document.getElementById(tableid);
            var oXL = new ActiveXObject("Excel.Application");
            var oWB = oXL.Workbooks.Add();
            var xlsheet = oWB.Worksheets(1);
            var sel = document.body.createTextRange();
            sel.moveToElementText(curTbl);
            sel.select();
            sel.execCommand("Copy");
            xlsheet.Paste();
            oXL.Visible = true;

            try {
//              var fname = oXL.Application.GetSaveAsFilename("Excel.xls", "Excel Spreadsheets (*.xls), *.xls");
           		var fname = oXL.Application.GetSaveAsFilename("Excel.xls","订单报表, *.xls")
            } catch (e) {
                print("Nested catch caught " + e);
            } finally {
                oWB.SaveAs(fname);
                oWB.Close(savechanges = false);
                oXL.Quit();
                oXL = null;
                idTmr = window.setInterval("Cleanup();", 1);
            }

        }
        else {
            tableToExcel(tableid)
        }
    }
    function Cleanup() {
        window.clearInterval(idTmr);
        CollectGarbage();
    }
    var tableToExcel = (function () {
        var uri = 'data:application/vnd.ms-excel;base64,',
                template = '<html><head><meta charset="UTF-8"></head><body><table>{table}</table></body></html>',
                base64 = function (s) {
                    return window.btoa(unescape(encodeURIComponent(s)))
                },
                format = function (s, c) {
                    return s.replace(/{(\w+)}/g,
                            function (m, p) {
                                return c[p];
                            })
                }
        return function (table, name) {
            if (!table.nodeType) table = document.getElementById(table)
            var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
            window.location.href = uri + base64(format(template, ctx))
        }
    })()
</script>
</body>
</html>