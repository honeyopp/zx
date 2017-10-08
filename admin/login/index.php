<?php
	error_reporting(0); ?>
<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
<title>登陆</title>
<link href="../public/css/bootstrap.min.css" title="" rel="stylesheet" />

<link title="orange" href="../public/css/login.css" rel="stylesheet" type="text/css"/>

</head>

<body>
  
  <div style="height:1px;"></div>
  <div class="login">
     <header>
	    <h1>360手机后台管理系统</h1>
	 </header>
	 <div class="sr">
	    <form method='POST'action='do_login.php'>
		    <div class="name">
				<label>
				<i class="sublist-icon glyphicon glyphicon-user"></i>
				</label>
				<input type="text"  placeholder="请输入管理员登录名" class="name_inp" name='name'>
			</div>
			 <div class="name">
				<label>
				<i class="sublist-icon glyphicon glyphicon-pencil"></i>
				</label>
				<input type="password"  placeholder="请输入登录密码" class="name_inp" name='password'>
			</div>
			<button class="dl">登陆</button>
		</form>
	 </div>
  </div>


</body>
</html>
