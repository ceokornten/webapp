<?php
 include_once("../config.inc.php");
 include("chksession.php");
 ?>
<meta charset="UTF-8">
<?php
$Date_date = $_REQUEST["Date_date"];

	if($Date_date=="")
	{
		echo"<script>alert('กรุณาเลือกวันที่')</script>";
		echo"<script>window.location='date.php'</script>";
		exit();			
	}else
	{
		$sqldate="select count(Id_date) from tbl_date where Date_date='$Date_date'";
					$resultdate=mysqli_query($conn,$sqldate);
					$rdate=mysqli_fetch_array($resultdate);
					echo $sqldate;
					if($rdate[0]>0)
					{
					echo"<script>alert('มีวันนี้ในระบบเรียบร้อยแล้ว')</script>";
					echo"<script>window.location='date.php'</script>";
					exit();
					}
					
		
		$sql = "INSERT INTO tbl_date
				VALUES (null,'','$Date_date')";
				$result=mysqli_query($conn,$sql);
				

					echo"<script>alert('บันทึกรายการนี้เรียบร้อยแล้ว')</script>";
					echo"<script>window.location='date.php'</script>";
					exit();

	}
?>
