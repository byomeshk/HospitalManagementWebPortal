<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = mysqli_connect($server,$username,$password,$database);
	$firstName = $_POST['firstName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$contact_no = $_POST['contact_no'];
	$address = $_POST['address'];
	$disease = $_POST['disease'];

	$sql = "INSERT INTO registration(firstName,email,password,contact_no,address,disease)VALUES('$firstName','$email','$password','$contact_no','$address','$disease')";

if(mysqli_query($conn,$sql)==true){
	echo "<h2>Data inserted Successfully<h2>";
}else
{
	echo "<h2>Data insertion failed</h2>";
}
?>