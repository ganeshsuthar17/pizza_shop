<?php
require 'dbconn.php';

$id = mysqli_real_escape_string($conn,$_GET["id"]);

        $sql="DELETE FROM products WHERE product_id = '$id'";
        
        if ($conn->query($sql) === TRUE) {
            header('Location: Edit-pizza.php?q=delete');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();

    
?>