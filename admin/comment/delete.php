<?php 
include "../lock.php";
date_default_timezone_set("PRC");
	error_reporting(0);
	include "../../public/common/config.php";

	$id=$_GET['id'];

	$sql="delete from comment where id={$id}";
	$res=mysql_query($sql);
	if($res){
		echo "<script>alert('删除成功!');location.href='index.php';</script>";
		exit;
	}

 ?>