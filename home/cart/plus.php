<?php
	include "../../public/common/config.php";
	session_start(); 
	$id=$_GET['id'];
	error_reporting(0);
	$sql="select goods.stock from goods where id={$id}";
	// echo "sql";
	$res=mysql_query($sql);

	$row=mysql_fetch_assoc($res);
	$_SESSION['shop'][$id]['num']=$_SESSION['shop'][$id]['num']+1;
	
	if($_SESSION['shop'][$id]['num']>$row['stock']){
		$_SESSION['shop'][$id]['num']=$row['stock'];
	}
	echo "<script>location.href='index.php?id=$id'</script>";

 ?>