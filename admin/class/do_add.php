<?php 
	include "../../public/common/config.php";
include "../lock.php";
	error_reporting(0);
	$name=$_POST['classname'];
	$sql="insert into class(classname) values('{$name}')";
	$res=mysql_query($sql);
	if($res){
		echo "<script>alert('添加成功!');location.href='index.php';</script>";
		exit;
	}else{
		echo "<script>alert('添加失败!');location.href='add.php';</script>";
		exit;
	}

 ?>