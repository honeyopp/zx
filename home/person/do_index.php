<?php
error_reporting(0);
session_start(); 
include "../../public/common/config.php";

$id=$_GET['id'];
echo "$id";
$sql="update orders set confirm=1,status_id=4 where id = $id";
// echo "$sql";
$res=mysql_query($sql);

echo "<script>location.href='index.php';</script>";

 ?>
