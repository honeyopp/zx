<?php 
error_reporting(0);
	include "../../public/common/config.php";
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$email=$_POST['email'];
	$id=$_POST['id'];
	
	$sql="update  user set username='$username',password='$password',email='$email' where id=$id";
	// echo "$sql";
	$res=mysql_query($sql);
	// echo "$res";
	if($res){
		echo "<script>alert('修改成功!');location.href='index.php';</script>";
		exit;
	}else{
		echo "<script>alert('修改失败!');location.href='update.php';</script>";
		exit;
	}
 ?>