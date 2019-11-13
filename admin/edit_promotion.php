<?php
	include("../config.inc.php");
?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php		
$Id_item=$_REQUEST["Id_item"];	
									$timedate=$_REQUEST["timedate"];	
									$timemonth=$_REQUEST["timemonth"];
									$timeyear=$_REQUEST["timeyear"];
									$timehou=$_REQUEST["timehou"];
									$timemin=$_REQUEST["timemin"];
									
									$promotion = $timemonth." ".$timedate.",".$timeyear." ".$timehou.":".$timemin.":00";
			
$sqls2="update tbl_item set 
		Promotion='$promotion'
		 where Id_item='$Id_item'";
	mysqli_query($conn,$sqls2);

echo"<script>alert('ระบบได้อัพเดตเว็บไซต์ของคุณเรียบร้อยแล้ว')</script>";
			echo"<script>window.location='set_config.php'</script>";
			mysqli_close();
			exit();

			
						
	

?>