<?php 
session_start();
include "../../public/common/config.php";
	
	$id=$_POST['id'];
	$ad_info=$_POST['s_province'].'-'.$_POST['s_city'].'-'.$_POST['s_county'];
	$tel=$_POST['tel'];
	$name=$_POST['sh'];
	$user_id=$_SESSION['user_id'];

	if (!$ad_info|| !$name || !$user_id) {
		echo "<script>alert('请添加新的地址');location.href='index.php?id=$id'</script>";
	}else{
		$sql="insert into address(user_id,ad_info,tel,add_name) values({$user_id},'{$ad_info}','{$tel}','{$name}')";

		$res=mysql_query($sql);
		if($res){
			echo "<script>alert('地址添加成功!');location.href='index.php?id=$id'</script>";
		}else{
			echo "<script>alert('地址添加失败!');location.href='index.php?id=$id'</script>";
		}
	}
 ?>