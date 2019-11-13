<?php
 include_once("../config.inc.php");
 include("chksession.php");
 ?>
<meta charset="UTF-8">
<?php
				$Id_review = $_REQUEST["Id_review"];
				
				
				$Img_gallerry=$_FILES['Img_review']['tmp_name']; //ชื่อของ tmp file
				$Img_gallerry_name=$_FILES['Img_review']['name']; //เพิ่มส่วนนี้มา เพื่อเป็นการรับชื่อของไฟล์
				$Img_gallerry_size = $_FILES['Img_review']['size'];  //เพิ่มส่วนนี้มา เพื่อเป็นการรับค่าของ File_size

				$Datetime_review = $_REQUEST["Datetime_review"];
				$Fullname_review = $_REQUEST["Fullname_review"];
				$Level_review = $_REQUEST["Level_review"];
				$Message_review = $_REQUEST["Message_review"];
				$timehou = $_REQUEST["timehou"];
				$timemin = $_REQUEST["timemin"];
				
				if($Level_review==0 || $Datetime_review=="" || $Fullname_review=="" || $Datetime_review=="" || $Message_review=="")
				{
					echo"<script>alert('กรุณาระบุข้อมูลให้ครบถ้วน')</script>";
					echo"<script>window.location='review.php'</script>";
					exit();	
				}
				$Fulldatetime_review =  $Datetime_review." ".$timehou.":".$timemin.":".date("s"); //รวม Format วันเวลา 2018-08-29 18:27:06
					
					$sql2="update tbl_review set 
					Datetime_review='$Fulldatetime_review',
					Fullname_review='$Fullname_review',
					Level_review='$Level_review',
					Message_review='$Message_review'
					 where Id_review='$Id_review'";
					mysqli_query($conn,$sql2);
						
	if(!$Img_gallerry=="")
	{
	$ext = strtolower(end(explode('.',$Img_gallerry_name)));
				if($ext=="png" or $ext=="jpg" or $ext=="gif" or $ext=="jpeg" or $ext=="GIF" or $ext=="PNG" or $ext=="JPG" or $ext=="JPEG") {
					$sql="select max(Id_review) from tbl_review";
					$result=mysqli_query($sql);
					$r=mysqli_fetch_array($result);
					$id_photo=$r[0];
					$photomember=$id_photo.".".$ext;
					
					$sql_review="select * from tbl_review where Id_review=$Id_review";
								$result_review=mysqli_query($sql_review);
								$rs_review=mysqli_fetch_array($result_review);
									$Img_review=$rs_banner["Img_review"];							
									@unlink("../imgreview/$Img_review");
			
					
					//move_uploaded_file($Img_gallerry,"../gallerry/".$photomember);

					$size=getimagesize($Img_gallerry);
					//$width=$size[0]; //กำหนด fix ขนาด width
					//$height=$size[1]; //ทำการ * หา  height
					
					//$height=300; //กำหนด fix ขนาด width
					//$width=round($height*$size[0]/$size[1]); //ทำการ * หา  height
					
					$width=400; //กำหนด fix ขนาด width
					$height=round($width*$size[1]/$size[0]); //ทำการ * หา  height
					//$height=$size[1];
					
					$images_fin = imagecreatetruecolor($width, $height); //ใช้ function ในส่วนของสี
					
					if ($ext =="jpg" or $ext =="jpeg" or $ext =="JPG" or $ext =="JPEG") {
							$ori_img = imagecreatefromjpeg($Img_gallerry);
					} else if ($ext =="png" or $ext =="PNG") {
					$ori_img = imagecreatefrompng($Img_gallerry); 
					$transparent = imagecolorallocatealpha($images_fin, 0, 0, 0, 127); //ทำ transparent 
					imagefill($images_fin,$width, $height,  $transparent);
					imagealphablending($images_fin, false); 
					imagesavealpha($images_fin, true);
					}else if ($ext =="gif" or $ext =="GIF") {
					$ori_img = imagecreatefromgif($Img_gallerry);
					$transparency = imagecolortransparent($ori_img); //ทำ transparent 
					$transparent_color  = imagecolorsforindex($ori_img, $trnprt_indx); 
					$transparency   = imagecolorallocate($images_fin, $trnprt_color['red'], $trnprt_color['green'], $trnprt_color['blue']);
					imagefill($images_fin, 0, 0, $transparency);
					imagecolortransparent($images_fin, $transparency);
					}
					$photoX = imagesx($ori_img); 
					$photoY = imagesy($ori_img);
					imagecopyresampled($images_fin, $ori_img, 0, 0,0,0, $width+1,$height+1, $photoX, $photoY);
					
				
						if ($ext =="jpg" or $ext =="jpeg" or $ext =="JPG" or $ext =="JPEG") {
							imagejpeg($images_fin,"../imgreview/$photomember"); //ส่งรูปไปที่ folder file_resize
						}
						if($ext=="png" or $ext=="PNG"){
							imagepng($images_fin,"../imgreview/$photomember"); //ส่งรูปไปที่ folder file_resize
						}
						if ($ext =="gif" or $ext=="GIF") {
							imagegif($images_fin,"../imgreview/$photomember");	 //ส่งรูปไปที่ folder file_resize
						}
						
					imagedestroy($ori_img); //จบการทำงานของ รูปภาพ
					imagedestroy($images_fin); //จบการทำงานของ รูปภาพ*/
					
						$sql2="update tbl_review set Img_review='$photomember' where Id_review='$id_photo'";
						mysqli_query($sql2);
		  /* จบ กรณีเงื่อนไขผ่านหมด จะเข้ามาทำในส่วนนี้*/
   	} else echo "<script>alert('นามสกุลต้องเป็น JPG , PNG , GIF เท่านั้น')</script>"; //if ของการตรวจสอบ นามสกุลของไฟล์
	}
	
					echo"<script>alert('แก้ไขข้อมูลรีวิวเรียบร้อยแล้ว')</script>";
					echo"<script>window.location='review.php'</script>";
					exit();
?>
