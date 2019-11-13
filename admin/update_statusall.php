<?php
	include("../config.inc.php");
?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php		
				$day = $_REQUEST["day"];

									$Id_order=$_REQUEST["Id_order"];	
									$Status=$_REQUEST["Status"];
									
								
$sqls2="update tbl_order set 
		Status_order='ส่งแล้ว'
		 where status_order='order'";
	mysqli_query($conn,$sqls2);
	/*echo $sqls2;*/

echo"<script>alert('ระบบได้อัพเดตเว็บไซต์ของคุณเรียบร้อยแล้ว')</script>";
			echo"<script>window.location='date.php?day=$day'</script>";
			mysqli_close();
			exit();

			
						
	

?>