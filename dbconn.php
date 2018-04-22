<?php
try{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "pizza_shop";	
		
		$conn = mysqli_connect("localhost","root","","pizza_shop");
		
		

}catch(PDOException $e){
	echo json_encode($e->getMessage());
}
?>