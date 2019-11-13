<?php
	include("../config.inc.php");
?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php		
				$Id_review=$_REQUEST["Id_review"];	
									$Status=$_REQUEST["Status"];
								
$sqls="update tbl_review set 
		Status_review='$Status'
		 where Id_review='$Id_review'";
	mysqli_query($conn,$sqls);

echo"<script>alert('อัพเดต สถานะเป็น $Status เรียบร้อยแล้ว')</script>";
			echo"<script>window.location='review.php'</script>";
			mysqli_close();
			exit();

			
						
	

?>