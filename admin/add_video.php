<?php
 include_once("../config.inc.php");
 include("chksession.php");
 ?>
<meta charset="UTF-8">
<?php
				$Id_setting = $_REQUEST["Id_setting"];
				$autoplay = $_REQUEST["autoplay"];
				$Img_banner=$_FILES['Video_banner']['tmp_name']; //ชื่อของ tmp file
				$Img_banner_name=$_FILES['Video_banner']['name']; //เพิ่มส่วนนี้มา เพื่อเป็นการรับชื่อของไฟล์
				$Img_banner_size = $_FILES['Video_banner']['size'];  //เพิ่มส่วนนี้มา เพื่อเป็นการรับค่าของ File_size



	if($Img_banner=="")
	{
		if($autoplay=="") //ถ้าไม่ได้ติ๊ก autoplay
{
	$sql2="update tbl_website set Video_setting='video.".$ext."' where Id_setting='$Id_setting'";
	mysqli_query($conn,$sql2);
}else
{
	$sql2="update tbl_website set Video_setting='video,autoplay.".$ext."' where Id_setting='$Id_setting'";
	mysqli_query($conn,$sql2);
}
		echo"<script>alert('Update')</script>";
		echo"<script>window.location='set_config.php'</script>";
		exit();			
	}else
	{
	$ext = strtolower(end(explode('.',$Img_banner_name)));	
	move_uploaded_file($Img_banner,"../video/video.".$ext);
					
					if($autoplay<>"") //ถ้าติ๊ก autoplay มาทำตรงนี้
{
	$sql2="update tbl_website set Video_setting='video,autoplay.".$ext."' where Id_setting='$Id_setting'";
}else
{
	$sql2="update tbl_website set Video_setting='video.".$ext."' where Id_setting='$Id_setting'";
}mysqli_query($conn,$sql2);
						
					echo"<script>alert('เพิ่ม Video เรียบร้อยแล้ว')</script>";
					echo"<script>window.location='set_config.php'</script>";
					exit();

	}
?>
