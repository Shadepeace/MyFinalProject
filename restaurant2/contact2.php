<?php
include_once('db.php');
if(isset($_POST)){
	$sname=$_POST['sname'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	mysqli_query($conn,"INSERT INTO contact_tb(sname,email,subject,message)VALUES('$sname','$email','$subject','$message')") or die (mysql_error($conn));
	
}
?>