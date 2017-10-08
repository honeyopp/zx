<?php
include "../lock.php";
	error_reporting(0); 
	include "../../public/common/config.php";
	$id=$_GET['a_id'];
	$sql="select add_name,ad_info,tel from address where id={$id}";
	// echo "$id";
	$res=mysql_query($sql);

	$row=mysql_fetch_assoc($res);
	// echo "$row";
 ?>
 <!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 <link rel="stylesheet" type="text/css" href="../frame/topclass/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="../frame/topclass/css/demo.css" />
<!--必要样式-->
<link rel="stylesheet" type="text/css" href="../frame/topclass/css/component.css" />
	<style>
	table{
		position: relative;
		top: -500px;
		left: 350px;
		color: #000;
		font-size: 20px;
	}

	</style>
 </head>
 <body>

 	<div class="container demo-1">
			<div class="content">
				<div id="large-header" class="large-header">
					<canvas id="demo-canvas"></canvas>
 	<table>
 		
 		<tr><th>收货人</th>
 		<th>收货地址</th>
 		<th>联系电话</th></tr>
 	<?php 

 	// foreach ($row as $key => $value) {
 		echo "<tr>";
 			echo "<td>$row[add_name]</td>";
 			echo "<td>$row[ad_info]</td>";
 			echo "<td>$row[tel]</td>";
 		echo "</tr>";
 	// }
 		
 	 ?>
 	 </table>
 </body>
 </html>
 <script src="../frame/topclass/js/TweenLite.min.js"></script>
<script src="../frame/topclass/js/EasePack.min.js"></script>
<script src="../frame/topclass/js/rAF.js"></script>
<script src="../frame/topclass/js/demo-1.js"></script>