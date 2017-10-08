<?php
  $sql="select  goods.id,class.classname,brand.brandname,goods.shopname,goods.img from class,brand,goods where brand.cid=class.id and goods.brand_id=brand.id and goods.is_shelf=1 limit 6,4;";
  $res=mysql_query($sql);
  $arr=array();
  while ($row=mysql_fetch_assoc($res)) {
    $arr[]=$row;
  }
 
  echo "<div class=layload>";
  foreach ($arr as $key => $value) {
    $path="../public/uploads/";
    echo "<a href='/home/detail/index.php?id=$value[id]&$value[img]'><img src=$path$value[img]></a>";
  }
  echo "</div>";

 ?>