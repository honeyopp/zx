<?php 
	include "../../public/common/config.php";

	$name=$_POST['name'];
	$sql="insert into status(statusname) values('{$name}')";
	$res=mysql_query($sql);
	if($res){
		echo "<script>alert('添加成功!');location.href='index.php';</script>";
		exit;
	}else{
		echo "<script>alert('添加失败!');location.href='add.php';</script>";
		exit;
	}

 ?>