<?php 
	include "../../public/common/config.php";
	$add_name=$_POST['add_name'];
	$ad_info=$_POST['ad_info'];
	$tel=$_POST['tel'];
	$id=$_POST['id'];
	error_reporting(0);
	$sql="update address set add_name='{$add_name}',ad_info='{$ad_info}',tel='{$tel}' where id=$id";
	echo "$sql";
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