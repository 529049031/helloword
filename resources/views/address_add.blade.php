<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width">
		<meta name="format-detection" content="telephone=no">
		<meta name="format-detection" content="email=no">
		<meta name="format-detection" content="address=no;">
		<title>新增地址</title>
		<link rel="stylesheet" href="{{asset('resources/views/style/css/init.css')}}" />
		<link rel="stylesheet" href="{{asset('resources/views/style/css/sm.css')}}"  />

		<style>
			body{
				background: url('{{asset('resources/views/style/img/bg_address.gif')}}');
				padding-left: 0.3125rem;
				padding-right: 0.3125rem;
			}
			.main_div{
				position: relative;
				margin-top: 0.3125rem;
				border-radius:10px;
				border: 1px solid #999;
				background-color: #FFF;
				overflow: hidden;
				
			}
			.main_div div{
				
				padding-left: 0.3125rem;
				padding-right: 0.3125rem;
				height: 1.5625rem;
				border-bottom: 1px solid #EEEEEE;
			}
			.main_div_xx{
				margin-left: 0.3125rem;
				margin-right: 0.3125rem;
			}
			div span{
				color: #333333;
				font-size: 0.4125rem;
			}
			.delete_div{
				background-color: #eee;
			}
			.delete_img{
				float: right;
				margin-top: 0.546875rem;
				width: 0.46875rem;
			}
			.tj{
				position: absolute;
				top: 10.5375rem;
				left: 50%;
				width: 90%;
				height: 1.1875rem;
				line-height: 1.1875rem;
				background-color: #8b001a;
				color: #FFF;
				text-align: center;
				border-radius:5px;
				margin-left: -45%;
				font-size: 0.48125rem;
			}
			.J-choose-address{
				width: 70%;
				border: 0;
			}
			.main_div_xx input{
				width: 70%;
				border: 0;
				color: #999999;
				font-size: 0.34375rem;
			}
		</style>
	</head>
	<body>
		<div class="main_div">
			<div class="delete_div">
				<!--<img class="delete_img" src="style/img/delete.png"/>-->
			</div>
			<div class="main_div_xx" id="ssj">
				<span>收件人:</span>
				<input type="text" class="ssj"/>
			</div>
			<div class="main_div_xx" id="phone">
				<span>手机号:</span>
				<input type="text" class="phone"/>
			</div>
			<div class="main_div_xx" id="address_all">
				<span>所属地区:</span>
				<input type="text" class="J-choose-address address_all" value="" placeholder="请选择所在地" />
			</div>
			<div class="main_div_xx" id="address">
				<span>详细地址:</span>
				<input type="text" class="address"/>
			</div>
			<div>
				
			</div>
		</div>
		
		<div class="tj">
			新增地址
		</div>
		
	</body>
	<script type="text/javascript" src="{{asset('resources/views/style/js/jquery.js')}}" ></script>
	<script type="text/javascript" src="{{asset('resources/views/style/js/calrem.js')}}" ></script>
	<script type="text/javascript" src="{{asset('resources/views/style/js/zepto.js')}}"></script>
	<script type="text/javascript" src="{{asset('resources/views/style/js/sm.js')}}"></script>
	<script type="text/javascript" src="{{asset('resources/views/style/js/sm-city-picker.js')}}"></script>
	<script type="text/javascript">
	
	
		$(".delete_img").on("click",function(){
			alert("删除");
		})
		
		$(".tj").on("click",function(){
			alert("提交");
		})
		
	
		$("#ssj").on("click",function(){
			$(".ssj").focus();
		})
		$("#phone").on("click",function(){
			$(".phone").focus();
		})
		$("#address").on("click",function(){
			$(".address").focus();
		})
		$("#address_all").on("click",function(){
			$(".address_all").focus();
		})
        /**
         * 因为Zepto和jQuery框架的$冲突，又不想清掉jQuery的重置，所以改用Zepto调用
		 * 其中sm.js有修改
		 * 其中的dataPicker在官方文件中不存在，是自己加的
         */

        Zepto(function () {
		
            'use strict';
			
            var _$ = Zepto;
            _$(".J-choose-address").cityPicker({
                value: ['', '请选择', '']
            });
            
            Zepto.init();
        });

    </script>
</html>
