<?php
include "../lock.php";
	error_reporting(0);
	include "../../public/common/config.php";
	$id=$_POST['id'];
	$username=$_POST['username'];
	$pass=md5($_POST['password']);
	$root=$_POST['root'];

	$sql="update user set username='{$username}',password='{$pass}',is_admin={$root} where id={$id}";
	$res=mysql_query($sql);
	if($res){
		echo "<script>alert('修改成功!');location.href='index.php';</script>";
		exit;
	}else{
		echo "<script>alert('修改失败!');location.href='update.php';</script>";
		exit;
	}
 ?>
