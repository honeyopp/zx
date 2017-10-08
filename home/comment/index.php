<?php
	session_start();
	error_reporting(0); 
	date_default_timezone_set("PRC");
	$id=$_GET['id'];
	include "../../public/common/config.php";
	$sql="select * from goods where id={$id}";
	$res=mysql_query($sql);
	$row=mysql_fetch_assoc($res);
	//评论
	$sqlc="select comment.con,comment.time,user.username from comment,user where comment.is_ok=1 and comment.user_id=user.id and comment.goods_id={$id} ";
	// echo "$sqlc";
	$resc=mysql_query($sqlc);
	$arrc=array();
	while ($rowc=mysql_fetch_assoc($resc)) {
		$arrc[]=$rowc;
	}
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../public/css/header.css">
	<link rel="stylesheet" href="../public/css/footer.css">
	<script src="/public/js/jquery.min.js"></script>
	<script src="/public/kd/kindeditor.js"></script>
	<script src="/public/kd/lang/zh_CN.js"></script>
	<script src="../public/js/jquery.min.js"></script>
	<link rel="stylesheet" href="../public/css/lanrenzhijia.css">
	<script src="../public/js/lanrenzhijia.js"></script>
	<link rel="stylesheet" href="../public/css/commentindex.css">
</head>
<body>
<?php include "../include/header.php"; ?>
<div id="preview" class="spec-preview">
		<span>让你迷恋的性感小商品:<?php echo "$row[shopname]"; ?></span>	
		<span class="jqzoom">
			<img  jqimg="<?php echo "/public/uploads/$row[img]";?>" src="<?php echo "/public/uploads/$row[img]";?>" alt="" width="160px" height="160px">
		</span>
				
		<i id="marketprice">市场价：<?php  $p=$row[price]+3668; echo "$p";?></i>
		<i>优惠价:<?php echo "$row[price]";?></i>
</div>		
<div class="contentright">
	<h3>商品名称：<?php echo "$row[shopname]"; ?></h3>
	<span>8月22日-8月23日10:00爆款手机限时特惠100元<a href="">点击参与</a></span>
	<h3>商品价格：<?php echo "$row[price]"; ?>元</h3>
	<span>颜色：<span>纯纯的绿</span></span>
	<span class="stock">库存：<?php echo "$row[stock]";?></span> <a href="reduce.php?id=<?php echo $row[id]?>"class="reduce">购买数量：-</a>
		<div class="number"><?php 
			if($_SESSION['shop'][$id]['num']){
				echo $_SESSION['shop'][$id]['num'];			
			}else{
				echo 1;
			}

		 ?>
		 </div>
		<a href="plus.php?id=<?php echo $row[id] ?>" class="plus">+ </a>
		<?php
			echo "<a href=../cart/addcart.php?id=$row[id] class=cart >加入购物车</a>";
		 ?>	
</div>
<div class="clear"></div>
<div class="s-bottom">
	<ul class="sb-ti">
		<li>添加评论</li>
		<li>商品详情</li>
		<li>售后保障</li>
	</ul>
</div>
<div class="acs">
	<div class="comment">
		<ul class="sb-ti">
			<li>
				<?php echo "
					<form action=../comment/add.php method='POST'>
					<textarea id=contentEdit name=comment></textarea>
					<input type=hidden name='id' value=$id>
					<input type=submit value=提交评论>
					</form>
				"; ?>
			</li>
		</ul>
	</div>
	<div class="sp-detail">
		<?php echo $row['detail'] ?>
	</div>
</div>
<?php include "../include/footer.php"; ?>
</body>

</script>
<script>
	$('.sb-ti li').click(function(){
		index=$(this).index();
		$('.acs>div').eq(index).show().siblings().hide();
	});

</script>
</html>
<script>
  	//KD编辑器
    KindEditor.ready(function(K) {
        editor = K.create('#contentEdit',{
            // resizeType: 0,
            allowImageRemote:false,
            afterBlur:function(){this.sync();}
        });
    });
</script>