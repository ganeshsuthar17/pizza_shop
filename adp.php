<?php
require 'dbconn.php';

$name = mysqli_real_escape_string($conn,$_POST["p_name"]);
$desc = mysqli_real_escape_string($conn,$_POST["p_desc"]);
$price = mysqli_real_escape_string($conn,$_POST["p_price"]);

$type = mysqli_real_escape_string($conn,$_POST["type"]);

try {
    
    
    
    $sql="INSERT INTO products (name, description,  price, type) VALUES($name, $desc, $price, $type)";    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


    

    
?>