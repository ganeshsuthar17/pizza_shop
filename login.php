<html>
<head>
    <title> Login </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
    <?php 
		include 'headTags.php';
		?>
</head>
    <body>
    <?php
	include 'header.php';
	?>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form method="post" action="lg.php">
            <p>Mobile Number</p>
            <input type="text" name="phone" placeholder="Enter Mobile No.">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <input type="reset" value="reset">
            <a href="#">Forget Password</a>    
            </form>
        
        
        </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php
	include 'footer.php';
	?>
    </body>
</html>