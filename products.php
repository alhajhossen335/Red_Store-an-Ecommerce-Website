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
  
  <title>All products - RedStore</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

  <div class="container">
  <div class="navbar">
    <div class="logo">
      <a href="index.php"><img src="images/logo.png" width="125px">
    </div>
    <nav>
      <ul id="MenuItems">
        <li><a href="index.php">Home</a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="register.php">Account</a></li>
      </ul>
    </nav>
    <img src="images/cart.png" width="30px" height="30px">
    <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
  </div>
  
  </div>


<div class="small-container">

  <div class="row row-2">
    <h2>All Products</h2>
    <select>
        <option>Default Shorting</option>
        <option>Short by price</option>
        <option>Short by popularity</option>
        <option>Short by rating</option>
        <option>Short by sale</option>
    </select> 
  </div>
  
  <div class="row">
    <div class="col-4">
      <img src="images/product-1.jpg">
      <h4>Red Printed T-Shirt</h4>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
      </div>
      <p>৳ 350.00</p>
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

        <div class="page-btn">
          <span>1</span>
          <span>2</span>
          <span>3</span>
          <span>4</span>
          <span>&#8594;</span>
          
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
