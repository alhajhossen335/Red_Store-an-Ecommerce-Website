<?php include('server.php');?>


<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Explore products - RedStore</title>
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
    <h2>Products</h2>
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
      <img src="images/product-13.jpg">
      <h4>White Shirt</h4>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
      </div>
      <p>৳ 900.00</p>
    </div>
    <div class="col-4">
      <img src="images/product-14.jpg">
      <h4>White Print Shirt</h4>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
        <i class="fa fa-star-o"></i>
      </div>
      <p>৳ 960.00</p>
    </div>
    <div class="col-4">
      <img src="images/product-15.jpg">
      <h4>Men's Jeens Shirt</h4>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
      </div>
      <p>৳ 1400.00</p>
    </div>
    <div class="col-4">
      <img src="images/product-16.jpg">
      <h4>Men's Jeens Shirt</h4>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
      </div>
      <p>৳ 1550.00</p>
    </div>
    </div>



    <div class="row">
      <div class="col-4">
        <img src="images/product-17.jpg">
        <h4>Men's Black Shirt</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>৳ 1050.00</p>
      </div>
      <div class="col-4">
        <img src="images/product-18.jpg">
        <h4>Shirt</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>৳ 700.00</p>
      </div>
      <div class="col-4">
        <img src="images/product-19.jpg">
        <h4>New Blue Shirt</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
        </div>
        <p>৳ 1230.00</p>
      </div>
      <div class="col-4">
        <img src="images/product-20.jpg">
        <h4>Blue Shirt</h4>
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
      <img src="images/product-21.jpg">
      <h4>Black T-Shirt</h4>
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
      <img src="images/product-22.jpg">
      <h4>New Shirt</h4>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
        <i class="fa fa-star-o"></i>
      </div>
      <p>৳ 1450.00</p>
    </div>
    <div class="col-4">
      <img src="images/product-23.jpg">
      <h4>Men's Shirt</h4>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
      </div>
      <p>৳ 1100.00</p>
    </div>
    <div class="col-4">
      <img src="images/product-24.jpg">
      <h4>New look Shirt</h4>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
      </div>
      <p>৳ 1570.00</p>
    </div>
    </div>



    <div class="row">
      <div class="col-4">
        <img src="images/product-25.jpg">
        <h4>Men's Shirt</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>৳ 1300.00</p>
      </div>
      <div class="col-4">
        <img src="images/product-26.jpg">
        <h4>Colorful Shoe</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>৳ 3550.00</p>
      </div>
      <div class="col-4">
        <img src="images/product-27.jpg">
        <h4>Black Shoe</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
        </div>
        <p>৳ 2150.00</p>
      </div>
      <div class="col-4">
        <img src="images/product-28.jpg">
        <h4>Red Shoe</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>৳ 1900.00</p>
      </div>

      <div class="col-4">
        <img src="images/product-29.jpg">
        <h4>Casual Shoe</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>৳ 2200.00</p>
      </div>

        <div class="col-4">
        <img src="images/product-30.jpg">
        <h4>Bangladesh Jersey</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>৳ 1200.00</p>
      </div>

      <div class="col-4">
        <img src="images/product-31.jpg">
        <h4>Black Jersey</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>৳ 1100.00</p>
      </div>

      <div class="col-4">
        <img src="images/product-32.jpg">
        <h4>Red Jersey</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>৳ 1300.00</p>
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
