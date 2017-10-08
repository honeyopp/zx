<?php
include "../lock.php";
	error_reporting(0); 
	date_default_timezone_set("PRC");
	include "../../public/common/config.php";
	include "../../public/common/function.php";
	
	$path="../../public/uploads";
	// $path2="../../public/smallimgs";
	$img=upload($path);
	// $img2=upload($path2);
	$name=$_POST['shopname'];
	$detail=$_POST['detail'];
	$price=$_POST['price'];
	$stock=$_POST['stock'];
	$bid=$_POST['brand_id'];
	$shelf=$_POST['is_shelf'];
	$sql="insert into goods(shopname,img,price,detail,stock,brand_id,is_shelf) values('{$name}','{$img}','{$img2}','{$price}','{$detail}',{$stock},{$bid},{$shelf}) ";
	$res=mysql_query($sql);
	if($res){
		echo "<script>alert('添加成功!');location.href='index.php';</script>";
		exit;
	}else{
		echo "<script>alert('添加失败!');location.href='add.php';</script>";
		exit;
	}


	
 ?>