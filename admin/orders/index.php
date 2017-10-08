<?php 
include "../lock.php";
	error_reporting(0);
	include "../../public/common/config.php";
	include "../../public/common/function.php";
	$sql="select orders.*,status.statusname,user.username from orders,status,user where orders.status_id=status.id and orders.user_id=user.id";
	$res=mysql_query($sql);
	$tot=mysql_num_rows($res);
	$num=2;
	$page=page($tot,$num);

	$sql1=$sql." limit $sqlfirst,$num";
	// echo "$sql1";
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
			border:1px solid #ccc;
			/*height: 50px;*/
			background-color: rgb(35,87,125,0.6);
			text-align: center;
		}
		td,th{
			text-align: center;
			border:1px solid rgb(35,87,125,1);
			padding:30px 16px;
		}
		
		tr:hover{
			background-color: rgba(191,211,214,0.7);
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
	<h2>查看订单</h2>
	<table cellspacing=0 align=center>
		<tr>
			<th>订单编号</th>
			<th>下单时间</th>
			<th>订单状态</th>
			<th>收货人信息</th>
			<th>数量</th>
			<th>总价(￥)</th>
			<th>购买者</th>
			<th>确认收货</th>
			<th>操作</th>

		</tr>
		<?php
			date_default_timezone_set("PRC"); 
			foreach ($arr as $key => $value) {
				// echo "$value[time]";
				// $time=date("Y-m-d H:i:s",strtotime();
					// echo "$time";
				echo "<tr>";
				echo "<td>$value[code]</td>";
				echo "<td>$value[time]</td>";	
				echo "<td>$value[statusname]</td>";	
				echo "<td><a href=address_info.php?a_id=$value[address_id]>查看收货人信息</a></td>";	
				echo "<td>$value[onum]</td>";	
				echo "<td>$value[aprice]</td>";	
				echo "<td>$value[username]</td>";	
				if($value['confirm']==0){
					echo "<td>正在发货</td>";
				}else{
					echo "<td>已收货</td>";
				}
				echo "<td><a href=./update.php?id=$value[id]&code=$value[code]>修改</a> | <a href=delete.php?id=$value[id]>删除</a></td>";
				echo "</tr>";
			}

		 ?>
	
	</table>
	<h4><?php echo $page; ?></h4>
</body>
</html>