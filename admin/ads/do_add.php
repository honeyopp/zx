<?php 
	include "../../public/common/config.php";
	include "../../public/common/function.php";
	include "../lock.php";
	error_reporting(0);	
	$path="../../public/uploads";
	$img=upload($path);
	$href=$_POST['href'];
	$cid=$_POST['cid'];

	$sql="insert into ads(img,href,cid) values('{$img}','{$href}',{$cid})";
	$res=mysql_query($sql);
	if($res){
		echo "<script>alert('添加成功!');location.href='index.php';</script>";
		exit;
	}else{
		echo "<script>alert('添加失败!');location.href='add.php';</script>";
		exit;
	}

 ?>