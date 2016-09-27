<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width">
		<meta name="format-detection" content="telephone=no">
		<meta name="format-detection" content="email=no">
		<meta name="format-detection" content="address=no;">
		<title>订单详情-宽世祥文化</title>
		<link rel="stylesheet" href="{{asset('resources/views/style/css/init.css')}}" />
		<style>
			body{
				background-color: #FFF;
				font-size: 0.309375rem;
			}
			.top{
				width: 100%;
				height: 2.59375rem;
				background-color: #FFF;
				padding-top: 0.78125rem;
				padding-left: 0.390625rem;
				padding-right: 0.390625rem;
			}
			.top_ddh{
				float: left;
				/*margin-top: 0.2rem;*/
				font-size: 0.446875rem;
				color: #161618;
			}
			.top_ddzt{
				float: left;
				font-size: 0.34375rem;
				color: #FFF;
				background-color: #161618;
				margin-left: 0.2rem;
				
				padding-top: 0.05rem;
				padding-bottom: 0.005rem;
				
				padding-left: 0.2rem;
				padding-right: 0.2rem;
				border-radius: 3px;
			}
			.top_time{
				clear: both;
				float: left;
				margin-top: 0.4rem;
				font-size: 0.34375rem;
				color: #888;
			}
			.top_kd{
				float: left;
				margin-top: 0.36rem;
				margin-left: 0.2rem;
				font-size: 0.34375rem;
				color: #888;
			}
			.top_kdh{
				float: left;
				margin-top: 0.4rem;
				margin-left: 0.2rem;
				font-size: 0.34375rem;
				color: #888;
			}
			.recipient_information{
				width: 100%;
				height: 3.375rem;
				background-image: url('{{asset('resources/views/style/img/adress_bg.png')}}');
				background-size: 100%;
				padding-top: 0.98125rem;
				padding-left: 0.390625rem;
				padding-right: 0.390625rem;
			}
			.recipient_img{
				float: left;
				width: 4%;
				margin-top: 0.1rem;
				padding-bottom: 0.58125rem;
			}
			.receipt_name{
				float: left;
				margin-top: 0.05rem;
				margin-left: 0.2rem;
				font-size: 0.446875rem;
				color: #161618;
			}
			.receipt_phone_img{
				float: left;
				width: 3.5%;
				margin-top: 0.1rem;
				margin-left: 1.2rem;
				padding-bottom: 0.58125rem;
				opacity: 0.6;
			}
			.receipt_phone{
				float: left;
				margin-top: 0.1rem;
				margin-left: 0.2rem;
				font-size: 0.446875rem;
				color: #161618;
			}
			
			.receipt{
				clear: both;
				float: left;
				font-size: 0.34375rem;
				color: #888;
			}
			.address{
				float: left;
				font-size: 0.34375rem;
				color: #888;
				display:block;/*内联对象需加*/
			    width:70%;
			    word-break:keep-all;/* 不换行 */
			    white-space:nowrap;/* 不换行 */
			    overflow:hidden;/* 内容超出宽度时隐藏超出部分的内容 */
			    text-overflow:ellipsis;/* 当对象内文本溢出时显示省略标记(...) ；需与overflow:hidden;一起使用。*/
			}
			
			/*订单内容*/
			.order_content{
				width: 100%;
				height: 1.875rem;
				background-color: #FFF;
				font-size: 0.25rem;
				border-top:  1px dashed #eee;
				margin-bottom: 0.2rem;
			}
			.order_content_main{
				padding-top: 0.25rem;
				padding-left: 0.546875rem;
				padding-right: 0.46875rem;
				
			}
			.order_content_img{
				clear: both;
				float: left;
				padding-right: 0.390625rem;
				margin-top: 0.4rem;
				/*padding-top: 0.05rem;*/
				/*padding-bottom: 1.0rem;*/
				width: 1.5625rem;
				height: 1.5625rem;
			}
			.order_name{
				font-size: 0.34375rem;
				color: #161618;
				display:block;/*内联对象需加*/
			    width:70%;
			    padding-left: 0.4rem;
			    padding-top: 0.4rem;
			    overflow : hidden;
			    text-overflow: ellipsis;
			    display: -webkit-box;
			    -webkit-line-clamp: 2;
			    -webkit-box-orient: vertical;
			    margin-bottom: 0.1rem;
			    line-height: 0.5rem;
			}
			.gjjsps{
				width: 100%;
				height: 0.8rem;
				background-color: #FFF;
			}
			.gjjsp{
				float: right;
				margin-right: 0.46875rem;
				
			}
			/*商品,实付款*/
			.commoditys{
				width: 100%;
				height: 1.25rem;
				margin-top: 0.3125rem;
			}
			.commodity{
				clear: both;
				float: right;
				margin-right: 0.46875rem;
			}
			.money_{
				color: red;
				font-size: 0.446875rem;
			}
			.money{
				color: red;
				font-size: 0.446875rem;
			}
			.commodity_data{
				clear: both;
				float: right;
				margin-right: 0.46875rem;
				color: #999;
			}
			.commodity_time{
				color: #999;
			}
			.fgx{
				height: 10%;
			}
		</style>
	</head>
	<body>
		<div class="top">
			<span class="top_ddh">订单号：2088314082215303</span>
			<span class="top_ddzt">已发货</span>
			<span class="top_time">2016-08-02</span>
			<span class="top_kd">顺丰快递</span>
			<span class="top_kdh"> SF111111111</span>
		</div>
		<div class="recipient_information">
			
			<img class="recipient_img" src="{{asset('resources/views/style/img/location.png')}}" />
			<span class="receipt_name">郑小傻</span>
			<img class="receipt_phone_img" src="{{asset('resources/views/style/img/phone2.png')}}"/>
			<span class="receipt_phone">15210329866</span>
			
			<span class="receipt">收货地址：</span>
			<span class="address">啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</span>
		</div>
		
		
		
		
		<div class="order_content">
			<div class="order_content_main">
				<img class="order_content_img" src="{{asset('resources/views/style/img/yu.jpg')}}"/>
				<span class="order_name">INMIX音米男款可配近视偏光镜INMIX音米男款可配近视偏光镜INMIX音米男款可配近视偏光镜INMIX音米男款可配近视偏光镜</span>
			</div>
		</div>
		
		
		<div class="gjjsps">
		<span class="gjjsp">共<span class="goumaishuliang">1</span>件商品</span>
		</div>
		<img class="fgx" src="{{asset('resources/views/style/img/fg.png')}}" />
		<div class="commoditys">
			<span class="commodity">实付款：<span class="money_">￥</span><b class="money">1151.70</b></span>
			<span class="commodity_data">下单日期：<span class="commodity_time">2016-8-4 11:21:03</span></span>
		</div>
		
		
	</body>
	<script type="text/javascript" src="{{asset('resources/views/style/js/jquery.js')}}" ></script>
	<script type="text/javascript" src="{{asset('resources/views/style/js/calrem.js')}}" ></script>
</html>
