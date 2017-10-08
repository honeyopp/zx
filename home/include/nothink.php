<?php
  function bDir2($dirname){
  $dir_handle=opendir($dirname);
  while ($file=readdir($dir_handle)) {
    if ($file!='.'&&$file!='..') {
      $dir=$dirname.'/'.$file;
      if(is_dir($dir)){
        $size=filesize($dir);
        xDir($dir);
      }
      if(is_file($dir)){
        $size=filesize($dir);
        echo "<a href='/home/detail/index.php?id=$value1[id]'>
            <img src=$dir>
            </a>";
      }
    }
  }
  closedir($dir_handle);
  return $dir;
    }
?>