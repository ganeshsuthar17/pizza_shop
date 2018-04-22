<?php
require 'dbconn.php';

$name = mysqli_real_escape_string($conn,$_POST["c_name"]);
$mobile = mysqli_real_escape_string($conn,$_POST["c_mobile"]);
$email = mysqli_real_escape_string($conn,$_POST["c_email"]);
$message = mysqli_real_escape_string($conn,$_POST["c_message"]);

    $sql="INSERT INTO contactform (name, phone, email, message) VALUES('$name', '$mobile', '$email', '$message')";    
    
    if ($conn->query($sql) === TRUE) {
        echo "Thankyou for contacting US we will get in touch with you soon. Go to <a href='home.php'>Home</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
    
    



    

    
?>