<?php
		include("../config.inc.php");
		include("chksession.php");
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Kanit:300" rel="stylesheet">
    
 <meta name="keywords" content="ระบบหลังบ้าน" />
  <meta name="description" content="ระบบหลังบ้าน">
  

    <title><?=$Title_bar?></title>
    
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
        <script src="js/fileinput.js" type="text/javascript"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
        <style type="text/css">
        
.btn .btn-default .btn-secondary .kv-hidden .fileinput-cancel .fileinput-cancel-button
{
	display:none;
}
.btn-default
{
	display:none !important;
}
	.file-upload {
  position: relative;
  overflow: hidden;
  margin: 10px; }

.file-upload input.file-input {
  position: absolute;
  top: 0;
  right: 0;
  margin: 0;
  padding: 0;
  font-size: 20px;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0); }
  
        </style>
        
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include_once("left_header.php");?>

<?php
	   $sql_setting="select * from tbl_website where Id_setting=1";
								  $result_setting=mysqli_query($conn,$sql_setting);
								  $rs_setting=mysqli_fetch_array($result_setting);
									$Id_setting=$rs_setting["Id_setting"];	
									$Detail_setting=$rs_setting["Detail_setting"];
									$Detail2_setting=$rs_setting["Detail2_setting"];
									$Promotion=$rs_setting["Promotion"]; 
                  $Detailtext_price=$rs_setting["Detailtext_price"];  
									$Price1_setting=$rs_setting["Price1_setting"];	
									$Price2_setting=$rs_setting["Price2_setting"];
									$Video_setting=$rs_setting["Video_setting"];	
									$Use_setting=$rs_setting["Use_setting"];	
									$Detailhead_setting=$rs_setting["Detailhead_setting"];	
	   ?>
       
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ตั้งค่าเว็บไซต์หน้าแรก index.php</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            
            <div class="well" style="width:60%;">
  <form action="add_detailwebsite.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="Id_setting" value="<?=$Id_setting?>">
    <input type="hidden" name="Editdetailwebsitedetailhead" value="1">
  <div class="form-group">
    <label for="detailhead">รายละเอียดหัวข้อเว็บไซต์:</label>
    <input type="text" name="Detailhead_setting" class="form-control" id="detailhead" style="font-size:16px;text-shadow: 2px 2px 8px #FF0000;color:#000;" value="<?=$Detailhead_setting?>" required>
  </div>
  <div class="clearfix"></div>
  <input type="submit" class="btn btn-success" value="อัพเดต" style="width:100%;">
</form>
  </div>


  <div class="well" style="width:60%;">
  <form action="add_detailwebsite.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="Id_setting" value="<?=$Id_setting?>">
    <input type="hidden" name="Editdetailwebsitepricetext" value="1">
  <div class="form-group">
    <label for="detailpricetext">ราคาสินค้าในเว็บ เป็นข้อความ <font color="red">ใช้ HTML ได้</font></label>
    <input type="text" name="Detailtext_price" class="form-control" id="detailpricetext" style="font-size:16px;color:#000;" value="<?=$Detailtext_price?>" required>
  </div>
  <div class="clearfix"></div>
  <input type="submit" class="btn btn-success" value="อัพเดต" style="width:100%;">
</form>
  </div>
  
            
            <div class="alert alert-info">
  <strong>ตั้งค่าหน้าแรก index.php</strong> ตั้งค่าภาพ Slide ด้านบน
  </div>
  
  <?php //ถ้ามีการเปลี่ยนการแสดง Slide หรือ Video จะทำส่วนนี้
  if(isset($_GET["Status_use"]))
  {
	  $sql_updateusesetting="update tbl_website set 
						Use_setting='".$_GET["Status_use"]."'
						where Id_setting='".$_GET["Id_setting"]."'";
						mysqli_query($conn,$sql_updateusesetting);
						echo"<script>alert('เปลี่ยนการแสดงผลส่วนหัวเรียบร้อยแล้ว')</script>";
						echo"<script>window.location='set_config.php'</script>";
						exit();
  }
  	
	?>
  <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?=$Use_setting?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
  <?php 
  if($Use_setting=="Video")
  {
	  ?><li><a href="set_config.php?Status_use=Slide&Id_setting=<?=$Id_setting?>">Slide</a></li><?php
  }elseif($Use_setting=="Slide")
  {
	  ?><li><a href="set_config.php?Status_use=Video&Id_setting=<?=$Id_setting?>">Video</a></li><?php
  }
  ?>
  </ul>
</div>

<?php 
if($Use_setting=="Video")
{
?>
  <div class="banner">
  <?php 
  if(strlen($Video_setting)>10) //ถ้ามีการใส่ autoplay จะทำเงื่อนไขนี้
{
?><video width="250" height="auto" controls autoplay loop><?php
}else
{
	?><video width="250" height="auto" controls loop><?php
}
  ?>
 <source src="../video/video.ogg" type="video/ogg" />
 <source src="../video/video.mp4" type="video/mp4" />
 <source src="../video/video.webm" type="video/webm" />
 Your browser does not support the video tag.
 </video>
        </div>
        <form action="add_video.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?=$Id_setting?>" name="Id_setting">
  <label>Video (1 File รองรับเฉพาะ .<strong>Mp4</strong>)</label>
  <input type="file" name="Video_banner" class="form-control" style="width:350px;">
  <?php 
  if(strlen($Video_setting)>10) //ถ้ามีการใส่ autoplay จะทำเงื่อนไขนี้
{
?><input type="checkbox" name="autoplay" value="autoplay" checked> autoplay<?php
}else
{
?><input type="checkbox" name="autoplay" value="autoplay"> autoplay<?php
}
  ?>
  
  <button class="btn btn-success btn-xs" type="submit">อัพเดต</button>
  </form>
  <br>
<?php } ?>

  <?php 
if($Use_setting=="Slide")
{
?>
<br>

  <button class="btn btn-primary" data-toggle="modal" data-target="#myModaladdslide"><i class="fa fa-photo fa-fw"></i> เพิ่มภาพสไลด์</button>
 
              <!-- Mymodal school-->
            <div class="modal fade" id="myModaladdslide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                 <form action="add_banner.php" method="post" enctype="multipart/form-data">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">เพิ่มแบนเนอร์ 640*640 px</h4>
                                        </div>
                                        <div class="modal-body">
                                          <label>รูปภาพ JPG,PNG,GIF</label>
                                            <input type="file" name="Img_banner" class="form-control" required>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">บันทึก</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                    </form>
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- End Mymodal school-->

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>รูปภาพ</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
								$no=1;
								$sql_banner="select * from tbl_banner Order by No_banner asc ";
								$result_banner=mysqli_query($conn,$sql_banner);
								while($rs_banner=mysqli_fetch_array($result_banner))
								{
									$Id_banner=$rs_banner["Id_banner"];	
									$Img_banner=$rs_banner["Img_banner"];
									$No_banner=$rs_banner["No_banner"];
									?>
                                        <tr>
                                            <td>
                                          <form action="up_banner.php" method="post" enctype="multipart/form-data">
                                          <input type="hidden" value="<?=$Id_banner?>" name="Id_banner">
                                            <input type="number" value="<?=$No_banner?>" name="No_banner" style="width:65px;"><input type="submit" class="btn btn-danger btn-xs"></form></td>
                                            <td><a href="../imgslide/<?=$Img_banner?>" target="_blank"><img src="../imgslide/<?=$Img_banner?>" style="width:auto;height:100px"></td></td>
                                           
                                            <td> <a href="del_banner.php?Id_banner=<?=$Id_banner?>" onclick="return confirm('คุณแน่ใจที่จะลบข้อมูลนี้ ใช่หรือไม่')"><button class="btn btn-danger btn-xs">ลบ</button></a></td>
                                        </tr>                                
                                <?php 
								$no++;
								}
								?>
                                    </tbody>
                                </table>
                        
   <?php } ?>
   <div class="clearfix"></div>
  
  
  
            <div class="alert alert-danger">
  <strong>ตั้งค่าหน้าแรก</strong> ตั้งค่าเบื้องต้น
  </div>
  <div class="well" style="width:50%;">
  <form action="add_detailwebsite.php" method="post" enctype="multipart/form-data">
  	<input type="hidden" name="Id_setting" value="<?=$Id_setting?>">
    <input type="hidden" name="Editdetailwebsiteprice" value="1">
  <div class="form-group" style="width:49%;display:inline-block;">
    <label for="price1">ราคาเต็ม :</label>
    <input type="number" name="Price1_setting" class="form-control" id="price1" style="color:red;font-weight:bold;" value="<?=$Price1_setting?>" required>
  </div>
  <div class="form-group" style="width:49%;display:inline-block;">
    <label for="price2">ลดเหลือ :</label>
    <input type="number" name="Price2_setting" class="form-control" id="price2"  value="<?=$Price2_setting?>" required>
  </div>
  <div class="clearfix"></div>
  <input type="submit" class="btn btn-success" value="อัพเดต" style="width:100%;">
</form>
  </div>
  
  
            <div class="alert alert-warning">
  <strong>ตั้งค่าหน้าแรก</strong> ตั้งค่าเวลาหมดโปรโมชั่น
  </div>
         <form action="add_detailwebsite.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="Id_setting" value="<?=$Id_setting?>">
            <input type="hidden" name="Editpromotion" value="1">
          <font color="red"><h4 align="center">วันที่หมดโปรโมชั่น <?=$Promotion?></h4> </font>
             <div class="col-md-3 text-right"><p style="font-size:16px;"> เลือกวัน Promotion<br></p></div>
            <div class="col-md-6">
            
            วันที่ :
            <select name="timedate">
             <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>

            </select>
            เดือน :
             <select name="timemonth">
            <option value="JAN">มกราคม</option>
            <option value="FEB">กุมภาพันธ์</option>
            <option value="MAR">มีนาคม</option>
            <option value="APR">เมษายน</option>
            <option value="MAY">พฤษภาคม</option>
            <option value="JUN">มิถุนายน</option>
            <option value="JUL">กรกฏาคม</option>
            <option value="AUG">สิงหาคม</option>
            <option value="SEP">กันยายน</option>
            <option value="OCT">ตุลาคม</option>
            <option value="NOV">พฤศจิกายน</option>
            <option value="DEC">ธันวาคม</option>
            </select>
             ปี :
            <select name="timeyear">
            <option value="2561">2561</option>
            <option value="2562">2562</option>
            <option value="2563">2563</option>
            <option value="2564">2564</option>
            </select>
            
            ชั่วโมง :
            <select name="timehou">
            <option value="00">00</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            </select>
            
            
            
            
              นาที :
            <select name="timemin">
            <option value="00">00</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
            <option value="45">45</option>
            <option value="46">46</option>
            <option value="47">47</option>
            <option value="48">48</option>
            <option value="49">49</option>
            <option value="50">50</option>
            <option value="51">51</option>
            <option value="52">52</option>
            <option value="53">53</option>
            <option value="54">54</option>
            <option value="55">55</option>
            <option value="56">56</option>
            <option value="57">57</option>
            <option value="58">58</option>
            <option value="59">59</option>
         
            </select>
           
            </div><input type="submit" value="Update" class="btn btn-success btn-sm">
            <div class="clearfix"></div><br>
            
             </form>
             
                
            
       
       <script src="ckeditor.js"></script>
		<!-- Sample 1 -->
        <div class="alert alert-info">
  <strong>ตั้งค่าหน้าแรก</strong> รายละเอียดสินค้า
  </div>
        <form action="add_detailwebsite.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="Editdetailwebsite" value="1">
        <input type="hidden" name="Id_setting" value="<?=$Id_setting?>">
		<textarea cols="80" id="txtDescription1" name="Detail_setting" rows="10" style="min-height:300px;"><?=$Detail_setting?></textarea>
        <input type="submit" class="btn btn-success" value="อัพเดตข้อมูล" style="width:640;">
        </form>

		<script>
			CKEDITOR.replace('txtDescription1', {
	width : '640',
	height:'350'
			});
		</script>
       
       <h1></h1>
       <div class="alert alert-warning">
  <strong>ตั้งค่าหน้าแรก</strong> สเปคสินค้า
  </div>
       <form action="add_detailwebsite.php" method="post" enctype="multipart/form-data">
       <input type="hidden" name="Editdetailwebsite2" value="1">
        <input type="hidden" name="Id_setting" value="<?=$Id_setting?>">
		<textarea cols="80" id="txtDescription2" name="Detail2_setting" rows="10" style="min-height:300px;"><?=$Detail2_setting?></textarea>
        <input type="submit" class="btn btn-success" value="อัพเดตข้อมูล" style="width:640;">
        </form>

		<script>
			CKEDITOR.replace('txtDescription2', {
	width : '660',
	height:'350'
			});
		</script>
                    

            </div>
            <!-- /.row -->
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<script>
  $("#file-3").fileinput({
        theme: 'fa',
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-primary btn-lg",
        fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
        overwriteInitial: false,
        initialPreviewAsData: true,
        initialPreview: [],
        initialPreviewConfig: []
    });
</script>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
    


<!--
<script>
$("form").submit(function(){
    var allText = $("#detail").text();
    allText.replace(/\r\n/g, "<br />");
    $("#detail").text(allText);
});
</script>
-->
</body>

</html>
