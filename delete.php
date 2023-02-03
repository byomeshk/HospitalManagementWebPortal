
    <?php 
        include("display.php");
        error_reporting(0);
        $contact_no=$_GET['cn'];
        $query="delete from appointment where contact_no='$contact_no'";
        $data=mysqli_query($conn,$query);
     
if ($data) {
	echo"<font color='green'>Record Deleted from Database";
}
else{
	echo"<font color='red'>Failed to delete this Record";
}
?>
