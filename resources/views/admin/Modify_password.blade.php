<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="{{url('resources/views/admin/style/css/ch-ui.admin.css')}}">
		<link rel="stylesheet" href="{{url('resources/views/admin/style/font/css/font-awesome.min.css')}}">
	    <script type="text/javascript" src="{{url('resources/views/admin/style/js/jquery.js')}}"></script>
	    <script type="text/javascript" src="{{url('resources/views/admin/style/js/ch-ui.admin.js')}}"></script>
		<title>修改密码</title>
		<link rel="shortcut icon" href="img/logo.ico" type="images/x-icon"/>
	</head>
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
		.main_main{
			width: 450px;
			height: 300px;
			margin-top: 8%;
			margin-left: 30%;
			border: 1px solid #e7e7eb;
		}
		.main_main_top{
			width: 100%;
			height: 60px;
			line-height: 60px;
			text-align: center;
		}
		
		
		.main_main_end_btn{
			text-align: center;
			float: left;
			width: 80px;
			height: 30px;
			line-height: 30px;
			border-radius: 3px;
			margin-right: 20px;
			margin-top: 10px;
		}
		.main_main_end_ok{
			margin-left: 30%;
			color: #fff;
			background-color: #44B549;
		}
		.main_main_end_ok:hover{
			background-color: #3f9833;
		}
		.main_main_end_no{
			border: 1px solid #e7e7eb;
			background-color: #FFF;
		}
		.main_main_end_no:hover{
			background-color: #f0f0f0;
		}
		.main_main_zhong{
			padding-left: 30px;
			padding-right: 30px;
		}
		ul{
			
		}
		li{
			float: left;
			display:block;
			margin-bottom: 20px;
		}
		.li_left{
			width: 120px;
			text-align: right;
		}
		.ymm_text,.xmm_text,.rmm_text{
			padding-top: 4px;
			padding-left: 2px;
			color: red;
			font-size: 14px;
			display: none;
		}
	</style>
	<body>
		<div class="main_div">
			<div class="main_top_div">
				<span class="main_top_text">修改密码</span>
			</div>
		
			<div class="main_main">
				<div class="main_main_top">
					修改密码
				</div>
				<div class="main_main_zhong">
					<ul>
						<li class="li_left">原密码：</li>
						<li>
							<input type="text" class="ymm" id="ymm" onblur="ymm()"/>
						</li>
						<li class="ymm_text">
							原密码不正确
						</li>
					</ul>
					<ul>
						<li class="li_left">新密码：</li>
						<li>
							<input type="text" class="xmm" id="xmm" onblur="xmm()"/>
						</li>
						<li class="xmm_text">
							不能少于6位
						</li>
					</ul>
					<ul>
						<li class="li_left">确认密码：</li>
						<li>
							<input type="text" class="rmm" id="rmm" onblur="rmm()"/>
						</li>
						<li class="rmm_text">
							两次密码不一致
						</li>
					</ul>
				</div>
				<div class="main_main_end">
					<a><div class="main_main_end_ok main_main_end_btn" onclick="tj()">
						确定
					</div></a>
					<a href="{{url('admin/Report')}}"><div class="main_main_end_no main_main_end_btn">
						返回
					</div></a>
				</div>
			</div>

		</div>
	</body>
	<script type="text/javascript" src="{{url('resources/views/admin/style/js/jquery.js')}}" ></script>
	<script>

		function ymm(){
			var ym=document.getElementById("ymm").value;
			if(ym!="123"){
				$(".ymm_text").css("display","block");
				$(".ymm").focus();
				return;
			}
			$(".ymm_text").css("display","none");
//			$(".ymm").focus();
		}
		function xmm(){
			var xm=document.getElementById("xmm").value;
			if(xm.length<6){
				$(".xmm_text").css("display","block");
				$(".xmm").focus();
				return;
			}
			$(".xmm_text").css("display","none");
		}
		function rmm(){
			var xm=document.getElementById("xmm").value;
			var rm=document.getElementById("rmm").value;
			if(xm!=rm){
				$(".rmm_text").css("display","block");
				$(".rmm").focus();
				return;
			}else{
				$(".rmm_text").css("display","none");
			}
//			$(".rmm_text").css("display","block");
		}
		
		function tj(){
			ymm();
			xmm();
			rmm();
			var ym=$(".ymm_text").css("display");
			var xm=$(".xmm_text").css("display");
			var rm=$(".rmm_text").css("display");
			
			if(ym == "block" || xm == "block" || rm == "block"){
				return;
			}
			alert("修改成功");
		}
	</script>
</html>
