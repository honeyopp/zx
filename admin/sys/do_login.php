<?php 
	// echo "$_POST";
	$name=$_POST['name'];
	$password=md5($_POST['password']);
	
	include "../../public/common/config.php";
	$sql="update user set password='{$password}' where  username='{$name}' and is_admin=1;";
	
	// echo "$sql";

	$res=mysql_query($sql);

	// echo "$res";
	if ($res>0) {
	echo "<script>alert('修改成功');rightlocation='./index.php';</script>";
	// echo "Rs";
	}
	else{
		echo "<script>alert('修改失败');right.location=./index.php';</script>";	
	}
 // ?>