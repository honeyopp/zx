<?php 
	session_start();
	error_reporting(0);
	
 ?>
 <!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
	<link rel="stylesheet" href="../public/css/header.css">
	<link rel="stylesheet" href="../public/csss/footer.css">
	<style>

		ul{
			margin-left: 50px;
		}

h4{
	margin-left: 222px;


}
h3{
	margin-left: 40px;
	color: #f00;

}
.order{
	font-size:16px;
	font-family:"微软雅黑";
	margin-left: 188px;
	margin-top: 30px;
}
.content{

	/*background: url('../public/img/淡定jpg.jpg');*/
	
}
td{
	text-align: center;
}
table{
	top: 40px;
	position: relative;
	left: 45px;
	margin-bottom: 50px;
}
	</style>
 </head>
 <body>
<?php include "../include/header.php"; ?>
		

	<div class="content">
		<h3>尊敬的vip用户：<?php  
			echo "$_SESSION[name]";?>
		</h3>  <p class="order">你好！，您的订单号是 <?php echo  "$_GET[code]"; ?>，请耐心等待发货~么么哒</p>
	<ul>
		<table width=1200px height=161*(1200/408)px>
									<tr>
										<th>商品图片</th>
										<th>商品名称</th>
										<th>商品总价</th>
										<th>购买数量</th>
										<!-- <th>确认状态</th> -->
										<th>送货状态</th>
										<th>送货地址</th>
										<th>联系人信息</th>
										<th>联系人电话</th>
										<th>下单时间</th>
										<th>订单号</th>
									</tr>
		<?php 
			include "../../public/common/config.php";
			include "../../public/common/function.php";

			foreach ($_SESSION['shop'] as $key => $value) {
			}
			
			$sql="SELECT orders.id,orders.code,orders.onum,orders.aprice,status.statusname,orders.confirm,orders.status_id,orders.time,goods.shopname,goods.img,goods.price,goods.detail,address.add_name,address.ad_info,address.tel FROM orders,goods,address,status WHERE orders.user_id = $_SESSION[user_id] and goods.id=orders.shop_id and address.user_id=orders.user_id  and orders.status_id=status.id GROUP BY orders.id";
			// echo "$sql";
			 	$res=mysql_query($sql);
			 	$tot=mysql_num_rows($res);
				$num=3;
				$page=page($tot,$num);

				$sql1=$sql." limit $sqlfirst,$num";
				// echo "$sql1";
				$res1=mysql_query($sql1);
				 
				$arra=array();
				while ( $row=mysql_fetch_assoc($res1)) {
					$arra[]=$row;
				} 
				foreach ($arra as $key => $value){
						echo"<tr>";
					echo "<td><img src=/public/uploads/$value[img] style=width:80px;height:80px;></td>";
						echo "<td>$value[shopname]</td>";
						echo "<td>$value[aprice]</td>";
						echo "<td>$value[onum]</td>";
						echo "<td>$value[statusname]</td>";
						echo "<td>$value[ad_info]</td>";
						echo "<td>$value[add_name]</td>";
						echo "<td>$value[tel]</td>";
						echo "<td>$value[time]</td>";
						echo "<td>$value[code]</td>";			
				echo "</tr>";
				}	
		?>
		
	</table>
	

 		你可以选择：<?php echo "<h4> $page</h4>"; ?>
 		<li><a href="/home/index.php">继续购物</a></li>
 		<li><a href="../person/index.php?id=<?php echo "$_GET[code]" ?>">去个人中心</a></li>
 	</ul>


		
	</div>	


	<?php include "../include/footer.php"; ?>




 	
 </body>
 </html>