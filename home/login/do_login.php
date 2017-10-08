<?php session_start();
	include "../../public/common/config.php";
	$name=$_POST['username'];
	$pass=md5($_POST['password']);
	$yzm=$_POST['yzm'];
	$yzm=strtolower($yzm);
	$code=strtolower($_SESSION['code']);
	$arr=explode(' ',$code);
	$code=join('',$arr);
		
	if($yzm==$code){
			$sql="select user.id,user.username,user.password from user where username='{$name}' and password='{$pass}' and is_admin=0";

			$res=mysql_query($sql);
			$row=mysql_fetch_assoc($res);
			$_SESSION['user_id']=$row['id'];
			if($res && (mysql_num_rows($res))>0){
				$_SESSION['name']=$name;
				$_SESSION['is_login']=1;
				
				echo "<script>alert('登录成功');location.href='../index.php';</script>";
			}else{
				echo "<script>alert('输入有误,请检查用户名和密码');location.href='index.php';</script>";
				}
 			}else{
 					echo "<script>alert('输入验证码有误,请重新输入');location.href='index.php';</script>";
 				}

// print_r($_SESSION);


 ?>
