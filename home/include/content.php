<?php
session_start();
	include "../public/common/config.php";
	error_reporting(0);

	$sqlClass="select * from class";
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
		$sqlShop="select goods.stock,goods.id,goods.img,goods.shopname,goods.price from goods,brand where goods.brand_id=brand.id and brand.cid=$rowClass[id] and goods.is_shelf=1";
		$resShop=mysql_query($sqlShop);
		while($rowShop=mysql_fetch_assoc($resShop)){
			$rowClasss[$rowClass['id']]['shop'][]=$rowShop;

		}



		// 广告
		$sqlAds="select * from ads where ads.cid=$rowClass[id] group by id";
		$resAds=mysql_query($sqlAds);
		while ($rowAds=mysql_fetch_assoc($resAds)) {
			$rowClasss[$rowClass['id']]['ads'][]=$rowAds;
		}

	}
 ?>
	<style>
	.total{
		clear: both;
		margin-top: 70px;
		width: 100%;
		height: 582px;
		box-sizing:border-box;
	}
		.goods{
				width:90%;
				height: 542px;
				margin: 0px 70px;
				margin-bottom: 40px;
				box-sizing:border-box;
		}
		.goods>.ads{
			width: 17%;
			height: 542px;
			box-sizing:border-box;
			float: left;
		}
		.goods>.content{
			     width:63%; 
			  	 height: 542px;
			    margin-left: 242px;
			    /*margin-top: 0px;*/
			    /*overflow: hidden;*/
			    box-sizing:border-box;
			    /*float: left;*/
			    /*background-color: #ccc;*/

		}
		.goods>.right{
			width: 15%;
			height: 542px;
			box-sizing:border-box;
			float: right;
			/*background-color: red;*/

		}
		.goods h4{
			/*float: left;*/
			width:100%;
			padding:10px 0px;
			border-bottom:1px solid #ccc;
		}
		.goods h4 a{
			float: right;
			font-size: 14px;
			margin-right: 25px;
		    color: #999;
		}
		.goods-detail{
			width: 25%;
		    height: 250px;
		    overflow: hidden;
		    display: block;
		    float: left;
		    box-sizing:border-box;
		}
		.goods-detail>img{
			margin-top: 8px;
			margin-left: 3px;
			width: 164px;
			height: 164px;
			/*float: left;*/
			-webkit-transition: -webkit-transform 2s;
			-moz-transition: -moz-transform 2s;
			-ms-transition: -ms-transform 2s;
			-o-transition: -o-transform 2s;
			transition: transform 2s;
		}
		.goods-detail>img:hover{
			transform:scale(1.1,1.1);
		}
		.goods>.left:hover{
			box-shadow: 1px 2px 3px  #ccc;
		}
		.goods-detail>p{
			text-align: center;
			color: #868686;
			font-size: 14px;
			margin: 0px;
			padding: 0px;
			width: 164px;

		}
		.ads>.img1:first-child>img{
			display: block;
			width: 200px;	
			height: 390px;
			/*overflow: hidden;*/
		}
		.ads>.img1:last-child>img{
			display:block;
			width: 200px;
			height: 140px;
			margin-top: 10px;
		}
	</style>
		<div class="shop">
			<?php
				$i=1;
				foreach ($rowClasss as $key => $value) {
					echo "<div class='total'>";
					echo "<div class='goods'>
							<h4>{$i}F $value[classname]<a href=./brand/index.php?cid=$value[id]>更多</a>";
						// 品牌
						foreach ($value['brand'] as $key => $value2) {
							echo "<a href=./search.php?content=$value2[brandname] class='brand'> $value2[brandname]</a>";
						}
						echo "</h4>";
						//广告
						echo "<div class='ads'>";
						foreach ($value['ads'] as $key => $value3) {
							echo "<div class=img1><img src=../../public/uploads/$value3[img]></div>";
						}
						echo "</div>";
						echo "<div class='right'>

							</div>";
						//商品
						echo "<div class='content'>";
						
						foreach ($value['shop'] as $key => $value1) {

							echo "<a class='goods-detail' href=./detail/index.php?id=$value1[id]>
									<img src=../public/uploads/$value1[img] >
									<p>商品名称:$value1[shopname] </p>
								 	<p>价格:￥$value1[price]</p>
							    </a>";
								
						}
						echo "</div>"; 
				
					echo "</div>";

					$i++;
					echo "</div>";
				}
				echo "</div>";
			 ?>
		
	</div>
				
							
								 