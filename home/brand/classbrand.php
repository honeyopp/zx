<?php 
	include "../../public/common/config.php";
	
	$id=$_GET[id];
	// echo "$id";
	error_reporting(0);

	$sqlClass="select * from class where id=$id";
	$resClass=mysql_query($sqlClass);
	while ($rowClass=mysql_fetch_assoc($resClass)) {
		$rowClasss[$rowClass['id']]=$rowClass;

		// 品牌
		$sqlBrand="select * from brand where brand.cid=$rowClass[id]";
		$resBrand=mysql_query($sqlBrand);
		while($rowBrand=mysql_fetch_assoc($resBrand)){
			$rowClasss[$rowClass['id']]['brand'][]=$rowBrand;


		}
		// 商品
		$sqlShop="select goods.img,goods.shopname,goods.price from goods,brand where goods.brand_id=brand.id and brand.cid=$rowClass[id] and goods.is_shelf=1";
		$resShop=mysql_query($sqlShop);
		while($rowShop=mysql_fetch_assoc($resShop)){
			$rowClasss[$rowClass['id']]['shop'][]=$rowShop;
		}
		// //范围
		// $sqlShopprice="select goods.id,goods.img,goods.shopname,goods.price from goods,brand where  goods.price between 0 and 200 and goods.brand_id=brand.id and brand.cid=$rowClass[id] and goods.is_shelf=1;";
		// $resShopprice=mysql_query($sqlShopprice);
		// while($rowShoppice=mysql_fetch_assoc($resShopprice)){
		// 	$rowClasss[$rowClass['id']]['shop'][]=$rowShopprice;
		// }
}

					

					echo "<ul class=classbrand>";
					echo "<li>品牌:$row3[classname]";
					foreach ($rowClasss as $key => $value) {
						
						foreach ($value[brand] as $key => $value2) {
							echo "<a href class=brand> $value2[brandname]</a>";
						}
					}
					echo "</li>";
					// echo "<ul>";
					// echo "<ul class=classprice>";
					// echo "<li>价格：</li>";

					// echo "<li><a href>0~200</a></li>
					// 	<li><a href>200~500</a></li>
					// 	<li><a href>500~1000</a></li>
					// 	<li><a href>1000~</a></li>";
					// echo "</ul>";
					foreach ($rowClasss as $key => $value) {
						foreach ($value['shop'] as $key => $value1) {

							echo "<a href class='goods-detail'>
								<img src=../../public/uploads/$value1[img] >
								<p>商品名称:$value1[shopname] </p>
								<p>价格:￥$value1[price]</p>
							</a>";
						}
				}

						// 商品
					
						// foreach ($value['shop'] as $key => $value3) {
						// echo "<a href class='goods-detail'>
						// 		<img src=../public/uploads/$value3[img] >
						// 		<p>商品名称:$value3[shopname] </p>
						// 		<p>价格:￥$value3[price]</p>
						// 	</a>";
						// }
					
						
?>