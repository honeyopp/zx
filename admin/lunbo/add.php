<?php include "../lock.php";
	error_reporting(0); ?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		form{
			display: inline-block;
			width:50%;
			background-color: #3399CC;
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
		body{
			background:url(../public/img/bg.jpg);
			background-size: 100%;
		}
	</style>
</head>
<body>
	<p><a href="./index.php">首页</a>/添加信息</p>
	<form action="do_add.php" method="POST" enctype="multipart/form-data">
		<p>链接: <input type="text" name="href"></p>
		<p>轮播图片: <input type="file" name="img"></p>
		<p>顺序: <input type="text" name="sort"></p>
		<p><input type="submit" value="提交"><input type="reset" value="重置"></p>
	</form>
</body>
</html>