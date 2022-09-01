<?php
session_start();
	include('admin/db.php');
	
	$name=$_POST["nm"];
	$email=$_REQUEST["email"];
	$phone=$_REQUEST["phone"];
	$subject=$_POST["subject"];
	$msg=$_POST["message"];
	
	$r=mysqli_query($con,"INSERT INTO `tutor`.`feedback` (`id`, `name`, `email`, `contact`, 
	`subject`, `message`) 
	VALUES (NULL, '$name', '$email', '$phone', '$subject', '$msg')");
	
	if($r){
		$_SESSION["err"]="Contact Added Successfully";
		header("location:contact.php");
	}
	else
		echo mysqli_error($con);
?>