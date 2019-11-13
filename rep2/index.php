<?php
include_once("../config.inc.php");
 ?>
<?php

    // Create connection
//    $conn = mysqli_connect($servername, $username, $password, $dbname);
//    mysqli_set_charset($conn, "utf8");
   
    $sql = "SELECT * FROM tbl_order WHERE Status_order = 'order'";
    $result = mysqli_query($conn,$sql);
    $fh = fopen('data.txt','w');

    mysqli_set_charset($conn,"utf8");
    //$newResult = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $fieldCount = $result->field_count;
    $fieldLimit = 1;
   
    while($objResult = mysqli_fetch_array($result,MYSQLI_ASSOC)){
       
        
/*         fwrite($fh, 'ชื่อ-สกุล  : '.$objResult['Firstname_order']."\r\n");
        fwrite($fh, 'บ้านเลขที่ : '.$objResult['Detailaddress_order']."\r\n");
        // fwrite($fh, 'บ้านเลขที่ : '.$objResult['Detailaddress_order'].' '.$objResult['District_order'].' '.$objResult['Amphoe_order'].' '.$objResult['Province_order'].' '.$objResult['Province_order'].' '.$objResult['Zipcode_order']."\r\n");
        fwrite($fh, 'ตำบล  : '.$objResult['District_order']."\r\n");
        fwrite($fh, 'อำเภอ  : '.$objResult['Amphoe_order']."\r\n");
        fwrite($fh, 'จังหวัด  : '.$objResult['Province_order']."\r\n");
        fwrite($fh, 'รหัสไปรษณีย์ : '.$objResult['Zipcode_order']."\r\n");
        fwrite($fh, 'โทร.  : '.$objResult['Telephone_order']."\r\n");
        fwrite($fh, 'ยาสีฟัน  : '.$objResult['Value_order'].' หลอด'."\r\n");
        fwrite($fh, 'จำนวนเงิน :  '.$objResult['Price_order']."\r\n");
        fwrite($fh, 'ข้อความ  : '.$objResult['Notes_order']."\r\n");
 */       

        fwrite($fh,'คุณ ' .$objResult['name']."\r\n");
        fwrite($fh, $objResult['address']."\r\n");
        fwrite($fh,'โทร. ' .$objResult['tel']."\r\n");
        fwrite($fh,'สินค้า : '.$objResult['product']."\r\n");
        fwrite($fh,'จำนวนเงิน : '.$objResult['amt']."\r\n");
        fwrite($fh, "\r\n");
        fwrite($fh, "\r\n");
        fwrite($fh, "\r\n");
        fwrite($fh, "\r\n");

        $fieldLimit++;
        // foreach ($objResult as $key => $value) {
        //     fwrite($fh, $value."\r\n");
          
          
            
        // }
        
    }
    
    fclose($fh);
    // header("Content-Type: application/octet-stream");
    // header("Content-Transfer-Encoding: Binary");
    // header("Content-disposition: attachment; filename=\"data.txt\""); 
    //echo readfile($url);

    
    $file = 'data.txt';

    header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Type: application/force-download");
    $header="Content-Disposition: attachment; filename=".basename($file).";";
    header($header );
    header("Content-Transfer-Encoding: binary");
    @readfile($file);

 
?>




