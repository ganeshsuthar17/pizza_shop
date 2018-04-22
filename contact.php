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
						<div class="grid_4 alpha">
							<h3>Find Us</h3>
							<div class="map">
								<figure class="">
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2687.628233024552!2d75.58884421643745!3d28.36855003356234!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39131bd8fa3e1421%3A0xd7928a8c86ca1d5e!2sB+K+Birla+Institute+of+Engineering+%26+Technology!5e0!3m2!1sen!2sus!4v1523189704831" width="295" height="245" frameborder="0" style="border:0" allowfullscreen></iframe>
								</figure>
								<p class="style1">
									Have any feedback or queries? We'd love to hear from you.Contact Us How may we help you?
								</p>
								<p class="style1">Please select your preferred communication method (email response time is one business day or less). Email us with general inquiries.</p>
								<div class="style1">Our team will reply within one business day.Ask about our PIzza, find answers to your questions and get in touch.</div>
							</div>
						</div>
						<div class="grid_3 omega">
							<h3>Contact Us</h3>
							<form id="form" method="POST" action="cf.php">
								<div class="success_wrapper">
									<div class="success">Contact form submitted!<br>
									<strong>We will be in touch soon.</strong> </div>
								</div>
								<fieldset>
									<label class="name">
									<input type="text" name="c_name" value="Name:">
									<br class="clear">
									<span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span> </label><label class="phone">
									<input type="tel" name="c_mobile" value="Phone:">
									<br class="clear">
									<span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
									<label class="email">
									<input type="text" name="c_email" value="Email:">
									<br class="clear">
									<span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>
									<label class="message">
									<textarea name="c_message" value="Message:">Message:</textarea>
									<br class="clear">
									<span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
									<div class="clear"></div>
									<div class="btns">
										<a data-type="reset" class="btn">clear</a><input type="submit">
										<div class="clear"></div>
									</div>
								</fieldset>
							</form>
							<div class="style1">
								Marketing Department: <br>
								E-mail:&nbsp;<a href="mailto:jangid.ganesh8824@gmail.com ">jangid.ganesh8824@gmail.com</a> <br>
								Phone: 7062962017
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				
			</div>
		</div>
<!--==============================footer=================================-->
<?php
	include 'footer.php';
	?>
	</body>
</html>