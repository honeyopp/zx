<?php
	session_start();
 ?>
<link rel="stylesheet" href="/home/public/css/header.css">

<div class="header">
      <div class="content">
            <div class="left">
              <ul>
                  <li><a href="#">帮助中心</a></li>
                  <li><a href="#">收藏本站</a></li>
                  <li><a href="/home/index.php"><span></span>手机360商城</a></li>
              </ul>
            </div>
            <div class="right">
              <ul>
                <?php
                			if($_SESSION['is_login']==1){
                				echo "<li><a href=>欢迎{$_SESSION['name']}登录</a>,<a href=/home/logout.php>退出</a></li><li><a href=/home/person/index.php>个人中心</a></li>";
                			}else{
                				echo '<li><a href="/home/login/index.php">登录</a></li>
                				<li><a href="/home/register/index.php">注册</a></li>
												<li><a href="/home/login/index.php">我的订单</a></li>';
                			}
		            ?>
              </ul>

            </div>
      </div>
  </div>
  <a class="mod-topbar" href="" target="_blank" style="background-image: url(/home/public/img/09ba296f-ef85-4efd-a59d-b3ce2ed55ed3.jpg);">
      <img src="/home/public/img/09ba296f-ef85-4efd-a59d-b3ce2ed55ed3.jpg">
  </a>

<div class="nav">

  <div class="left"><a href="/home/index.php"><img src="/home/public/img/360malllogo.png" alt=""></a></div>
  <div class="center">
        <form class="" action="/home/search.php" method="post">
          <input type="text" name="content" value="" placeholder="360N5S智能手机">
          <input type="submit" name="" value="">
        </form>
        <p>
          <a href="/home/search.php?content=智能摄像机">智能摄像机</a>
          <a href="/home/search.php?content=N5S">N5S</a>
          <a href="/home/search.php?content=游戏耳机">游戏耳机</a>
          <a href="/home/search.php?content=行车记录仪">行车记录仪</a>
          <a href="/home/search.php?content=路由器">路由器</a>
        </p>
    </div>
  <div class="right"><div class=""></div><div class=""><a href="/home/cart/index.php">我的购物车<span>(<?php $b=count($_SESSION['shop']);
    echo "$b"; ?>)</span></a></div></div>
 </div> 
