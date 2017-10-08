<?php
include "../lock.php";
	error_reporting(0);
	include "../../public/common/config.php";
	$id=$_GET['id'];
	$sql="select * from user where id={$id}";

	$res=mysql_query($sql);

	$row=mysql_fetch_assoc($res);

 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	body{
		background:url(../public/img/bg.jpg);
		background-size: 100%;
	}
		form{
			display: inline-block;
			width:50%;
			background-color: rgb(51,153,204,0.2);
			float: left;
			margin-left:25% ;
			padding:50px 0px;
		}
		p{
			display: inline-block;
			width:50%;
			margin-left: 25%;
			margin-top:0px;
		}
		input[type='submit']{
			margin-right: 25px;
		}
		input[type='submit'],input[type='reset']{
			background:#000066;
			color:white;
			width:100px;
			height:30px;
			border:none;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<p><a href="./index.php">首页</a>/修改信息</p>
	<form action="do_update.php" method="POST">
		<p>用户名称: <input type="text" name="username" value="<?php echo $row[username] ?>"></p>
		<p>用户密码: <input type="password" name="password" value="<?php echo $row[password] ?>"></p>

		<p>
			<label for="manager">管理员: <input type="radio" name="root" id="manager" value=1 <?php echo $row['is_admin']==1? 'checked':'' ?>></label>
			<label for="user">普通用户: <input type="radio" name="root" id="user" value=0 <?php echo $row['is_admin']==0? 'checked':'' ?>></label>
		</p>
		<p><input type="hidden" name="id" value="<?php echo $row[id]; ?>"></p>
		<p><input type="submit" value="提交"><input type="reset" value="重置"></p>
	</form>
</body>
</html>
