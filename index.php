<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Pizza House</title>
		<?php 
		include 'headTags.php';
		?>
		<!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
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
								echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
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
											<li><button onclick="window.location.href=\'payment.php\'">Order Now</button></li>
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
								echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
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
											<li><button onclick="window.location.href=\'google.com\'">Order Now</button></li>
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