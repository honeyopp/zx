<?php
session_start();
	error_reporting(0); 
include "../../public/common/config.php";
$name=$_POST['name'];
$_SESSION['adminname']=$name;
$password=md5($_POST['password']);
$sql="select * from user  where username='{$name}' and password='{$password}' and is_admin=1";
// echo "$sql";
$res=mysql_query($sql);
// echo "$res";
if (mysql_num_rows($res)>0) {
	$row=mysql_fetch_assoc($res);
	$name=$row['username'];
	$_SESSION['admin']=$name;
	$_SESSION['admin_login']=1;

	echo "<script>alert('验证通过！');location.href='/admin/index.php';</script>";

	}
	else{
		echo "<script>('登陆失败');location.href='index.php';</script>";
	}





 ?>