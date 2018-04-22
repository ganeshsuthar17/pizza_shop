<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Update status</title>
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/bgStretch.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
			$(document).ready(function(){
			$('#bgStretch')
				.bgStretch({
					align:'leftTop'
				})
			});
		</script>
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
	<body class="">
		<div id="bgStretch"><img src="images/pizza 5.jpg" alt=""></div>
<!--==============================header=================================-->
		<header> 
			<div class="menu_block">
				<div class="container_12">
					<div class="grid_12"> 
						
						
						<nav class="" >
							<ul class="sf-menu">
								<li class="current"><a href="Add-pizza.php">Add pizza</a></li>
								<li><a href="Edit-pizza.php">Edit pizza</a></li>
								<li><a href="Edit-orders.php">Edit orders</a></li>
								<li><a href="update-status.php">Update order status</a></li>
								<li><a href="view-sales.php">View sales</a></li>
								<li><a href="view-feedback.php">View feedback</a></li>
                                <li><a href="index.php">Logout</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</header>
<!--=======content================================-->
			<div class="container_12">
				<div class="grid_9">
					<div class="content"> 
					<?php
					if(isset($_GET['q'])){
						if($_GET['q']=='updated'){
							echo "Your order Updated!";
						}
					}
					?>
					<form method="POST" action="updatestatus.php">
					<h3>Update status</h3>
						<input type="text" name="order_id" placeholder="Order id"><br><br>
						<select name="status">
								<option value="Select option">Select option</option>
								<option value="Order placed">Order placed</option>
								<option value="In delivery">In delivery</option>
								<option value="Delivered">Delivered</option>
								</select>
								<input type="submit" value="submit">
						</form>
                    </div>
				
			</div>
		</div><br><br><br><br><br><br><br><br><br><br><br><br> <br><br> 
<!--==============================footer=================================-->
<?php
	include 'footer.php';
	?>
	</body>
</html>