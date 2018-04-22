<?php
require 'dbconn.php';

$id = mysqli_real_escape_string($conn,$_POST["order_id"]);
$status = mysqli_real_escape_string($conn,$_POST["status"]);


        $sql="UPDATE orders SET status="."'".$status."'" ."WHERE order_id = '".$id."'";
        
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

        header('location:update-status.php?q=updated');

        

    
?>