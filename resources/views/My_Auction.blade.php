<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width">
		<meta name="format-detection" content="telephone=no">
		<meta name="format-detection" content="email=no">
		<meta name="format-detection" content="address=no;">
		<title>我的竞拍-宽世祥文化</title>
		<link rel="stylesheet" href="{{asset('resources/views/style/css/init.css')}}" />
		<style>
			*{
				margin: 0 auto;
				padding: 0;
				list-style-type: none;
			}
			body{
				background-color: #eff3f6;
			}
			.main_top_div{
				width: 100%;
				height: 3.125rem;
				background: url('{{asset('resources/views/style/img/my_bg.jpg')}}') no-repeat;
				background-size:100% ;
				position: relative;
				left: 0;
				top: 0;
				color: #fff;
				text-align: center;
				font-size:0.375rem ;
				padding-top: 1.0rem;
			}
			.wx_name{
				
			}
			.main_top_img{
				position:relative; 
				margin-top: 0.6rem;
				z-index: 999;
				width: 1.875rem;
				border-radius: 50%;
				box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.3);
			}
			#tab {
				width: 100%;
				position: relative;
			}
			.tab_menu{
				width: 100%;
				/*border-bottom: 3px solid #eee;*/
				text-align: center;
				font-size: 0.3125rem;
			}
			#tab .tab_menu {
				width: 100%;
				height: 2.96875rem;
				float: left;
				position: absolute;
				z-index: 1;
				background-color: #FFF;
			}
			#tab .tab_menu ul{
				margin: 0 auto;
			}
			#tab .tab_menu li {
				float: left;
				width: 1.875rem;
				height: 2.96875rem;
				/*line-height: 1.5625rem;*/
				text-align: center;
				font-size: 0.3125rem;
				padding-top: 1.2rem;
				color: #999;
				-webkit-tap-highlight-color:rgba(0,0,0,0);
			}
			#tab .tab_box {
				width: 100%;
				height: 100px;
				clear: both;
				position: relative;
				top: 2.96875rem;
				
			}
			#tab .tab_menu .selected {
				border-bottom: 4px solid #8b001a;
				cursor: pointer;
			}
			#tab .tab_menu li{
				width: 32%;
			}
			.hide {
				display: none;
			}
			/*.tab_box{
				padding-left: 0.46875rem;
				padding-right: 0.46875rem;
			}*/
			.all_jj{
				color: #333;
				font-size: 0.75rem;
			}
			.success_order{
				color: #333;
				font-size: 0.75rem;
			}
			.my_collection{
				color: #333;
				font-size: 0.75rem;
				
			}
			
			
			
			
			.my{
				position: fixed;
				width: 1.25rem;
				right: 0.9375rem;
				bottom: 0.9375rem;
			}
			.all_xinxi{
				background-color: #FFF;
				width: 100%;
				height: 2.65625rem;
				padding-top: 0.2rem;
				padding-left: 0.34375rem;
				padding-right: 0.34375rem;
				margin-bottom: 0.2rem;
			}
			.left{
				font-size: 0.28125rem;
				color: #999;
				
			}
			.left_img_div{
				float: left;
				margin-right: 0.2rem;
			}
			.left_img{
				width: 1.5625rem;
				height: 1.5625rem;
				margin-top: 0.2rem;
				/*padding-bottom: 0.5rem;*/
			}
			.left_text_title{
				
				display:block;/*内联对象需加*/
			    width:50%;
			    word-break:keep-all;/* 不换行 */
			    white-space:nowrap;/* 不换行 */
			    overflow:hidden;/* 内容超出宽度时隐藏超出部分的内容 */
			    text-overflow:ellipsis;/* 当对象内文本溢出时显示省略标记(...) ；需与overflow:hidden;一起使用。*/
				color: #333;
			}
			.left_text_text{
				float: left;
				width: 1.4rem;
				margin-top: 0.2rem;
				font-size: 0.52rem;
				line-height: 0.4rem;
			}
			.left_text_text_r,.left_text_money{
				color: #8b001a;
			}
			.left_text_text_r{
				font-size: 0.3rem;
			}
			.left_text_money{
				float: left;
				margin-top: 0.1rem;
				margin-left: 0.2rem;
				font-size: 0.71875rem;
			}
			.left_text_time_div{
				clear: both;
				float: left;
				margin-top: -0.2rem;
				margin-left: 1.8rem;
				font-size: 0.25rem;
			}
			.left_text_time_img{
				width: 0.3125rem;
			}
			.right{
				float: right;
				width: 30%;
				font-size: 0.28125rem;
				text-align: center;
				border-left:1px dashed #333;
				margin-top: -1.4rem;
				margin-right: -0.4rem;
				/*margin-left: 0.4rem;*/
			}
			.right_img{
				width: 30%;
			}
			.jj_start{
				color: #999;
			}
			.cg{
				color: #8b001a;
			}
			.h{
				color: #333;
			}
			.left_text_goto{
				float: right;
				background-color: #8b001a;
				color: #FFFFFF;
				font-size: 0.25rem;
				padding-left: 0.2rem;
				padding-right: 0.2rem;
				border-radius:0.15625rem ;
				margin-top: 0.2rem;
				margin-left: 0.3rem;
			}
			.left_text_div_sc{
				padding-top: 0.5rem;
			}
			.left_text_title_sc{
				line-height: 0.6rem;
			}
			.right_sc{
				float: right;
				width: 30%;
				height: 100%;
				font-size: 0.28125rem;
				text-align: center;
				margin-top: -1.4rem;
				background: url('{{asset('resources/views/style/img/you.png')}}') right 0.7rem no-repeat;
				background-size: 10%;
			}
			.tab_menu_li{
				margin-right: 1%;
				border-bottom: 2px solid #eee;
			}
			
			.gq{
				-webkit-filter:grayscale(1) opacity(0.5);
			}
		</style>
	</head>
	<body>
		<div class="main_div">
			<div class="main_top_div">
				<span>拍友:</span><span class="wx_name">123123123</span>
				<br  />
				<img src="{{asset('resources/views/style/img/my.png')}}" class="main_top_img" />
			</div>
			
			
			<div id="tab">
				<ul class="tab_menu">
			    	<li class="selected tab_menu_li">
			    		<p class="all_jj">3</p>
			    		全部竞价
			    	</li>
			        <li class="tab_menu_li">
			        	<p class="success_order">3</p>
			        	<span></span>
			        	成功订单
			        </li>
			        <li class="tab_menu_li">
			        	<p class="my_collection">3</p>
			        	我的收藏
			        </li>
			    </ul>
			    <div class="tab_box">
			    	
			    	<div>
			    		<div class="all_xinxi">
			    			<div class="left">
			    				<div class="left_img_div">
			    					<img src="{{asset('resources/views/style/img/yu.jpg')}}" class="left_img" />
			    				</div>
			    				<div class="left_text_div">
			    					<div class="left_text_title">
			    						珍藏及级天然缅甸A货翡翠手镯
			    					</div>
			    					<div class="left_text_text">
			    						RMB<br />
			    						<span class="left_text_text_r">我的出价</span>
			    					</div>
			    					<div class="left_text_money">
			    						5600
			    						<span class="left_text_goto">去支付</span>
			    					</div>
			    					<div class="left_text_time_div">
			    						<img class="left_text_time_img" src="{{asset('resources/views/style/img/daojishi_red.png')}}" />
			    						<span class="left_text_time">结束时间：</span>
										<span class="left_text_time_day h">1</span>
										<span>天</span>
										<span class="left_text_time_hour h">1</span>
										<span>小时</span>
										<span class="left_text_time_min h">1</span>
										<span>分钟</span>
			    					</div>
			    				</div>
			    			</div>
			    			<div class="right">
				        		<br />
				        		<span class="jj_start">竞价中</span>
			    			</div>
			    		</div>
			    		
			    		
			    		<div class="all_xinxi">
			    			<div class="left">
			    				<div class="left_img_div">
			    					<img src="{{asset('resources/views/style/img/yu.jpg')}}" class="left_img" />
			    				</div>
			    				<div class="left_text_div">
			    					<div class="left_text_title">
			    						珍藏及级天然缅甸A货翡翠手镯
			    					</div>
			    					<div class="left_text_text">
			    						RMB<br />
			    						<span class="left_text_text_r">我的出价</span>
			    					</div>
			    					<div class="left_text_money">
			    						5600
			    						<span class="left_text_goto">去支付</span>
			    					</div>
			    					<div class="left_text_time_div">
			    						<img class="left_text_time_img" src="{{asset('resources/views/style/img/daojishi_red.png')}}" />
			    						<span class="left_text_time">结束时间：</span>
										<span class="left_text_time_day h">1</span>
										<span>天</span>
										<span class="left_text_time_hour h">1</span>
										<span>小时</span>
										<span class="left_text_time_min h">1</span>
										<span>分钟</span>
			    					</div>
			    				</div>
			    			</div>
			    			<div class="right">
			    				<img src="{{asset('resources/views/style/img/jingpaichenggong.png')}}" class="right_img"/>
				        		<br />
				        		<span class="jj_start">竞价成功</span>
			    			</div>
			    		</div>
			    		
			    		
			    		<div class="all_xinxi ">
			    			<div class="left gq">
			    				<div class="left_img_div">
			    					<img src="{{asset('resources/views/style/img/yu.jpg')}}" class="left_img" />
			    				</div>
			    				<div class="left_text_div">
			    					<div class="left_text_title">
			    						珍藏及级天然缅甸A货翡翠手镯
			    					</div>
			    					<div class="left_text_text">
			    						RMB<br />
			    						<span class="left_text_text_r">我的出价</span>
			    					</div>
			    					<div class="left_text_money">
			    						5600
			    						<span class="left_text_goto">去支付</span>
			    					</div>
			    					<div class="left_text_time_div">
			    						<img class="left_text_time_img" src="{{asset('resources/views/style/img/daojishi_red.png')}}" />
			    						<span class="left_text_time">结束时间：</span>
										<span class="left_text_time_day h">1</span>
										<span>天</span>
										<span class="left_text_time_hour h">1</span>
										<span>小时</span>
										<span class="left_text_time_min h">1</span>
										<span>分钟</span>
			    					</div>
			    				</div>
			    			</div>
			    			<div class="right gq">
			    				<img src="{{asset('resources/views/style/img/shibai.png')}}" class="right_img"/>
				        		<br />
				        		<span class="jj_start">竞拍失败</span>
			    			</div>
			    		</div>
			    	</div>
			    	
			        <div class="hide">
			        	<div class="all_xinxi">
			    			<div class="left">
			    				<div class="left_img_div">
			    					<img src="{{asset('resources/views/style/img/yu.jpg')}}" class="left_img" />
			    				</div>
			    				<div class="left_text_div">
			    					<div class="left_text_title">
			    						珍藏及级天然缅甸A货翡翠手镯
			    					</div>
			    					<div class="left_text_text">
			    						RMB<br />
			    						<span class="left_text_text_r">我的出价</span>
			    					</div>
			    					<div class="left_text_money">
			    						5600
			    						<span class="left_text_goto">去支付</span>
			    					</div>
			    					<div class="left_text_time_div">
			    						<img class="left_text_time_img" src="{{asset('resources/views/style/img/daojishi_red.png')}}" />
			    						<span class="left_text_time">结束时间：</span>
										<span class="left_text_time_day h">1</span>
										<span>天</span>
										<span class="left_text_time_hour h">1</span>
										<span>小时</span>
										<span class="left_text_time_min h">1</span>
										<span>分钟</span>
			    					</div>
			    				</div>
			    			</div>
			    			<div class="right">
			    				<img src="{{asset('resources/views/style/img/jingpaichenggong.png')}}" class="right_img"/>
				        		<br />
				        		<span class="jj_start">竞价成功</span>
			    			</div>
			    		</div>
			        </div>
			        
			        <div class="hide">
			        	<div class="all_xinxi">
			    			<div class="left ">
			    				<div class="left_img_div">
			    					<img src="{{asset('resources/views/style/img/yu.jpg')}}" class="left_img" />
			    				</div>
			    				<div class="left_text_div_sc">
			    					<div class="left_text_title_sc">
			    						珍藏及级天然缅甸A货翡翠手镯
			    					</div>
			    					<div class="left_text_time_div_sc">
			    						<img class="left_text_time_img" src="{{asset('resources/views/style/img/daojishi_red.png')}}" />
			    						<span class="left_text_time">结束时间：</span>
										<span class="left_text_time_day h">1</span>
										<span>天</span>
										<span class="left_text_time_hour h">1</span>
										<span>小时</span>
										<span class="left_text_time_min h">1</span>
										<span>分钟</span>
			    					</div>
			    				</div>
			    			</div>
			    			<div class="right_sc"></div>
			    		</div>
			    		
			    		
			    		<div class="all_xinxi">
			    			<div class="left ">
			    				<div class="left_img_div">
			    					<img src="{{asset('resources/views/style/img/yu.jpg')}}" class="left_img" />
			    				</div>
			    				<div class="left_text_div_sc">
			    					<div class="left_text_title_sc">
			    						珍藏及级天然缅甸A货翡翠手镯
			    					</div>
			    					<div class="left_text_time_div_sc">
			    						<img class="left_text_time_img" src="{{asset('resources/views/style/img/daojishi_red.png')}}" />
			    						<span class="left_text_time">结束时间：</span>
										<span class="left_text_time_day h">1</span>
										<span>天</span>
										<span class="left_text_time_hour h">1</span>
										<span>小时</span>
										<span class="left_text_time_min h">1</span>
										<span>分钟</span>
			    					</div>
			    				</div>
			    			</div>
			    			<div class="right_sc"></div>
			    		</div>
			        </div>
			        
			    </div>
			</div>
		</div>
		
		<img src="{{asset('resources/views/style/img/zhuye.png')}}" class="my" onclick="open_my()" />
	</body>
	<script type="text/javascript" src="{{asset('resources/views/style/js/jquery.js')}}" ></script>
	<script type="text/javascript" src="{{asset('resources/views/style/js/calrem.js')}}" ></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var $tab_li = $('#tab ul li');
			$tab_li.hover(function(){
				$(this).addClass('selected').siblings().removeClass('selected');
				var index = $tab_li.index(this);
				$('div.tab_box > div').eq(index).show().siblings().hide();
//				$('div.tab_box > div').eq(index).slideDown().siblings().hide();
			});	
		});
		
		function open_my(){
			location.href = "{{url('/current')}}";
		}
	</script>
</html>
