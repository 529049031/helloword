<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width">
		<meta name="format-detection" content="telephone=no">
		<meta name="format-detection" content="email=no">
		<meta name="format-detection" content="address=no;">
		<title>本期竞拍-宽世祥文化</title>
		<link rel="stylesheet" href="{{asset('resources/views/style/css/init.css')}}" />
		<style>
			.main_div{
				position: relative;
				width: 100%;
			}
			.main_div_top_img{
				width: 100%;
			}
			.main_div_end{
				font-size: 0.378125rem;
				color: #999;
				padding-top: 0.06875rem;
				padding-left: 0.46875rem;
				height: 2.1875rem;
			}
			.main_div_end_title{
				font-size: 0.4125rem;
				color: #000;
				line-height: 0.8rem;
				display:block;/*内联对象需加*/
			    width:70%;
			    word-break:keep-all;/* 不换行 */
			    white-space:nowrap;/* 不换行 */
			    overflow:hidden;/* 内容超出宽度时隐藏超出部分的内容 */
			    text-overflow:ellipsis;/* 当对象内文本溢出时显示省略标记(...) ；需与overflow:hidden;一起使用。*/

			}
			.h{
				color: #000;
			}
			.main_div_state{
				position: absolute;
				right: 0.46875rem;
				bottom: 0.66875rem;
				width: 2.125rem;
				height: 2.5rem;

				background-color: rgba(139,0,26,0.85);
				font-size: 0.375rem;

				text-align: center;
			}
			.jp_state{
				color: #FFF;
				font-size: 0.48125rem;
				height: 0.78125rem;
				line-height: 0.78125rem;
			}
			.jp_second{
				color: #FFF;
				font-size: 0.9375rem;
			}
			.jp_text{
				position: absolute;
				left: 0;
				bottom: 0.2rem;
				color: #FFF;
				width: 100%;
				text-align: center;
			}
			.one{
				font-size: 0.9375rem;
			}
			.two{
				font-size: 0.9375rem;
			}
			.three{
				font-size: 0.9375rem;
			}
			.four{
				font-size: 0.7375rem;
			}

			.my{
				position: fixed;
				width: 1.25rem;
				right: 0.9375rem;
				bottom: 0.46875rem;
			}
		</style>
	</head>
	<body>
	@foreach($data as $v)
	<a href="{{url("/auction/$v->id")}}">
		<div class="main_div">
			<div class="main_div_top">
				<img src="{{asset("$v->cover")}}" class="main_div_top_img"/>
			</div>
			<div class="main_div_end">
				<span class="main_div_end_title">{{$v->name}}</span>
				<span class="main_div_end_time">结束时间：</span>
				<span class="main_div_end_time_day h">1</span>
				<span>天</span>
				<span class="main_div_end_time_hour h">1</span>
				<span>小时</span>
				<span class="main_div_end_time_min h">1</span>
				<span>分钟</span>
			</div>
			<div class="main_div_state">
				<div class="jp_state">
					@if($v->status == '1')
						竞拍中
					@else
						已结束
					@endif
				</div>
				<span class="jp_second">7</span>
				<br />
				<span class="jp_text">次竞拍</span>
			</div>
		</div>
	</a>
	@endforeach
		<img src="{{asset('resources/views/style/img/my.png')}}" class="my" onclick="xq()" />
	</body>
	<script type="text/javascript" src="{{asset('resources/views/style/js/jquery.js')}}" ></script>
	<script type="text/javascript" src="{{asset('resources/views/style/js/calrem.js')}}" ></script>
	<script>
		function xq(){
			location.href = "{{url('/my')}}";
		}
		fontSize();
		function fontSize(){
		    var nameList = $(".jp_second");
		    for(var i=0;i<nameList.length;i++){
				if(nameList.eq(i).text().length==4){
					nameList.eq(i).addClass("four");
				}else if(nameList.eq(i).text().length==3){
					nameList.eq(i).addClass("three");
				}else if(nameList.eq(i).text().length==2){
					nameList.eq(i).addClass("two");
				}else{
		            nameList.eq(i).addClass("one");
		        }
			}
		}

	</script>
</html>
