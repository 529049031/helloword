<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width">
		<meta name="format-detection" content="telephone=no">
		<meta name="format-detection" content="email=no">
		<meta name="format-detection" content="address=no;">
		<title></title>
		<link rel="stylesheet" href="{{asset('resources/views/style/css/init.css')}}" />
		<style>
			body{
				background: url('{{asset('resources/views/style/img/bg_address.gif')}}');
				padding-top: 0.4rem;
				padding-left: 0.2rem;
				padding-right: 0.2rem;
			}
			.main_div{
				width: 100%;
				height: 2.1875rem;
				font-size: 0.34375rem;
				color: #999;
				background-color: #FFF;
				border: 3px solid #d8d8d8;
				margin-top: 0.3125rem;
			}
			.main_div_left{
				width: 80%;
				float: left;
			}
			.xz{
				float: left;
				width: 2.03125rem;
				/*height: 2.1875rem;*/
				text-align: center;
				line-height: 2.1875rem;
			}
			.main_div_text{
				font-size: 0.378125rem;
				padding-top: 0.4rem;
				line-height: 0.6rem;
			}
			.user_name{
				
			}
			.user_phone{
				
			}
			.user_address{
				display:block;/*内联对象需加*/
			    width:70%;
			    word-break:keep-all;/* 不换行 */
			    white-space:nowrap;/* 不换行 */
			    overflow:hidden;/* 内容超出宽度时隐藏超出部分的内容 */
			    text-overflow:ellipsis;/* 当对象内文本溢出时显示省略标记(...) ；需与overflow:hidden;一起使用。*/
			
			}
			.xg{
				float: right;
				width: 20%;
				height: 100%;
				background: url('{{asset('resources/views/style/img/update.png')}}') center center no-repeat;
				background-size:0.46875rem ;
			}
			#xuanzhong{
				color: #333;
				border: 3px solid #8b001a;
			}
			input[type="radio"]{
				/*background-color: red;*/
			}
		</style>
	</head>
	<body>
			<div class="main_div" id="xuanzhong">
				<label for="radio1">
				<div class="main_div_left">
					<div class="xz">
						<input type="radio" id="radio1" name="radio" />
					</div>
					<div class="main_div_text">
						<span class="user_name">郑小傻</span>
						<span class="user_phone">15210329866</span>
						<br />
						<span class="user_address">北京市朝阳区安定路39号长新大厦401</span>
					</div>
				</div>
				</label>
				<div class="xg">
					
				</div>
			</div>
		
			<div class="main_div">
				<label for="radio2">
				<div class="main_div_left">
					<div class="xz">
						<input type="radio" id="radio2" name="radio" />
					</div>
					<div class="main_div_text">
						<span class="user_name">郑小傻</span>
						<span class="user_phone">15210329866</span>
						<br />
						<span class="user_address">北京市朝阳区安定路39号长新大厦401</span>
					</div>
				</div>
				</label>
				<div class="xg">
					
				</div>
			</div>
		
	</body>
	<script type="text/javascript" src="{{asset('resources/views/style/js/jquery.js')}}" ></script>
	<script type="text/javascript" src="{{asset('resources/views/style/js/calrem.js')}}" ></script>
	<script type="text/javascript">
		
		$("label").on("click",function(){
			$("#xuanzhong").removeAttr("id");
			$(this).parent("div").attr('id','xuanzhong');
		});
		
		$(".xg").on("click",function(){
			alert("修改");
		})
    </script>
</html>
