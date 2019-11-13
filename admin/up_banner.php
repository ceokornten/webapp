<?php
 include_once("../config.inc.php");
 include("chksession.php");
 ?>
<meta charset="UTF-8">
<?php
$Id_banner = $_REQUEST["Id_banner"];
$No_banner = $_REQUEST["No_banner"];

						$sql2="update tbl_banner set 
						No_banner='$No_banner'
						where Id_banner=$Id_banner";
						mysqli_query($conn,$sql2);

					echo"<script>alert('อัพเดตข้อมูลเรียบร้อยแล้ว')</script>";
					echo"<script>window.location='set_config.php'</script>";
					exit();
?>
