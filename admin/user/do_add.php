<?php
include "../lock.php";
	error_reporting(0);
	include "../../public/common/config.php";

	$name=$_POST['username'];
	$pass=md5($_POST['password']);
	$root=$_POST['root'];

	$sql="insert into user(username,password,is_admin) values('{$name}','{$pass}',{$root})";
	$res=mysql_query($sql);
	if($res){
		echo "<script>alert('添加成功!');location.href='index.php';</script>";
		exit;
	}else{
		echo "<script>alert('添加失败!');location.href='add.php';</script>";
		exit;
	}

 ?>
