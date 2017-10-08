<?php
	include "../lock.php";
	error_reporting(0);include "../../public/common/config.php";
	$id=$_POST['id'];
	$brandname=$_POST['brandname'];
	$cid=$_POST['cid'];

	$sql="update brand set brandname='{$brandname}',cid={$cid} where id={$id}";
	$res=mysql_query($sql);
	if($res){
		echo "<script>alert('修改成功!');location.href='index.php';</script>";
		exit;
	}else{
		echo "<script>alert('修改失败!');location.href='update.php';</script>";
		exit;
	}
 ?>
