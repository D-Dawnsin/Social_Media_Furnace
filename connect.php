<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost:3306', 'serfmedia', 'g0valp0','markiewicz-website-prod');

// get the post records
$email = $_POST['email'];

// database insert SQL code
$sql = "INSERT INTO `users` (`email`) VALUES ('$email')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	header('Location: index.html#contact_us');
}

?>
