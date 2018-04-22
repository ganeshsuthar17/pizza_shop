<?php
session_start();
require 'dbconn.php';

$phone = mysqli_real_escape_string($conn,$_POST["phone"]);
$password = mysqli_real_escape_string($conn,$_POST["password"]);

    $sql="SELECT * FROM customers WHERE mobile='$phone' and password='$password'";
	$result = mysqli_query($conn,$sql);
	$row  = mysqli_fetch_array($result);            
	if(is_array($row)) {
        
    $_SESSION["customer_id"] = $row['customer_id'];
    header ('location: index.php');
	} else {
    $message = "Invalid Username or Password!";
    echo 'doesnt match';
	}



?>
