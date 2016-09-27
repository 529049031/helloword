<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width">
		<meta name="format-detection" content="telephone=no">
		<meta name="format-detection" content="email=no">
		<meta name="format-detection" content="address=no;">
		<title>新增收货地址</title>
		<link rel="stylesheet" href="style/css/init.css" />
		
		<script type="text/javascript" src="//g.alicdn.com/msui/sm/0.6.2/js/sm-city-picker.min.js" charset="utf-8"></script>
		
	</head>
	<body>
		
		<input type="text" id='city-picker'/>
		<script>
		  $("#city-picker").cityPicker({
		    toolbarTemplate: '<header class="bar bar-nav">\<button class="button button-link pull-right close-picker">确定</button>\<h1 class="title">选择收货地址</h1>\</header>'
		  });
		</script>
		
		
		
	</body>
	<script type="text/javascript" src="style/js/jquery.js" ></script>
	<script type="text/javascript" src="style/js/calrem.js" ></script>
</html>
