
   <meta charset="utf-8">
 <?php
if($_SESSION["sessionid"]<>session_id() or $_SESSION["username"]=="") {
echo"<script>alert('กรุณาทำการ Login ด้วยค่ะ')</script>";
echo"<script>window.location='index.php'</script>";
exit();
}
?>
