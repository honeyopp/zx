<?php include "includemysql.php"; ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../public/css/brandindex.css">
</head>
<body>
	<?php include "../include/header.php";?> 	
	<div class="classclassname">
		<a href="../index.php">首页</a>><a href=""><?php echo "$rowClass[classname]"; ?></a>>
	</div>
	<?php include "./content.php";?>			
	<?php include "../include/footer.php";?> 

</body>
</html>
