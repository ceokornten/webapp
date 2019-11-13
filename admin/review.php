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
    
<meta name="keywords" content="ระบบหลังบ้านเว็บขายสินค้าใน Facebook" />
  <meta name="description" content="Name_website">
  

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

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">รีวิวสินค้าทั้งหมด</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            
            <button class="btn btn-primary" data-toggle="modal" data-target="#myModalschool">เพิ่มรีวิวสินค้า</button>
            
              <!-- Mymodal school-->
            <div class="modal fade" id="myModalschool" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <form action="add_review.php" method="post" enctype="multipart/form-data">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">รายละเอียดรีวิว</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                            <label for="pwd">รูปภาพ (ใส่หรือไม่ใสก็ได้) :</label>
                                            <input type="file" name="Img_review" class="form-control">
                                          	</div>
                                            <div class="form-group">
                                            <label for="pwd"> ชื่อ - นามสกุล :</label>
                                            <input type="text" name="Fullname_review" class="form-control">
                                          	</div>
                                            <div class="form-group">
                                            <label for="pwd">ข้อความ :</label>
                                            <textarea name="Message_review" cols="30" rows="3" class="form-control"></textarea><br>
                                          	</div>
                                            <div class="form-group">
                                            <label for="pwd"> วัน เวลา :</label>
                                            <input type="date" name="Datetime_review" class="form-control" style="width:40%;display:inline-block;"> 
          H : <select name="timehou" class="form-control" style="width:15%;display:inline-block;">
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
            
            M : <select name="timemin"  class="form-control" style="width:15%;display:inline-block;">
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
                                          	</div>
                                          <label>ระดับความพอใจ :</label>
           <select name="Level_review" class="form-control" style="width:50%;">
           <option value="0">เลือกระดับความพอใจ</option>
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
           </select>
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
                            
           
           <br>
<br>
<div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>รูปภาพ</th>
                                            <th>วันเวลา</th>
                                            <th>ชื่อ - นามสกุล</th>
                                            <th>คะแนน</th>
                                            <th>ข้อความ</th>
                                            <th>สถานะ</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
								$no=1;
								$sql_review="select * from tbl_review Order by No_review asc ";
								$result_review=mysqli_query($conn,$sql_review);
								while($rs_review=mysqli_fetch_array($result_review))
								{
									$Id_review=$rs_review["Id_review"];	
									$No_review=$rs_review["No_review"];
									$Img_review=$rs_review["Img_review"];
									$Datetime_review=$rs_review["Datetime_review"];
									$Fullname_review=$rs_review["Fullname_review"];
									$Level_review=$rs_review["Level_review"];
									$Message_review=$rs_review["Message_review"];
									$Status_review=$rs_review["Status_review"];
									?>
                                        <tr>
                                            <td>
                                          <form action="up_review.php" method="post" enctype="multipart/form-data">
                                          <input type="hidden" value="<?=$Id_review?>" name="Id_review">
                                            <input type="number" value="<?=$No_review?>" name="No_review" style="width:65px;text-align:center;"><input type="submit" value="เลื่อน" class="btn btn-success btn-xs"></form></td>
                                            <td>
                                            <?php 
											if($Img_review<>"")
											{
												?><a href="../imgreview/<?=$Img_review?>" target="_blank"><img src="../imgreview/<?=$Img_review?>?D=<?=time()?>" style="width:auto;height:100px"></a><?php
											}
											?>
                                            </td>
                                            <td><?=DateThaitime($Datetime_review)?></td>
                                            <td><?=$Fullname_review?></td>
                                            <td><?=$Level_review?></td>
                                            <td width="20%"><?=$Message_review?></td>
                                            <td>
                                            <div class="dropdown">
                                            <?php 
											if($Status_review=="Show")
											{
												?>
<button class="btn btn-success btn-xs dropdown-toggle" type="button" data-toggle="dropdown">อนุมัติ
  <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
    <li><a href="update_reviewstatus.php?Id_review=<?=$Id_review?>&Status=Hidden">ไม่อนุมัติ</a></li>
                                                <?php
											}else
											{
												?>
<button class="btn btn-danger btn-xs dropdown-toggle" type="button" data-toggle="dropdown">ไม่อนุมัติ
  <span class="caret"></span></button>
     <ul class="dropdown-menu">
    <li><a href="update_reviewstatus.php?Id_review=<?=$Id_review?>&Status=Show">อนุมัติ</a></li>
                                                <?php
											}
											?>
    
  </ul>                      
  </div>              
                                            <td>
                                            <?php 
											$edate = explode(" ",$Datetime_review); //แยกวันที่เป็น array
											?>
<button class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModaledit<?=$Id_review?>">แก้ไข</button> 
<a href="del_review.php?Id_review=<?=$Id_review?>" onclick="return confirm('คุณแน่ใจที่จะลบข้อมูลนี้ ใช่หรือไม่')"><button class="btn btn-danger btn-xs">ลบ</button></a>

<!-- Mymodal school-->
            <div class="modal fade" id="myModaledit<?=$Id_review?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <form action="edit_review.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="Id_review" value="<?=$Id_review?>">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">รายละเอียดรีวิว</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                            <label for="pwd">รูปภาพ (ใส่หรือไม่ใสก็ได้) :</label><br>
                                            <?php 
											if($Img_review<>"")
											{
												?>
                                                <a href="del_imgreview.php?Id_review=<?=$Id_review?>" onclick="return confirm('คุณแน่ใจที่จะลบข้อมูลนี้ ใช่หรือไม่')"><span class="btn btn-danger btn-xs" style="position:absolute;">Delete</span></a>
                                                <img src="../imgreview/<?=$Img_review?>?D=<?=time()?>" class="img-thumbnail img-responsive" style="height:100px;">
												<?php
											}
											?>
                                            <input type="file" name="Img_review" class="form-control">
                                          	</div>
                                            <div class="form-group">
                                            <label for="pwd"> ชื่อ - นามสกุล :</label>
                                            <input type="text" name="Fullname_review" class="form-control" value="<?=$Fullname_review?>">
                                          	</div>
                                            <div class="form-group">
                                            <label for="pwd">ข้อความ :</label>
                                            <textarea name="Message_review" cols="30" rows="3" class="form-control"><?=$Message_review?></textarea>
                                          	</div>
                                            <div class="form-group">
                                            <label for="pwd"> วัน เวลา :</label>
                                            <input type="date" name="Datetime_review" class="form-control" style="width:30%;display:inline-block;" value="<?=$edate[0]?>"> 
          H : <select name="timehou" class="form-control" style="width:15%;display:inline-block;">
          	<option value="<?=substr($edate[1],0,2)?>"><?=substr($edate[1],0,2)?></option>
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
            
            M : <select name="timemin"  class="form-control" style="width:15%;display:inline-block;">
            <option value="<?=substr($edate[1],3,2)?>"><?=substr($edate[1],3,2)?></option>
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
                                          	</div>
                                          <label>ระดับความพอใจ :</label>
           <select name="Level_review" class="form-control" style="width:50%;">
           <option value="<?=$Level_review?>"><?=$Level_review?></option>
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
           </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info">แก้ไข</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                    </form>
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- End Mymodal school-->
                            
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
