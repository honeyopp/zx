<?php 
    include "../../public/common/config.php";
    session_start();
    $id=$_GET['id'];
    error_reporting(0);
    if($_SESSION['is_login']!=1){
        echo "<script>alert('请登录');location.href='../login/index.php';</script>";
        exit;
    }

//地址
    $sqlu="select * from address where user_id={$_SESSION['user_id']}";
    $resu=mysql_query($sqlu);
    $use=array();
    while ($rowu=mysql_fetch_assoc($resu)) {
        $use[]=$rowu;
    };

//修改地址
   
    

 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title> 
<script src="../public/js/area.js"></script>
<link rel="stylesheet" href="../public/css/header.css">
<link rel="stylesheet" href="./css/index.css">
</head>
<body>

<?php include "../include/header.php";?>

<a href="../index.php" class="go">返回首页继续购物</a>
<div class="inemt">
    <div class="listheader">
        <ul class="app">
                <li>商品信息</li>
                <li>价格</li>
                <li>数量</li>
                <li>总价</li>
                <li>操作</li>
                <li><a href="deleteall.php">清空购物车</a></li>       
        </ul>
        <?php    
        echo "<div class=box>";
        foreach ($_SESSION['shop'] as $key => $value) {
            echo "<div class=orders>";
                echo "<ul class=list>";
                echo "<div class=clear></div>";
                     $p=$value['num']*$value['price'];
                        echo "<li><img src=../../public/uploads/$value[img] width=80px height=80px><span>$value[shopname]</span></li>";
                        echo "<li>$value[price]</li>";
                        echo "<li><div class=clear></div><a href=./reduce.php?id=$value[id]>-</a>$value[num]<a href=./plus.php?id=$value[id]>+</a><div class=clear></div></li>";
                        echo "<li>$p</li>";
                        echo "<li><a href=delete.php?id=$value[id]>移除商品</a><div class=clear></div></li>";
                        echo "<div class=clear></div>";
                echo "</ul>"; 

            echo "</div>";  
                  
        }
        echo "<div class=clear></div>";
        echo "</div>"; 
                
    ?>
        
    </div>
</div>
<div class="clear"></div>
<div class="formbox">
    <span class="count">总计:
        <?php 
            $tot=0;
            foreach ($_SESSION['shop'] as $key => $value) {
                $tot+=$value['price']*$value['num'];
            }   
            echo $tot;       
         ?>
         元
    </span>
    <div class="clear"></div>
    <form action="./do_address.php" method="POST" class='commint'>
        <select id="s_province" name="s_province" value=<?php $arr[0] ?>></select>
        <select id="s_city" name="s_city" value=<?php $arr[1] ?>></select>
        <select id="s_county" name="s_county" value=<?php $arr[2] ?>></select>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <div></div>
        电话： <input type="text" name="tel">
        收货人: <input type="text" name="sh">
        <input type="submit" value="添加收货地址">

    </form>
    <div class="clear"></div>
    <form action="commint.php" method="POST"  class="commit-address">
        <?php 

            $i=0;
            foreach ($use as $key => $value1) {
                if($i==0){
                    echo "<p>
                        <div class=clear></div>
                        <label for=ad{$key} class=adkey>
                            <input type='radio' name='ad_id' id=ad{$key} checked value=$value1[id]>
                            $value1[ad_info]
                            $value1[tel]
                            $value1[add_name]
                        </label>    
                        <a href=do_index.php?aid=$value1[id]&id=$id class=addelete>删除</a>
                    </p>";
                }else{
                    echo "<p>
                        <label for=ad{$key} class=adkey>
                            <input type='radio' name='ad_id' id=ad{$key} value=$value1[id]>
                            $value1[ad_info]
                            $value1[tel]
                            $value1[add_name]
                        </label>    
                        <a href=do_index.php?aid=$value1[id]&id=$id class=addelete>删除</a>
                    </p>";

                }
                $i++;
            }       

        ?>

<input type="submit" value="结算" id='submit'>

    
    </form>
</div>
<script type="text/javascript">
        _init_area();
        var Gid  = document.getElementById ;
        var showArea = function(){
            Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +    
            Gid('s_city').value + " - 县/区" + 
            Gid('s_county').value + "</h3>"
                                    }
        Gid('s_county').setAttribute('onchange','showArea()');
    </script>
     
   <?php include "../include/footer.php";
     ?>         

  <div class="clear"></div>   
     
</body>
</html>