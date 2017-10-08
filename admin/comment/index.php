<?php
	date_default_timezone_set("PRC");
	include "../lock.php";
	error_reporting(0);
	include "../../public/common/config.php";
	include "../../public/common/function.php";
	$sql="select * from comment";
	$res=mysql_query($sql);
	$tot=mysql_num_rows($res);
	$num=3;
	$page=page($tot,$num);

	$sql1="select comment.id,comment.con,comment.time,comment.is_ok,user.username,goods.shopname from comment,user,goods where comment.goods_id=goods.id and comment.user_id=user.id limit $sqlfirst,$num";
	$res1=mysql_query($sql1);

	if($res1){
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
			width:100%;
			border:2px solid #ccc;
			background-color: rgb(160,160,160,0.2);
			margin-bottom: 200px;
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
	<h2>查看评论</h2>
	<table cellspacing=0 align=center>
		<tr>
			<th>编号</th>
			<th>评论内容</th>
			<th>评论用户</th>
			<th>评论商品</th>
			<th>评论时间</th>
			<th>操作</th>
		</tr>
		<?php
			foreach ($arr as $key => $value) {
				echo "<tr>";
				echo "<td>$value[id]</td>";
				echo "<td>$value[con]</td>";
				echo "<td>$value[username]</td>";
				echo "<td>$value[shopname]</td>";
				echo "<td>$value[time]</td>";
				if($value['is_ok']==0){
					echo "<td><a href=./check.php?id=$value[id]>未审核</a> | <a href=delete.php?id=$value[id]>删除</a></td>";
				}else{
					echo "<td><a>已审核</a> | <a href=delete.php?id=$value[id]>删除</a></td>";
				}

				echo "</tr>";
			}

		 ?>

	</table>
	<h4><?php echo $page; ?></h4>
</body>
</html>
