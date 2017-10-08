<?php
include "../lock.php";
	error_reporting(0); 
	include "../../public/common/config.php";
	$id=$_GET['id'];
	$path="../../public/uploads";
	// $path2="../../public/smallimgs";
	
	$sql1="select goods.img,goods.img2 from goods where id={$id}";
	$res1=mysql_query($sql1);
	$row=mysql_fetch_assoc($res1);
	unlink($path.'/'.$row['img']);
	// unlink($path2.'/'.$row['img2']);

	$sql="delete from goods where id={$id}";
	$res=mysql_query($sql);
	if($res){
		echo "<script>alert('删除成功!');location.href='index.php';</script>";
		exit;
	}else{
		echo "<script>alert('删除失败!');location.href='index.php';</script>";
		exit;
	}


 ?>