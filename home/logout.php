<?php
	session_start();
	// 1.清空数组
	$_SESSION=array();
	// 2.清除cookie中sessionid
	setcookie(session_name(),'',time()-1);
	// 3.彻底销毁session
	session_destroy();
	echo "<script>alert('退出成功');location.href='./login/index.php';</script>";

 ?>
