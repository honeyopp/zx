<?php 
	date_default_timezone_set("PRC");
	include "../../public/common/config.php";
    include "../lock.php";
	error_reporting(0);
	$id=$_GET['id'];
	$sql="select * from comment where id={$id}";
	$res=mysql_query($sql);

	$row=mysql_fetch_assoc($res);
 ?>
 <!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<h4>评论内容</h4>
 	<p><?php 	echo $row['con']; ?></p>
 </body>
 </html>