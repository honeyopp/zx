<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
        <style>
        #div1 {width:60px; height:60px;   background-color: #23AC38;position:absolute; right:0; top:0;}
        #div1 a{
          color: #000;
          font-size: 14px;
        }
        </style>
        <meta http-equiv="X-UA-Compatible" content="edge">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="Keywords" content="360商城，智能硬件，免费试用，智能家居，智能手表，智能家电">
        <meta name="Description" content="360商城是一家智能硬件体验平台。这里能免费试用智能硬件，查看全方位试用报告，还可以预约、抢购并体验新上市的智能产品。">
        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <title>360商城</title>
        <link rel="shortcut icon" href="./public/img/favicon.ico">
        <link rel="stylesheet" href="./public/css/index.css">
        <link rel="stylesheet" href="./public/css/header.css">
        <link rel="stylesheet" href="./public/css/lunbo.css">
        <script src="/public/js/jquery.min.js"></script>
        <link rel="stylesheet" href="./public/css/slide.css">
        <script src="./public/js/unslider.min.js"></script>
        <link rel="stylesheet" href="./public/css/footer.css">
        <link rel="stylesheet" href="./public/css/lleftmenu.css">
        <script src="./public/js/move.js"></script>
        <script>window.onresize=window.onload=window.onscroll=function (){var oDiv=document.getElementById('div1');var scrollTop=document.documentElement.scrollTop||document.body.scrollTop;var t=(document.documentElement.clientHeight-oDiv.offsetHeight)/2;startMove(oDiv, {top: scrollTop+t});};</script>
</head>
<body>
<?php include "./include/header.php"; ?>
<?php include "./include/headerimg.php";?>
<div class="navbox">
  <div class="navbox-content">
    <div><i></i><a href="">全部智能酷品</a></div>
        <ul><li><a href="">手机</a></li>
          <li><a href="">行车记录仪</a></li>
          <li><a href="">儿童手表</a></li>
          <li><a href="">摄像机</a></li>
          <li><a href="">路由器</a></li>
          <li><a href="">二手手机</a></li>
          <li><a href="">社区</a></li>
        </ul>
        <a href="#"><img src="./public/img/f83942bb-8817-4e6a-a813-fd19839f95bf.png" alt=""></a>
    </div>
  </div>
</div>
<!-- 左侧菜单 -->

<?php include "./include/leftmenu.php";?>
<?php include "./include/cart.php"; ?>
<!-- 轮播图 -->
<?php include "./include/lunbo.php"; ?>
<?php include "../public/common/config.php"; ?>
<!-- 楼层 -->
<?php include "./include/content.php";?>
<div id="div1"><a href="/home/huodong/index.php">点击有惊喜~</a>
</div>
<?php include "./include/footer.php"; ?>
</body>
</html>
