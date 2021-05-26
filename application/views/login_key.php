<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<style type="text/css">
		html,body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            display: flex;
            align-items: center; 	 /* 定义body的元素垂直居中 */
            justify-content: center; /* 定义body的里的元素水平居中 */
            padding-bottom: 150px;   /* 稍往上一点点更美观 */
        }
		#container {
			margin: auto auto;
			width: 600px;
			min-height: 240px;
			border-radius: 5px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}
		.title {
			border-bottom: 1px solid #ddd;
			font-size: 20px;
			padding: 10px 15px;
			color: #333;
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
	<title>请输入考试口令</title>
</head>
<body>
	<div id="container">
		<div class="title">请输入 <span style="font-family: Arial, Helvetica, sans-serif;">6</span> 位考试口令</div>
		<div style="text-align: center; min-height: 80px; margin-top: 50px; padding:5px 10px; font-size: 16px;">
			<form method="post" name="form1" id="form1" action="/login/key_do" onsubmit="return check();">			 
				<input type="text" id="key" name="key" value="" style="width: 240px; font-size: 16px; font-weight: bold; letter-spacing:10px; text-align: center; padding: 5px;" maxlength="6" > 
				&nbsp; 
				<input type="submit" style="width: 80px; padding: 5px ;" value=" 进 入 ">	
			</form>	
		</div>		
		<p class="time">提示时间：<span style="font-family: Arial, Helvetica, sans-serif;"><?php echo date('Y-m-d H:i:s', time()); ?></span></p>
	</div>
</body>
</html>
<script>
	/* 提交前检查 */
	function check(){
		var key = document.getElementById("key").value; //获取输入值
		var re = /^[A-Z0-9]*$/; 						//正择表达式，大写字母或数字
		var len = key.length;
		if (len != 6) {
			alert("提示：考试口令必须是6位，请重新输入");
			return false;
		}
		if (!re.test(key)) {
			alert("提示：您输入的不是字母或数字，请重新输入");
			return false;
		}		
		return true;
	}
</script>