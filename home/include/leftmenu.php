<?php
    $link=mysql_connect('localhost','root','12345678');
    mysql_select_db('zx');
    $sql="select  class.classname from class";
    $res=mysql_query($sql);
    $arr=array();
    while ($row=mysql_fetch_assoc($res)){
      $arr[]=$row;
    }
      echo "<div class=lleftmenu>";
      echo "<ul class=menu>";
    foreach ($arr as $key => $value) {

      foreach ($value as $key => $value1) {
        echo"
        <li><a href>$value1</a>
            <div class=phonebr>
              <ul>
                <li>手机品牌</li>
                <li>OPPO</li>
                <li>aplie</li>
                <li>360N5S</li>
            </ul>
          </div>
        </li>
        
        ";
      }
    }
    echo "</ul>";
    echo "</div>";
?>
