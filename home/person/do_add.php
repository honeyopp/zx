<?php 
	session_start();
	include "../../public/common/config.php";
	$id=$_POST['id'];
	$ad_info=$_POST['s_province'].'-'.$_POST['s_city'].'-'.$_POST['s_county'];
	$tel=$_POST['tel'];
	$name=$_POST['sh'];
	$user_id=$_SESSION['user_id'];
	$sql="insert into address(user_id,ad_info,tel,add_name) values({$user_id},'{$ad_info}','{$tel}','{$name}')";
	// echo "$sql";
	$res=mysql_query($sql);
	if($res>0){
		echo "<script>alert('地址添加成功!');location.href='index.php?id=$id'</script>";
	}else{
		echo "<script>alert('地址添加失败!');location.href='index.php?id=$id'</script>";
	}

 ?>