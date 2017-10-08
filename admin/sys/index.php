<?php 
include "../lock.php";
	error_reporting(0);
 ?>
 <html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	body{
		background:url(../public/img/巅峰.jpg)  no-repeat ;
		-webkit-background-size: 100% ;
		background-size: 100% ;
	}


	</style>
</head>
<body>
	<form action="do_login.php" method="POST">
		用户: <input type="text" name="username" id="" value="<?php echo $_SESSION[admin] ?>" readonly>
		密码: <input type="text" name="password" id="">
		<input type="submit" value="提交">
		<input type="reset" value="重置">
	</form>
</body>
</html>