<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="keywords" content="HOSPITAL,RANCHI HOSPITAL,HOSPITAL WEBSITE, MEDICAN">
	<meta name="description" content="india's best hospital website of indian">
	<meta name="author" content="RANCHI HOSPITAL">
	<title>RANCHI HOSPITAL</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body>
<!-- Start Header Coding-->
<header>
	<div class="menu">
		<!-- Start Brand name coding-->
		<div class="brand-name">
			<a href="index.html">
				<h2 class="animated flash">
				<i class="fa fa-hospital"></i>&nbsp;
				RANCHI HOSPITAL</h2>
			</a>
		</div>
		<!-- End Brand name coding-->
		<!-- Start Nav coding & menu coding -->
         <nav>
         	<ul>
         		<li><a href="index.html">Home</a></li>
         		<li><a href="register.html">Register</a></li>
         		<li><a href="login.html">Login</a></li>
         		<li><a href="doctor.php">doctor</a></li>
     			<li><a href="Appointment.html">Appointment</a></li>
         		<li><a href="gallery.html">Gallery</a></li>
         		<li><a href="contact.html">Contact Us</a></li>
         	</ul>
         </nav>
		<!-- End Nav coding & menu coding -->
	</div>
</header>
<!-- End Header Coding-->
<!-- Start Section Coding-->
<section>
	<div class="w-80">
<table id="display" style="text-align: center; background-color: skyblue; margin: auto;" >

		<tr>
			<th style="padding: 3px 3px; color: black;">firstName</th>
			<th style="padding: 3px 3px; color: black;">email</th>
			<th style="padding: 3px 3px; color: black;">Appointment_Date</th>
			<th style="padding: 3px 3px; color: black;">Contact_no</th>
            <th style="padding: 3px 3px; color: black;">Disease</th>
            <th style="padding: 3px 3px; color: black;">Operation</th>
		</tr>

	
<?php 

include("display.php");
error_reporting(0);
$query = "select * from appointment";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


if ($total!=0) {

	
	while ($result=mysqli_fetch_assoc($data))
     {
		echo "
		<tr>
		<td>".$result['firstName']."</td>
		<td>".$result['email']."</td>
		<td>".$result['Date']."</td>
		<td>".$result['contact_no']."</td>
        <td>".$result['Disease']."</td>
        <td><a href='delete.php?cn=$result[contact_no]'>Delete</td>
		";
	}
}
else{
	echo "<h3>no records found</h3>";
    }
?>


</table>
    
	</div>
</section>
<!-- End Section Coding-->
<!-- Start Footer Coding-->
<footer>
	<div class="w-80">
		<div class="footer-box">
 		<h2>Services</h2>
 		<a href="#">HEPATOLOGY</a>
 		<a href="#">MEDICAL DRESSAGE</a>
 		<a href="#">LABORATORY</a>
 		<a href="#">VACCINATIONS</a>
 		<a href="#">WHITENING</a>
 	</div>
 	<div class="footer-box">
 		<h2>About Us</h2>
 		<a href="#">Company Overview</a>
 		<a href="#">Management</a>
 		<a href="#">Initiatives</a>
 		<a href="#">Carrers</a> 
 		<a href="#">Our Doctors Achieve</a>
 	</div>
 	<div class="footer-box">
 		<h2>Contact Us</h2>
 		<a href="#">Post a Query</a>
 		<a href="#">Apollo Clinics</a>
 		<a href="#">Reach Hospitals</a>
 		<a href="#">Apollo Cradle</a>
 		<a href="#">Ask Question</a>
 	</div>
 	<div class="footer-box">
 		<h2>Facilities</h2>
 		<a href="#">HEPATOLOGY</a>
 		<a href="#">MEDICAL DRESSAGE</a>
 		<a href="#">LABORATORY</a>
 		<a href="#">VACCINATIONS</a>
 		<a href="#">WHITENING</a>
 	</div>
	</div>
</footer>
<!-- End footer Coding-->
</body>
</html>