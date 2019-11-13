<?php
 include_once("../config.inc.php");
 include("chksession.php");
?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php	
				$Id_review=$_GET["Id_review"];

$sql_review="select * from tbl_review where Id_review=$Id_review";
								$result_review=mysqli_query($conn,$sql_review);
								$rs_review=mysqli_fetch_array($result_review);
									$Img_review=$rs_banner["Img_review"];							
			@unlink("../imgreview/$Img_review");

				$sql2="update tbl_review set 
						Img_review=''
						where Id_review=$Id_review";
						mysqli_query($conn,$sql2);

			echo"<script>alert('ลบรูปภาพเรียบร้อยแล้ว')</script>";
			echo"<script>window.location='review.php'</script>";
			mysqli_close();	
			exit();
?>