<?php 
include "../lock.php";
	error_reporting(0);
	date_default_timezone_set("PRC");
	include "../../public/common/config.php";
	include "../../public/common/function.php";
	$oimg=$_POST['oimg'];
	// $oimg2=$_POST['oimg2'];

	$path="../../public/uploads";
	// $path2="../../public/smallimgs";
	if($_FILES['img']['error']==4 ){
		$img=$oimg;
		// $img2=$oimg2;
	}else{
		$img=upload($path);
		// $img2=upload($path2);
		echo "$img";
		echo "$img2";
		unlink($path.'/'.$oimg);
		// unlink($path2.'/'.$oimg2);
	}
	$id=$_POST['id'];
	$name=$_POST['shopname'];
	$detail=$_POST['detail'];
	$price=$_POST['price'];
	$stock=$_POST['stock'];
	$bid=$_POST['brand_id'];
	$shelf=$_POST['is_shelf'];

	$sql="update goods set shopname='{$name}',img='{$img}',price='{$price}',detail='{$detail}',stock={$stock},brand_id={$bid},is_shelf={$shelf} where id={$id}";
	$res=mysql_query($sql);
	if($res){
		echo "<script>alert('修改成功!');location.href='index.php';</script>";
		exit;
	}else{
		echo "<script>alert('修改失败!');location.href='update.php';</script>";
		exit;
	}



 ?>
