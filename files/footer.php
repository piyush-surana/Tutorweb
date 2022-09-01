</div></div>
<section id="footer" style="background-color:#F7D6E0;">
 <div class="container">
  <div class="row">
   <div class="footer_1 clearfix">
    <div class="col-sm-3">
	 <div class="footer_1i clearfix">
	   	<a class="navbar-brand" href="index.html" style = "color:#564779;"><i class="fa fa-university"></i> CAMPUS</a>
	   	<p > We will provide well define servie to our customer where customer grow his/her knowldge and we will also provide lots of expert tutor which will guide our student</p>
	 </div>
	</div>
		<div class="col-sm-3">
	 	<div class="footer_1i1 clearfix">
	  		 <h3 class="mgt" style = "color:#564779;">Useful Links</h3>
	   	<ul>
	    	<li><i class="fa fa-circle" ></i> <a href="#" >Customer Help</a></li>
			<li><i class="fa fa-circle"></i> <a href="#">Contact Us</a></li>
			<li><i class="fa fa-circle"  ></i> <a href="#">Social Sites</a></li>
			<li><i class="fa fa-circle" ></i> <a href="#" >About Us</a></li>
			<li><i class="fa fa-circle" ></i> <a href="#" >Sports Education</a></li>
	   </ul>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="footer_1i2 clearfix">
	   <h3 class="mgt" style = "color:#564779;">Contact Us</h3>
		<?php
	include('admin/db.php');
	$r=mysqli_query($con,"select * from contactus");
	$row=mysqli_fetch_array($r);
?>

	  <ul>
	    <li><i class="fa fa-phone"></i> (91) <?php echo $row[3]; ?></li>
		<li><i class="fa fa-map-marker"></i><?php echo $row[1]; ?></span></li>
	   </ul>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="footer_1i3 clearfix">
	   <h3 class="mgt" style = "color:#564779;">Follow Us</h3>
	   <input placeholder="Email" class="form-control" type="text">
	   <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>
	 </div>
	</div>
   </div>
   <div class="footer_2 clearfix">
     <div class="col-sm-5">
	  <div class="footer_2_l clearfix">
	   <ul>
	    <li><a href="#">Privacy</a></li>
		<li><a href="#">Our Policy</a></li>
		<li class="border_none"><a href="#">Term & Condition </a></li>
	   </ul>
	  </div>
	 </div>
	 <div class="col-sm-7">
	  <div class="footer_2_l clearfix">
	    <p>© 2021 Tutorweb. All Rights Reserved. Design by Harsh Agarwal,Piyush surana </p>
	  </div>
	 </div>
   </div>
  </div>
 </div>
</section>

</body>
 
</html>
