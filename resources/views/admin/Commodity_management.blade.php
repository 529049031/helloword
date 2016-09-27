<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>商品管理</title>
    <link rel="shortcut icon" href="img/logo.ico" type="images/x-icon"/>
	<link href="{{asset('resources/views/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/admin/css/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/admin/css/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/admin/css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/admin/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{asset('resources/views/admin/style/css/ch-ui.admin.css')}}">

    	<style>
	    	.main_div{
				display: block;
				padding-left: 30px;
			}
			.main_top_div{
				height: 40px;
				line-height: 40px;
				border-bottom: 1px solid #e7e7eb;
				font-size: 16px;
				color: #333;
			}
    		.fa-plus-circle{
				font-size: 20px;
    		}
    		#dataTables-example{
				margin-left: 12px;
				margin-right: 30px;
			}
			.main_text_div{
				margin-top: 4px;
			}
			.fa-plus-circle:hover{
				color: red;
			}


			.fmwhite_content {
				position: absolute;
				top: 35%;
				left: 50%;
				width: 260px;
				height: 141px;
				margin-left: -130px;
				background-color: white;
				z-index: 1002;
				overflow: auto;
				display: none;
				color: #337AB7;
			}
			.fmblack_overlay {
				display: none;
				position: absolute;
				top: 0%;
				left: 0%;
				width: 100%;
				height: 100%;
				background-color: black;
				z-index: 1001;
				-moz-opacity: 0.8;
				opacity: .80;
				filter: alpha(opacity=80);
			}
			.fmwhite_content_tezt{
				height: 80px;
				line-height: 80px;
				font-size: 20px;
				text-align: center;
			}
			.fmwhite_content_text{
				border-top: 1px solid #999999;
				width: 100%;
				height: 58px;
				line-height: 58px;
			}
			.fmwhite_content_text div{
				float: left;
				width: 50%;
				text-align: center;
				border: 1px solid #e7e7eb;
			}
			.ok_del:hover{
				color: #2277C7;
			}
			.no_del:hover{
				color: #2277C7;
			}
    	</style>
</head>
<body>
	<div class="main_div">
		<div class="main_top_div">
			<span class="main_top_text">商品管理</span>
		</div>

		<div class="main_text_div">
			<a href="{{url('admin/add')}}"><i class="fa fa-fw fa-plus-circle" title="添加"></i></a>
		</div>

		<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	        <thead>
	            <tr>
	            	<td class="span1">编号</td>
					<td class="span2">藏品名称</td>
					<td class="span4">简介</td>
					<td class="span1">是否上架</td>
					<td class="span2">收藏</td>
					<td class="span1">添加时间</td>
					<td class="span1">操作</td>
	            </tr>
	        </thead>
	        <tbody>
			@foreach($data as $v)
	        	 <tr>
	        	 	<td class="">{{$v->id}}</td>
					<td class="">{{$v->name}}</td>
					<td class=" ellipsis">{{$v->introduction}}</td>
					<td class="">{{$v->status == 0 ? '已上架' : '已下架'}}</td>
					<td class="">15210329866</td>
					<td class="">{{date('Y-m-d H:i',$v->time)}}</td>
					<td class="">
						<a href="{{url("admin/update/$v->coll_id")}}" class=""><i class="fa fa-fw fa-edit" title="修改"></i></a>
						<a href="{{url("admin/delete?id=$v->id")}}"><i class="fa fa-fw fa-trash-o" title="删除" onclick="open_Del()"></i></a>
					</td>
	            </tr>
			@endforeach
	        </tbody>
	    </table>

	</div>

	<div id="fmlight" class="fmwhite_content">
		<div class="fmwhite_content_tezt">
			是否确认删除？
		</div>
		<a >
		<div class="fmwhite_content_text">
			<div class="ok_del" onclick="ok_Del()">
				确定
			</div>
			<div class="no_del" onclick="close_Del()">
				取消
			</div>
		</div>
		</a>
	</div>

	<div id="fade" class="fmblack_overlay"></div>
</body>

	<script src="{{url('resources/views/admin/js/jquery.min.js')}}"></script>
    <script src="{{url('resources/views/admin/js/bootstrap.min.js')}}"></script>
    <script src="{{url('resources/views/admin/js/metisMenu.min.js')}}"></script>
    <script src="{{url('resources/views/admin/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('resources/views/admin/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{url('resources/views/admin/js/sb-admin-2.js')}}"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });

    function shuaxin(){
    	window.location.reload();
    }


    function open_Del(){
			document.getElementById('fmlight').style.display='block';
			document.getElementById('fade').style.display='block';
	}

	function close_Del(){
		document.getElementById('fmlight').style.display='none';
		document.getElementById('fade').style.display='none';
	}

    function ok_Del(){
    	alert("123");
    }
    </script>
</html>