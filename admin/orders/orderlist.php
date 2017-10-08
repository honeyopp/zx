<?php
	include "../../public/common/config.php"; 
	$code=$_GET['code'];
	$sql="select goods.shopname,goods.img,orders.onum,orders.aprice from goods,orders where orders.shop_id=goods.id and orders.code='{$code}'";
	$res=mysql_query($sql);
	$shop=array();
	while ($row=mysql_fetch_assoc($res)) {
		$shop[]=$row;
	}
	// echo '<pre>';
	// print_r($shop);
	// echo '</pre>';
 ?>