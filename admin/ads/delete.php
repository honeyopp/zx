<?php
include "../lock.php";
	error_reporting(0); 
	include "../../public/common/config.php";
	$id=$_GET['id'];
	$path="../../public/uploads";	
	$sql1="select ads.img from ads where id={$id}";
	$res1=mysql_query($sql1);
	$row=mysql_fetch_assoc($res1);
	unlink($path.'/'.$row['img']);

	$sql="delete from ads where id={$id}";
	$res=mysql_query($sql);
	if($res){
		echo "<script>alert('删除成功!');location.href='index.php';</script>";
		exit;
	}else{
		echo "<script>alert('删除失败!');location.href='index.php';</script>";
		exit;
	}


 ?>