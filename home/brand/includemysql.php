<?php 
include "../../public/common/config.php";
	error_reporting(0);
	if(!$_GET['cid']){
		$cid=1;
	}
	else{
		$cid=$_GET['cid'];
	}
	$sqlClass="select * from class where id=$cid ";
	$resClass=mysql_query($sqlClass);
	$rowClass=mysql_fetch_assoc($resClass);
	// 品牌
	$sqlBrand="select * from brand where brand.cid=$rowClass[id]";

	$resBrand=mysql_query($sqlBrand);
	while($rowBrand=mysql_fetch_assoc($resBrand)){
		$rowClasss[$rowClass['id']]['brand'][]=$rowBrand;


	}
	// 商品
	if(!$_GET['bid']){
			$sqlb="select * from brand where cid={$cid}";
			$resb=mysql_query($sqlb);
			$arrb=array();
			while ($rowb=mysql_fetch_assoc($resb)) {
				$arrb[]=$rowb['id'];
			}
			$str=join($arrb,',');
			$sql1="select * from goods where brand_id in($str)";
			$res1=mysql_query($sql1);
			$arrbgoods=array();
			while ($arrb1=mysql_fetch_assoc($res1)) {
				$arrbgoods[]=$arrb1;
			}
	}
	else{
		$bid=$_GET['bid'];
		$sql1="select * from goods where brand_id={$bid}";
		$res1=mysql_query($sql1);
		$arr1=array();
		while ($row1=mysql_fetch_assoc($res1)) {
			$arr1[]=$row1;
			}
	}

 ?>