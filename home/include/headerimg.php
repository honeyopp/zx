<div id="sublistbox">
    		<?php
			    function bDir($dirname){
					$dir_handle=opendir($dirname);
					while ($file=readdir($dir_handle)) {
						if ($file!='.'&&$file!='..') {
							$dir=$dirname.'/'.$file;
							if(is_dir($dir)){
								$size=filesize($dir);
								echo "<h3>$dir</h3>";
								xDir($dir);
							}
							if(is_file($dir)){
								$size=filesize($dir);
								echo "<div >
										<img src=$dir>
								    </div>";
							}
						}
					}
				closedir($dir_handle);
				return $dir;
				}

			$path="./public/img/phone";
			$str=bDir($path);
		?>
				</div>

				<div id="sublistbox2">
				    <?php
						$path="./public/img/car";
						$str=bDir($path);
				    ?>
				</div>

				<div id="sublistbox3">

				    <?php
						$path="./public/img/watch";
						$str=bDir($path);
				    ?>
				</div>
</div>