<html>
<head>
	<title>安全警告</title>
	<style type="text/css">
html, body {
	background: #0b1933;
	text-align: center;
}
body {
	font: 80% Tahoma;
}
#wrapper {
	margin: 100px auto;
	width: 500px;
	text-align: left;
	background: #fff;
	padding: 10px;
   border: 5px solid #ccc;
}
form { 
   text-align: center;
}
	</style>
   <base href="<?php echo GLYPE_URL; ?>/">
</head>
<body>
	<div id="警告">
		<h1>Warning!</h1>
		<p>您访问的网站试图通过一个安全连接进行访问. 这个代理并非安全</p>
      <p>点击将继续发送敏感数据, 并通过本在线浏览器发送给你</p>
      <form action="includes/process.php" method="get">
         <input type="hidden" name="action" value="sslagree">
			<input type="submit" value="仍然继续...">
         <input type="button" value="返回主页" onclick="window.location='.';">
		</form>
      <p><b>注意:</b> 这个警告将会重复出现.</p>
	</div>
</body>
</html>