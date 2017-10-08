<?php
	session_start();

	if($_SESSION['admin_login']!=1){
		echo "<script>location.href='./login/index.php';</script>";	}

 ?>