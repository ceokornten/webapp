<?php
include_once("../config.inc.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?=$Title_bar?></title>
  <meta charset="utf-8">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Kanit:300" rel="stylesheet"> 
<meta name="keywords" content="ระบบหลังบ้านเว็บขายสินค้าใน Facebook" />
  <meta name="description" content="Name_website">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .fontkanit1
  {
	  font-family:Kanit;
  }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1 class="fontkanit1">Administrator Control</h1>      
    
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  		<!-- Website Font style -->
          <div class="container text-center">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <div class="col-md-4"></div>
<div class="col-md-4 text-center fontkanit1" style="margin:0 auto;display:block;">
					<form class="form-horizontal" method="post" action="chklogin.php">
						<div class="form-group" align="center">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="Username_login" id="Username_login"  placeholder="กรุณาระบุยูสเซอร์เนม" required />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="Password_login" id="Password_login"  placeholder="กรุณาระบุรหัสผ่าน" required/>
								</div>
							</div>
						</div>
						<div class="form-group ">
							<button type="submit" class="btn btn-danger btn-lg btn-block login-button">เข้าสู่ระบบ</button>
						</div>
					</form>
				</div>
                <div class="col-md-4"></div>

</div>

</div><br><br>

</body>
</html>
