<?php
session_start();
error_reporting(0); 
date_default_timezone_set("PRC");
	$id=$_GET['id'];
	include "../../public/common/config.php";
	$sql="select * from goods where id={$id}";
	$res=mysql_query($sql);
	$row=mysql_fetch_assoc($res);
	//评论
	$sqlc="select comment.con,comment.time,user.username from comment,user where comment.is_ok=1 and comment.user_id=user.id and comment.goods_id={$id} ";
	// echo "$sqlc";
	$resc=mysql_query($sqlc);
	$arrc=array();
	while ($rowc=mysql_fetch_assoc($resc)) {
		$arrc[]=$rowc;
	}

 ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../public/css/header.css">
	<link rel="stylesheet" href="../public/css/footer.css">
	<link rel="stylesheet" href="../public/css/detailindex.css">
	<!-- 评论 -->
	<script src="../public/js/jquery.jqzoom.js"></script>
	<script src="../public/js/lanrenzhijia.js"></script>
	
	<!-- 放大镜 -->
	<link rel="stylesheet" href="../public/css/jqzoom.css">
	<script src="../public/js/jquery-1.3.2.min.js"></script>
	<script src="../public/js/jquery.jqzoom1.0.1.js"></script>
	<script src="../public/js/jqzoom.pack.1.0.1.js"></script>

</head>
<body>
	<?php include "../include/header.php"; ?>
			<div id="preview" class="spec-preview">
				<span>让你迷恋的性感小商品:<?php echo "$row[shopname]"; ?></span>	
				<span class="jqzoom">
					<a href="<?php echo "/public/uploads/$row[img]";?>" class="zoom">
						<img  jqimg="<?php echo "/public/uploads/$row[img]";?>" src="<?php echo "/public/uploads/$row[img]";?>" alt="" width="160px" height="160px">
					</a>
				</span>	
				<i id="marketprice">市场价：<?php  $p=$row[price]+3668; echo "$p";?></i>
				<i>优惠价:<?php echo "$row[price]";?></i>

			</div>
			
	
		<!-- <div class="contentright"> -->
			<table>	
					<tr><td><h3>商品名称：<?php echo "$row[shopname]"; ?></h3><td></tr>
					<tr><td><span>8月22日-8月23日10:00爆款手机限时特惠100元<a href="">点击参与</a></span><td><tr>
					<tr><td><h4>商品价格：<?php echo "$row[price]"; ?>元</h4></td><tr>
					<tr><td><span>颜色：<span>纯纯的绿</span></span></td><tr>
					<tr><td><span class="stock">库存：<?php echo "$row[stock]";?></span> </td><tr>
					<tr><td><a href="reduce.php?id=<?php echo $row[id]?>"class="reduce">购买数量：-</a>
					<span class="number">
						<?php 
							if($_SESSION['shop'][$id]['num']){
								echo $_SESSION['shop'][$id]['num'];			
							}else{
								echo 1;
							}

						 ?>
						
					</span>
					<a href="plus.php?id=<?php echo $row[id] ?>" class="plus">+</a></td></tr>
					<?php
					   echo "<tr><td><a href=../cart/addcart.php?id=$row[id] class=cart >加入购物车</a></td></tr>";
					?>	
			</table>
<div class="s-bottom">

			<ul class="sb-ti">
				<li>查看评论</li>
				<li>商品详情</li>
				<li>商品参数</li>
				<li>售后服务</li>
			</ul>
		</div>	
			<div class="acs">
				<div class="comment">
					<ul>
						<?php 
							foreach ($arrc as $key => $value) {
								echo "<li>用户:$value[username] </li>";
								echo "<li>评论内容:$value[con] </li>";
								echo "<li>评论时间:$value[time] </li><br>";
							} 
						?>


					</ul>
				</div>
				<div class="sp-detail">
					<?php echo $row['detail'] ?>	
				</div>
			</div>

<?php include "../include/footer.php"; ?>
</body>
</html>

<script>
	$('.sb-ti li').click(function(){
		index=$(this).index();
		$('.acs>div').eq(index).show().siblings().hide();
	})
</script>
<script>
	var setting={
	zoomType:"reverse",
	zoomWidth:300,
	zoomHeight:300,
	xOffset:0,
	yOffset:30,
	lens:true,
	title:false,
	imageOpacity:0.5
};
$(".zoom").jqzoom(setting);
</script>
<script src="../public/js/jquery.min.js"></script>