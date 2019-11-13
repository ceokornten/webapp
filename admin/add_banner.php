<?php
 include_once("../config.inc.php");
 include("chksession.php");
 ?>
<meta charset="UTF-8">
<?php
				$Img_banner=$_FILES['Img_banner']['tmp_name']; //ชื่อของ tmp file
				$Img_banner_name=$_FILES['Img_banner']['name']; //เพิ่มส่วนนี้มา เพื่อเป็นการรับชื่อของไฟล์
				$Img_banner_size = $_FILES['Img_banner']['size'];  //เพิ่มส่วนนี้มา เพื่อเป็นการรับค่าของ File_size

	if($Img_banner=="")
	{
		echo"<script>alert('กรุณาเลือกรูปภาพ')</script>";
		echo"<script>window.location='set_config.php'</script>";
		exit();			
	}else
	{
		$sql = "INSERT INTO tbl_banner
				VALUES (null,'','')";
				$result=mysqli_query($conn,$sql);

	$ext = strtolower(end(explode('.',$Img_banner_name)));
				if($ext=="png" or $ext=="jpg" or $ext=="gif" or $ext=="jpeg" or $ext=="GIF" or $ext=="PNG" or $ext=="JPG" or $ext=="JPEG") {
					$sql="select max(Id_banner) from tbl_banner";
					$result=mysqli_query($conn,$sql);
					$r=mysqli_fetch_array($result);
					$id_photo=$r[0];
					$photomember=$id_photo.".".$ext;
					
					move_uploaded_file($Img_banner,"../imgslide/".$photomember);

/*
					$size=getimagesize($Img_gallerry);
					$width=640; //กำหนด fix ขนาด width
					$height=640; //ทำการ * หา  height
					
					//$width=$size[0]; //กำหนด fix ขนาด width
					//$height=$size[1]; //ทำการ * หา  height
					
					//$height=300; //กำหนด fix ขนาด width
					//$width=round($height*$size[0]/$size[1]); //ทำการ * หา  height
					
					//$width=400; //กำหนด fix ขนาด width
					//$height=round($width*$size[1]/$size[0]); //ทำการ * หา  height
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
							imagejpeg($images_fin,"../imgslide/$photomember"); //ส่งรูปไปที่ folder file_resize
						}
						if($ext=="png" or $ext=="PNG"){
							imagepng($images_fin,"../imgslide/$photomember"); //ส่งรูปไปที่ folder file_resize
						}
						if ($ext =="gif" or $ext=="GIF") {
							imagegif($images_fin,"../imgslide/$photomember");					 //ส่งรูปไปที่ folder file_resize
						}
						
				
					imagedestroy($ori_img); //จบการทำงานของ รูปภาพ
					imagedestroy($images_fin); //จบการทำงานของ รูปภาพ*/
					
						$sql2="update tbl_banner set Img_banner='$photomember',No_banner='$id_photo' where Id_banner='$id_photo'";
						mysqli_query($conn,$sql2);
		  /* จบ กรณีเงื่อนไขผ่านหมด จะเข้ามาทำในส่วนนี้*/
   	} else echo "<script>alert('นามสกุลต้องเป็น JPG , PNG , GIF เท่านั้น')</script>"; //if ของการตรวจสอบ นามสกุลของไฟล์

					echo"<script>alert('เพิ่มรูปภาพสไลด์เรียบร้อยแล้ว')</script>";
					echo"<script>window.location='set_config.php'</script>";
					exit();

	}
?>
