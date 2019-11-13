<?php
		include("../config.inc.php");
 ?>
   <meta charset="utf-8">
 <?php

 $Username_login=$_POST['Username_login'];
 $Password_login=$_POST['Password_login'];


 $ex = explode("=",$Username_login);
if($ex[1]<>"")
{
			echo"<script>alert('คุณกำลังทำ Injection php ?')</script>";
			echo"<script>window.location='index.php'</script>";
			exit();
}


if($Username_login=="root" and $Password_login=="cc1M@IN12") //User และ Pass สามารถแก้ไขได้ตรงนี้
{
	$_SESSION["sessionid"]=session_id();
	$_SESSION["username"]=$Username_login;
	echo"<script>alert('ยินดีต้อนรับ $_SESSION[username] ได้เข้าสู่ระบบเรียบร้อยแล้ว')</script>";
	echo"<script>window.location='main_menu.php'</script>";
	exit();
}else
{
	echo"<script>alert('Username หรือ Password ของคุณไม่ถูกต้องกรุณากรอกใหม่อีกครั้ง')</script>";
	echo"<script>window.location='index.php'</script>";
	exit();
}
?>
