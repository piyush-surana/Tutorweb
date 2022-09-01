<?php
session_start();
?>


<?php
	include('header.php');
?>  

<script>
	document.getElementById("n5").style.background = " rgb(244, 68, 209)";
</script>

<section id="center" class="c_service">
<div class="c_service_m clearfix">
  		<div class="container">
  			<div class="row">
   				<div class="col-sm-12">
    				<div class="c_service_1 clearfix">
	  					<ul>
	   						<li><a href="#">Home</a></li>
	   						<li><i class="fa fa-graduation-cap"></i> Contact Us</li>
	  					</ul>
					</div>
   				</div>
  			</div>
 		</div>
 	</div>
</section>

<?php
	include('admin/db.php');
	$r=mysqli_query($con,"select * from contactus");
	$row=mysqli_fetch_array($r);
?>

<section id="contact">
	<div class="container">
  		<div class="row">
   			<div class="contact clearfix">
    			<div class="col-sm-4">
	 				<div class="contact_inner text-center"><h1><i class="fa fa-map-marker"></i></h1><h2>Address</h2>
	  					<p>
	   						<?php
	   							echo $row[1];
	  						 ?>
	   					</p>
	 				</div>
				</div>
				<div class="col-sm-4">
	 				<div class="contact_inner icon_2 text-center">
						<h1><i class="fa fa-envelope"></i></h1><h2>Email</h2>
	  					<p><a href="#"> 
								<?php 
									echo $row[2];
	   							?>
	   						</a><br>
		
	  					</p>
	 				</div>
				</div>
				<div class="col-sm-4">
	 				<div class="contact_inner icon_3 text-center">
	  					<h1><i class="fa fa-phone"></i></h1><h2>Contact No.</h2>
	  					<span class="span_1"><i class="fa fa-phone-square"></i>  
							<?php
	   							echo $row[3];	
	   						?>
	     				</span>
	 					<span class="span_2"> <i class="fa fa-whatsapp"></i> 
							<?php
	  							echo $row[4];
	   						?>
	    				</span>
	 				</div>
				</div>
   			</div>
  		</div>
 	</div>
</section>

<section id="contact_us">
 	<div class="container">
  		<div class="row">
   			<div class="contact_us_1 clearfix">
    			<div class="col-sm-6">
	 				<div class="contact_us_1l clearfix">
	 					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116078.16294569518!2d73.63701755721473!3d24.608426069262897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3967e56550a14411%3A0xdbd8c28455b868b0!2sUdaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1630995535380!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	 				</div>
				</div>
				<div class="col-sm-6">
	 				<div class="contact_us_1r clearfix"><h2 class="mgt">Contact Form</h2>
						<form action='contact1.php' method='post'>
							<?php
								if(isset($_SESSION["err"]))
								echo "<span style='color:red;font-weight:bold'>",$_SESSION["err"],"</span>";
							?>
	 						<div class="clearfix">
	    						<div class="col-sm-6 space_left">
									<input class="form-control" name='nm' placeholder="FULL NAME" type="text">
								</div>
								<div class="col-sm-6 space_right">
		 							<input class="form-control"name='email' placeholder="EMAIL ADDRESS" type="text">
								</div>
	   						</div>
	   						<div class="clearfix">
	    						<div class="col-sm-6 space_left">
		 							<input class="form-control" name="phone" placeholder="PHONE NUMBER" type="text">
								</div>
								<div class="col-sm-6 space_right">
		 							<input class="form-control" name="subject" placeholder="SUBJECT" type="text">
								</div>
	  						</div>
	   						<div class="clearfix">
        						<textarea placeholder="MESSAGE" name="message" class="form-control form_1"></textarea>
	   						</div>
	   							<h4><input type='submit' class="button" value="SEND NOW"></h4>
						</form>
					</div>
				</div>
   			</div>
  		</div>
 	</div>
</section>

<?php
$_SESSION["err"]="";
	include('footer.php');
?>