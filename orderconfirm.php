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
        
        <?php
        
        session_start();
        
        if(!isset($_GET['o_id'])){
            header('location: index.php');
        }
        else{
            echo 'Your Order has been placed sucessfully! Your Order id is = '.$_GET['o_id'];
        }
        ?>
    
        
            
    </div>	
			
			
<!--==============================footer=================================-->
    <?php
	include 'footer.php';
	?>
	</body>
</html>