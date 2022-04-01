
<?php include('server.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Ragistration Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>




	<div class="headers">
		<h2>Register</h2>
		
	</div>
	<form method="post" action="register.php">

		<?php include('errors.php');?>
		
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
			
		</div>

		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
			
		</div>

		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
			
		</div>

		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2">
			
		</div>

		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
			
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
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