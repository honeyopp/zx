<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>360手机管理系统用户注册</title>
<link href="../public/css/login.css" rel="stylesheet" rev="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../public/js/jQuery1.7.js"></script>
<script type="text/javascript" src="../public/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="../public/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="../public/js/jquery.SuperSlide.js"></script>
<script type="text/javascript" src="../public/js/Validform_v5.3.2_min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var $tab_li = $('#tab ul li');
	$tab_li.hover(function(){
		$(this).addClass('selected').siblings().removeClass('selected');
		var index = $tab_li.index(this);
		$('div.tab_box > div').eq(index).show().siblings().hide();
	});
});
</script>
<script type="text/javascript">
$(function(){
/*学生登录信息验证*/
$("#stu_username_hide").focus(function(){
 var username = $(this).val();
 if(username=='输入用户名'){
 $(this).val('');
 }
});
$("#stu_username_hide").focusout(function(){
 var username = $(this).val();
 if(username==''){
 $(this).val('输入用户名');
 }
});
$("#stu_password_hide").focus(function(){
 var username = $(this).val();
 if(username=='输入密码'){
 $(this).val('');
 }
});
$("#stu_password_hide").focusout(function(){
 var username = $(this).val();
 if(username==''){
 $(this).val('输入密码');
 }
});
$("#stu_code_hide").focus(function(){
 var username = $(this).val();
 if(username=='输入验证码'){
 $(this).val('');
 }
});
$("#stu_code_hide").focusout(function(){
 var username = $(this).val();
 if(username==''){
 $(this).val('输入验证码');
 }
});
// $(".stu_login_error").Validform({
// 	tiptype:function(msg,o,cssctl){
// 		var objtip=$(".stu_error_box");
// 		cssctl(objtip,o.type);
// 		objtip.text(msg);
// 	},
// 	ajaxPost:true
// });

	//根据窗口宽度生成图片宽度
	var width = $(window).width();
	$(".screenbg ul img").css("width",width+"px");
});
</script>
</head>

<body>
<div id="tab">
  <ul class="tab_menu">
    <li class="selected">注册</li>
  </ul>
  <div class="tab_box">
    <!-- 登录开始 -->
    <div>
      <div class="stu_error_box"></div>
      <form action="do_reg.php" method="post" class="stu_login_error">
        <div id="username">
          <label>账&nbsp;&nbsp;&nbsp;号：</label>
          <input type="text" id="stu_username_hide" name="username" value="输入用户名" nullmsg="用户名不能为空！"  sucmsg="用户名验证通过！"/>
          <!--ajaxurl="demo/valid.jsp"-->
        </div>
        <div id="password">
          <label>密&nbsp;&nbsp;&nbsp;码：</label>
          <input type="password" id="stu_password_hide" name="password" value="输入密码" nullmsg="密码不能为空！"  sucmsg="密码验证通过！"/>
        </div>
        <div id="code">
          <label>验证码：</label>
          <input type="text" id="stu_code_hide" name="yzm"  value="输入验证码" nullmsg="验证码不能为空！" datatype="*4-4" errormsg="验证码有4位数！" sucmsg="验证码验证通过！"/>
          <img src="./yzm/yzm.php" alt=""  onclick="this.src='./yzm/yzm.php?rand='+Math.random()+''" title="点击更换" alt="验证码占位图"/> </div>
        <div id="remember">
          <input type="checkbox" name="remember">
          <label>记住密码</label>
        </div>

          <button type="submit">登录</button>
        </div>
      </form>
      <p>已有账号,<a href="../login/index.php">请登录</a> </p>
    </div>
   <!-- 登录结束-->
   </div>
 </div>
<div class="bottom">©2017  <a href="javascript:;" target="_blank">关于</a> <span>蜀ICP证030173号</span><img width="13" height="16" src="../public/img/login/copy_rignt_24.png" /></div>
<div class="screenbg">
  <ul>
    <li><a href="javascript:;"><img src="../public/img/login/0.jpg"></a></li>
    <li><a href="javascript:;"><img src="../public/img/login/1.jpg"></a></li>
    <li><a href="javascript:;"><img src="../public/img/login/login-bg.png"></a></li>
  </ul>
</div>
</body>
</html>
