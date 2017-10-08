<?php 
	include "../../public/common/config.php";
	$id=$_POST['id'];
	$name=$_POST['classname'];
include "../lock.php";
	error_reporting(0);
	$sql="update class set classname='{$name}' where id={$id}";
	$res=mysql_query($sql);
	if($res){
		echo "<script>alert('修改成功!');location.href='index.php';</script>";
		exit;
	}else{
		echo "<script>alert('修改失败!');location.href='update.php';</script>";
		exit;
	}
 ?>