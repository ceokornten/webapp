<?php
if (!session_id()) session_start();
 error_reporting( error_reporting() & ~E_NOTICE );


	$host="localhost";
	$user="admin_ppun";
	$pass="cc1M@IN12";
	$dbname="admin_ppun";


	$conn = mysqli_connect($host,$user,$pass);
	mysqli_query( $conn,"SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
	mysqli_select_db($conn,$dbname);
	$Title_bar="ยาสีฟันที่ขายดีที่สุด BABOOCLEAR";
	date_default_timezone_set("Asia/Bangkok");

	$id = '404279530267055'; // <<< แก้ตัวเลขเป็น PIXEL ID ตัวเองนะครับ
    $lineToken = 'wKj47ft73IbFOdFzi2JSo3dFzQPM3Ro5IvVTG9vuFnI';// <<< แก้ตัวเลขเป็น LINE TOKEN ตัวเองนะครับ


?>
<?php
		function DateThaifull($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strHour= date("H",strtotime($strDate));
		$strMinute= date("i",strtotime($strDate));
		$strSeconds= date("s",strtotime($strDate));
		$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฏาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear";
	}
?>
