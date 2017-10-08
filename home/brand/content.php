<?php		
	echo "<ul class=classbrand>";
	echo "<li>品牌:";
	foreach ($rowClasss as $key => $value) {
		
		foreach ($value[brand] as $key => $value2) {

			echo "<a href=index.php?cid=$value2[cid]&bid=$value2[id]> $value2[brandname]</a>";
		}
		
		if(!$_GET['bid']){
			foreach ($arrb as $key => $value3) {
				echo "<li></li>"; 
				}
			foreach ($arrbgoods as $key => $value1) {
					echo "<a  class='goods-detail' href=../detail/index.php?id=$value1[id]&shopname=$value1[shopname]&img=$value1[img] style=float:left; style=display:block;>
						<img src=../../public/uploads/$value1[img] >
						<p>商品名称:$value1[shopname] </p>
						<p>价格:￥$value1[price]</p>
					</a>";		
		    }

		}
		else{
	    	foreach ($arr1 as $key => $value1) {
	    		echo "<li></li>";
				echo "<a href=../detail/index.php?id=$value1[id]&shopname=$value1[shopname]&img=$value1[img] class='goods-detail' style=float:left; style=display:block;>
						<img src=../../public/uploads/$value1[img]  style=display:block;>
						<p>商品名称:$value1[shopname] </p>
						<p>价格:￥$value1[price]</p>
					 </a>";
		    }
		}  
	}
 echo "</li>";
				
?>