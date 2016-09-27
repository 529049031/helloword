<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width">
		<meta name="format-detection" content="telephone=no">
		<meta name="format-detection" content="email=no">
		<meta name="format-detection" content="address=no;">
		<title>出价竟拍-宽世祥文化</title>
		<link rel="stylesheet" href="style/css/init.css" />
		<style>
			body{
				background-color: #eff3f6;
			}
			.main_top_div{
				width: 100%;
				height: 5.9375rem;
				background: url(style/img/bh2.jpg);
				background-size:100% ;
			}
			.main_top_money_div{
				position: relative;
				height: 2.96875rem;
				padding-left: 0.46875rem;
				padding-right: 0.46875rem;
				
				color: #FFF;
			}
			.main_top_money{
				height: 2.96875rem;
				border-bottom:1px dashed #FFF;
				font-size: 1.21875rem;
			}
			.main_top_tishi_div{
				width: 100%;
				height: 2.96875rem;
				background: url(style/img/gantanhao.png) center center no-repeat;
				background-size: 1.953125rem;
				font-size: 0.34375rem;
				color: #999;
				text-align: center;
				padding-top: 0.9rem;
				
			}
			.my_money_text{
				position: absolute;
				bottom: 0.2rem;
				font-size: 0.46875rem;
				
			}
			.money_text{
				float: right;
				font-size: 0.3125rem;
				margin-top: 2.26875rem;
				margin-right: 0rem;
			}
			.my_money{
				float: right;
				margin-top: 1.26875rem;
				font-size: 1.21875rem;
				max-width: 4.0rem;
				border: 0;
				outline:none;
				color: #FFF;
				text-align: right;
				overflow-x:visible;
				overflow-y:visible;
				background-color: transparent;
			}
			
			
			
			.recipient_information{
				/*width: 100%;*/
				height: 3.375rem;
				background-image: url(style/img/adress_bg.png);
				background-size: 100%;
				padding-top: 0.48125rem;
				padding-left: 0.390625rem;
				padding-right: 0.390625rem;
			}
			.receipt_name{
				margin-left: 0.3rem;
				font-size: 0.34375rem;
				color: #666;
			}
			.receipt_phone{
				font-size: 0.34375rem;
				color: #666;
			}
			.receipt_user{
				font-size: 0.375rem;
				color: #000;
			}
			.receipt_shdz{
				font-size: 0.375rem;
				color: #000;
				float: left;
				margin-top: 0.4rem;
			}
			.receipt_address{
				float: left;
				margin-top: 0.43rem;
				margin-left: 0.2rem;
				font-size: 0.34375rem;
				color: #666;
				display:block;/*内联对象需加*/
			    width:70%;
			    word-break:keep-all;/* 不换行 */
			    white-space:nowrap;/* 不换行 */
			    overflow:hidden;/* 内容超出宽度时隐藏超出部分的内容 */
			    text-overflow:ellipsis;/* 当对象内文本溢出时显示省略标记(...) ；需与overflow:hidden;一起使用。*/
			}
			.right_sc{
				float: right;
				width: 30%;
				height: 0.925rem;
				font-size: 0.28125rem;
				/*text-align: center;*/
				margin-top: -1.4rem;
				background: url(style/img/you.png) right no-repeat;
				background-size: 10%;
			}
			.address_text{
				height: 0.9375rem;
				line-height: 0.9375rem;
				margin-left: 0.46875rem;
				font-size: 0.28125rem;
				color: #999;
			}
			
			.xieyi{
				height: 1.25rem;
				line-height: 1.0rem;
				background-color: #FFF;
			}
			.xieyi_img{
				float: left;
				width: 0.375rem;
				height: 0.375rem;
				margin-top: 0.4375rem;
				margin-left: 0.46875rem;
			}
			.xy_text{
				float: left;
				font-size: 0.28125rem;	
				color: #000;
				margin-top: 0.15rem;
				margin-left: 0.4rem;
			}
			.ck_xy{
				float: left;
				font-size: 0.28125rem;
				color: #0098df;
				margin-top: 0.15rem;
				margin-left: 0.4rem;
			}
			
			.tj{
				position: fixed;
				left: 0;
				bottom: 0;
				width: 100%;
				height: 1.1875rem;
				line-height: 1.1875rem;
				background-color: #8b001a;
				color: #FFF;
				text-align: center;
				font-size: 0.48125rem;
			}
		</style>
	</head>
	<body>
		<div class="main_top_div">
			<div class="main_top_money_div">
				<div class="main_top_money">
					<span class="my_money_text">我的出价</span>
					
					<input type="text" onblur="check_number()" class="my_money" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" />
					
					
					<!--<input  type="text"  class="my_money" 
						 onkeyup="value=(parseInt((value=value.replace(/\D/g,''))==''||parseInt((value=value.replace(/\D/g,''))==0)?'1':value,10))"
						 onafterpaste="value=(parseInt((value=value.replace(/\D/g,''))==''||parseInt((value=value.replace(/\D/g,''))==0)?'1':value,10))"> -->
						 <span class="money_text">￥</span>
				</div>
			</div>
			<div class="main_top_tishi_div">
				<div class="main_top_tishi">
					如果您竞价成功您可以在<br />
					我的"我的竞价"中查看并继续支付
				</div>
			</div>
			
			<div class="recipient_information">
				<div class="recipient_information_left">
					<span class="receipt_user">收货人</span>
					<span class="receipt_name">郑小傻</span>
					<span class="receipt_phone">15210329866</span>
					<br />
					<span class="receipt_shdz">收货地址</span>
					<span class="receipt_address">啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</span>
					<div class="right_sc">
						
					</div>
				</div>
			</div>
			
			<div class="address_text">
				为保证竞拍成功后拍品顺利送达，请您确认您的收货地址
			</div>
			<div class="xieyi">
				<img class="xieyi_img" src="style/img/weiqueren.png" onclick="queren()"/>
				<span class="xy_text">竞拍并同意宽世祥拍卖竞拍协议</span>
				<span class="ck_xy">查看协议</span>
			</div>
			<div class="address_text">
				竞拍成功但未在指定时期内支付货款的订单将被取消
			</div>
		</div>
		<div class="tj">
			提交出价
		</div>
		
	</body>
	<script type="text/javascript" src="style/js/jquery.js" ></script>
	<script type="text/javascript" src="style/js/calrem.js" ></script>
	<script>
		var jinzhi=0;
		document.addEventListener("touchmove",function(e){
		if(jinzhi==0){
		e.preventDefault();
		e.stopPropagation();
		}
		},false);
	
		function check_number(){
			var money=$(".my_money").val();
		    var t=/^\d+(\.\d+)?$/;  
		    if(t.test(money)==false){
		    	alert("1");
		    }  
		}
		
		$(".main_top_money_div").on("click",function(){
//			alert("123");
			$(".my_money").focus();
		})
		
		function queren(){
			var src=$(".xieyi_img")[0].src;
			if(src.indexOf("weiqueren")!=-1){
				$(".xieyi_img").attr('src',"style/img/queren.png");
			}else{
				$(".xieyi_img").attr('src',"style/img/weiqueren.png");
			}
		}
		
		$(".tj").on("click",function(){
			alert("提交");
		})
	</script>
</html>
