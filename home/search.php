<?php
	error_reporting(0);
	include "../public/common/config.php";
	$sql="select * from goods where shopname  REGEXP '{$_POST[content]}'";

	$res=mysql_query($sql);
	$arr=array();
	while ($row=mysql_fetch_assoc($res)) {
		$arr[]=$row;
	}
	// echo "$_GET[content]";
	$sqlsearch="select * from goods where shopname  REGEXP '{$_GET[content]}'";
	$res=mysql_query($sqlsearch);
	$arrsearch=array();
	while($row=mysql_fetch_assoc($res)){
		$arrsearch[]=$row;
	}

 ?>
 <!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link rel="stylesheet" href="public/css/bootstrap.css">
 	<link rel="stylesheet" href="public/css/header.css">
 	<link rel="stylesheet" href="public/css/footer">

 	<style>
	.shopdetail img{
		width:120px;
		display: block;
		height: 120px;
		float: left; 	
	}
	.shopdetail{
		    display: block;
    width: 150px;
    height: 190px;
    overflow: hidden;
    position: relative;
    margin-top: 10px;
    float: left;
    margin-left: 80px;
	}
	.shopdetail span{
    font-size: 15px;
    display: block;
    margin-left: 10px;
    margin-top: 9px;
    width: 101px;
    height: 116px;
    text-align: center;
    line-height: 14px;
	
	}

	
 	</style>
 </head>
 <body>
 	<?php 	include "include/header.php"; ?>
 	<div>
		<div class= style="margin-left:50px;">
			<!-- <table> -->
		<?php foreach ($arr as $key => $value) {

				echo "<a href=./detail/index.php?id=$value[id] class=shopdetail><img src=../public/uploads/$value[img] style=height:120px;width:120px;>
					<span>价格:$value[price]</span>
					<span>库存:$value[stock]</span>
				</a>";

			} 

			foreach ($arrsearch as $key => $value2) {

				echo "<a href=./detail/index.php?id=$value2[id] class=shopdetail><img src=../public/uploads/$value2[img] style=height:120px;width:120px;>
					<span>价格:$value2[price]</span>
					<span>库存:$value2[stock]</span>
				</a>";

			}


		?>

		</div>	
	</div>

<?php include "include/footer.php"; ?>
 </body>
 </html>
