<?php
session_start();
require 'dbconn.php';

if(isset($_SESSION['customer_id'])){

    $p_id = mysqli_real_escape_string($conn,$_GET["p_id"]);
    $customer_id = $_SESSION['customer_id'];

    $sql="INSERT INTO orders (customer_id, product_id, status, payment_method) VALUES('$customer_id', '$p_id', 'placed', 'COD');";    
        
    if ($conn->query($sql) === TRUE) {
        $sql1 = '';
        $last_id = mysqli_query($conn, $sql1);
        
                header('location:orderconfirm.php?o_id='.$last_id);
        
        
        }
          
        
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();

}






    

    
?>