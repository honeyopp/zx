<?php 
	include "../../public/common/config.php";

	$code=$_POST['code'];
	$sid=$_POST['sid'];
	
	// echo "$sid";
	// $id=$_POST['id'];
	// echo '<pre>';
	// print_r($_GET);
	// echo '</pre>';
	$sql="update orders set status_id=$sid where code='{$code}'";
	$res=mysql_query($sql);
	if($res){
		 echo "<script>alert('修改成功!');location.href='index.php';</script>";
		exit;
	}else{
		 echo "<script>alert('修改失败!');location.href='update.php';</script>";
		exit;
	}
 ?>