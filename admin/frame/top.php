<?php include "../lock.php";
	error_reporting(0); ?>
<?php include "./lock.php";?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<title>中兴手机商城（myzte.com）是中兴通讯旗下自营电子商务平台，以最终用户为主要对象，提供中兴手机、 智能投影仪、配件等终端产品，官方商城，品质保证！</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./topclass/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="./topclass/css/demo.css" />
<!--必要样式-->
<link rel="stylesheet" type="text/css" href="./topclass/css/component.css" />
  <style media="screen">
	.logo_right a{
		float: right;

	}
	.logo_right span{
		float: left;
		position: relative;
		top: 20px;
		right: 30px;
	}
  </style>
</head>
<body>
		<div class="container demo-1">
			<div class="content">
				<div id="large-header" class="large-header">
					<canvas id="demo-canvas"></canvas>
          <div class="logo_box">
  						<h3>欢迎你进入360手机商城后台管理系统</h3>
  					</div>
          <div class="logo_right">
          	<span>
            欢迎<?php echo "$_SESSION[adminname]";?>	登陆</span>
            <a href="../login/logout.php" style="color:#fff;font-size=15px;">退出</a>
          </div>

				</div>
			</div>
		</div><!-- /container -->
		<script src="./topclass/js/TweenLite.min.js"></script>
		<script src="./topclass/js/EasePack.min.js"></script>
		<script src="./topclass/js/rAF.js"></script>
		<script src="./topclass/js/demo-1.js"></script>
	</body>
</html>
