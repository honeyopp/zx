<?php 
	include "../../public/common/config.php";
	session_start();
	date_default_timezone_set("PRC");
	
	if (!($_SESSION['shop'])){

		echo "<script>alert('购物车没商品，请选择商品');location.href='../index.php';</script>";
	}else{
		
			$a_id=$_POST['ad_id'];
			$user_id=$_SESSION['user_id'];
			$code=mt_rand().time();
			$time=date("y-m-d H:i:s",time());
			if (!$a_id) {
			echo "<script>alert('请添加地址');location.href='index.php?id=$id'</script>";
		}else{
	foreach ($_SESSION['shop'] as $key => $value) {
		//生成订单
		$aprice=$value['num']*$value['price'];
		$sql="insert into orders(shop_id,user_id,code,onum,aprice,address_id,status_id,confirm,time) values({$value[id]},{$_SESSION[user_id]},'{$code}','{$value[num]}','{$aprice}','{$a_id}',5,0,'{$time}')";
		// echo "$sql";
		mysql_query($sql);

		// 减库存
		$num=$value['stock']-$value['num'];
		echo "$num";
		// exit;
		$sqls="update goods set stock=$num where id={$value[id]}";
		
		mysql_query($sqls);
		$_SESSION['shop']=array();

	}
	echo "<script>alert('购买成功');location='returnbuy.php?code=$code'</script>";
   }
}
 ?>