<?php
include "../lock.php";
	error_reporting(0);
	date_default_timezone_set("PRC");
	include "../../public/common/config.php";
	include "../../public/common/function.php";

	$path="../../public/uploads";
	$img=upload($path);
	$href=$_POST['href'];
	$sort=$_POST['sort'];

	$sql="insert into lunbo(href,img,sort) values('{$href}','{$img}',{$sort})";
	$res=mysql_query($sql);
	if($res){
		echo "<script>alert('添加成功!');location.href='index.php';</script>";
		exit;
	}else{
		echo "<script>alert('添加失败!');location.href='add.php';</script>";
		exit;
	}

 ?>
