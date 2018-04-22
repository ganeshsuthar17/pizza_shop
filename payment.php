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

    <div >
        <form action="orderpizza.php">
        <?php
        
        session_start();
        
        if(isset($_POST['product_id']))
        ?>
    
        ?>
            <input type="radio" value="Debit/Credit Card" name="pm">   Debit/Credit Card <br>
            <input type="radio" value="Net banking" name="pm">    Net Banking <br>
            <input type="radio" value="UPI" name="pm">    UPI <br>
            <input type="radio" value="Cash On Delivary" name="pm">    COD (CAsh ON Delivary) <br>
            <input type="submit">
        </form>
        
    </div>	
			
			
<!--==============================footer=================================-->
    <?php
	include 'footer.php';
	?>
	</body>
</html>