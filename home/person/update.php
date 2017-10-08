<?php
	include "../../public/common/config.php";
	error_reporting(0);
	$id=$_GET['id'];
	$sql="select * from address where id={$id}";

	$res=mysql_query($sql);

	$row=mysql_fetch_assoc($res);

 ?>
<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css"  href="../public/css/bootstrap.css">
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	body{
		background:url(../public/img/淡定jpg.jpg);
		background-size: 100%;

	}
		form{
			display: inline-block;
			width:50%;
			background-color: rgb(51,153,204,0.2);
			float: left;
			margin-left:25% ;
			padding:50px 0px;
			font-size: 30px;
			margin-top: 120px;
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
		<table  class="uu" width=767px height=161*(1200/408)px>
			<tr>
				<td>收货人姓名: <td><input type="text"  name="add_name" value="<?php echo "$row[add_name]"; ?>"></td></td></tr>
				<tr><td>收货地址: <td><input type="text"  name="ad_info" value="<?php echo "$row[ad_info]"; ?>"></td></td></tr>
				<tr><td>联系人电话: <td><input type="text"  name="tel" value="<?php echo "$row[tel]"; ?>"></td></td></tr>
				<input type="hidden" name="id" value="<?php echo "$id";?>">
				<tr><td ><input type="submit" name="" id="" value="修改" style="height:40px;"></td></tr>
	</table>

	</form>
	<script src="../public/js/bootstrap.min.js"></script>
</body>
</html>
