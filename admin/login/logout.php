<?php 
session_start();
	// 1.清空数组
	unset($_SESSION['admin']);
	unset($_SESSION['admin_login']);
	// 2.清除cookie中sessionid
	setcookie(session_name(),'',time()-1);
	// 3.彻底销毁session
	session_destroy();
	echo "<script>alert('退出成功');top.location='./index.php';</script>";

 ?>