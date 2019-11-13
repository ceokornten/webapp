  <?php include_once("config.inc.php");?>
  

$fullthaipromotion = substr($Promotion,7,4)."-".ucfirst(strtolower(substr($Promotion,0,3)))."-".substr($Promotion,4,2)." ".substr($Promotion,12,2).":".substr($Promotion,15,2).":".substr($Promotion,18,2);
?>
<?php 
if($fullthaipromotion < date("Y-M-d H:i:s")) //ถ้าหมดเวลาโปรใช้ราคาเดิม
{
    $Pricesell = $Price1_setting;
}else
{
    $Pricesell = $Price2_setting;
}
?>
       
  <meta charset="utf-8"> 
<?php
$sumprice = 0;
$set = 0;

$firstname=$_REQUEST["firstname"];
$telephone=$_REQUEST["telephone"];
$detailaddress=$_REQUEST["detailaddress"];
$district=$_REQUEST["district"];
$amphoe=$_REQUEST["amphoe"];
$province=$_REQUEST["province"];
$zipcode=$_REQUEST["zipcode"];
$notes = $_REQUEST["notes"];
$quantity = $_REQUEST["quantity"];

      switch ($quantity) {
          case 1:
              $sumpricex = 390;
              break;
          case 2:
              $sumpricex = 750;
              break;
          case 3:
              $sumpricex = 1100;
              break;
          case 4:
              $sumpricex = 1490;
              break;
          case 5:
              $sumpricex = 1850;
              break;
          case 6:
              $sumpricex = 2200;
              break;
          case 7:
              $sumpricex = 2590;
              break;
          case 8:
              $sumpricex = 2950;
              break;
          case 9:
              $sumpricex = 3300;
              break;
           }




$payment =$_REQUEST["payment"];

if(date("H")>=14) //ตรวจสอบถ้าเกินบ่าย 2 ให้เป็นวันถัดไป
{
	$adatel = date("Y-m-d");
	$Date_order = date("Y-m-d",strtotime("+1 days",strtotime($adatel)));		
}else
{
	$Date_order = date("Y-m-d");
}


$sqladdorder = "INSERT INTO tbl_order
				VALUES (null,'$firstname','$telephone','$detailaddress','$district','$amphoe','$province','$zipcode','$notes','$Date_order','".date("Y-M-d H:i:s",strtotime("+1 day"))."','".strtotime(date("Y-m-d H:i:s",strtotime("+1 days",strtotime(date("Y-m-d H:i:s")))))."','','','','".$payment."','','กำลังตรวจสอบ')";
				$result=mysqli_query($conn,$sqladdorder);
				
					//ดึงไอดีล่าสุดออกมา
					$sqlmaxorder="select MAX(Id_order) from tbl_order";
					$resultmaxorder=mysqli_query($conn,$sqlmaxorder);
					$rmaxorder=mysqli_fetch_array($resultmaxorder);
					$idordermax = $rmaxorder[0];

		$sumprice = $sumprice + $Pricesell;   

		$set = $set +1;
		$sqlitem = "INSERT INTO tbl_product
    				VALUES (null,'".@$_REQUEST["creditcard"][0]."','".@$_REQUEST["selector"][0]."','','','".$Pricesell."','".$idordermax."')";  
				$result=mysqli_query($conn,$sqlitem);	


$valueitem = $set; //จำนวนสินค้า


$sqls2="update tbl_order set 
		Set_order='$set',
		Value_order='$quantity',
		Price_order='$sumpricex'
		where Id_order='$idordermax'";
	mysqli_query($conn,$sqls2);

//********************************************
        $message = "\n คุณ " .$firstname."\n เบอร์โทร : ".$telephone."\n ที่อยู่ : ".$detailaddress."\n ตำบล ".$district."\n อำเภอ ".$amphoe."\n จังหวัด ".$province." ".$zipcode."\n (ยาสีฟัน ".$quantity." หลอด)\n จำนวนสั่งซื้อ ".$quantity."\n จำนวนเงิน ".$sumpricex."\n ".$notes."\n หมายเลขสั่งซื้อ ".$idordermax;
	    $lineapi = "49TUCMRNbLV4HGCL3OG5XphBTQf2F08upoH1x3Ri4fg--xxx";	    
	    $host = "https://notify-api.line.me/api/notify";
		$message = str_replace('\n', PHP_EOL, $message);
		
		$arrayHeader = array();
        $arrayHeader[] = "Content-type: application/x-www-form-urlencoded";
		$arrayHeader[] = "Authorization: Bearer ".$lineapi.'';
		$arrayHeader[] = "cache-control: no-cache";
		
	    $curl = curl_init();  //initialize curl
        curl_setopt($curl, CURLOPT_URL, $host);
		// SSL USE 
	    curl_setopt( $curl, CURLOPT_SSL_VERIFYHOST, 0); 
	    curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, 0); 
		//POST
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $arrayHeader);
		curl_setopt($curl, CURLOPT_POSTFIELDS,  "message=".$message); 
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER,  true);
		//curl_setopt($curl, CURLOPT_ENCODING, "");
		//curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 0);
		curl_setopt($curl, CURLOPT_TIMEOUT, 30);
		//curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP);
		//curl_setopt($curl, CURLOPT_HEADER, false);
        $result_ = curl_exec($curl);
		$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		//echo "status : ".$code; 		
        curl_close( $curl ); 


			echo"<script>window.location='order_complete.php?Order=$idordermax&Telephone=$telephone&Sum=$sumpricex'</script>";
			mysqli_close($conn);
			exit();
?>