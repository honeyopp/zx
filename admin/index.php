<?php include "./lock.php";
	error_reporting(0); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
	<frameset rows="20%,*" frameborder=1 border=1 noresize>
		<frame src="./frame/top.php">
		<frameset cols="200,*">
			<frame src='./frame/left.php' name="left">
			<frame src='./frame/right.php' name="right">
		<frameset>
	</frameset>
</html>
