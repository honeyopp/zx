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

	$id=$_GET['id'];
	$sql="select * from goods where id={$id}";

	$res=mysql_query($sql);
	$row=mysql_fetch_assoc($res);
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
			background-color: rgb(51,153,204,0.2);
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
		.oimg{
			border:1px solid #ccc;
			background-color: white;
			width:80px;
			margin-left: 25%;
		}
	</style>
</head>
<body>
	<p><a href="./index.php">首页</a>/添加信息</p>
	<form action="do_update.php" method="POST" enctype="multipart/form-data">
		<p>商品名称: <input type="text" name="shopname" value="<?php echo $row['shopname'] ?>"></p>
		<div class="oimg">
			<img src="../../public/uploads/<?php echo $row[img] ?>" width="80px" height="80px">
		</div>

		<p>商品图片: <input type="file" name="img"></p>
		<!-- <p>小详情图：<input type="file" name="img2" multiple></p> -->
		<input type="hidden" name="oimg" value="<?php echo $row[img] ?>">
		<input type="hidden" name="oimg2" value="<?php echo $row[img2] ?>">

		<p>商品详情:
			<textarea id="contentEdit" name="detail" value="<?php echo $row[detail] ?>">
				<?php echo $row['detail'] ?>
			</textarea>
		</p>
		<p>商品价格: <input type="text" name="price" value="<?php echo $row['price'] ?>"></p>
		<p>商品库存: <input type="text" name="stock" value="<?php echo $row['stock'] ?>"></p>
		<p>所属品牌:
			<select name="brand_id" id="">
				<?php
					foreach ($rowClasss as $key => $value) {
						echo "<option disabled>|-$value[classname]</option>";
						foreach ($value['brand'] as $key => $bvalue) {
							if ($row['brand_id']==$bvalue['id']) {
								echo "<option value=$bvalue[id] selected>&nbsp;&nbsp;|--$bvalue[brandname]</option>";
							}else{
								echo "<option value=$bvalue[id]>&nbsp;&nbsp;|--$bvalue[brandname]</option>";
							}
						}
					}

				 ?>
			</select>
		</p>
		<p>
			<label for="shelf">上架: <input type="radio" name="is_shelf" id="shelf" vaLue="1" <?php echo $row['is_shelf']==1? 'checked':''?>></label>
			<label for="shelf1">下架: <input type="radio" name="is_shelf" id="shelf1" vaLue="0" <?php echo $row['is_shelf']==0? 'checked':''?>></label>
		</p>
		<input type="hidden" name="id" value="<?php echo $row[id] ?>">
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
