<?php


$server = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = mysqli_connect($server,$username,$password,$database);
	
$firstName = $_POST['firstName'];
$Appointment_Date = $_POST['Appointment_Date'];
$email = $_POST['email'];
$contact_no = $_POST['contact_no'];
$Disease = $_POST['Disease'];


	$sql = "INSERT INTO  appointment(firstName, Date, email, contact_no,
	Disease)
	values('$firstName','$Appointment_Date','$email','$contact_no','$Disease')";

if(mysqli_query($conn,$sql)==true){
	echo "<h2>Data inserted Successfully<h2>";
}else
{
	echo "<h2>Data insertion failed</h2>";
}

?>