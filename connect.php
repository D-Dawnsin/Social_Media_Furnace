<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','emails');

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];

// database insert SQL code
$sql = "INSERT INTO `test` (`name`, `email`) VALUES ('$name', '$email')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>