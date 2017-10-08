
<?php 
	error_reporting(0);
	session_start();
	date_default_timezone_set("PRC");
	$year=date('Y');
	$month=date('m');
	$day=date('d');
	$hour=date('H');
	$minus=date('i');
	$second=date('s');
	$time=$year.'-'.$month.'-'.$day.'  '.$hour.':'.$minus.':'.$second;
	include "../../public/common/config.php";
	include "../../public/common/function.php";
	 $sql="select orders.id,orders.code,orders.shop_id,orders.onum,orders.aprice,orders.confirm,orders.status_id,orders.time,goods.shopname,goods.img,goods.price,goods.detail,address.add_name,address.ad_info,address.tel,status.statusname FROM orders,goods,address,status WHERE orders.user_id = $_SESSION[user_id] and goods.id=orders.shop_id and address.user_id=orders.user_id and orders.status_id=status.id GROUP BY orders.id";
 	$res=mysql_query($sql);
 	$tot=mysql_num_rows($res);
	$num=3;
	$page=page($tot,$num);
	$sql1=$sql." limit $sqlfirst,$num";
	$res1=mysql_query($sql1); 
	$arra=array();
	while ( $row=mysql_fetch_assoc($res1)) {
		$arra[]=$row;
	} 	
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<title>360个人中心-首页</title>
    
<meta name="Keywords" content="360个人中心">
<meta name="Description" content="360个人中心">
<meta property="qc:admins" content="155766667260636">

<link rel="stylesheet" href="../public/css/base.css">
<link rel="stylesheet" href="../public/css/footer.css">
<link rel="stylesheet" type="text/css"  href="../public/css/bootstrap.css">
<link rel="stylesheet" href="../public/css/personindex.css">
</head>
<body>
	<div class="ucheader">
		<ul class="left">
			<li><a href=""></a></li>
		</ul>
		<ul class="right">
			<li><a href="">未设置用户名</a></li>
			<li><a href="./logout.php">退出</a></li>
			<li><a href="/home/index.php" class='returnhome'>360首页</a></li>
		</ul>
	</div>

	

        <div class="col-md-offset-1 col-md-9">
        	<div class="nav">
				<ul class="nav nav-tabs" role="tablist">
					
					<li role="presentation"><a href="#Section1" aria-controls="messages" role="tab" data-toggle="tab">首页</a></li>
					<li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">账号安全</a></li>
					<li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab">账号信息</a></li>
					<li role="presentation"><a href="#Section4" aria-controls="messages" role="tab" data-toggle="tab">帮助中心</a></li>
					<li role="presentation"><a href="#Section5" aria-controls="messages" role="tab" data-toggle="tab">我的订单</a></li>
					<li role="presentation"><a href="#Section6" aria-controls="messages" role="tab" data-toggle="tab">收货地址管理</a></li>
				</ul>
			</div>	
				<div class="tab-content tabs">
						<div role="tabpanel" class="tab-pane fade in active" id="Section1" >
							<div class="left">
								<div><img src="./images/4e2df8e71.jpg" alt=""><?php echo "$_SESSION[usename]"; ?><a href="">设置昵称</a><a href="">修改个人资料</a> 
									<h3>最近一次登录： </h3><?php echo $time ?>
									
								</div>
								<div>
									<ul>
										<h4>常用操作</h4>
										<li><i></i>登录密码<a href="updateuser.php?id=<?php echo "$_SESSION[user_id]"; ?>">修改</a></li>
										<li><i></i>登录邮箱<a href="">设置</a></li>
										<li><i></i>绑定手机<a href="">修改</a></li>
										<li><i></i>账号卫士<a href="">绑定</a></li>
									</ul>
								</div>
							 </div> 
						<div class="right">
								 <h3>安全评分</h3>
								<h4>你的账号安全评分<span>50</span>分<a href="">立即修复</a></h4>
								<div id="rate_line" class="per-per-o" style="width: 115%;"></div>
								<ul>
									<li><i></i><span>很久没有修改过登录密码了<a href="">修改登录密码</a></span></li>
									<li><i></i><span>账号只有一项密保工具</span></li>
									<li><i></i><span>密保工具已经验证</span></li>
									<li><i></i><span>账号未绑定账号卫士<a href="">立即绑定</a></span></li>
								</ul> 
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="Section2">
							<div class="left">此页面仅作测试使用</div>
							<div class="right"></div>
							
						</div>
						<div role="tabpanel" class="tab-pane fade" id="Section3">
							<div class="left">此页面仅作测试使用</div>
							<div class="right"></div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="Section4">
							<div class="left">此页面仅作测试使用</div>
							<div class="right"></div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="Section5">

							<div class="left"></div>
							<div class="right">
								<table width=1100px >
									<tr>
										<th>商品图片</th>
										<th>商品名称</th>
										<th>商品总价</th>
										<th>购买数量</th>
										<th>确认状态</th>
										<th>送货状态</th>
										<th>送货地址</th>
										<th>联系人信息</th>
										<th>联系人电话</th>
										<th>下单时间</th>
										<th>订单号</th>
									</tr>
					<?php  
				foreach ($arra as $key => $value22){

						echo"<tr>";
						echo "<td><img src=/public/uploads/$value22[img] style=width:80px;height:80px;></td>";
						echo "<td>$value22[shopname]</td>";
						echo "<td>$value22[aprice]</td>";
						echo "<td>$value22[onum]</td>";	
					if ($value22['confirm']==0){
						echo "<td><a href='do_index.php?id=$value22[id]'>请确认收货</a></td>";
						}
					else{
						echo "<td>已收货<a href=../comment/index.php?id=$value22[shop_id]>请评价</a></td>";}
						echo "<td>$value22[statusname]</td>";
						echo "<td>$value22[ad_info]</td>";
						echo "<td>$value22[add_name]</td>";
						echo "<td>$value22[tel]</td>";
						echo "<td>$value22[time]</td>";
						echo "<td>$value22[code]</td>";			
						echo "</tr>";
						}
						echo "$page";				
			?>
		</table>


				</div>
							</div>
<div role="tabpanel" class="tab-pane fade" id="Section6">
	<div class="left">
		<div class="left">
			<div><img src="./images/4e2df8e71.jpg" alt=""><?php echo "$_SESSION[usename]"; ?><a href="">设置昵称</a><a href="">修改个人资料</a> 
				<h3>最近一次登录： </h3><?php echo $time ?>
				
			</div>
			<div>
				<ul>
					<h4>常用操作</h4>
					<li><i></i>登录地址<a href="">修改</a></li>
					<li><i></i>添加地址<a href="">设置</a></li>
					<li><i></i>绑定手机<a href="">修改</a></li>
					<li><i></i>账号卫士<a href="">绑定</a></li>
				</ul>
			</div>
		 </div> 

	</div>
	<div class="right">
		<table  class="uu" width=767px height=161*(1200/408)px>
			<tr>
				<th>收货人姓名</th>
				<th>收货地址</th>
				<th>联系人电话</th>
				<th><a href="add.php">添加</a><th>
			</tr>
		<?php 
				include "../../public/common/config.php";
				$sqladd="select * from address where user_id=$_SESSION[user_id]";
				$resdd=mysql_query($sqladd);
				$arradd=array();
				while ( $row=mysql_fetch_assoc($resdd)) {
					$arradd[]=$row;
				}
				foreach ($arradd as $key => $valuedd) {
					echo"<tr>";
					echo "<td>$valuedd[add_name]</td>";
					echo "<td>$valuedd[ad_info]</td>";
					echo "<td>$valuedd[tel]</td>";
					echo "<td><a href=update.php?id=$valuedd[id]>修改</a></td>";
					echo "<td><a href=delete.php?id=$valuedd[id]>删除</a></td>";
					echo"</tr>";
				}
		?>
		</table>
	</div>
</div>			
</div>
</div>
 <script src="../public/js/jquery.min.js"></script>
<script src="../public/js/bootstrap.min.js"></script>

 <?php include "../include/footer.php"; ?>

</body>
</html>