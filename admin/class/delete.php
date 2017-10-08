<?php 
	include "../lock.php";
	error_reporting(0);
	include "../../public/common/config.php";
	$id=$_GET['id'];
	$sql="select * from brand where brand.cid={$id}";
	$res=mysql_query($sql);
	$tot=mysql_num_rows($res);
	if($tot>0){
		echo "<script>alert('此分类下有品牌!');location.href='index.php';</script>";
		exit;
	}else{
		$sql1="delete from class where id={$id}";
		$res1=mysql_query($sql1);
		if($res1){
			echo "<script>alert('删除成功!');location.href='index.php';</script>";
			exit;
		}else{
			echo "<script>alert('删除失败!');location.href='index.php';</script>";
			exit;
		}
	}

	

 ?>