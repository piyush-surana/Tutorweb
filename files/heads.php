<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tutor Web</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/global.css" rel="stylesheet">
	<link href="css/achieve.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Amaranth&display=swap" rel="stylesheet">
	<script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  
<body>
<section id="header" class="clearfix header_n">
	<nav class="navbar navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><i class="fa fa-book"></i> 
				TUTOR WEB</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="tag_m" href="index.php">Home</a>
                    </li>
                     
                    
					
                    
					<li>
                        <a class="tag_m" href="services.php">Services</a>
                    </li>
					
					<li>
                        <a class="tag_m" href="search.php">Search Tutor</a>
                    </li>
					
				
					
					
					<li>
                        <a class="tag_m" href="contact.php">Contact Us</a>
                    </li>
					<?php
						if(isset($_SESSION["idd"]))
						{ ?>
					<li>
                        <a class="tag_m" href="inbox.php">Inbox</a>
                    </li>
					<?php
					include('admin/db.php');
					$id=$_SESSION["idd"];
					$r=mysqli_query($con,"select * from signup where id='$id' ");
							$ro=mysqli_fetch_array($r);
							
					?>
					<li>
                        <a class="tag_m" href="userprofile.php">Welcome:<?php echo $ro[1]; ?></a>
                    </li>
					
					<li>
                        <a class="tag_m" href="logout.php">Logout</a>
                    </li>
					
					<?php
					}
					else {
					?>
					
					<li>
                        <a class="tag_m" href="signin.php">Signin</a>
                    </li>
					<?php } ?>
				
					<li>
						<?php
							include('admin/db.php');
							$r=mysqli_query($con,"select * from contactus order by id desc limit 1");
							$ro=mysqli_fetch_array($r);
							
							
						?>
                        <a class="tag_m_1" href="#"><i class="fa fa-phone"></i>
						Available@<span><?php echo $ro[3]; ?></span></a>
                    </li>
					
					
					
                </ul>
				 
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</section>

<section id="center" class="c_service">
 <div class="c_service_m clearfix">
  <div class="container">
  <div class="row">
   <div class="col-sm-12">
   
   </div>
  </div>
 </div>
 </div>
</section>

<section id="achieve_page">
 <div class="container">
   <div class="row">
