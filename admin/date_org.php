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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<meta name="keywords" content="ระบบหลังบ้านเว็บขายสินค้าใน Facebook" />
  <meta name="description" content="Name_website">
  

    <title><?=$Title_bar?></title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">


    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
                    <h1 class="page-header">ออเดอร์</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            
            <div class="col-lg-6 col-xs-12">
		
  



    <?php 
	if(isset($_REQUEST["day"])) //เมื่อมีการคลิกวันอื่นเข้ามา
	{
			$datelast = date("Y-m-d",strtotime("-1 days",strtotime($_REQUEST["day"])));		
	}else
	{
			$datelast=date('Y-m-d', mktime(0, 0, 0, date('m'), date('d') - 1, date('Y')));
	}
	?>

        
        <?php 
		if(isset($_REQUEST["day"])) //เมื่อมีการคลิกวันอื่นเข้ามา
	{
		?><a href="date.php?day=<?=$datelast?>" title="ยาสีฟันบาบูเคลียร์ <?=$datelast?>">วันที่ 
        	<?=DateThaifull($datelast)?>
		</a><?php
	}else
	{
		?><a href="date.php?day=<?=$datelast?>" title="ยาสีฟันบาบูเคลียร์ <?=$datelast?>">วันที่ 
        	<?=DateThaifull($datelast)?>
		</a><?php
	}
		?>
        

        
         <?php 
	if(isset($_REQUEST["day"])) //เมื่อมีการคลิกวันอื่นเข้ามา
	{
			$datefront = date("Y-m-d",strtotime("+1 days",strtotime($_REQUEST["day"])));	
	}else
	{
			$datefront=date('Y-m-d', mktime(0, 0, 0, date('m'), date('d') + 1, date('Y')));
	}
	?>
    
    
    
    <?php 
	if(isset($_REQUEST["day"])) //เมื่อมีการคลิกวันอื่นเข้ามา
	{
			 $datetoday = $_REQUEST["day"];
   			 ?><font size="+3">(<?=DateThaifull($datetoday)?>)</font><?php
	}else
	{
			 $datetoday = date("Y-m-d");
   			 ?><font size="+3">(<?=DateThaifull($datetoday)?>)</font><?php
	}
	?>
    
    

    
        
        <?php 
		if(isset($_REQUEST["day"])) //เมื่อมีการคลิกวันอื่นเข้ามา
	{
		?><a href="date.php?day=<?=$datefront?>" title=" <?=$datefront?>">วันที่ 
        	<?=DateThaifull($datefront)?>
		</a>
		<?php
	}else
	{
		?>
		  <a href="date.php?day=<?=$datefront?>" title=" <?=$dayfront."/".$monthfront."/".$yearfront?>">วันที่ 
		<?=DateThaifull($datefront)?>
        </a>
		<?php
	}
		?>
        
        
        
     
        <div class="clear"></div>
    </div>
    
    

                            <table id="dataTables-example"  class="table table-striped table-bordered table-hover" >
                            
                <thead>
                <tr>
                  <th>ORDER</th>
                 <th>รายการ</th>
                 <th>รายละเอียดที่อยู่</th>
                 <th>โน๊ต</th>
                 <th>QTY</th>
                 <th>การจัดส่ง</th>
                 <th>Price</th>
                 <th>สถานะ</th>
                </tr>
                </thead>
                <tbody>
                                    <?php 
	$no=1;
	if(isset($_REQUEST["day"])) //เมื่อมีการคลิกวันอื่นเข้ามา
	{
		$sql_order="select * from tbl_order where Date_order='".$_REQUEST["day"]."'";
	}else
	{
		$sql_order="select * from tbl_order where Date_order='".date("Y-m-d")."'";
	}
								$result_order=mysqli_query($conn,$sql_order);
								while($rs_order=mysqli_fetch_array($result_order))
								{
									$Id_order=$rs_order["Id_order"];	
									$Firstname_order=$rs_order["Firstname_order"];	
									$Telephone_order=$rs_order["Telephone_order"];
									$Detailaddress_order=$rs_order["Detailaddress_order"];	
									$District_order=$rs_order["District_order"];
									$Amphoe_order=$rs_order["Amphoe_order"];	
									$Province_order=$rs_order["Province_order"];
									$Zipcode_order=$rs_order["Zipcode_order"];	
									$Notes_order=$rs_order["Notes_order"];
									$Date_order=$rs_order["Date_order"];
                                                                        $Dateend_order=$rs_order["Dateend_order"];
                                                                        $Delete_order=$rs_order["Delete_order"];	
									$Set_order=$rs_order["Set_order"];
									$Value_order=$rs_order["Value_order"];
									$Price_order=$rs_order["Price_order"];
                                                                        $Paymentsend_order=$rs_order["Paymentsend_order"];
									$Status_order=$rs_order["Status_order"];
									$Slip_order=$rs_order["Slip_order"];
									
									?>
                                        <tr>
                                            <td style="vertical-align:middle;"><?=$Id_order?></td>
                                             <td style="vertical-align:middle;">
											 <?php  
											 $num=1;
									$sql_product="select * from tbl_product where Id_order='".$Id_order."'";
								$result_product=mysqli_query($conn,$sql_product);
								while($rs_product=mysqli_fetch_array($result_product))
								{
									$Id_product=$rs_product["Id_product"];
									$Name_product=$rs_product["Name_product"];
									//$Size_product=$rs_product["Size_product"];
									$Size_product="120 กรัม";
									$Namefree_product=$rs_product["Namefree_product"];
									$Sizefree_product=$rs_product["Sizefree_product"];
									$Price_product=$rs_product["Price_product"];
								
									echo "<font color=black  size=+1><b>".$Name_product." (".$Size_product.")</b></font>";
									echo "<br>";
									$num++;
								}
								?>
                                             
                                             </td>
                                            <td style="vertical-align:middle;">ชื่อ : <?=$Firstname_order?><br><?=$Detailaddress_order?> ต.<?=$District_order?> อ.<?=$Amphoe_order?> จ.<?=$Province_order?> <?=$Zipcode_order?><br>โทร : <?=$Telephone_order?></td>
                                            <td style="vertical-align:middle;"><?=$Notes_order?></td>
                                            <td style="vertical-align:middle;"><?=$Value_order?></td>
<?php 
    if($Paymentsend_order=="-50")
    {
        ?>
        <td style="vertical-align:middle;background-color:#FFAAAA;color:#000;">EMS

        <?php 
        if($Slip_order<>"")
        {
            ?>
        <a href="../imgslip/<?=$Slip_order?>" target="_blank"><img src="../imgslip/<?=$Slip_order?>" style="height:250px;"></a></td>
        <?php
        }
    }else
    {
        ?>
        <td style="vertical-align:middle;"><?=$Paymentsend_order?></td>
        <?php
    }

        $qtycheck = $Value_order;
                switch ($qtycheck) {
                    case 1:
                        $sumprice = 390;
                        break;
                    case 2:
                        $sumprice = 750;
                        break;
                    case 3:
                        $sumprice = 1100;
                        break;
                    case 4:
                        $sumprice = 1490;
                        break;
                    case 5:
                        $sumprice = 1850;
                        break;
                    case 6:
                        $sumprice = 2200;
                        break;
                    case 7:
                        $sumprice = 2590;
                        break;
                    case 8:
                        $sumprice = 2950;
                        break;
                    case 9:
                        $sumprice = 3300;
                        break;
                    }


?>



                                            <td style="vertical-align:middle;"><?=number_format($sumprice)?></td>
                                            <td style="vertical-align:middle;">
                                            <?php 
											if($Status_order=="กำลังตรวจสอบ")
											{
												?>
         <button type="button" class="btn btn-success" onclick="window.location='update_status.php?Id_order=<?=$Id_order?>&Status=ส่งแล้ว&day=<?=$_GET["day"]?>'"  style="width:45%;padding:5px 0px;">ส่งแล้ว</button>
         <button type="button" class="btn btn-danger" onclick="window.location='update_status.php?Id_order=<?=$Id_order?>&Status=ยกเลิก&day=<?=$_GET["day"]?>'" style="width:45%;padding:5px 0px;">ยกเลิก</button>     
                                                <?php
											}else
											{
												if($Status_order=="ส่งแล้ว")
												{
													?><button type="button" class="btn btn-success btn-sm" style="width:45%;padding:5px 0px;">ส่งแล้ว</button><?php
												}elseif($Status_order=="ยกเลิก")
												{
													?><button type="button" class="btn btn-danger btn-sm" style="width:45%;padding:5px 0px;">ยกเลิก</button>   <?php
												}
												?>
          
         <button type="button" class="btn btn-info" onclick="window.location='update_status.php?Id_order=<?=$Id_order?>&Status=กำลังตรวจสอบ&day=<?=$_GET["day"]?>'" style="width:45%;padding:5px 0px;">Reset</button>
                                                <?php
											}
											?>
                              
                                            </td>
                                            </td>
                                        </tr>                                
                                <?php 
								$no++;
								}
								?>
                                    </tbody>
                                </table>
                      
                        
            </div>
            

            </div>
            <!-- /.row -->
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    
    
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>


    <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
    
    
    
    
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
    

</body>

</html>
