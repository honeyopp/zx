<?php
include "../lock.php";
	error_reporting(0);
	include "../../public/common/config.php";
	include "../../public/common/function.php";
	$sql="select goods.*,brand.brandname,class.classname from goods,class,brand where goods.brand_id=brand.id and brand.cid=class.id";
	$res=mysql_query($sql);
	$tot=mysql_num_rows($res);
	$num=3;
	$page=page($tot,$num);

	$sql1=$sql." limit $sqlfirst,$num";
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
	<h2>查看商品<a href="./add.php">添加商品</a></h2>
	<table cellspacing=0 align=center>
		<tr>
			<th>编号</th>
			<th>商品名称</th>
			<th>商品图片</th>
			<th>价格</th>
			<th>详情</th>
			<th>库存</th>
			<th>所属品牌</th>
			<th>所属分类</th>
			<th>是否上架</th>
			<th>操作</th>

		</tr>
		<?php
			foreach ($arr as $key => $value) {
				echo "<tr>";
				echo "<td>$value[id]</td>";
				echo "<td>$value[shopname]</td>";
				echo "<td><img src=../../public/uploads/$value[img] width=80px height=80px></td>";
				echo "<td>$value[price]</td>";
				echo "<td><a href=./detail.php?id=$value[id]>查看商品详情</a></td>";
				echo "<td>$value[stock]</td>";
				echo "<td>$value[brandname]</td>";
				echo "<td>$value[classname]</td>";
				if($value['is_shelf']==0){
					echo "<td>下架</td>";
				}else{
					echo "<td>上架</td>";
				}
				echo "<td><a href=./update.php?id=$value[id]>修改</a> | <a href=delete.php?id=$value[id]>删除</a></td>";
				echo "</tr>";
			}
		 ?>
	</table>
	<h4><?php echo $page; ?></h4>
</body>
</html>
