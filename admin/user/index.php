<?php
include "../lock.php";
	error_reporting(0);
	include "../../public/common/config.php";
	include "../../public/common/function.php";
	$sql="select * from user";
	$res=mysql_query($sql);
	$tot=mysql_num_rows($res);
	$num=3;
	$page=page($tot,$num);

	$sql1="select * from user limit $sqlfirst,$num";
	$res1=mysql_query($sql1);

	if($res1 && mysql_num_rows($res1)>0){
		$arr=array();
		while ($row=mysql_fetch_assoc($res1)) {
			$arr[]=$row;
		}
	}else{
		die('查询失败');
	}


 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		table{
			width:70%;
			border:2px solid #ccc;
			background-color: rgb(160,160,160,0.4);
			margin-bottom: 130px;
		}
		td,th{
			text-align: center;
			border:2px solid #ccc;
			padding:5px 15px;
		}
		tr:hover{
			background-color: #eee;
		}
		h2{
			display: inline-block;
			width:90%;
			padding:0px 5%;
			padding-bottom:15px;
			border-bottom:1px solid #ccc;
		}
		h2 a{
			margin-left: 30px;
			font-size: 12px;
			color:white;
			text-decoration: none;
			display: inline-block;
			background-color: #006699;
			padding:8px 20px;
			border-radius: 5px;
		}
		body{
			background:url(../public/img/bg.jpg);
			background-size: 100%;
		}
		h4{

			text-align: center;
		}
	</style>
</head>
<body>
	<h2>查看用户<a href="./add.php">添加用户</a></h2>
	<table cellspacing=0 align=center>
		<tr>
			<th>编号</th>
			<th>姓名</th>
			<th>密码</th>
			<th>用户权限</th>
			<th>操作</th>
		</tr>
		<?php
			foreach ($arr as $key => $value) {
				echo "<tr>";
				echo "<td>$value[id]</td>";
				echo "<td>$value[username]</td>";
				echo "<td>$value[password]</td>";
				if($value['is_admin']==0){
					echo "<td>普通用户</td>";
				}else{
					echo "<td>管理员</td>";
				}
				echo "<td><a href=./update.php?id=$value[id]>修改</a> | <a href=delete.php?id=$value[id]>删除</a></td>";
				echo "</tr>";
			}

		 ?>

	</table>
	<h4><?php echo $page; ?></h4>
</body>
</html>
