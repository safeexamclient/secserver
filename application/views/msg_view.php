<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		#container {
			margin: auto auto;
			max-width: 600px;
			min-height: 240px;
			border-radius: 5px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
			font-family: Microsoft YaHei;
		}
		.title {
			border-bottom: 1px solid #ddd;
			font-size: 20px;
			padding: 10px 15px;
		}
		.time {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #ddd;
			line-height: 40px;
			padding: 0 10px 0 10px;
			margin: 40px 0 0 0;
			color: #ccc;
		}
	</style>
	<title>系统提示</title>
</head>
<body style="margin-top: 80px;">
	<div id="container">
		<div class="title">系统提示</div>
		<div style="text-align: center; min-height: 80px; margin-top: 38px; padding:5px 10px; font-size: 16px;">			 
			<?php 
				//如果有图片，就显示图片
				if (!empty($pic) ){ 
					echo "<img src='/images/".$pic.".png' width='32px'> &nbsp; &nbsp; ";
				}
				//然后显示文字
				echo $text;
			?>			 
			<br><br>
			[ <a href="<?php echo $url; ?>"><?php echo $btn; ?></a> ]
		</div>
		
		<p class="time">提示时间：<?php echo date('Y-m-d H:i:s', time()); ?></p>
	</div>
</body>
</html>