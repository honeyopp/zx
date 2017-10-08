<?php 
	include "../../public/common/config.php";
	$code=$_GET['code'];
	$id=$_GET['id'];
	// echo "$id";
	$sqlo="select orders.status_id from orders where code='{$code}'";
	$reso=mysql_query($sqlo);
	$rowo=mysql_fetch_assoc($reso);

	$sql="select * from status";

	$res=mysql_query($sql);
	$st=array();
	while($row=mysql_fetch_assoc($res)){
		$st[]=$row;
	}

 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		form{
			display: inline-block;
			width:50%;
			background-color: #3399CC;
			float: left;
			margin-left:25% ;
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
	</style>
</head>
<body>
	<p><a href="./index.php">首页</a>/修改信息</p>
	<form action="do_update.php" method="POST">
		<p>
			修改状态：<select name="sid" id="">
			<?php 
				foreach ($st as $key => $value) {
					if ($value['id']==$rowo['status_id']) {
						echo "<option selected value=$value[id]>$value[statusname]</option>";
					}else{
						echo "<option value=$value[id]>$value[statusname]</option>";
					}
					
				}

			 ?>
		</select>
		</p>
		<p><input type="hidden" name="code" value="<?php echo $code; ?>"></p>
		<p><input type="hidden" name="id" value="<?php echo "$_GET[id]"?>"></p>
		<p><input type="submit" value="提交"><input type="reset" value="重置"></p>
	</form>
</body>
</html>