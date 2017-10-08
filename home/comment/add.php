<?php 
date_default_timezone_set('PRC');
session_start();
	$id=$_POST['id'];

	$time=date("y-m-d H:i:s",time());
include "../../public/common/config.php";
$sql="insert into comment(con,user_id,goods_id,time,is_ok)values('{$_POST[comment]}',{$_SESSION[user_id]},$id,'{$time}',0)";
// echo "$sql";
mysql_query($sql);
echo "<script>alert('评论成功');location.href='../detail/index.php?id=$id';</script>";

 ?>