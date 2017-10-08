<?php
include "../lock.php";
	error_reporting(0); 
	include "../../public/common/config.php";
	$id=$_GET['id'];
	$sql="select goods.detail from goods where id={$id}";

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
 	<?php 
 		echo $row['detail'];

 	 ?>
 </body>
 </html>