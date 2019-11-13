<?php
 include_once("../config.inc.php");
 include("chksession.php");
?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php	
				$Id_banner_del=$_GET["Id_banner"];

$sql_banner="select * from tbl_banner where Id_banner=$Id_banner_del";
								$result_banner=mysqli_query($conn,$sql_banner);
								$rs_banner=mysqli_fetch_array($result_banner);
									$Id_banner=$rs_banner["Id_banner"];	
									$Img_banner=$rs_banner["Img_banner"];
									$No_banner=$rs_banner["No_banner"];
									
							

			@unlink("../imgslide/$Img_banner");

				$sql="delete from tbl_banner where Id_banner=$Id_banner_del";
				mysqli_query($conn,$sql);

			echo"<script>alert('ลบข้อมูลเรียบร้อยแล้ว')</script>";
			echo"<script>window.location='set_config.php'</script>";
		mysqli_close();	
		exit();
?>