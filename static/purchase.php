<?php include_once("config.inc.php");?>

<?php

date_default_timezone_set("Asia/Bangkok");
  $today = date("Y-m-d H:i:s"); 
  $name = $_POST['name'];
  $tel = $_POST['tel'];
  $address = $_POST['address'];
  $comment = $_POST['comment'];
  $promo=$_POST['promo'];

  $price = "";
  $product = "";


// ถ้าต้องการเพิ่มหรือลดสินค้า ทำตรงนี้ //

  if($promo=="p1"){
    $price=$_POST['price1'];
    $product=$_POST['product1'];
  }else if ($promo=="p2"){
    $price=$_POST['price2'];
    $product=$_POST['product2'];
  }else if ($promo=="p3"){
    $price=$_POST['price3'];
    $product=$_POST['product3'];
  } else if ($promo=="p4"){
    $price=$_POST['price4'];
    $product=$_POST['product4'];
  }  else if ($promo=="p5"){
    $price=$_POST['price5'];
    $product=$_POST['product5'];
  }  

// จบการแก้สินค้า //



  $message = date("d-m-Y H:i:s") ."\n".

    "*** ยืนยันสั่งซื้อ *** \n".
    "คุณ ".$name."\n".
    "ที่อยู่ ".$address."\n".
    "โทร. ".$tel."\n".
    $product."\n".
    "ยอดเก็บ ".$price."\n".
    "ข้อความ".$comment."\n".
    "เก็บเงินปลายทาง \n";
    "local.test \n";


  sendlinemesg($message,$lineToken);

  header('Content-Type: text/html; charset=utf-8');
  $res = notify_message($message);

  function sendlinemesg($message,$lineApi)
  {
      
      define('LINE_API', "https://notify-api.line.me/api/notify");
      define('LINE_TOKEN', $lineApi);
      
      function notify_message($message)
      {
  
          $queryData = array('message' => $message);
          $queryData = http_build_query($queryData, '', '&');
          $headerOptions = array(
              'http' => array(
                  'method' => 'POST',
                  'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                  . "Authorization: Bearer " . LINE_TOKEN . "\r\n"
                  . "Content-Length: " . strlen($queryData) . "\r\n",
                  'content' => $queryData,
              ),
          );
          $context = stream_context_create($headerOptions);
          $result = file_get_contents(LINE_API, false, $context);
          $res = json_decode($result);
          return $res;
  
      }
  
  }
?>

<html lang="en">
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '404279530267055');
    fbq('init', '449376622351610');    
    fbq('track', 'Purchase', {
    value: <?php echo $price; ?>,
    currency: 'THB',
  });
</script>


<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=404279530267055&ev=Purchase&noscript=1"
  src="https://www.facebook.com/tr?id=449376622351610&ev=PageView&noscript=1"  
/></noscript>

<!-- End Facebook Pixel Code -->

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   
    <title>ยืนยันคำสั่งซื้อ </title>
   

<style>
body {
  margin: 0;
   background: #fff !important;
   font-family: 'Mitr', sans-serif;
   text-align: 'center';

}
</style>


  </head>
  <body>
    <meta charset="utf-8">
    <div class="container col mx-auto xs-12">
    <div class="row text-center">
		<div class="col">

    <?php
        $sqlcheckorder = "select max(id_order) from tbl_order";
        $resultmaxorder=mysqli_query($conn,$sqlcheckorder);
        $rmaxorder=mysqli_fetch_array($resultmaxorder,MYSQLI_NUM);
        $idordermax = $rmaxorder[0];
        $nextid = $idordermax++;
        $statusorder = 'order';
        
        console.log ($idordermax);
        console.log ($nextid);

        $sqladdorder = "INSERT INTO tbl_order
        VALUES ('.$idordermax.','$name','$address','$tel','$product','$price','$comment','$today','$today','$statusorder')";
				$result=mysqli_query($conn,$sqladdorder);
    ?>
    
    <h1>ยืนยันการสั่งซื้อ</h1>
    <h2>
    ---------<br>
      ส่ง : คุณ <?php echo $name; ?><br>
      ที่อยู่ : <?php echo $address; ?><br>
      เบอร์โทรศัพท์ : <?php echo $tel; ?><br>
      สินค้า : <?php echo $product; ?><br>
      ข้อความ : <?php echo $comment; ?><br>
      เก็บเงินปลายทาง : <?php echo $price; ?> <br>
      ---------
    </h2>
	<h2>สินค้าจะถึงท่านในอีก 1-3 วัน<br>
  ขอบพระคุณค่ะ</h2>
  <p> จะมีเจ้าหน้าที่ส่งสินค้าโทรหาก่อนจัดส่ง </p>
 <!-- <a href="https://shop1.babooclear.com"> <img border="0" alt="W3Schools" src="img/home.jpg" width="300" height="100">  -->
 <a href="https://shop1.babooclear.com/"> <img border="0" alt="W3Schools" src="img/home.jpg" width="300" height="100">
 <!-- <img src="images/C2.jpg" class="img-thumbnail">  -->


	</div>
</div>
</container>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>