<?php include "../lock.php";
  error_reporting(0); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="./topclass/js/jquery.min.js"></script>
    <style media="screen">
      body{
            background-color:#21374E;
          }
          *{
      			font-family: "微软雅黑";
      			margin:0px;
      		}
      		h4{
      			margin:0px;
      			background-color: #kkk;
      			color:white;
      			border-bottom:1px dotted white;
      			padding:10px 0px;
      			cursor:pointer;
      		}
      		p{
      			margin:0px;
      			border-bottom:1px dotted white;
      			padding:3px 0px;
      		}
        p:hover{
          background-color: #787878;
        }
      		a{
      			text-decoration: none;
      			font-size: 14px;
      			color:white;
      			display: inline-block;
      			width:100%;
      		}
      		h4,p{
      			text-align: center;
      		}
      		div{
      			display: none;
      		}
  </style>
  </head>

  <body>
    <h4>
        用户管理
    </h4>
    <div class="">
        <p><a href="../user/index.php" target="right">查看用户</a></p>
    		<p><a href="../user/add.php" target="right">添加用户</a></p>
    </div>


    <h4>
        分类管理
    </h4>
    <div class="">
        <p><a href="../class/index.php" target="right">查看分类</a></p>
    		<p><a href="../class/add.php" target="right">添加分类</a></p>
    </div>

    <h4>
        品牌管理
    </h4>
    <div class="">
        <p><a href="../brand/index.php" target="right">查看品牌</a></p>
    		<p><a href="../brand/add.php" target="right">添加品牌</a></p>
    </div>
    <h4>
        商品管理
    </h4>
    <div class="">
      <p><a href="../goods/index.php" target="right">查看商品</a></p>
      <p><a href="../goods/add.php" target="right">添加商品</a></p>
    </div>

    <h4>
        评论管理
    </h4>
    <div class="">
        <p><a href="../comment/index.php" target="right">查看评论</a></p>
    </div>
    <h4>订单管理</h4>
	<div>
		<p><a href="../orders/index.php" target="right">查看订单</a></p>
	</div>
	<h4>订单状态管理</h4>
	<div>
		<p><a href="../status/index.php" target="right">查看订单状态</a></p>
		<p><a href="../status/add.php" target="right">添加订单状态</a></p>
	</div>
	<h4>轮播管理</h4>
	<div>
		<p><a href="../lunbo/index.php" target="right">查看轮播</a></p>
		<p><a href="../lunbo/add.php" target="right">添加轮播</a></p>
	</div>
	<h4>广告管理</h4>
	<div>
		<p><a href="../ads/index.php" target="right">查看广告</a></p>
		<p><a href="../ads/add.php" target="right">添加广告</a></p>
	</div>
	<h4>系统管理</h4>
	<div>
		<p><a href="../sys/index.php" target="right">修改口令</a></p>
		<p><a href="/home/index.php" target="parent">返回前台</a></p>
	</div>
  </body>
  <script>
  	$('h4').click(function(){
  		$(this).next().toggle();
  		$('div').not($(this).next()).hide();
  	});
  </script>
</html>
