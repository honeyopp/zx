<?php 
include "../../public/common/config.php";
	$aid=$_GET['aid'];
	$sql="delete from address where id=$aid";
	$res=mysql_query($sql);
	if ($res){
		echo "<script>alert('删除成功！！！');location.href='./index.php';</script>";
		exit;
		}
	else{
		echo "<script>alert('恭喜你删除失败@@');location.href='./index.php';</script>";
		exit;

	}

	?>
