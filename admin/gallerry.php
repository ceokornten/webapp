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
    
   <meta name="keywords" content="ยาสีฟันบาบูเคลียร์" />
  <meta name="description" content="ยาสีฟันที่ดีที่สุด ยาสีฟันบาบูเคลียร์ ปากเหม็น ฟันเหลือง คราบชา คราบกาแฟ">
  
  

    <title><?=$Title_bar?></title>

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include_once("left_header.php");?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">แกลลอลี่</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            



            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                <div class="modal-content">
                <form action="add_gallerry.php" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">เพิ่มแกลลอลี่</h4>
                    </div>
                    <div class="modal-body">
                      <label>รูปภาพ JPG,PNG,GIF</label>
                        <input type="file" name="Img_gallerry" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <div class="col-lg-8 col-xs-12">

                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>รูปภาพ</th>
                                            <th>ลิงค์</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
								$no=1;
								$sql_gallerry="select * from tbl_gallerry Order by Id_gallerry ASC";
								$result_gallerry=mysqli_query($conn,$sql_gallerry);
								while($rs_gallerry=mysqli_fetch_array($result_gallerry))
								{
									$Id_gallerry=$rs_gallerry["Id_gallerry"];	
									$Img_gallerry=$rs_gallerry["Img_gallerry"];
									?>
                                        <tr>
                                            <td><?=$no?></td>
                                            <td><a href="../gallerry/<?=$Img_gallerry?>" target="_blank"><img src="../gallerry/<?=$Img_gallerry?>" style="width:auto;height:100px"></td></td>
                                            <td>https://babooclearshop.cf/gallerry/<?=$Img_gallerry?></td>
                                            <td> <a href="del_gallerry.php?Id_gallerry=<?=$Id_gallerry?>" onclick="return confirm('คุณแน่ใจที่จะลบข้อมูลนี้ ใช่หรือไม่')"><button class="btn btn-danger btn-xs">ลบ</button></a></td>
                                        </tr>                                
                                <?php 
								$no++;
								}
								?>
                                    </tbody>
                                </table>
                        </div>
                        
            </div>
            

            </div>
            <!-- /.row -->
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
<!--    <script src="vendor/jquery/jquery.min.js"></script>-->

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

</body>

</html>
