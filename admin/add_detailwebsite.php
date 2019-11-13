<?php
	include("../config.inc.php");
?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php		
				$Id_setting=$_REQUEST["Id_setting"];
				
				
				if(isset($_POST["Editdetailwebsitedetailhead"])) //ถ้ามีการเปลี่ยนแปลงหัวข้อเว็บไซต์จะอัพเดตส่วนนี้
				{
					$Detailhead_setting=$_REQUEST["Detailhead_setting"];	 //รับค่าหัวข้อเว็บไซต์
					$sqlupdatewebsite="update tbl_website set 
					Detailhead_setting='$Detailhead_setting'
					 where Id_setting='$Id_setting'";
					mysqli_query($conn,$sqlupdatewebsite);
					echo"<script>alert('ระบบได้อัพเดตหัวข้อรายละเอียดเรียบร้อยแล้ว')</script>";
					echo"<script>window.location='set_config.php'</script>";
					mysqli_close();
					exit();
				}

				if(isset($_POST["Editdetailwebsitepricetext"])) //ถ้ามีการเปลี่ยนแปลงข้อความราคาเว็บไซต์จะอัพเดตส่วนนี้
				{
					$Detailtext_price=$_REQUEST["Detailtext_price"];	 //รับค่าหัวข้อเว็บไซต์
					
					$sqlupdatewebsite="update tbl_website set 
					Detailtext_price='$Detailtext_price'
					 where Id_setting='$Id_setting'";
					mysqli_query($conn,$sqlupdatewebsite);
					echo"<script>alert('ระบบได้อัพเดตข้อความราคาเรียบร้อยแล้ว')</script>";
					echo"<script>window.location='set_config.php'</script>";
					mysqli_close();
					exit();
				}

				
				
				if(isset($_POST["Editdetailwebsiteprice"])) //ถ้ามีการเปลี่ยนแปลงรายยอดเงินจะอัพเดตส่วนนี้
				{
					$Price1_setting=$_REQUEST["Price1_setting"];	 //รับค่าข้อมูลยอดเงินจริง
					$Price2_setting=$_REQUEST["Price2_setting"];	 //รับค่าข้อมูลยอดเงินที่ลดมา
					$sqlupdatewebsite="update tbl_website set 
					Price1_setting='$Price1_setting',
					Price2_setting='$Price2_setting'
					 where Id_setting='$Id_setting'";
					mysqli_query($conn,$sqlupdatewebsite);
					echo"<script>alert('ระบบได้อัพเดตราคาขายสินค้าเรียบร้อยแล้ว')</script>";
					echo"<script>window.location='set_config.php'</script>";
					mysqli_close();
					exit();
				}
				
				if(isset($_POST["Editdetailwebsite"])) //ถ้ามีการเปลี่ยนแปลงรายละเอียดเว็บไซต์จะอัพเดตส่วนนี้
				{
					$Detail_setting=$_REQUEST["Detail_setting"];	 //รับค่าข้อมูลเว็บไซต์ใน texteditor
						//update sql ข้อมูล
					$sqlupdatewebsite="update tbl_website set 
					Detail_setting='$Detail_setting'
					 where Id_setting='$Id_setting'";
					mysqli_query($conn,$sqlupdatewebsite);
					echo"<script>alert('ระบบได้อัพเดตรายละเอียดเว็บไซต์ของคุณเรียบร้อยแล้ว')</script>";
					echo"<script>window.location='set_config.php'</script>";
					mysqli_close();
					exit();
				}
				
				
				
				if(isset($_POST["Editdetailwebsite2"])) //ถ้ามีการเปลี่ยนแปลงสเปคสินค้าจะอัพเดตส่วนนี้
				{
					$Detail2_setting=$_REQUEST["Detail2_setting"];	 //รับค่าข้อมูลเว็บไซต์ใน texteditor
						//update sql ข้อมูล
					$sqlupdatewebsite="update tbl_website set 
					Detail2_setting='$Detail2_setting'
					 where Id_setting='$Id_setting'";
					mysqli_query($conn,$sqlupdatewebsite);
					echo"<script>alert('ระบบได้อัพเดตสเปคสินค้าของคุณเรียบร้อยแล้ว')</script>";
					echo"<script>window.location='set_config.php'</script>";
					mysqli_close();
					exit();
				}
				
				if(isset($_POST["Editpromotion"])) //ถ้ามีการเปลี่ยนแปลงเวลาโปรโมชั่นจะมาทำส่วนนี้
				{
					$timedate=$_REQUEST["timedate"];	
					$timemonth=$_REQUEST["timemonth"];
					$timeyear=$_REQUEST["timeyear"];
					$timehou=$_REQUEST["timehou"];
					$timemin=$_REQUEST["timemin"];
					$promotion = $timemonth." ".$timedate.",".$timeyear." ".$timehou.":".$timemin.":00"; //รวมเวลาให้อยู่ใน Format
		
		//อัพเดตเวลาโปรโมชั่น
		$sqlupdatepromotion="update tbl_website set 
		Promotion='$promotion'
		 where Id_setting='$Id_setting'";
		mysqli_query($conn,$sqlupdatepromotion);
			echo"<script>alert('ระบบได้อัพเดตเวลาโปรโมชั่นของคุณเรียบร้อยแล้ว')</script>";
			echo"<script>window.location='set_config.php'</script>";
			mysqli_close();
			exit();
				}
				

?>