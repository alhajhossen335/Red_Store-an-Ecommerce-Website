<?php include('server.php');

	if (empty($_SESSION['username'])){
		header('location: login.php');
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>RedStore</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="header">
  <div class="container">
  <div class="navbar">
    <div class="logo">
      <a href="index.php"><img src="images/logo.png" width="125px">
	  
	  	 <?php if (isset($_SESSION['username'])): ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>

		<?php endif ?>
	  
    </div>
    <nav>
      <ul id="MenuItems">
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="register.php">Account</a></li>
      </ul>
    </nav>
    <a href="cart.html"><img src="images/cart.png" width="30px" height="30px">
    <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
  </div>
  <div class="row">
    <div class="col-2">
      <h1>Give Your Workout<br>A New Style!</h1>
      <p>Success isn't always about greatness. It's about consistency. consistent<br> hard work gains success. Greatness will come.</p>
      <a href="explore.php" class="btn">Explore Now &#8594;</a>
      </div>
      <div class="col-2">
          <img src="images/image1.png">
        </div>
    </div>
  </div>
</div>

<! -------------- featured categories ---------->
<div class="categories">
  <div class="small-container">
    <div class="row">
      <div class="col-3">
        <img src="images/category-1.jpg">
      </div>
      <div class="col-3">
        <img src="images/category-2.jpg">
      </div>
      <div class="col-3">
        <img src="images/category-3.jpg">
      </div>
    </div>
  </div>

</div>
<!-------------- featured products --------------->
<div class="small-container">
  <h2 class="title">Featured Products</h2>
  <div class="row">
    <div class="col-4">
        <a href="product-details.php"><img src="images/product-1.jpg"></a>
        <a href="product-details.php"><h4>Red Printed T-Shirt</h4></a>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
      </div>
      <p> ৳ 350.00</p>
    </div>
    <div class="col-4">
      <img src="images/product-2.jpg">
      <h4>SPRINT Men's Sneaker</h4>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
        <i class="fa fa-star-o"></i>
      </div>
      <p>৳ 2650.00</p>
    </div>
    <div class="col-4">
      <img src="images/product-3.jpg">
      <h4>Men's Gray Athletic pants</h4>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
      </div>
      <p>৳ 460.00</p>
    </div>
    <div class="col-4">
      <img src="images/product-4.jpg">
      <h4>Blue Puma T-Shirt</h4>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
      </div>
      <p>৳ 690.00</p>
    </div>
    </div>

    <h2 class="title">Latest Products</h2>
    <div class="row">
      <div class="col-4">
        <img src="images/product-5.jpg">
        <h4>Men's Fly Knit sneaker</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>৳ 2700.00</p>
      </div>
      <div class="col-4">
        <img src="images/product-6.jpg">
        <h4>Black Puma T-Shirt</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>৳ 550.00</p>
      </div>
      <div class="col-4">
        <img src="images/product-7.jpg">
        <h4>Sports socks</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
        </div>
        <p>৳ 150.00</p>
      </div>
      <div class="col-4">
        <img src="images/product-8.jpg">
        <h4>Midnight Black Watch</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>৳ 1200.00</p>
      </div>
      </div>
      <div class="row">
        <div class="col-4">
          <img src="images/product-9.jpg">
          <h4>Titan Watch</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>৳ 950.00</p>
        </div>
        <div class="col-4">
          <img src="images/product-10.jpg">
          <h4>Men's Sports Sneaker</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>৳ 2250.00</p>
        </div>
        <div class="col-4">
          <img src="images/product-11.jpg">
          <h4>SPRINT Men's Sneaker</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>৳ 1600.00</p>
        </div>
        <div class="col-4">
          <img src="images/product-12.jpg">
          <h4>Black Jogger pants</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>৳ 480.00</p>
        </div>
        </div>
    </div>
<! -------------- offer -------------->
  <div class="offer">
    <div class="small-container">
      <div class="row">
        <div class="col-2">
          <img src="images/exclusive.png" class="offer-img">
        </div>
        <div class="col-2">
            <p>Exclusively Available on RedStore</p>
              <h1> Smart Band 4</h1>
              <small> The Mi smart band 4 fetures a 39.9% larger (than Mi Band 3) AMOLED color full-touch display with adjustable brightness, so everything is clear as can be</small>
              <a href="bwatch.php" class="btn"> Buy Now &#8594;</a>
        </div>
      </div>
    </div>
  </div>

  <! -------- testimonial ---------->
  <div class="testimonial">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <i class="fa fa-quote-left"></i>
            <p> Lorem Ipsum is simly dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
          </div>
          <img src="images/user-1.jpg">
          <h3>Abdul Ahad</h3>
        </div>
        <div class="col-3">
          <i class="fa fa-quote-left"></i>
            <p> Lorem Ipsum is simly dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
          </div>
          <img src="images/user-2.jpeg">
          <h3>Tanvir Tushar</h3>
        </div>
        <div class="col-3">
          <i class="fa fa-quote-left"></i>
            <p> Lorem Ipsum is simly dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
          </div>
          <img src="images/user-3.png">
          <h3>Jayden</h3>
        </div>
      </div>
    </div>
  </div>

  <!-------------- brands ---------------->
  <div class="brands">
    <div class="small-container">
      <div class="row">
        <div class="col-5">
          <a href="https://waltonbd.com/"target="_blank"><img src="images/logo-walton.png">
        </div>

        <div class="col-5">
          <a href="https://www.oppo.com/bd"target="_blank"><img src="images/logo-oppo.png">
        </div>

        <div class="col-5">
          <a href="https://www.mi.com/bd/"target="_blank"><img src="images/logo-mi.png">
        </div>

        <div class="col-5">
          <a href="https://www.butterflygroupbd.com/"target="_blank"><img src="images/logo-lg.png">
        </div>

        <div class="col-5">
          <a href="https://www.bestelectronicsltd.com/philips"target="_blank"><img src="images/logo-philips.png">
        </div>
 
     </div>
      
    </div>
    
  </div>

<!--------------footer------------>

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

    <!--------js for toggle menu-------->

     <script>
       var MenuItems = document.getElementById("MenuItems");

       MenuItems.style.maxHeight = "0px";

       function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
          {
             MenuItems.style.maxHeight = "200px"; 
          }
          else{
            MenuItems.style.maxHeight = "0px";
          }
       }
     </script>
</body>
</html>
