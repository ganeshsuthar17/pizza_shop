<?php

require 'dbconn.php';

$name =  $_POST['name'];
$email =  $_POST['email'];
$mobile =  $_POST['mobile'];
$password =  $_POST['password'];
$street =  $_POST['street'];
$city =  $_POST['city'];
$state =  $_POST['state'];
$locality =  $_POST['locality'];

$query = "INSERT into `customers` (name, street, locality, city, state,mobile,email,password)
VALUES ('$name', '$street', '$locality', '$city','$state','$mobile','$email','$password')";
        $result = mysqli_query($conn,$query);
        if($result){
            header("location:login.php");
            
        }
    
?>

