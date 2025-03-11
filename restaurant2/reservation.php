<?php
include_once('db.php');
if(isset($_POST)){
	$fname=$_POST['fname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$checkin=$_POST['checkin'];
	$clock=$_POST['clock'];
	$selected=$_POST['selected'];
	

	mysqli_query($conn, "INSERT INTO reserved(fname,email,phone,checkin,clock,selected)VALUES('$fname','$email','$phone','$checkin','$clock','$selected')")or die(mysqli_error($conn));
}
?>