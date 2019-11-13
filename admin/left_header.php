<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                  <a class="navbar-brand" href="main_menu.php" style="padding:15px;">ADMIN
      </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li><a href="#"><?=$_SESSION["username"]?> <i class="fa fa-user fa-fw"></i></a></li>
                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="main_menu.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
<!--                        <li>
                            <a href="gallerry.php"><i class="fa fa-photo fa-fw"></i> แกลลอลี่</a>
                        </li>
-->
                        <li>
                            <a href="set_config.php"><i class="glyphicon glyphicon-cog fa-fw"></i> ตั้งค่าเว็บไซต์ index.php</a>
                        </li>
<!--                      
                        <li>
                            <a href="set_config2.php"><i class="glyphicon glyphicon-cog fa-fw"></i> ตั้งค่าเว็บไซต์ thankyou.php</a>
                        </li>
-->                        
<!--                        <li>
                            <a href="review.php"><i class="glyphicon glyphicon-star fa-fw"></i> รีวิวสินค้า</a>
                        </li>
-->
<!--                         <li>
                            <a href="review2.php"><i class="glyphicon glyphicon-star fa-fw"></i> รีวิวสินค้า Thankyou.php</a>
                        </li>
-->
                        <?php 
                    $sql="select count(Id_order) from tbl_order where status_order='order'";
                    $result=mysqli_query($conn,$sql);
                    $r=mysqli_fetch_array($result);
                    $Countorder=$r[0];
                        ?>
                        <li>
                            <a href="date.php?day=<?=date("Y-m-d")?>"><i class="glyphicon glyphicon-thumbs-up fa-fw"></i> ออเดอร์ <font color="red" size="+1"><b>(<?=$Countorder?>)</b></font></a>
                        </li>
                        <li>
                            <a href="update_statusall.php?day=<?=date("Y-m-d")?>"><i class="glyphicon glyphicon-thumbs-up fa-fw"></i> คอนเฟิร์มส่งทั้งหมด <font color="red" size="+1"><b>(<?=$Countorder?>)</b></font></a>
                        </li>
                        
                         <li>
                            <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>