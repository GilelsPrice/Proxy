<html>
<head>
	<title>��ȫ����</title>
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
	<div id="����">
		<h1>Warning!</h1>
		<p>�����ʵ���վ��ͼͨ��һ����ȫ���ӽ��з���. ��������ǰ�ȫ</p>
      <p>���������������������, ��ͨ����������������͸���</p>
      <form action="includes/process.php" method="get">
         <input type="hidden" name="action" value="sslagree">
			<input type="submit" value="��Ȼ����...">
         <input type="button" value="������ҳ" onclick="window.location='.';">
		</form>
      <p><b>ע��:</b> ������潫���ظ�����.</p>
	</div>
</body>
</html>