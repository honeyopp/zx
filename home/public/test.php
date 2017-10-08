<?php  

echo "
<style> 
#stretch
{
border:10px solid transparent;
width:370px;
height: 79px;
margin-left:900px;
margin-top: 100px;
text-align: center;
line-height: 76px;

background-color: rgba(255,255,255,0.3);
}

#stretch
{
-moz-border-image:url(\"border.png\") 30 30 stretch;	
-webkit-border-image:url(\"border.png\") 30 30 stretch;	
-o-border-image:url(\"border.png\") 30 30 stretch;	
border-image:url(\"border.png\") 30 30 stretch;
}
</style>

<div id=stretch>请<a href>登陆</a>后查看购物车</div>";
?>
