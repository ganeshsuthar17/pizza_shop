<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Contacts</title>
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/form.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/forms.js"></script>
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
		<?php
		include 'header.php';
		?>
<!--=======content================================-->
			<div class="container_12">
				<div class="grid_9">
					<div class="content"> 
						
                                                <form method="post" action="rg.php">
                                                <h3>Create a new account</h3>
												

												<label for="Fullname">Full name &nbsp&nbsp&nbsp&nbsp&nbsp:</label>
                                                <input type="text" id="Fullname" name="name" required><br><br>

                                                <label for="street">Street name &nbsp:</label>
                                                <input type="text" id="street" name="street" required><br><br>

                                                <label for="locality">Locality &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
                                                <input type="text" id="locality" name="locality" required><br><br>

                                                <label for="city">City &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
                                                <input type="text" id="city" name="city" required><br><br>

                                                <label for="state">State &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
                                                <input type="text" id="state" name="state" required><br><br>

                                                <label for="mobile">Mobile no. &nbsp&nbsp&nbsp&nbsp:</label>
                                                <input type="text" id="mobile" name="mobile" required><br><br>

                                                <label for="email">Email &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
                                                <input type="text" id="email" name="email" required><br><br>

                                                <label for="password">Password &nbsp&nbsp&nbsp&nbsp:</label>
                                                <input type="password" id="password" name="password" required><br><br>
                                                <input type="submit" value="submit">
												<input type="reset" value="reset">
				                </form>
                                          </div>
				
			</div>
		</div><br><br><br><br><br><br><br><br><br><br><br>
<!--==============================footer=================================-->
<?php
	include 'footer.php';
	?>
	</body>
</html>