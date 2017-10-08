<?php
	include "../../public/common/config.php";
	error_reporting(0);
	session_start(); 
	$id=$_GET['id'];
	// echo "$id";
	$sql="select * from goods where id={$id}";
	// echo "$sql";
	$res=mysql_query($sql);

	$row=mysql_fetch_assoc($res);
	// echo '<pre>';
	// print_r($row);
	// echo '</pre>';
	$_SESSION['shop'][$id]['num']=$_SESSION['shop'][$id]['num']+1;
	$num=$_SESSION['shop'][$id]['num'];

	if($_SESSION['shop'][$id]['num']>$row['stock']){
		$_SESSION['shop'][$id]['num']=$row['stock'];
	}
	echo "<script>location.href='index.php?id=$id';</script>";

 ?>