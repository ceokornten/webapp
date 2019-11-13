<?php include_once("config.inc.php");?>
<html>

<head>

<link href="css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">


<style>
h1 {
  text-align: center;
  color: #00ff00;
  display: block;
  font-size: 6em;
  font-weight: bold;  
}

h2 {
  text-align: left;
}

h3 {
  text-align: center;
}

h1big {
  text-align: center;
  color: #ffffff;
  display: block;
  font-size: 5em;
  background-color:red;
}

h1mid {
  text-align: center;
  color: #ffffff;
  display: block;
  font-size: 2.5em;
  background-color:red;
}

input[type='radio']:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #d1d3d1;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }

input[type='radio']:checked:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #ffa500;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }
.textstyleh1{
    font-size:1em;
} 
.videoWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.videoWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

/** Add for radio button with image */
.cc-selector input{
    margin:0;padding:0;
    -webkit-appearance:none;
       -moz-appearance:none;
            appearance:none;
}


.bbc_one{background-image:url(https://shop1.babooclear.com/img/BBC-1.png);}
.bbc_two{background-image:url(https://shop1.babooclear.com/img/BBC-2.png);}
.bbc_three{background-image:url(https://shop1.babooclear.com/img/BBC-3.png);}
.bbc_four{background-image:url(https://shop1.babooclear.com/img/BBC-4.png);}
.bbc_five{background-image:url(https://shop1.babooclear.com/img/BBC-5.png);}


.cc-selector input:active +.drinkcard-cc{opacity: .9;}
.cc-selector input:checked +.drinkcard-cc{
    -webkit-filter: none;
       -moz-filter: none;
            filter: none;
}
.drinkcard-cc{
    cursor:pointer;
    background-size:contain;
    background-repeat:no-repeat;
    display:inline-block;
    width:100px;height:70px;
    -webkit-transition: all 100ms ease-in;
       -moz-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
    -webkit-filter: brightness(1.8) grayscale(1) opacity(.7);
       -moz-filter: brightness(1.8) grayscale(1) opacity(.7);
            filter: brightness(1.8) grayscale(1) opacity(.7);
}
.drinkcard-cc:hover{
    -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
       -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
            filter: brightness(1.2) grayscale(.5) opacity(.9);
}


/* Extras */
a:visited{color:#888}
a{color:#444;text-decoration:none;}
p{margin-bottom:.3em;}

</style>

<title>ยาสีฟันบาบูเคลียร์ BABOOCLEAR </title>
<meta name="description" content="ยาสีฟันบาบูเคลียร์ BABOOCLEAR">

<!-- Facebook Pixel Code -->
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
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=404279530267055&ev=PageView&noscript=1"
  src="https://www.facebook.com/tr?id=449376622351610&ev=PageView&noscript=1"  
/></noscript>
<!-- End Facebook Pixel Code -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="css/custom.css" rel="stylesheet">

<body>

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
    
    <div class="clear"></div>

        <div class="description-body" style="padding:0px;">
		


		<div class="detail-block" id="detailproduct" style="padding-top:10px;">
		<div style="padding-left:10px;padding-right:10px;">
		<style type="text/css">
		div#detailproduct p img 
		{
			width:100% !important;
            height:auto !important;
		}
		</style>    
        <div class="container">    
		<?php
			echo $str_replace = str_replace("../upload/", "upload/", $Detail_setting); //ใช้ str_replace เพื่อตัดข้อความให้แดงผล
		?>
		</div>
		</div>


        <div class="description-body" style="padding:0px;">

		<div class="detail-block" id="detailproduct" style="padding-top:10px;">
		<div style="padding-left:10px;padding-right:10px;">
		<style type="text/css">
		div#detailproduct p img 
		{
			width:100% !important;
            height:auto !important;
		}
		</style>        
       
        <div class="container">
       
		<?php
			 echo $str_replace = str_replace("../upload/", "upload/", $Detail2_setting); //ใช้ str_replace เพื่อตัดข้อความให้แดงผล
		?>

        <br>
<!--    11/11/62 ***************     -->


<div style="margin-bottom: 20px;"></div>
<br>
<h1mid>สั่งซื้อตอนนี้</h1mid>
<h3> กรุณาเลือกจำนวนที่ต้องการ </h3>

<form method="post" action="purchase.php">
<p>

<div class="cc-selector">

    
    <input id="bbc_one" type="radio" name="promo" value="p1" checked
        value="p1" />
    <label class="drinkcard-cc bbc_one" for="bbc_one"></label>
    <p style="font-size:20px;color:blue;">โปร!! ยาสีฟันบาบูเคลียร์ 1 หลอด ราคา 390.-</p>
    <input type="hidden" id="price1" name="price1" value="390">
    <input type="hidden" id="product1" name="product1" value="โปร!!ยาสีฟันบาบูเคลียร์ 1 หลอด">
    

    <input id="bbc_two" type="radio" name="promo" value="p2"
        value="p2" />
    <label class="drinkcard-cc bbc_two"for="bbc_two"></label>
    <p style="font-size:20px;color:blue;">โปร!! ยาสีฟันบาบูเคลียร์ 2 หลอด ราคา 750.-</p>
    <input type="hidden" id="price2" name="price2" value="750">
    <input type="hidden" id="product2" name="product2" value="โปร!!ยาสีฟันบาบูเคลียร์ 2 หลอด">


    <input id="bbc_three" type="radio" name="promo" value="p3"
        value="p3" />
    <label class="drinkcard-cc bbc_three"for="bbc_three"></label>
    <p style="font-size:20px;color:blue;">โปร!! ยาสีฟันบาบูเคลียร์ 3 หลอด ราคา 1,100.-</p>
    <input type="hidden" id="price3" name="price3" value="1100">
    <input type="hidden" id="product3" name="product3" value="โปร!!ยาสีฟันบาบูเคลียร์ 3 หลอด">


    <input id="bbc_four" type="radio" name="promo" value="p4"
        value="p4" />
    <label class="drinkcard-cc bbc_four"for="bbc_four"></label>
    <p style="font-size:20px;color:blue;">โปร!! ยาสีฟันบาบูเคลียร์ 4 หลอด ราคา 1,450.-</p>
    <input type="hidden" id="price4" name="price4" value="1450">
    <input type="hidden" id="product4" name="product4" value="โปร!!ยาสีฟันบาบูเคลียร์ 4 หลอด">

    <input id="bbc_five" type="radio" name="promo" value="p5"
        value="p5" />
    <label class="drinkcard-cc bbc_five"for="bbc_five"></label>
    <p style="font-size:20px;color:blue;">โปร!! ยาสีฟันบาบูเคลียร์ 5 หลอด ราคา 1,600.-</p>
    <input type="hidden" id="price5" name="price5" value="1600">
    <input type="hidden" id="product5" name="product5" value="โปร!!ยาสีฟันบาบูเคลียร์ 5 หลอด">

    <!-- <p> ******** Selected Product ******  <big></p>  -->
<p> ******************************************************</p>
<p style="font-size:17px;color:red;"> สินค้าที่ลูกค้าเลือก : </p>
<label id="prodselect" style="font-size:20px;color:red;" ></label>
<script>

(function (){
    var checkvalue = "";
    document.getElementById('prodselect').innerText = "โปร!! ยาสีฟันบาบูเคลียร์ 1 หลอด ราคา 390.-";
    var radios = document.getElementsByName('promo');
    console.log(radios);
    for(var i = 0; i < radios.length; i++){
        radios[i].onclick = function(){
        // document.getElementById('prodselect').innerText = this.value;
            
            // console.log ('Value : ' +this.value);
            checkvalue = this.value;
            // console.log ('Value XX : ' +checkvalue)
            if(checkvalue == 'p1'){
                document.getElementById('prodselect').innerText = "โปร!! ยาสีฟันบาบูเคลียร์ 1 หลอด ราคา 390.-";
            }else if(checkvalue == 'p2'){
                document.getElementById('prodselect').innerText = "โปร!! ยาสีฟันบาบูเคลียร์ 2 หลอด ราคา 750.-";
            }else if(checkvalue == 'p3'){
                document.getElementById('prodselect').innerText = "โปร!! ยาสีฟันบาบูเคลียร์ 3 หลอด ราคา 1,100.-";
            }else if(checkvalue == 'p4'){
                document.getElementById('prodselect').innerText = "โปร!! ยาสีฟันบาบูเคลียร์ 4 หลอด ราคา 1,450.-";
            }else if(checkvalue == 'p5'){
                document.getElementById('prodselect').innerText = "โปร!! ยาสีฟันบาบูเคลียร์ 5 หลอด ราคา 1,600.-";
            }
        }
    } 
})();
</script>

<!-- <p> ****************************************************** </p>  -->

</div>
<p> ****************************************************** </p>
<!---     Break old code ---  -->
            <br>
            <div class="form-group">
                <label class="imwr_address">ชื่อ-นามสกุล</label>
                <div>
                <textarea class="form-control form-control-lg"  name="name" id="name"
                        placeholder=" พิมพ์ ชื่อ นามสกุล" required></textarea>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label class="imwr_address">ที่อยู่</label>
                <div>
                    <textarea class="form-control form-control-lg" rows="2" name="address" id="address"
                        placeholder="พิมพิ์ บ้านเลขที่ หมู่ ซอย ถนน ตำบล อำเภอ จังหวัด รหัสไปรษณีย์" required></textarea>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label class="imwr_address">เบอร์โทรศัพท์</label>
                <div>
                    <input class="form-control form-control-lg"  name="tel" value="" id="tel"
                        placeholder="0xxxxxxxxx" autocomplete="off" maxlength="12" required>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label class="imwr_address">ข้อความ</label>
                <div>
                    <textarea class="form-control form-control-lg" row="2" name="comment"  id="comment"
                        placeholder="ข้อความ" ></textarea>
                </div>
            </div>            
            <div style="margin:auto;text-align: center;  
                       border-radius: 8px;"><button type="submit" class="redbg btn btn-lg" > >>> กดสั่งซื้อ <<< </button></div>
                       <input type="hidden" name="sku" value="LNWOFSATI-PIG">
        </form>
    </div>

    <div style="margin-bottom: 50px;"></div>


     <div class="bar bar-standard bar-footer text-center fixed-bottom">
        <div class="col-12 navbar-brand1 bar-footer">
            <a id="test" name="test" class="col navbar-brand1 text-white p-2" href="#" data-toggle="unique-id"><i
                    class="fa fa-shopping-cart"></i> สั่งซื้อเลย</a>
        </div>
    </div>


</body>
<script src="js/jquery.min.js"></script>
<script>
var check70 = false;
var checkcc = 1;

<?php //-- Very simple variant
$useragent = $_SERVER['HTTP_USER_AGENT']; 
$iPod = stripos($useragent, "iPod"); 
$iPad = stripos($useragent, "iPad"); 
$iPhone = stripos($useragent, "iPhone");
$Android = stripos($useragent, "Android"); 
$iOS = stripos($useragent, "iOS");

//-- You can add billion devices 

$DEVICE = ($iPod||$iPad||$iPhone||$Android||$iOS||$webOS||$Blackberry||$IEMobile||$OperaMini);
 if ($DEVICE !=true) {?>
         <!-- What you want for all non-mobile devices. Anything with all HTML codes-->
        $(".bar-footer").click(function() {
            var y = $(window).scrollTop();
            checkclick = true;
            $('html, body').animate({
                 scrollTop: y + 14950
                });      
                 fbq('trackCustom', 'ClickBuyNowPC');
        });
        <?php }
else{ ?> 
                <!-- What you want for all mobile devices. Anything with all HTML codes --> 
                $(".bar-footer").click(function() {
                    var y = $(window).scrollTop();
                    $('html, body').animate({
                        scrollTop: y + 5258
                    });
                     //fbq('trackCustom', 'ClickBuyNowMB');
                });
<?php }?>
/* --------- */

$(window).scroll(function() {

    var st = $(this).scrollTop();
    var wh = $(document).height();

    var perc = (st*100)/wh
    console.log('The percentage is '+perc);
    console.log ('Check 70 '+ check70);
    console.log('checkcc '+ checkcc);

    if (perc>70 && !check70 && checkcc<2) {
        fbq('trackCustom', 'read70');  
        $('.bar-footer').fadeOut();
        check70 = true;
        checkcc = 2;  
    }
    if (perc< 75) {
           check70 = false;
           $('.bar-footer').fadeIn();
    }
    if (perc > 80){
        $('.bar-footer').fadeOut();
    }
});
</script>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<!-- <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</html>