<?php

    $con = mysqli_connect('localhost', 'root', '','test');

    $query = "SELECT * FROM emails";
    $result= mysqli_query ($con, $query);

    $subject = $_POST["subject"] ?? "";
    $body = $_POST["message"] ?? "";
    $from = "From: Markiewicz Solar Research Facility";

    while($row = mysqli_fetch_array($result)) 
    { 
        $email = $row['email'];
        
        $mail = mail($email, $subject, $body, $from);
    }

    if($mail)
    {
	    header('Location: mass_email.html');
    }
?>