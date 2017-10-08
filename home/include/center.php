<?php
	include "../public/common/config.php";
	error_reporting(0);

	$sqlClass="select * from class";
	$resClass=mysql_query($sqlClass);
	while ($rowClass=mysql_fetch_assoc($resClass)) {
		$rowClasss[$rowClass['id']]=$rowClass;
    // 商品/center
		$sqlShopcenter="select goods.img,goods.shopname,goods.price from goods,brand where goods.brand_id=brand.id and brand.cid=$rowClass[id] and goods.is_shelf=1 limit 2,6";
		$resShopcenter=mysql_query($sqlShopcenter);
		while($rowShopcenter=mysql_fetch_assoc($resShopcenter)){
			$rowClasss[$rowClass['id']]['shop'][]=$rowShopcenter;
		}
  }
 ?>
 <style>
 .good-center{
   width: 741px;
   height: 542px;
   float: left;
   overflow: hidden;
   margin-left: 296px;
     margin-top: -569px;
 }
 .goods-center a{
   width: 246px;
   height: 271px;
   float: left;
 }
 .goods-ceneter a img{
   width: 164px;
   height: 164px;
   float: left;
 }
 </style>
 <?php
     foreach ($rowClasss as $key => $value) {
         //商品/center
       foreach ($value['shop'] as $key => $value2) {
         echo "<div class='goods-center'>";
         echo "<a href class='goods-detail-center'>
            <img src=../public/uploads/$value2[img] >
         </a>";
       }
       echo "</div>";
     }
?>
