<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>竞价报表</title>
    <link rel="stylesheet" href="{{asset('resources/views/admin/style/css/ch-ui.admin.css')}}">
    <link rel="stylesheet" href="{{asset('resources/views/admin/style/font/css/font-awesome.min.css')}}">

    <link href="{{asset('resources/views/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/admin/css/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/admin/css/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/admin/css/sb-admin-2.css')}}" rel="stylesheet">

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

        .main_text_div {
            height: 40px;
            line-height: 40px;
            /*background-color: red;*/
        }

        .main_top_text {

        }

        input[type="date"] {
            height: 24px;
            margin-top: 8px;
            margin-right: 4px;
            border-radius: 5px;
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
        }
    </style>
</head>
<body>
<div class="main_div">
    <div class="main_top_div">
        <span class="main_top_text">竞价报表</span>
    </div>

    <div class="main_text_div">
        <span class="ss">商品名称：</span>
        <input class="ss_text" type="text" placeholder=""/>
        <span class="ss">竞价日期：</span>
        <input type="date"/>
        ——
        <input type="date"/>
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
            <td class="span1">编号</td>
            <td class="span2">藏品名称</td>
            <td class="span3">商品简介</td>
            <td class="span1">竞价</td>
            <td class="span1">竞价人名称</td>
            <td class="span3">竞价时间</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
        </tr>
        </tbody>
    </table>
    <script>

        //第五种方法
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
                    var fname = oXL.Application.GetSaveAsFilename("Excel.xls", "Excel Spreadsheets (*.xls), *.xls");
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
</div>


<script src="{{asset('resources/views/admin/js/jquery.min.js')}}"></script>
<script src="{{asset('resources/views/admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('resources/views/admin/js/metisMenu.min.js')}}"></script>
<script src="{{asset('resources/views/admin/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('resources/views/admin/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('resources/views/admin/js/sb-admin-2.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    function shuaxin() {
        window.location.reload();
    }
</script>
</body>
</html>