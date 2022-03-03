<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','emails');

// get the post records
$email = $_POST['email'];

// database insert SQL code
$sql = "INSERT INTO `test` (`email`) VALUES ('$email')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	header('Location: http://localhost/Social_Media_Furnace/#contact_us');
}

?>