<?php
	include "../../public/common/config.php";
include "../lock.php";
	error_reporting(0);
	$id=$_GET['id'];

	$sql="delete from brand where id={$id}";

	$res=mysql_query($sql);
	if($res){
		echo "<script>alert('删除成功!');location.href='index.php';</script>";
		exit;
	}else{
		echo "<script>alert('删除失败!');location.href='index.php';</script>";
		exit;
	}

 ?>
