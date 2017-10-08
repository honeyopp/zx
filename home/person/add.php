<?php error_reporting(0);
session_start(); ?>

<?php include "../include/header.php"; ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../public/css/header.css">
	<link rel="stylesheet" href="../public/css/footer.css">
	<link rel="stylesheet" type="text/css"  href="../public/css/bootstrap.css">
	<script src="../public/js/area.js"></script>
	<style>
		table{
			width:400px; 
			height:400px;
			margin-left: 400px;

		}
	</style>
</head>

<body>
	<table >
	<form action="do_add.php" method="POST" >
		<tr>
        <td>地址:<select id="s_province" name="s_province" value=<?php $arr[0] ?>></select>
          <select id="s_city" name="s_city" value=<?php $arr[1] ?>></select>
          <select id="s_county" name="s_county" value=<?php $arr[2] ?>></select>
        	<input type="hidden" name="id" value="<?php echo $id ?>"></td></tr>
        <tr><td>电话： <input type="text" name="tel"></td></tr>
        <tr><td>收货人: <input type="text" name="sh"></td></tr>
        <tr><td><input type="submit" value="添加收货地址"></td></tr>

    <!-- <form action="do_add.php" method="POST"  class="commit-address"> -->
        <?php 
            $i=0;
            foreach ($use as $key => $value1) {
                if($i==0){
                    echo "<p>
                        <label for=ad{$key} class=adkey>
                            <input type='radio' name='ad_id' id=ad{$key} checked value=$value1[id]>
                            $value1[ad_info]
                            $value1[tel]
                            $value1[add_name]
                        </label>    
                      
                    </p>";
                }else{
                    echo "<p>
                        <label for=ad{$key} class=adkey>
                            <input type='radio' name='ad_id' id=ad{$key} value=$value1[id]>
                            $value1[ad_info]
                            $value1[tel]
                            $value1[add_name]
                        </label>    
                        
                    </p>";

                }
                $i++;
            }       

        ?>

    </table>
    </form>
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

<script src="../public/js/bootstrap.min.js"></script>
<?php include "../include/footer.php"; ?>	
</body>
</html>