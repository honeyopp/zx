<?php
include "../lock.php";
	error_reporting(0);
	include "../../public/common/config.php";
	//查询分类
	$sqlClass="select * from class";
	$resClass=mysql_query($sqlClass);
	while ($rowClass=mysql_fetch_assoc($resClass)) {
		//将分类数组弄为二维数组
		$rowClasss[$rowClass['id']]=$rowClass;

		$sqlBrand="select brand.* from brand where brand.cid={$rowClass[id]} ";
		$resBrand=mysql_query($sqlBrand);
		while ( $rowBrand=mysql_fetch_assoc($resBrand)) {
			// 将品牌数组放到对应的分类数组中
			$rowClasss[$rowClass['id']]['brand'][]=$rowBrand;
		}
	}
// echo '<pre>';
// print_r($rowClasss);
// echo '</pre>';
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="/public/js/jquery.min.js"></script>
	<script src="/public/kd/kindeditor.js"></script>
	<script src="/public/kd/lang/zh_CN.js"></script>
	<style>
	body{
		background:url(../public/img/bg.jpg);
		background-size: 100%;
	}
		form{
			display: inline-block;
			width:100%;
			background-color: rgb(160,160,160,0.2);
			float: left;
			padding:50px 0px;
		}
		p{
			display: inline-block;
			width:50%;
			margin-left: 25%;
			margin-top:0px;
		}
		input[type='submit']{
			margin-right: 25px;
		}
		input[type='submit'],input[type='reset']{
			background:#000066;
			color:white;
			width:100px;
			height:30px;
			border:none;
			cursor: pointer;
		}
		body{
			background:url(../public/img/bg.jpg);
			background-size: 100%;
		}
	</style>
</head>
<body>
	<p><a href="./index.php">首页</a>/添加信息</p>
	<form action="do_add.php" method="POST" enctype="multipart/form-data">
		<p>商品名称: <input type="text" name="shopname"></p>
		<p>商品图片: <input type="file" name="img"></p>
		<!-- <p>小详情图：<input type="file" name="img2" mutiple></p> -->
		<p>商品详情:
			<textarea id="contentEdit" name="detail" style=" ">
			</textarea>
		</p>
		<p>商品价格: <input type="text" name="price"></p>
		<p>商品库存: <input type="text" name="stock"></p>
		<p>所属品牌:
			<select name="brand_id" id="">
				<?php
					foreach ($rowClasss as $key => $value) {
						echo "<option disabled>|-$value[classname]</option>";
						foreach ($value['brand'] as $key => $bvalue) {
							echo "<option value=$bvalue[id]>&nbsp;&nbsp;|--$bvalue[brandname]</option>";
						}
					}

				 ?>
			</select>
		</p>
		<p>
			<label for="shelf">上架: <input type="radio" name="is_shelf" id="shelf" vaLue="1" checked></label>
			<label for="shelf1">下架: <input type="radio" name="is_shelf" id="shelf1" vaLue="0"></label>
		</p>
		<p><input type="submit" value="提交"><input type="reset" value="重置"></p>
	</form>
</body>
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

	// var editor;
 // 	KindEditor.ready(function(K) {
 // 	    editor = K.create('#contentEdit');
 //     })

</script>
