<?php
require 'dbconn.php';

$name = mysqli_real_escape_string($conn,$_POST["p_name"]);
$desc = mysqli_real_escape_string($conn,$_POST["p_desc"]);
$price = mysqli_real_escape_string($conn,$_POST["p_price"]);

$type = mysqli_real_escape_string($conn,$_POST["type"]);


        $sql="INSERT INTO products (name, description, img_url,  price, type) VALUES('$name', '$desc', '$p_img_Path', '$price', '$type')";    // use exec() because no results are returned
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();

    

    
?>