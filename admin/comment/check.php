<?php
date_default_timezone_set("PRC"); 
	include "../../public/common/config.php";
	include "../lock.php";
	error_reporting(0);
	$id=$_GET['id'];
	
	$sql="update comment set is_ok=1 where id={$id}";

	$res=mysql_query($sql);

	if($res){
		echo "<script>alert('审核通过!');location.href='index.php';</script>";
		exit;
	}
 ?>