<?php
 include_once("../config.inc.php");
 include("chksession.php");
?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php	
				$Id_gallerry_del=$_GET["Id_gallerry"];

 $sql_gallerry="select * from tbl_gallerry where Id_gallerry=$Id_gallerry_del";
            $result_gallerry=mysqli_query($conn,$sql_gallerry);
           $rs_gallerry=mysqli_fetch_array($result_gallerry);
				$Id_gallerry=$rs_gallerry["Id_gallerry"];	
				$Img_gallerry=$rs_gallerry["Img_gallerry"];

			@unlink("../gallerry/$Img_gallerry");

				$sql="delete from tbl_gallerry where Id_gallerry=$Id_gallerry_del";
				mysqli_query($conn,$sql);

			echo"<script>alert('ลบข้อมูลเรียบร้อยแล้ว')</script>";
			echo"<script>window.location='gallerry.php'</script>";
		mysqli_close();	
		exit();
?>