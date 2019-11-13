<?php
 include_once("../config.inc.php");
 include("chksession.php");
 ?>
<meta charset="UTF-8">
<?php
$Id_review = $_REQUEST["Id_review"];
$No_review = $_REQUEST["No_review"];

						$sql2="update tbl_review set 
						No_review='$No_review'
						where Id_review=$Id_review";
						mysqli_query($conn,$sql2);

					echo"<script>alert('เลื่อนลำดับเรียบร้อยแล้ว')</script>";
					echo"<script>window.location='review.php'</script>";
					exit();
?>
