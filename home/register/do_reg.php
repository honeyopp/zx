<?php
	session_start();
	include "../../public/common/config.php";
	$name=$_POST['username'];
	$pass=md5($_POST['password']);
	$yzm=$_POST['yzm'];
	$yzm=strtolower($yzm);
	$code=strtolower($_SESSION['code']);
	$arr=explode(' ',$code);
	$code=join('',$arr);


	if($yzm==$code){
		$sql="insert into user(username,password,is_admin) values('{$name}','{$pass}',0)";
		$res=mysql_query($sql);
		$sql1="select user.id,user.username,user.password from user where username='{$name}' and password='{$pass}' and is_admin=0";

			$res1=mysql_query($sql1);
			$row1=mysql_fetch_assoc($res1);
			$_SESSION['user_id']=$row1['id'];
		if($res){
			$_SESSION['name']=$name;
			$_SESSION['is_login']=1;
			echo "<script>alert('注册成功！');location.href='../index.php';</script>";
		}else{
			echo "<script>alert('注册失败');location.href='index.php';</script>";
		}
	}else{
		echo "<script>alert('验证码不对,请重新注册');location.href='index.php';</script>";
	}


 ?>
