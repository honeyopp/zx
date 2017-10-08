<?php
session_start(); 
	/**
	这是一个等比例缩放函数
	@param $src_file 原图
	@param $dst_w 缩放后的宽
	@param $dst_h 缩放后的高
	*/
	function thumb($src_file,$dst_w,$dst_h){
		// 获取图片信息
		$image_arr=getimagesize($src_file);
		// 2.将原图扣出来
		switch ($image_arr[2]) {
			case 1:

				$imagecreatefrom='imagecreatefromgif';
				$image='imagegif';
				break;
			case 2:

				$imagecreatefrom='imagecreatefromjpeg';
				$image='imagejpeg';
				break;
			case 3:

				$imagecreatefrom='imagecreatefrompng';
				$image='imagepng';
				break;
			default:
				# code...
				break;
		}
		$im2=$imagecreatefrom($src_file);
		// 3.参数配置
		$dst_x=0;
		$dst_y=0;
		$src_x=0;
		$src_y=0;
		$src_w=imagesx($im2);
		$src_h=imagesy($im2);
		// 比例计算
		$scale=($src_w/$dst_w)>($src_h/$dst_h)?($src_w/$dst_w):($src_h/$dst_h);
		//目标宽高
		$dst_w=floor($src_w/$scale);
		$dst_h=floor($src_h/$scale);
		// 1.创建画布
		$im=imagecreatetruecolor($dst_w,$dst_h);
		// 4.移动
		imagecopyresampled($im,$im2,$dst_x,$dst_y,$src_x,$src_y,$dst_w,$dst_h,$src_w,$src_h);
		//路径处理
		// header("Content-type:$image_arr[mime]");
		$s_name=basename($src_file);
		$path=dirname($src_file);
		$d_name=$path."/t_".$dst_w."_".$s_name;
		$image($im,$d_name);

	}
	/**
	这是一个删除目录的函数
	@param $dirname 删除的目录
	return SUCCESS 文件删除成功
	*/
	function delDir($dirname){
		if(!file_exists($dirname)){
			echo '文件不存在';
			return false;
		}
		$dir=scandir($dirname);
		foreach ($dir as $key => $value) {
			if($key>1){
				$path=$dirname.'/'.$value;
				if(is_dir($path)){
					delDir($path);
				}
				if(is_file($path)){
					unlink($path);
				}
			}
		}
		rmdir($dirname);
		return 'SUCCESS';
	}
	/**
	这是一个复制函数
	@param $dir_s 源目录
	@param $dis_t 目标目录
	return SUCCESS 文件复制成功
	*/
	function copyDir($dir_s,$dir_t){

		if(!file_exists($dir_t)){
			mkdir($dir_t);
		}
		if(!is_dir($dir_t)){
			echo '这个东西不是目录';
			return ;
		}
		$s_dir=scandir($dir_s);
		foreach ($s_dir as $key => $value) {
			if($key>1){
				$path=$dir_s.'/'.$value;
				$path1=$dir_t.'/'.$value;
				if(is_dir($path)){
					copyDir($path,$path1);
				}
				if(is_file($path)){
					copy($path,$path1);
				}
			}
		}
		return 'SUCCESS';
	}
	/**
	这是一个移动目录的函数
	@param $dir_s 源目录
	@param $dis_t 目标目录
	return SUCCESS 文件移动成功
	*/
	function xDir($dir_s,$dir_t){
		copyDir($dir_s,$dir_t);
		delDir($dir_s);
		return 'SUCCESS';
	}

	/**
	这是一个遍历目录的函数
	@param $dirname 源目录
	return SUCCESS 文件遍历成功
	*/
	function bDir($dirname){
		$dir_handle=opendir($dirname);
		while ($file=readdir($dir_handle)) {
			if ($file!='.'&&$file!='..') {
				$dir=$dirname.'/'.$file;
				if(is_dir($dir)){
					$size=filesize($dir);
					echo "<h3>$dir"."|"."{$size}B</h3>";
					xDir($dir);
				}
				if(is_file($dir)){
					$size=filesize($dir);
					echo "<h3>$dir"."|"."{$size}B</h3>";
				}
			}
		}
		closedir($dir_handle);
		return 'SUCCESS';
	}
	/**
	这是一个文件上传函数
	@param $upload 上传目录
	*/
	function upload($upload){
		foreach ($_FILES as $key => $value){}
		$name=$_FILES[$key]['name'];
		$tmp_name=$_FILES[$key]['tmp_name'];
		$size=$_FILES[$key]['size'];
		$dsize=10*1024*1024;
		if(!file_exists($upload)){
			mkdir($upload);
		}
		// 文件后缀
		$n_arr=explode('.',$name);
		$ext=array_pop($n_arr);
		$extarr=array('gif','png','jpg');
		if(in_array($ext,$extarr)){
			// 判断大小
			if($size<$dsize){
				// 文件名称
				$dst_n=time().mt_rand().'.'.$ext;
				//生成目录
				$year=date('Y');
				$month=date('m');
				$day=date('d');
				$dir=$upload.'/'.$year.'-'.$month.'-'.$day;
				if(!file_exists($dir)){
					mkdir($dir);
				}
				$dst=$dir.'/'.$dst_n;
				move_uploaded_file($tmp_name,$dst);
				$pim=$year.'-'.$month.'-'.$day.'/'.$dst_n;
				return $pim;

				// 图片缩放
				// thumb($dst,100,100);
				// thumb($dst,50,50);
				echo "<script>location.href='index.php';alert('文件上传成功')</script>";
			}else{
				echo "<script>location.href='index.php';alert('文件太大！')</script>";
				exit;
			}
		}else{
			echo "<script>location.href='index.php';alert('文件格式不对')</script>";
			exit;
		}
	}

	/**
	这是一个验证码函数
	@param $fontsrc 字体
	@$num 验证码显示字体个数
	返回资源
*/
	function yzm($fontsrc,$num=4){
		// 1.创建画布
		session_start();
		$im=imagecreatetruecolor(150,50);
		// 2.配颜色
		$white=imagecolorallocate($im,255,255,255);
		$black=imagecolorallocate($im,0,0,0);
		$green=imagecolorallocate($im,0,255,0);
		// 3.画布颜色
		imagefill($im,0,0,$white);
		// 4.添加干扰素
		for ($i=0; $i < 500; $i++) {
			imagesetpixel($im, mt_rand(0,150), mt_rand(0,50), $black);
		}
		for ($i=0; $i<20; $i++) {
			imageline($im, mt_rand(0,150), mt_rand(0,50), mt_rand(0,150), mt_rand(0,50),$black);
		}
		$arr=array_merge(range("a","z"),range("A","Z"),range(0,9));
		shuffle($arr);
		$str=implode(' ',array_slice($arr,0,$num));
		$_SESSION['code']=$str;
		imagettftext($im, 120/$num, 0, 10, 40, $green, $fontsrc,$str);
		header("Content-type:image/png");
		imagepng($im);
	}
	/**
	@param $total   信息总数
	@param $shownu  显示数量,默认20
	@param $url   本页链接
	gloabl $sqlfirst mysql数据库起始项  全局变量
	return $pagecon  分页导航内容
*/
	function page($total,$shownu=20,$url=''){
		global $sqlfirst;

		if(isset($_GET['page'])){
			$page=$_GET['page'];
		}else{
			$page=1;
		}
		//如果$url使用默认,即空值,则赋值为本页URL
		if(!$url){
			$url=$_SERVER["REQUEST_URI"];
		}
		//URL分析
		$parse_url=parse_url($url);
		@$url_query=$parse_url["query"];  //取出在问号?之后内容
		// 当有参数的时候包括分页参数
		if($url_query){
			//把除了分页的参数拿出来
			$url_query=preg_replace("/(&?)(page=$page)/","",$url_query);
			//把路径的参数部分用除了分页的参数替换
			$url = str_replace($parse_url["query"],$url_query,$url);
			//如果替换成功说明有其他参数
			if($url_query){
				$url .= "&page";
			//替换失败说明没有其他参数
			}else{
				$url .= "page";
			}
		}else{
			// 一开始没有其他参数
			$url .= "?page";
		}

		//页码计算
		$lastpg=ceil($total/$shownu);  //最后页,总页数
		$prepg=$page-1; //上一页
		$nextpg=($page<$lastpg ? $page+1 : $lastpg); //下一页
		$sqlfirst=($page-1)*$shownu;

		//开始分页导航内容
		$pagecon = "显示第 ".($total?($sqlfirst+1):0)."-".min($sqlfirst+$shownu,$total)." 条记录，共 <B>$total</B> 条记录";
		if($lastpg<=1){
			return false;  //如果只有一页则跳出
		}
		if($page!=1){
			$pagecon .=" <a href='$url=1'>首页</a> ";
		}else{
			$pagecon .=" 首页 ";
		}
		if($prepg){
			$pagecon .=" <a href='$url=$prepg'>前页</a> ";
		}else{
			$pagecon .=" 前页 ";
		}
		if($nextpg){
			$pagecon .=" <a href='$url=$nextpg'>后页</a> ";
		}else{
			$pagecon .=" 后页 ";
		}
		if($page!=$lastpg){
			$pagecon.=" <a href='$url=$lastpg'>尾页</a> ";
		}else{
			$pagecon .=" 尾页 ";
		}
		//下拉跳转列表,循环列出所有页码
		$pagecon .="　到第 <select name='topage' size='1' onchange='window.location=\"$url=\"+this.value'>\n";
		for($i=1;$i<=$lastpg;$i++){
			if($i==$page){
				$pagecon .="<option value='$i' selected>$i</option>\n";
			}else{
				$pagecon .="<option value='$i'>$i</option>\n";
			}
		}
		$pagecon .="</select> 页，共 $lastpg 页";
		return $pagecon;
	}
 ?>
