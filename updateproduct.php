<?php
require 'dbconn.php';

$id = mysqli_real_escape_string($conn,$_POST["p_id"]);
$field = mysqli_real_escape_string($conn,$_POST["p_field"]);
$value = mysqli_real_escape_string($conn,$_POST["p_value"]);

        $sql="UPDATE products SET ". $field."="."'".$value."'" ."WHERE product_id = '".$id."'";
        
        if ($conn->query($sql) === TRUE) {
            $data = '{
                "status":"sucess"
            }';            
        } else {
            $data = '{
                "status":"error"
            }';
        }
        $conn->close();
        
        header('Content-Type: application/json');
        echo json_encode($data);

        

    
?>