<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width">
		<meta name="format-detection" content="telephone=no">
		<meta name="format-detection" content="email=no">
		<meta name="format-detection" content="address=no;">
		<title>宽世祥</title>
		<link rel="stylesheet" href="{{asset('resources/views/style/css/swiper.min.css')}}" />
		<link rel="stylesheet" href="{{asset('resources/views/style/css/init.css')}}" />
		<style>
			html, body {
		        position: relative;
		        height: 100%;
		    }
		    body {
		        background: #eee;
		        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
		        font-size: 14px;
		        color:#000;
		        margin: 0;
		        padding: 0;
		    }
		    .swiper-container {
		        width: 100%;
		        height: 100%;
		    }
		    .swiper-slide {
		        text-align: center;
		        font-size: 18px;
		        background: #fff;
		
		        /* Center slide text vertically */
		        display: -webkit-box;
		        display: -ms-flexbox;
		        display: -webkit-flex;
		        display: flex;
		        /*-webkit-box-pack: center;
		        -ms-flex-pack: center;
		        -webkit-justify-content: center;
		        justify-content: center;
		        -webkit-box-align: center;
		        -ms-flex-align: center;
		        -webkit-align-items: center;
		        align-items: center;*/
		    }
		    #up{
		    	position: fixed;
		    	left: 50%;
		    	bottom: 0.4rem;
		    	z-index: 999;
		    	width: 2.0rem;
		    	margin-left: -1.0rem;
		    }
    </style>
</head>
<body>
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
			@foreach($data->img as $v)
            <div class="swiper-slide">
            	<img src="{{$v}}" class="swiper_img"/>
            </div>
			@endforeach
        </div>
        
    </div>
	<img id="up" src="{{asset('resources/views/style/img/arrow.png')}}" />
    <!-- Swiper JS -->
    <script src="{{asset('resources/views/style/js/jquery.js')}}"></script>
    <script src="{{asset('resources/views/style/js/swiper.min.js')}}"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination : '.swiper-pagination',
        paginationClickable : true,
        resistanceRatio : 0,
        lazyLoading : true,
        direction : 'vertical',
    });
    
    
    
    		//返回角度
			function GetSlideAngle(dx, dy) {
			    return Math.atan2(dy, dx) * 180 / Math.PI;
			}
			 
			//根据起点和终点返回方向 1：向上，2：向下，3：向左，4：向右,0：未滑动
			function GetSlideDirection(startX, startY, endX, endY) {
			    var dy = startY - endY;
			    var dx = endX - startX;
			    var result = 0;
			 
			    //如果滑动距离太短
			    if (Math.abs(dx) < 2 && Math.abs(dy) < 2) {
			        return result;
			    }
			 
			    var angle = GetSlideAngle(dx, dy);
			    if (angle >= -45 && angle < 45) {
			        result = 4;
			    } else if (angle >= 45 && angle < 135) {
			        result = 1;
			    } else if (angle >= -135 && angle < -45) {
			        result = 2;
			    }
			    else if ((angle >= 135 && angle <= 180) || (angle >= -180 && angle < -135)) {
			        result = 3;
			    }
			 
			    return result;
			}
			
			
			var a=0;
			
			//滑动处理
			var startX, startY;
			document.addEventListener('touchstart', function (ev) {
			    startX = ev.touches[0].pageX;
			    startY = ev.touches[0].pageY;   
			}, false);
			document.addEventListener('touchend', function (ev) {
			    var endX, endY;
			    endX = ev.changedTouches[0].pageX;
			    endY = ev.changedTouches[0].pageY;
			    var direction = GetSlideDirection(startX, startY, endX, endY);
			    switch (direction) {
			    	case 1:
			    		a++;
//			            alert(a);
						if(swiper.isEnd&&a==$(".swiper_img").length){
							window.location.href="{{url('current')}}";
						}
			            break;
			        case 2:
				        a--;
//				        alert(a);
				        if(a<0){
				        	a=0;
				        }
//				        alert(a);
//			            alert("下");
			            break;
			        default:            
			    }   
			}, false);
			
			
			up();
			function up(){
				$("#up").animate({
					bottom:"0.8rem"
				},1000).animate({
					bottom:"0.4rem"
				},1);
				setTimeout("up()",1001);
			};
			
    </script>
    </body>
</html>
