<?php
	$link=mysql_connect('localhost','root','123');
	if(!$link){
		die('数据库连接失败!');
	}
	mysql_select_db('zx') or die('数据库选择失败!');

 ?>
