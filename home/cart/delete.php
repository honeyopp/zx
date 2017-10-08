<?php
    session_start();               
	$id=$_GET['id'];
	// echo '<pre>';
	// print_r($_SESSION);
	// echo '</pre>';
	$_SESSION[]=array();
	// print_r($_SESSION);
	if ($_GET['id']=null) {
		$id=$_GET['id']=1;
		unset($_SESSION['shop'][$id]);
	}
	unset($_SESSION['shop'][$id]);
		
	
	echo "<script>location.href='index.php';</script>";

 ?>