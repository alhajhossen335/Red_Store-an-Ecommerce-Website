<?php include('server.php');?> 

<!DOCTYPE html>
<html>
<head>
	<title>Ragistration Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
  <div class="container">
  <div class="navbar">
    <div class="logo">
      <a href="index.php"><img src="images/logo.png" width="125px">
    </div>
    <nav>
      <ul id="MenuItems">
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="register.php">Account</a></li>
      </ul>
    </nav>
    
    <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
  </div>

	<div class="headers">
		<h2>Login</h2>
		
	</div>
	<form method="post" action="login.php">

		<?php include('errors.php');?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
			
		</div>

		

		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
			
		</div>

		
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
			
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
	
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	
	<div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our Apps</h3>
            <p>Download App for Android and ios mobile phone.</p>
            <div class="app-logo">
              <img src="images/play-store.png">
              <img src="images/app-store.png">

            </div>

          </div>
          <div class="footer-col-2">
            <img src="images/logo-white.png">
            <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.</p>

          </div>

          <div class="footer-col-3">
            <h3>Useful Links</h3>
            <ul>
              <li>Coupons</li>
              <li>Blog Post</li>
              <li>Return Policy</li>
              <li>Join Affiliate</li>
            </ul>

          </div>

          <div class="footer-col-4">
            <h3>Follow us</h3>
            <ul>
              <li>Facebook</li>
              <li>Twitter</li>
              <li>Instagram</li>
              <li>YouTube</li>
            </ul>

          </div>

        </div>
        <hr>
        <p class="copyright">Copyright 2020</p>

      </div>

    </div>

</body>
</html>