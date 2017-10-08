<?php 
include "../lock.php";
	error_reporting(0);
	date_default_timezone_set("PRC");
	include "../../public/common/config.php";
	include "../../public/common/function.php";
	$oimg=$_POST['oimg'];
	$img=$_POST['img'];
	$path="../../public/uploads";
	if($_FILES['img']['error']==4 ){
		$img=$oimg;
	}else{
		$img=upload($path);
		// echo "$img";
		unlink($path.'/'.$oimg);
	}
	$id=$_POST['id'];
	$cid=$_POST['cid'];
	// $shelf=$_POST['is_shelf'];
	$sql="update ads set img='{$img}' where cid={$cid} and id={$id}";
	// echo "$sql"	;
	$res=mysql_query($sql);
	if($res){
		echo "<script>alert('修改成功!');location.href='index.php';</script>";
		exit;
	}else{
		echo "<script>alert('修改失败!');location.href='update.php';</script>";
		exit;
	}


 ?>
