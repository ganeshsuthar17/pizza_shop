<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Feedback</title>
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
								<li><a href="home.php">Home</a></li>
								<li class="current"><a href="view-cart.php">View cart</a></li>
								<li><a href="track-order.php">Track order</a></li>
								<li><a href="feedback.php">Feedback</a></li>
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
						
                     <form>
                       <h3>Track order</h3>
					   	<input type="text" name="" placeholder="Order id"><br><br>
						
<br><br>
                        <input type="submit" value="submit">
				      </form>
                                          </div>
				
			</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!--==============================footer=================================-->
<?php
	include 'footer.php';
	?>
	</body>
</html>