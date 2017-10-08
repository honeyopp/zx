<?php
include "../lock.php";
	error_reporting(0);
	include "../../public/common/config.php";
	//查询分类
	$sqlClass="select * from class";
	$resClass=mysql_query($sqlClass);
	while ($rowClass=mysql_fetch_assoc($resClass)) {
		$rowClasss[$rowClass['id']]=$rowClass;

		$id=$_GET['id'];
		$sql="select * from ads where id={$id}";

		$res=mysql_query($sql);
		$row=mysql_fetch_assoc($res);
	}
	
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
		<p>广告链接: <input type="text" name="shopname" value="<?php echo $row['href'] ?>"></p>
		<div class="oimg">
			<img src="../../public/uploads/<?php echo $row[img] ?>" width="80px" height="80px">
		</div>

		<p>商品图片: <input type="file" name="img"></p>
		<input type="hidden" name="oimg" value="<?php echo $row[img] ?>">
		
		<p>所属分类:
			<select name="cid" >
			<?php
				foreach ($rowClasss as $key => $value) {
					if ($row['cid']==$value['id']) {
								echo "<option value=$value[id] selected>&nbsp;&nbsp;|--$value[classname]</option>";
							}else{
								echo "<option value=$value[id]>&nbsp;&nbsp;|--$value[classname]</option>";
							}
						}
				 ?>
		<p>
			<label for="shelf">上架: <input type="radio" name="is_shelf" id="shelf" vaLue="1" <?php echo $row['is_shelf']==1? 'checked':''?>></label>
			<label for="shelf1">下架: <input type="radio" name="is_shelf" id="shelf1" vaLue="0" <?php echo $row['is_shelf']==0? 'checked':''?>></label>
		</p>
		<input type="hidden" name="id" value="<?php echo $row[id] ?>">
		<p><input type="submit" value="提交"><input type="reset" value="重置"></p>
	</form>
</body>
</html>