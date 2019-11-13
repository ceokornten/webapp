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
