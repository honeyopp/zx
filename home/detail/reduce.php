<?php
	include "../../public/common/config.php";


	session_start(); 
	$id=$_GET['id'];

	$sql="select goods.stock from goods where id={$id}";
	$res=mysql_query($sql);
	$row=mysql_fetch_assoc($res);
	$_SESSION['shop'][$id]['num']=$_SESSION['shop'][$id]['num']-1;
	
	if($_SESSION['shop'][$id]['num']<0){
		$_SESSION['shop'][$id]['num']=1;
	}
	echo "<script>location.href='index.php?id=$id'</script>";

 ?>