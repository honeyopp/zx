<?php 
    session_start();
    // error_reporting(0);
	include "../../public/common/config.php";
	$id=$_GET['id'];
   
    $sql="select * from goods where id={$id}";
    
    $res=mysql_query($sql);

    $row=mysql_fetch_assoc($res);
    
    $num=$_SESSION['shop'][$id]['num'];
    // echo "ok";
    $_SESSION['shop'][$row['id']]=$row;
    if($num){
        $_SESSION['shop'][$row['id']]['num']=$num;
    }else{

        $_SESSION['shop'][$row['id']]['num']=1;
    }
    // echo "$_SESSION[shop][$row[id]][num]";
   	echo "<script>location.href='index.php?id=$row[id]';</script>";


 ?>