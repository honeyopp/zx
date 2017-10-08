<?php
	include "../../public/common/config.php";
	include "../lock.php";
	error_reporting(0);
	$sql="select * from class";

	$res=mysql_query($sql);
	$arr=array();
	while ($row=mysql_fetch_assoc($res)) {
		$arr[]=$row;
	}

 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		form{
			display: inline-block;
			width:50%;
			background-color: rgb(160,160,160,0.2);
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
	<p><a href="./index.php">首页</a>/添加品牌</p>
	<form action="do_add.php" method="POST">
		<p>品牌名称: <input type="text" name="brandname"></p>
		<p>所属分类:
			<select name="cid" id="">
				<?php
					foreach ($arr as $key => $value) {
						echo "<option value=$value[id]>$value[classname]</option>";
					}
				 ?>
			</select>
		</p>

		<p><input type="submit" value="提交"><input type="reset" value="重置"></p>
	</form>
</body>
</html>
