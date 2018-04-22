<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Pizza House</title>
		<?php 
		include 'headTags.php';
		?>
		
	</head>
	<body class="page1">

<!--==============================header=================================-->
	<?php
	include 'header.php';
	?>
		<div id="TMGPrototype2"><div class="ic"></div>
			
			<ul class='sets'>
			
				<li data-setName="Veg-pizza">
					<ul>
					<?php
						require 'dbconn.php';
						$sql = "SELECT product_id, name, description, img_url, price, type FROM products WHERE type='vegpizza'";
						$result = mysqli_query($conn, $sql);
						
						if (mysqli_num_rows($result) > 0) {
							// output data of each row
							while($row = mysqli_fetch_assoc($result)) {
								
								echo '
								<li data-srcPreview="uploads/'. $row["img_url"].'">
								<div>
									<div class="content">
										<img src="uploads/'. $row["img_url"].'" alt="'.$row["name"].'">
										<h3>'.$row["name"].'</h3>
										<p>'.$row["description"].'</p>
										
										<ul>
											<li><span>Name:</span>'.$row["name"].'</li>
											<li><span>Price:</span>'.$row["price"].'</li>
											<li><button onclick="window.location.href=\'orderpizza.php?p_id='.$row["product_id"].'\'">Order Now</button></li>
										</ul>
										
									</div>
								</div>
							</li>';
							
							}
						} else {
							echo "0 results";
						}
					?>
						
					</ul>
				</li>
				<li data-setName="Nonveg-pizza">
					<ul>
					<?php
						require 'dbconn.php';
						$sql = "SELECT product_id, name, description, img_url, price, type FROM products WHERE type='nonvegpizz'";
						$result = mysqli_query($conn, $sql);
						
						if (mysqli_num_rows($result) > 0) {
							// output data of each row
							while($row = mysqli_fetch_assoc($result)) {
								
								echo '
								<li data-srcPreview="uploads/'. $row["img_url"].'">
								<div>
									<div class="content">
										<img src="uploads/'. $row["img_url"].'" alt="'.$row["name"].'">
										<h3>'.$row["name"].'</h3>
										<p>'.$row["description"].'</p>
										
										<ul>
											<li><span>Name:</span>'.$row["name"].'</li>
											<li><span>Price:</span>'.$row["price"].'</li>
											<li><button onclick="order(\''.$row["product_id"].'\')">Order Now</button></li>
										</ul>
										
									</div>
								</div>
							</li>';
							
							}
						} else {
							echo "0 results";
						}
					?>
					
					</ul>
				</li>
				
			</ul>
		</div>
<!--==============================footer=================================-->
<?php
	include 'footer.php';
	?>
	</body>
</html>